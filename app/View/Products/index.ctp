<?php
   // pr($allproduct);
?>
<?php echo $this->Html->link('add new product', array('controller' => 'Products','action'=> 'add')); ?>


<div class="search">
    <?php
        echo $this->Form->create('Product', array('controller'=> 'products','action' => 'search'));
        echo $this->Form->input('name');
        echo $this->Form->end('Search');
    ?>

</div>


<table>
    <tr>
        <td> Product name</td>
        <td> Price</td>
    </tr>

    <?php
    foreach($allproduct as $product){

        //pr($customers);

        echo "<tr>";
        echo "<td>".$this->Html->link($product['Product']['name'], array('controller'=>'products', 'action'=>'view',$product['Product']['id']))."</td>";
        echo "<td>". $product['Product']['price']."</td>";
        echo "</tr>";
    }
?>
</table>