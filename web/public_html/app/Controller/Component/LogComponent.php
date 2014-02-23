<?php
App::uses('Component', 'Controller');
App::uses('Log', 'Model');

class LogComponent extends Component {
    
    protected $_logModel;
    
    public function __construct(\ComponentCollection $collection, $settings = array()) {
        parent::__construct($collection, $settings);
        $this->_logModel = new Log();
    }
    
    public function add($type, $logData) {
        switch($type) {
            case '1'://Login
                $logData['ip'] = ip2long($logData['ip']);
                $logData['time'] = time();
                if($this->_logModel->save($logData)) {
                    return true;
                } else {
                    return $this->_logModel->validationErrors;
                }
                break;
            case '2'://Logout
                $logData['ip'] = ip2long($logData['ip']);
                $logData['time'] = time();
                if($this->_logModel->save($logData)) {
                    return true;
                } else {
                    return $this->_logModel->validationErrors;
                }
                break;
            default :
                return false;
        }
    }
}
