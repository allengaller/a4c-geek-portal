<?php
App::uses('AppController', 'Controller');

/**
 * Main Controller
 */
class MainController extends AppController {

	public $components = array('Paginator', 'Log');
    public $helpers = array('Html');
    public $layout = "default";

    public function index() {
        //header("Content-Type: text/html; charset=utf-8");
        if(is_numeric($this->Session->read('user.id'))) {
            $this->set('userInfo', $this->Session->read('user'));
        }

        $this->loadModel('Segment');
        $this->loadModel('Block');
        $this->loadModel('BlockItem');
        //debug($this->Segment->find('all'));
        $this->set('s', $this->Segment->find('all'));
        $this->set('mainBlocks', $this->Block->find('all', array('conditions'=>array('main'=>1))));
        $this->set('blocks', $this->Block->find('all', array('conditions'=>array('main'=>0))));

        $blockItemsRaw = $this->BlockItem->find('all');
        $blockItems = array();
        foreach ($blockItemsRaw as $key => $val) {
            $blockItems[$val['BlockItem']['block_id']][] = $val;
        }
        $this->set('blockItems', $blockItems);
        $this->set('title', 'Geek Portal :: Main');
        $this->set('a', 123);
    }


}

