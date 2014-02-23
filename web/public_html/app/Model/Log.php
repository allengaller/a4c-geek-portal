<?php
App::uses('AppModel', 'Model');
/**
 * Log Model
 */
class Log extends AppModel {

	public $useTable = 'log';
    public $logType = array(
        '1' => 'Login',
        '2' => 'Logout'
    );
}
