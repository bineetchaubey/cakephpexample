<?php
/**
 * Description of users_controller
 *
 * @author Atul
 */
class UsersController extends AppController {
    //put your code here
   // var $name = 'User';
    //var $scaffold;

    function login(){

        $this->loadModel('Customer');

        $this->Auth->loginRedirect  = array('controller' => 'customers', 'action' => 'index');

      if($this->request->is('post')){

          if($this->Auth->login($this->data)){
              return $this->redirect($this->Auth->redirect());
               echo " binete";
          }else{

          }
      }
    }


}
?>