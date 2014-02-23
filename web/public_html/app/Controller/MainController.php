<?php
App::uses('AppController', 'Controller');

/**
 * Main Controller
 */
class MainController extends AppController {

	public $components = array('Paginator', 'Log');
    public $helpers = array('Html');
    public $layout = "login";
    
    public function index() {
        if(is_numeric($this->Session->read('user.id'))) {
           $this->redirect(array('action'=>'home'));
        } else {
            $this->redirect('/');
        }
    }
    
    
    /**
     * home method
     * For logged-in user.
     */
	public function home() {
        $this->loadModel('User');
        $this->loadModel('UserDetail');
        echo '123';exit;
        //$userId = $this->Session->read('user.id'];
        
        $this->set('user', $this->User->findById($userId));
        $this->set('userDetail', $this->UserDetail->findById($userId));
	}
    
    /**
     * login method
     */
	public function login() {
        if(is_numeric($this->Session->read('user.id'))) {
            $this->redirect(array('action'=>'home'));
        }
        
        if($this->request->is('post')) {
            $uname = $this->request->data('uname');
            $pwd = $this->request->data('pwd');
            //$captcha = $this->request->data('captcha'); //TODO
            
            if(empty($uname) || $empty($pwd)) {
                $this->Session->setFlash('Dude you need to input your user name and password!');
                $this->redirect('/');
            }
            $user = $this->User->find('first', array('conditions'=>array('name'=>$uname)));
            if($user){
                //Status Check
                if($user['User']['status'] == 2) {
                    $this->Session->setFlash('Dude this account is locked!');
                    $this->redirect('/');
                } elseif($user['User']['status'] == 3) {
                    $this->Session->setFlash('Dude this account is deleted!');
                    $this->redirect('/');
                }
                
                //Account and Passowrd Check
                if(CommonLib::EncryptPassword($pwd) != $user['User']['pwd']) {
                    $this->Session->setFlash('Dude you got the wrong password!');
                    $this->redirect('/');
                } else {
                    //Write User Info to Session
                    $userSession = $user['User'];
                    unset($userSession['pwd']);
                    CakeSession::write('user', $userSession);
                    $this->Session->setFlash('Dude You Got In!');
                    
                    //Logging
                    $this->Log->add('login', array(
                        'uid' => $userSession['id'],
                        'type' => 1,
                        'ip' => $this->request->clientIp(),
                        'time' => time()
                    ));
                    $this->redirect(array('action'=>'home'));
                }
            } else {
                $this->Session->setFlash('Wrong Account Dude!');
                $this->redirect('/');  
            }
        } else {
            echo 'get login';
        }
        
	}
    
    /**
     * logout method
     */
	public function logout() {
	}

    
}
