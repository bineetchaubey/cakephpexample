<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Rate extends AppModel{
   public $belongsTo = array('Customer','Product');
}
?>
