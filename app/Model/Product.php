<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Product  extends AppModel{

    public $hasMany  = array('Rate');

  public  $validate = array(
        'name' => array(
            'rule' => 'notEmpty',
            ),
        'price' => array(
           'rule' =>  array('decimal', 2),
         )
    );



   

}


?>
