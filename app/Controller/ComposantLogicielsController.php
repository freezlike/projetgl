<?php
App::uses('AppController', 'Controller');
/**
 * ComposantLogiciels Controller
 *
 * @property ComposantLogiciel $ComposantLogiciel
 */
class ComposantLogicielsController extends AppController {

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
		$this->ComposantLogiciel->recursive = 0;
		$this->set('composantLogiciels', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ComposantLogiciel->exists($id)) {
			throw new NotFoundException(__('Invalid composant logiciel'));
		}
		$options = array('conditions' => array('ComposantLogiciel.' . $this->ComposantLogiciel->primaryKey => $id));
		$this->set('composantLogiciel', $this->ComposantLogiciel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ComposantLogiciel->create();
			if ($this->ComposantLogiciel->saveAll($this->request->data,true)) {
				$this->Session->setFlash(__('The composant logiciel has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The composant logiciel could not be saved. Please, try again.'));
			}
		}
                $versions = $this->ComposantLogiciel->VersionComposant->find('list');
		$types = $this->ComposantLogiciel->Type->find('list');
		$natures = $this->ComposantLogiciel->Nature->find('list');
		$licenses = $this->ComposantLogiciel->License->find('list');
		$this->set(compact('types', 'natures', 'licenses','versions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ComposantLogiciel->exists($id)) {
			throw new NotFoundException(__('Logiciel Composant Invalide'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ComposantLogiciel->saveAll($this->request->data,true)) {
				$this->Session->setFlash(__('Le Composant Logiciel a été enregistré'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Le Logiciel Composant n\'a pas pu être sauvé, veuillez réessayer.'));
			}
		} else {
			$options = array('conditions' => array('ComposantLogiciel.' . $this->ComposantLogiciel->primaryKey => $id));
			$this->request->data = $this->ComposantLogiciel->find('first', $options);
		}
		$types = $this->ComposantLogiciel->Type->find('list');
		$natures = $this->ComposantLogiciel->Nature->find('list');
		$licenses = $this->ComposantLogiciel->License->find('list');
		$this->set(compact('types', 'natures', 'licenses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ComposantLogiciel->id = $id;
		if (!$this->ComposantLogiciel->exists()) {
			throw new NotFoundException(__('Invalid composant logiciel'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ComposantLogiciel->delete()) {
			$this->Session->setFlash(__('Composant logiciel deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Composant logiciel was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
