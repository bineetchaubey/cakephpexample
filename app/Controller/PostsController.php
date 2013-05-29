<?php

 App::uses('AppController', 'Controller');
 /**
 *
 */

class PostsController  extends AppController 
{

  var $helpers =  array('Session','Form','Html');
  Var $components = array('DebugKit.Toolbar','Session','Auth','Acl','Access');
  
  function add()
  {
     $this->layout = 'custom' ;

    $user = $this->Auth->user();   
    if(!$this->Access->check('Post', 'read')){
      $this->Session->setFlash('You are  not authorized to access this page');
      $this->redirect(array('controller' => 'users',  'action' =>  'index')) ;
    } 
  
  }

  function edit($id){
     $this->layout = 'custom' ;
    if(!$this->Access->check('Post','update')) die("you have not authorized toedit post");
  }
  
  function delete($id){
     $this->layout = 'custom' ;
  }

  public function index() {
     $this->layout = 'custom' ;
  }

  /**
  * A Aro  have access all parent Aro resources(Aco) Default
  *
  * But Parent Aro Does not access it Child Aro resources (Aco) Default
  *
  */

  Public function getForum(){
     $this->layout = "custom";
     echo $this->Access->check('Forum','create') ;
    if(!$this->Access->check('Forum','create')){ 
    	echo "Sorry dear you are not Authorized " ;
     }else{
     	  echo "you are authorized" ;
     }
    
  }

  /**
  * In This function we have check a aro with have parent Aro Resorcess 
  *
  * Conclusion 
  *  Aro -> User(root) -> User:6  to assign Aro-> User(alise)
  *     
  * if Parent aco model(alis have permission ) the all its child 
  * have also access (respective permission) automatic 
  *
  */

  public function getsubuser()
  {
	   echo $this->Access->check('SubUser','read') ;
	   if(!$this->Access->check('SubUser','read')){
	   		echo "not allow";
	   }else{
	   		echo "allow";
	   }
  }

}