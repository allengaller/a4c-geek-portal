<?php
App::uses('AppController', 'Controller');

/**
 * Segment Controller
 */
class SegmentController extends AppController {

	public $components = array('Paginator', 'Log');

    //$this->set('segments', $this->Segment->find('all'));//debug($this->Segment->find('all'));exit;
}
