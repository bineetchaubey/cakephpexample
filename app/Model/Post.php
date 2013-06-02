<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Post
 *
 * @author Atul
 */
class Post extends AppModel {
    //put your code here
    var $name = 'Post';
    Var $belongsTo = array(
                    'User' => array(
                        'className'=>'User',
                        'foreignKey' => 'User_id',
                        'conditions' => null,
                        'Fields' => null
                        )
        );

}
?>
