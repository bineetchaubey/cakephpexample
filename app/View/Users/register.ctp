<?php  
  echo "Registar page";

  echo $this->Session->flash() ; 
  echo $this->Form->create('User', array('method' => 'Post')) ;

  echo $this->Form->inputs(array(
 	 'legend' => __("Register User"),
 	 'username',
 	 'password',
 	 'active'
 	  ));

 echo $this->Form->end('login');

?>