<?php
App::uses('AppController', 'Controller');
/**
 * VersionComposants Controller
 *
 * @property VersionComposant $VersionComposant
 */
class VersionComposantsController extends AppController {

/**
 * index method
 *
 * @return void
 */
        public function beforeFilter() {
        parent::beforeFilter();
        $role = $this->Session->read('Auth.User.role');
        if (($role === 'responsable') or ($role === 'admin')) {
            $this->Auth->allow('','add', 'view', 'edit','');
        } else {
            parent::isAuthorized();
        }
        $this->set('logged_in', $this->Auth->loggedIn());
        $this->set('current_user', $this->Auth->user());
    }	
	public function index() {
		$this->VersionComposant->recursive = 0;
		$this->set('versionComposants', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->VersionComposant->exists($id)) {
			throw new NotFoundException(__('Invalid version composant'));
		}
		$options = array('conditions' => array('VersionComposant.' . $this->VersionComposant->primaryKey => $id));
		$this->set('versionComposant', $this->VersionComposant->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->VersionComposant->create();
			if ($this->VersionComposant->save($this->request->data)) {
				$this->Session->setFlash(__('The version composant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The version composant could not be saved. Please, try again.'));
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
		if (!$this->VersionComposant->exists($id)) {
			throw new NotFoundException(__('Invalid version composant'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->VersionComposant->save($this->request->data)) {
				$this->Session->setFlash(__('The version composant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The version composant could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('VersionComposant.' . $this->VersionComposant->primaryKey => $id));
			$this->request->data = $this->VersionComposant->find('first', $options);
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
		$this->VersionComposant->id = $id;
		if (!$this->VersionComposant->exists()) {
			throw new NotFoundException(__('Invalid version composant'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->VersionComposant->delete()) {
			$this->Session->setFlash(__('Version composant deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Version composant was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
