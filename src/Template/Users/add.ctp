<html>
<head>
</head>
<center>
<h1 >User Registration page</h1>
</center>
<div style="margin-left:40%; width:250px;">
<?=  $this->Form->create(); ?>
<?php
echo $this->Form->control('username');
echo $this->Form->control('useremail');
echo $this->Form->control('password');
$designation = ['software Devloper'=>'software Devloper','project manager'=>'project manager','Human Resource'=>'Human Resource ','Product Manager'=>'Product Manager'];
echo $this->Form->control('designation', ['options'=>$designation, 'label'=>"select your designation" ]);

echo $this->Form->control('address');
echo $this->Form->control('pincode');
$role = ['admin'=>'admin','sale'=>'sale','operation'=>'operation '];
echo $this->Form->control('role', ['options'=>$role, 'label'=>"select your role" ]);

  
echo $this->Form->button('Submit'); 
  echo $this->Form->end(); 
?>
</body>
</html>