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
}
