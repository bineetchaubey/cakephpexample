<?php

 // echo "suucessfull";

  if(!empty($searchp)){

    echo "<table><tr><td>Name</td><td>Price</td></tr>";
     foreach($searchp  as  $product){


         echo "<tr>";
         echo "<td>". $this->Html->link($product['Product']['name'],array('controller' => 'Products','action'=> 'view',$product['Product']['id']))."</td>";
         echo "<td>".$product['Product']['price']."</td>";



         echo "</tr>";

    }
  echo "</table>";

}




?>
