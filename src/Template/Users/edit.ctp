<?php
echo $this->Form->create("users",array('action'=>'edit/'.$id));
echo $this->Form->input('username',[' value'=>$username ]);
echo $this->Form->input('useremail',['value'=>$useremail]);
echo $this->Form->input('userpassword',['value'=>$userpassword]);
echo $this->form->input('designation',['value'=>$designation]);
echo $this->Form->input('address',['value'=>$address]);
echo $this->Form->input('pincode',['value'=>$pincode]);
echo $this->Form->input('role',['value'=>$role]);
echo $this->Form->button('Submit');
echo $this->Form->end();
?>
