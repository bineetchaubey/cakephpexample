<?php

 // pr($productdetail);

?>


 <p>Name :    <span><?php  echo $productdetail['Product']['name'] ;?></span></p>
 <p>Price :    <span><?php  echo $productdetail['Product']['price']   ?></span></p>
 <p>Description :    <span><?php echo $productdetail['Product']['description']   ?></span></p>


 <?php
    $avgrate = '';
   $ratefound = $productdetail['Rate'];
   if(!empty($ratefound)){

       $count = count($ratefound);
       $totalrate = 0;

       foreach($ratefound  as  $ratef){
           $totalrate += $ratef['rate'];
       }

       $avgrate = $totalrate/$count;

   }

 ?>



 <p> Rate : <?php if($avgrate != '') {echo  $avgrate ;}else { echo "no rate";} ?>  </p>


 <form action="/cakephp/products/rate" method="post">
     <?php // echo  $this->Form->create('rate', array('controller' => 'products', 'action' => 'rate')); ?>
 <select name="rateoption">
     <option value="1">1</option>
     <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="5">5</option>
 </select>
     <?php echo $this->Form->hidden('productid',array( 'value' => $productdetail['Product']['id']));?>

 <input type="submit" name="submit" value="Rate" />

 <?php //  echo $this->Form->end('rate'); ?>
 </form>


