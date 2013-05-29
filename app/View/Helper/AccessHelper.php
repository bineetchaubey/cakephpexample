<?php

class AccessHelper extends AppHelper
{

   var $helpers = array('Session') ;
   var $user ;

   function beforeRender(){
       App::uses('Component', 'Access');   
        $this->Access = new AccessComponent(new ComponentCollection());   
   
        App::uses('Component', 'Auth');   
        $this->Auth = new AuthComponent(new ComponentCollection());   
        $this->Auth->Session = $this->Session;   
        $this->user = $this->Auth->user(); 
   }

   function check($aco , $action= "*"){
       if(empty($this->user)) return false;   
        return $this->Access->checkHelper('User::'.$this->user['User']['id'], $aco, $action);   
    }     
   
   function isLoggedin(){   
        return !empty($this->user);   
    } 


}

