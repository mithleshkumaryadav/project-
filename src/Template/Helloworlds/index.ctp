
<center>
<h1>user form</h1>
</center>
<div style="margin-left:30%; width:300px; ">

<?php
 echo $this->Form->create(null,['action'=>'test','method'=>'post']);
echo "<br>";
 echo $this->Form->input('name', ['label'=>' Name ','placeholder'=>'Please enter your name' ] );
echo "<br>";
echo $this->Form->input('email',[ 'label'=>' Email ','placeholder'=>'Please enter your email']);
echo "<br>";
echo $this->Form->input('password',array('type'=>'password','placeholder'=>'Please enter your password'));
echo "<br>";
echo $this->Form->input('mobilenumber',[ 'label'=>' mobilenumber ','placeholder'=>'Please enter your mobile number']);
echo "<br>";

  $options=array('Male'=>'Male','Female'=>'Female');
$attributes=array('legend'=>false);
echo $this->Form->radio('gender',$options,$attributes);

echo $this->Form->select(
    'city',
    ["patna", "bhagalpur","delhi" , "noida", "gurgaon"],
    ['empty' => '(please enter  your city name)']
);

echo $this->Form->button('submit');
echo $this->Form->end();
?>













