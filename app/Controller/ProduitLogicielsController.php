<?php
App::uses('AppController', 'Controller');
/**
 * ProduitLogiciels Controller
 *
 * @property ProduitLogiciel $ProduitLogiciel
 */
class ProduitLogicielsController extends AppController {

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
		$this->ProduitLogiciel->recursive = 0;
		$this->set('produitLogiciels', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProduitLogiciel->exists($id)) {
			throw new NotFoundException(__('Produit logiciel invalid.'));
		}
		$options = array('conditions' => array('ProduitLogiciel.' . $this->ProduitLogiciel->primaryKey => $id));
		$this->set('produitLogiciel', $this->ProduitLogiciel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProduitLogiciel->create();
			if ($this->ProduitLogiciel->save($this->request->data)) {
				$this->Session->setFlash(__('The produit logiciel a été sauvegardé.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The produit logiciel could not be saved. Please, try again.'));
			}
		}
		$etats = $this->ProduitLogiciel->Etat->find('list');
		$this->set(compact('etats'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProduitLogiciel->exists($id)) {
			throw new NotFoundException(__('Invalid produit logiciel'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProduitLogiciel->save($this->request->data)) {
				$this->Session->setFlash(__('The produit logiciel has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The produit logiciel could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProduitLogiciel.' . $this->ProduitLogiciel->primaryKey => $id));
			$this->request->data = $this->ProduitLogiciel->find('first', $options);
		}
		$etats = $this->ProduitLogiciel->Etat->find('list');
		$this->set(compact('etats'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProduitLogiciel->id = $id;
		if (!$this->ProduitLogiciel->exists()) {
			throw new NotFoundException(__('Invalid produit logiciel'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProduitLogiciel->delete()) {
			$this->Session->setFlash(__('Produit logiciel deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Produit logiciel was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
