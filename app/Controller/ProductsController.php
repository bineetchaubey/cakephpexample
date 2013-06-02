<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class ProductsController  extends AppController{

  public  $helpers = array ('Html','Form','Session');
 public $components = array('Session');
   function index(){

       $allproduct = $this->Product->find('all');
       $this->set('allproduct',$allproduct);

   }

   function add(){
       if($this->request->is('post')){
           if($this->Product->save($this->data)){
               $this->Session->setFlash('A new  product add in database');
               $this->redirect('/Products/index');
           }else{
               
           }
       }
   }

   function view($id){
       $this->Product->id = $id;
       $productdetail = $this->Product->read();
       $this->set('productdetail',$productdetail);
   }

   function search() {

       $searchdata =  $this->data['Product']['name'];

     $allp = $this->Product->find('all',array('conditions' => array('name LIKE' => "%".$searchdata."%", "OR" =>array('description LIKE' => "%".$searchdata."%" ))));

      // pr($allp);
      $this->set('searchp',$allp);
       
   }

   function rate(){
       if($this->request->is('post')){
            if($this->Auth->User()){
            pr($this->data);

             $pid =  $this->data['productid'];
             $rate = $this->data['rateoption'];

             $this->loadModel('Rate');
             echo $this->Auth->user('id');

            echo ($this->Session->read('Auth.User.id'));
            $u = $this->Auth->user('id');
           
            $this->Rate->unbindModel('Customer');
            $data['Customer']['id'] = 1;
            $data['Product']['id'] = $pid;
            $data['Rate']['rate'] = $rate;
            $this->Rate->saveAll($data);
             $this->redirect('/products/index');
            }
           
       }
       else{
           $this->redirect('/products/index');
           exit ;
       }

   }


}

?>
