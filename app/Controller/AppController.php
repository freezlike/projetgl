<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Controller', 'Controller');
//AuthComponent::user();
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $helpers = array('Text', 'Form', 'Html', 'Session', 'Cache');
    public $components = array(
        'Session',
        'Cookie',
        'Auth' => array('authorize' => array('Controller' => 'users'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login'))
    );

    public function isAuthorized($user) {
        // Admin peut accéder à toute action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        } else {
            $this->Session->setFlash(__('vous n\'êtes pas autorisé à y accéder'));
            $this->redirect(array('controller' => 'users', 'action' => '/'));
        }

        // Refus par défaut
        return false;
    }

    public function beforeFilter() {
        
        $this->Auth->allow('index','login');
    }

    public function beforeRender() {
        parent::beforeRender();
        $this->Auth->deny('login');
    }
}
