<?php
 

App::uses('AppController', 'Controller');

/**
 * Create user 
 * @author Bineet
 * @package cakephp
 */

class UsersController extends AppController
{  
	var $helpers = array('Session','Form','Html') ;
	var $components = array('DebugKit.Toolbar','Auth','Session','Acl');
	
  function beforeFilter(){
    $this->Auth->allow();
  }

  /**
    *  login user 
    *@return succesfull message 
    */
     
   function  login(){
      $this->layout = 'custom' ;

      if($this->request->isPost()){ 
       if($this->Auth->login()){
          $this->redirect(array('action' => 'index'));
       }
      }
   }
   /**
   * Logout user
   */

   function logout(){
     if($this->Auth->logout())
     {
      $this->redirect( array('action' => 'login'));
     }
   }

   /**
   * Register a new user
   */

  function register(){
      $this->layout = 'custom' ;

     if($this->request->isPost()){   
            // Here you should validate the username (min length, max length, to not include special chars, not existing already, etc)   
            // As well as the password   
            if($this->User->validates()){   
                $this->User->save($this->request->data);   
                // Let's read the data we just inserted   
                $data = $this->User->read();   
                // Use it to authenticate the user   
                $this->Auth->login($data);
                
                // Set the user roles 
                  $aro = new Aro(); 
                  $parent = $aro->findByAlias($this->User->find('count') > 1 ? 'User' : 'Super'); 
                   
                  $aro->create(); 
                  $aro->save(array( 
                       'model'        => 'User', 
                       'foreign_key'  => $this->User->id, 
                       'parent_id'    => $parent['Aro']['id'], 
                       'alias'        => 'User::'.$this->User->id 
                  )); 
 
                // Then redirect   
                $this->redirect(array('action' => "index"));  
            }  
        }  
  }


 function index(){
    $this->layout = 'custom' ;
 }

 /**
 * For Genareate Aro initial time
 *
 **/
 function install(){     
    if($this->Acl->Aro->findByAlias("Admin")){ 
        $this->redirect('/'); 
    } 
    $aro = new aro(); 
 
    $aro->create(); 
    $aro->save(array( 
        // 'model' => 'User', 
        'foreign_key' => null, 
        'parent_id' => null, 
        'alias' => 'Super' 
    )); 
 
    $aro->create(); 
    $aro->save(array( 
        'model' => 'User', 
        'foreign_key' => null, 
        'parent_id' => null, 
        'alias' => 'Admin' 
    )); 
 
    $aro->create(); 
    $aro->save(array( 
        'model' => 'User', 
        'foreign_key' => null, 
        'parent_id' => null, 
        'alias' => 'User' 
    )); 
 
    $aro->create(); 
    $aro->save(array( 
        'model' => 'User', 
        'foreign_key' => null, 
        'parent_id' => null, 
        'alias' => 'Suspended' 
    )); 
 
    $aco = new Aco(); 
    $aco->create(); 
    $aco->save(array( 
        'model' => 'User', 
        'foreign_key' => null, 
        'parent_id' => null, 
        'alias' => 'User' 
    )); 
 
    $aco->create(); 
    $aco->save(array( 
       'model' => 'Post', 
       'foreign_key' => null, 
       'parent_id' => null, 
       'alias' => 'Post' 
    )); 
 
    $this->Acl->allow('Super', 'Post', '*'); 
    $this->Acl->allow('Super', 'User', '*'); 
    $this->Acl->allow('Admin', 'Post', '*'); 
    $this->Acl->allow('User', 'Post', array('create')); 
} 
 

}