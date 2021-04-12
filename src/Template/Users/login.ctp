<html>
<table bgcolor="red">
<center>
<h1><p style="font-size:70px">LOGIN PAGE</p></h1>
</center>
<div style="margin-left:43%; width:250px;">
<?php
echo $this->Flash->render('auth');
echo $this->Form->create(); 
echo  $this->Form->control('username');
echo $this->Form->control('password',['type'=>'password']);
echo $this->Form->button('Login');
echo $this->Form->end(); 
?>
</div>
</table>
</html>







