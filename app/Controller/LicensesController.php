<?php
App::uses('AppController', 'Controller');
/**
 * Licenses Controller
 *
 * @property License $License
 */
class LicensesController extends AppController {

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
    public function index() {
		$this->License->recursive = 0;
		$this->set('licenses', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->License->exists($id)) {
			throw new NotFoundException(__('Invalid license'));
		}
		$options = array('conditions' => array('License.' . $this->License->primaryKey => $id));
		$this->set('license', $this->License->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->License->create();
			if ($this->License->save($this->request->data)) {
				$this->Session->setFlash(__('The license has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The license could not be saved. Please, try again.'));
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
		if (!$this->License->exists($id)) {
			throw new NotFoundException(__('Invalid license'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->License->save($this->request->data)) {
				$this->Session->setFlash(__('The license has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The license could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('License.' . $this->License->primaryKey => $id));
			$this->request->data = $this->License->find('first', $options);
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
		$this->License->id = $id;
		if (!$this->License->exists()) {
			throw new NotFoundException(__('Invalid license'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->License->delete()) {
			$this->Session->setFlash(__('License deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('License was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
