<?php

 echo  "you have authorised to add a post  in user" ;


 echo $this->form->create('Post') ;
 echo $this->form->label('Title' ,'title');
 echo $this->form->input('title', array('placeholder' => 'Write post title', 'type' => 'text','label' => false));

 echo $this->form->label('body','Post Content');
 echo $this->form->input('body', array('placeholder' => 'Write post content', 'type' => "textarea",'label' => false));

 echo $this->form->label('user_id','Author Name');
 echo $this->form->input('user_id',array(
                                    'type' => 'select',
                                    'options'=> $user ,
                                    'label' => false
 						));


 echo $this->form->end('Add Post');




?>