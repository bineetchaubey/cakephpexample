<?php

echo $this->Form->create('Product');
echo $this->Form->input('name');
echo $this->Form->input('price');
echo $this->Form->input('description');
echo $this->Form->end('Add Product');


?>