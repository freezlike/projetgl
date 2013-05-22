<?php

// app/Controller/UsersController.php
class UsersController extends AppController {

    public function beforeFilter() {
        
        parent::beforeFilter();
        $this->Auth->allow('index','logout',''); // Laissons les users d'enregistrer eux-memes
        $this->set('logged_in', $this->Auth->loggedIn());
        $this->set('current_user',  $this->Auth->user());
        //$this->set('role', $this->Auth->user('role'));
               
    }
    public function beforeRender() {
        parent::beforeRender();
        
    }
    
    public function index() {
        
            
        
        $this->set('title_for_layout', 'Index');
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
        
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('User invalide'));
        }
        $this->set('user', $this->User->read(null, $id));
    }
    public function listeusers(){
        $this->set('title_for_layout', 'Liste Users');
        $this->User->recursive = 0;
         $this->set('users', $this->paginate());
        //$this->set('users', $this->User->find('all'));
         
         
    }
    public function adduser() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('L\'user a été sauvegardé'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('L\'user n\'a pas été sauvegardé. Merci de réessayer.'));
            }
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('User Invalide'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('L\'user a été sauvegardé'));
                $this->redirect(array('action' => '/listeusers'));
            } else {
                $this->Session->setFlash(__('L\'user n\'a pas été sauvegardé. Merci de réessayer.'));
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        $this->User->id = $id;

        if(!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }

        if ($this->User->delete($id)) {
            $this->Session->setFlash('L\'utilisateur avec l\'' . $id . ' a été supprimé.');
            $this->redirect(array('action' => '/listeusers'));
        }
}
//data['User']['nom_user'] ['User']['mot_de_passe']
//$this->Session->read('Auth.User')    
public function login() {
        
        
            $this->set('title_for_layout', 'Login');
            // debug($this->Auth->user('role'));
            //this->User->save(array('username' => 'hedi','password' =>$this->Auth->password('hedi'),'role' => 'admin'));
            if (!empty($this->request->data)) {
                if ($this->Auth->login()) {
                    $this->redirect($this->Auth->redirect('users/'));
                } else {
                    $this->Session->setFlash(__('Nom d\'user ou mot de passe invalide, réessayer'));
                }
            }
        }
    

    public function logout() {
        $this->redirect($this->Auth->logout('users'));
    }

}

?>
