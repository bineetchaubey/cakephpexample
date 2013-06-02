<?php

echo $this->Form->create('Customer');
echo $this->Form->input('name');
echo $this->Form->input('password', array('type'=> 'password'));
echo $this->Form->input('email');
echo $this->Form->input('phone');
echo $this->Form->input('address');
echo $this->Form->end('add');


?>