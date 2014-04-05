<?php
App::uses('AppModel', 'Model');
/**
 * Client Model
 *
 * @property User $User
 * @property GroupPlan $GroupPlan
 * @property LinePrice $LinePrice
 */
class User extends AppModel {

	public $useTable = 'user';
    public $userStatus = array(
        '1' => 'Normal',
        '2' => 'Locked',
        '3' => 'Deleted'
    );
//    public $validate = array(
//        'name' => array(
//            'rule' => 'isUnique',
//            'allowEmpty' => false,
//            'message' => 'Your name should be unique!'
//        ),
//        'pwd' => array(
//            'rule' => 'notEmpty',
//            'message' => 'Password needed!'
//        )
//    );
}
