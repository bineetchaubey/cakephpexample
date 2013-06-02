<?php
   // pr($allcustomer);
?>
<?php echo $this->Html->link('add new customer', array('controller' => 'Customers','action'=> 'add')) ?>
<table>
    <tr>
        <td> Name</td>
        <td> Address</td>
    </tr>

    <?php
    foreach($allcustomer as $customers){

        //pr($customers);

        echo "<tr>";
        echo "<td>".$this->Html->link($customers['Customer']['name'], array('controller'=>'Customers', 'action'=>'view',$customers['Customer']['id']))."</td>";
        echo "<td>". $customers['Customer']['address']."</td>";
        echo "</tr>";
    }
?>
</table>