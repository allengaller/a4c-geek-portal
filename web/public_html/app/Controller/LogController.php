<?php
App::uses('AppController', 'Controller');

/**
 * Log Controller
 */
class LogController extends AppController {

	public $components = array('Paginator', 'Log');
    public $helpers = array('Html');
    
}