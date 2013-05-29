<?php
 /**
 *
 * Class For Find User acces level define;
 * @author Bineet Kumar Chaubey
 * @package Cakephp
 * @version 2.0
 *
 */
class  AccessComponent extends Component
{
	var $components = array('Auth','Acl');
	var $user ;


    function startup(){
    	$this->user = $this->Auth->user();

    }

    function check($aco , $action = "*"){

        if(!empty($this->user) && $this->Acl->check('User::'.$this->user['id'],$aco ,$action) )
            return true;
        else
        	 return false;

    }

    function checkHelper($aro, $aco, $action = "*"){   
	    App::import('Component', 'Acl');   
	    $acl = new AclComponent();   
	    return $acl->check($aro, $aco, $action);   
	} 


}