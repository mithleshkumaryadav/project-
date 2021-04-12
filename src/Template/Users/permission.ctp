<?php
echo $this->Form->create();
$edit = ['0'=>'0','1'=>'1'];
echo $this->Form->control('edit', ['options'=>$edit, 'label'=>"edit"  ]);
$remove = ['0'=>'0','1'=>'1'];
echo $this->Form->control('remove', ['options'=>$remove, "value"=>"remove", ]);
echo $this->Form->button('submit');
echo $this->Form->end();
?>


