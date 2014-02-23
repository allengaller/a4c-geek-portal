<?php
App::uses('AppController', 'Controller');

/**
 * User Controller
 */
class UserController extends AppController {

	public $components = array('Paginator', 'Log');

    /**
     * index method
     */
	public function index() {
		$this->Block->recursive = 0;
		$this->set('block', $this->Paginator->paginate());
	}

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
	public function view($id = null) {
		if (!$this->Block->exists($id)) {
			throw new NotFoundException(__('Invalid Block!'));
		}
		$options = array('conditions' => array('Block.' . $this->Block->primaryKey => $id));
		$this->set('Block', $this->Block->find('first', $options));
	}

    /**
     * add method
     *
     * @return void
     */
	public function add() {
		if ($this->request->is('post')) {
			$this->Block->create();
			$this->request->data['Block']['user_id'] = $this->Session->read('user.user_id');
			
			if ($this->Block->save($this->request->data)) {
				$this->Session->setFlash(__('添加客户成功!'));
                $this->Log->add('system',array(
							'user_id'=>'1',
							'op_id'=>'1',
							'account'=>'',
							'name'=>'',
							'remark'=>'123',
                            'creted'=>''
                ));
                
                
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('添加客户失败!请重试!'));
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
		if (!$this->Block->exists($id)) {
			throw new NotFoundException(__('非法客户!'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Block->save($this->request->data)) {
				$this->Session->setFlash(__('客户编辑成功!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('客户编辑失败!请重试!'));
			}
		} else {
			$options = array('conditions' => array('Block.' . $this->Block->primaryKey => $id));
			$this->request->data = $this->Block->find('first', $options);
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
		$this->Block->id = $id;
		if (!$this->Block->exists()) {
			throw new NotFoundException(__('非法客户!'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Block->delete()) {
			$this->Session->setFlash(__('客户删除成功!'));
		} else {
			$this->Session->setFlash(__('客户删除失败!请重试!'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
