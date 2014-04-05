<?php
App::uses('AppController', 'Controller');

/**
 * User Controller
 */
class UserController extends AppController {

	public $components = array('Paginator', 'Log');
    public $uses = array('User');

    /**
     * index method
     */
	public function index() {
//		$this->User->recursive = 0;
//		$this->set('User', $this->Paginator->paginate());
	}

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
	public function view($id = null) {
//		if (!$this->Block->exists($id)) {
//			throw new NotFoundException(__('Invalid Block!'));
//		}
//		$options = array('conditions' => array('Block.' . $this->Block->primaryKey => $id));
//		$this->set('Block', $this->Block->find('first', $options));
	}

    /**
     * signUp method
     *
     * @return void
     */
	public function signUp() {

		if ($this->request->is('post')) {
			$this->User->create();
			$newUser = array(
                'name' => $this->request->data['email'],
                'pwd' => md5($this->request->data['pwd']),
                'email' => $this->request->data['email']
            );

			if ($this->User->save($newUser)) {
                $jsonNewUser = array(
                    'status' => 1,
                    'msg' => '注册成功!'
                );
                echo json_encode($jsonNewUser);
			} else {
                $jsonNewUser = array(
                    'status' => 2,
                    'msg' => '注册失败!'
                );
                echo json_encode($jsonNewUser);
			}
		}
        exit;
	}

    /**
     * login method
     */
    public function login() {
//        if(is_numeric($this->Session->read('user.id'))) {
//            $this->redirect(array('action'=>'home'));
//        }

        if($this->request->is('post')) {
            $loginStatus = array();
            $email = $this->request->data('email');
            $pwd = $this->request->data('pwd');
            //$captcha = $this->request->data('captcha'); //TODO

            if(empty($email) || empty($pwd)) {
                $loginStatus['status'] = 2; //失败
                $loginStatus['msg'] = '登录信息不全'; //失败
            }

            $user = $this->User->find('first', array('conditions'=>array('email'=>$email)));
            //debug($user);exit;
            if($user){
                //Status Check
                if($user['User']['status'] == 2) {
                    $loginStatus['status'] = 2; //失败
                    $loginStatus['msg'] = '帐号已被锁定'; //失败
                } elseif($user['User']['status'] == 3) {
                    $loginStatus['status'] = 2; //失败
                    $loginStatus['msg'] = '帐号已被删除'; //失败
                }

                //Account and Passowrd Check
                if(md5($pwd) != $user['User']['pwd']) {
                    $loginStatus['status'] = 2; //失败
                    $loginStatus['msg'] = '密码错误'; //失败
                } else {
                    //Write User Info to Session
                    $userSession = $user['User'];
                    unset($userSession['pwd']);
                    CakeSession::write('user', $userSession);
                    $loginStatus['status'] = 1; //失败
                    $loginStatus['msg'] = '登录成功'; //失败
                }
            } else {
                $loginStatus['status'] = 2; //失败
                $loginStatus['msg'] = '帐号不存在'; //失败
            }
            echo json_encode($loginStatus);
        }
        exit;
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
	public function edit($id = null) {
//		if (!$this->Block->exists($id)) {
//			throw new NotFoundException(__('非法客户!'));
//		}
//		if ($this->request->is(array('post', 'put'))) {
//			if ($this->Block->save($this->request->data)) {
//				$this->Session->setFlash(__('客户编辑成功!'));
//				return $this->redirect(array('action' => 'index'));
//			} else {
//				$this->Session->setFlash(__('客户编辑失败!请重试!'));
//			}
//		} else {
//			$options = array('conditions' => array('Block.' . $this->Block->primaryKey => $id));
//			$this->request->data = $this->Block->find('first', $options);
//		}
	}

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
	public function delete($id = null) {
//		$this->Block->id = $id;
//		if (!$this->Block->exists()) {
//			throw new NotFoundException(__('非法客户!'));
//		}
//		$this->request->onlyAllow('post', 'delete');
//		if ($this->Block->delete()) {
//			$this->Session->setFlash(__('客户删除成功!'));
//		} else {
//			$this->Session->setFlash(__('客户删除失败!请重试!'));
//		}
//		return $this->redirect(array('action' => 'index'));
	}
}
