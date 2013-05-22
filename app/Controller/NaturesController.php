<?php
App::uses('AppController', 'Controller');
/**
 * Natures Controller
 *
 * @property Nature $Nature
 */
class NaturesController extends AppController {

/**
 * index method
 *
 * @return void
 */
public function beforeFilter() {
        parent::beforeFilter();
        $role = $this->Session->read('Auth.User.role');
        if (($role === 'responsable') or ($role === 'admin')) {
            $this->Auth->allow('index','add', 'view', 'edit','delete');
        } else {
            parent::isAuthorized();
        }
        $this->set('logged_in', $this->Auth->loggedIn());
        $this->set('current_user', $this->Auth->user());
    }
    public function beforeRender() {
        parent::beforeRender();
        
    }
	public function index() {
		$this->Nature->recursive = 0;
		$this->set('natures', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Nature->exists($id)) {
			throw new NotFoundException(__('Invalid nature'));
		}
		$options = array('conditions' => array('Nature.' . $this->Nature->primaryKey => $id));
		$this->set('nature', $this->Nature->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Nature->create();
			if ($this->Nature->save($this->request->data)) {
				$this->Session->setFlash(__('The nature has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nature could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Nature->exists($id)) {
			throw new NotFoundException(__('Invalid nature'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Nature->save($this->request->data)) {
				$this->Session->setFlash(__('The nature has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nature could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Nature.' . $this->Nature->primaryKey => $id));
			$this->request->data = $this->Nature->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Nature->id = $id;
		if (!$this->Nature->exists()) {
			throw new NotFoundException(__('Invalid nature'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Nature->delete()) {
			$this->Session->setFlash(__('Nature deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Nature was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
