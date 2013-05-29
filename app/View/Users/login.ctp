<?php  
  echo "login page";

  echo $this->Session->flash() ; 
  echo $this->Form->create('User', array('method' => 'Post')) ;

  echo $this->Form->inputs(array(
 	 'legend' => __("Login Form"),
 	 'username',
 	 'password'
 	  ));

 echo $this->Form->end('login');
 
?>