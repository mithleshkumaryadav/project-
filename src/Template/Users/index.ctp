<!DOCTYPE html>
<html>
<head>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<style>
      table {
        border-style: green;
        border-width: 90px;
        border-color: #8ebf40;
        background-color: #d9d9d9;
      }
      th {
        border: 0.75px solid #095484;
      }
      td {
        border: 0.75px groove #1c87c6;
      }
    </style>
    

<body>
  <center>
  <div  style="color:red; font-size:30px;" width:100px;>
    welcome to admin panel:-<?php echo $Auth->user('username');  ?>
</center>
<div style="color:blue; font-size:35px;">
<?php if($Auth->user('admin')==1) ?>
 <button type="button"> <?php
echo $this->Html->link( "Add A New User",array('action'=>'add'));
 ?></button>

<div style="font-size:35px;margin-left:75%;margin-top:-77px;" >
<?php
if($this->Session->read('Auth')) { ?>
<button type="button"> <?php   echo $this->html->link('Logout', array('controller' => 'users', 'action' => 'logout'));
}  else { ?> </button>
 <?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login')); 
 }?>
</div>
<table>
<border="1">
<tr>
<th><button type="button" name="Delete All" class="btn-btn-danger margin-right:-290px;">All</button></th><th>ID</th>
<th >username</th>
<th>useremail</th>
<th>userpassword</th>
<th>Designation</th>
<th>Address</th>
<th>pincode</th>
<th>Role</th>
<th>Edit</th>
<th>Delete</th>
<th>Permission Page</th>
</tr>
<?php
foreach ($results as $row)
{
?>
 <tr>
<td><input type="checkbox" onclick="toggleCheckbox(this)" value="<?php echo $row['id']?>"></td>
<td> <?php echo $row->id; ?></td>
<td><?php echo $row->username; ?></td>
<td><?php echo $row->useremail; ?></td>
<td><?php echo $row->password; ?></td>
<td><?php echo $row->designation; ?></td>
<td><?php echo $row->address; ?></td>
<td><?php echo $row->pincode; ?></td>
<td><?php echo $row->role;?></td>
<?php echo "<td><a href = '".$this->Url->build(["controller" => "Users","action"=>"edit",$row->id])."' ><button style='font-size:12px' > <i class='far fa-edit' ></i></button></a></td>"; ?>
<?php echo "<td><a href = '".$this->Url->build(["controller" => "Users","action"=>"delete",$row->id])."'><button style='font-size:12px'> <i class='fas fa-trash-alt'></i></button>
</a></td>"; ?>
<?php echo "<td><a href = '".$this->Url->build(["controller" => "Users","action"=>"permission",$row->id])."'><button style='font-size:12px'><i class='fas fa-lock'></i></button>
</a></td>"; ?>
</tr>
<?php
}
?>
</table>
</body>
<footer>
<ul class="pagination" style="margin-left:30%;">
<?= $this->Paginator->prev("<<") ?>
<?= $this->Paginator->numbers() ?>
<?= $this->Paginator->next(">>") ?>
</ul>
 <marquee direction="left" height="50" width="1200" bgcolor="red" scrollamount="18" font-size="300" onMouseOver="this.stop()" onMouseOut="this.start()"><p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p></marquee>
 <script>
   function toggleCheckbox(box){
      var id= $(box).attr("value");
        var inputs = $("form input[type='checkbox']");
           if($(box).prop("checked")== true) 
           {
            var visible =1;
           }
           else
           {
            var visible=0;
           }
           var data {
            "search_data":1,
            "id":0,
            "visible":visible
           };


   }
 </script>
</footer>
</border="1">
 </body>

</html>
