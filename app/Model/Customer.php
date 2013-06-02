<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Customer extends AppModel{

    public  $validate = array(
        'name' => array(
            'rule' => 'notEmpty',
            ),
        'email' => array(
           'rule' => array('email'),
            'message'=> 'please provide a valid email',
         ),
        'phone' => array(
            'rule' => array('numeric'),
            'message'=> 'please  valid us phone number',
        )
    );

    public $hasMany  = array('Rate');

    public function beforeSave($options = array()) {
        $this->data['Customer']['password'] = AuthComponent::password($this->data['Customer']['password']);
        return true;
    }

}
?>
