<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class CustomersController extends AppController{

    public  $helpers = array ('Html','Form','Session','Paginator');
  public  $paginate = array(
        'limit' => 5,
        'order' => array(
            'Cusomer.name' => 'asc'
        )
    );

  
  function   beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow(array('index', 'add'));
    }

   function index(){

       //$allcustomer = $this->Customer->find('all');
        
       $allcustomer = $this->paginate();
       $this->set('allcustomer',$allcustomer);
       
   }

   function add(){
       if($this->request->is('post')){
           if($this->Customer->save($this->data)){
               $this->Session->setFlash('A new  customer add in database');
               $this->redirect('/Customers/index');
           }
       }
   }

   function view($id){
       $this->Customer->id = $id;
       $userdetail = $this->Customer->read();
       $this->set('userdetail',$userdetail);
   }

   public function login(){
//      $this->Auth->authenticate = array(
//          'Form' => array('userModel' => 'Customer', 'fields' => array( 'username' => 'name')),
//          );
//   // $this->Auth->loginAction = array('controller' => 'customers', 'action' => 'login');
    $this->Auth->loginRedirect  = array('controller' => 'customers', 'action' => 'index');

      if($this->request->is('post')){

           pr($this->data);

         //  pr(md5($this->data['User']['password']));

          if($this->Auth->login($this->data)){
              $this->redirect($this->Auth->redirect());

          }else{
              
          }
      }
      
      }

      function logout(){
          $this->Session->setFlash('User logout successfully');
          $this->Auth->logout();
          $this->redirect('/customers/login/');
          exit ;
      }


}
?>
