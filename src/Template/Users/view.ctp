<!DOCTYPE html>
<html>
<head>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<style>
      table {
        border-style: green;
        border-width: 100px;
        border-color: #8ebf40;
        background-color: #d9d9d9;
      }
      th {
        border: 1px solid #095484;
      }
      td {
        border: 1px groove #1c87c6;
      }
    </style>
<table>
<border="1">
<tr>

<th >username</th>
<th>useremail</th>
<th>userpassword</th>
<th>Designation</th>
<th>Address</th>
<th>pincode</th>
<th>Roles</th>
<center>
</center>
</tr>
<?php
foreach ($query as $row)
{
?>
<tr>

<td><?php echo $row->username; ?></td>
<td><?php echo $row->useremail; ?></td>
<td><?php echo $row->password; ?></td>
<td><?php echo $row->designation; ?></td>
<td><?php echo $row->address; ?></td>
<td><?php echo $row->pincode; ?></td>
<td><?php echo $row->role?></td>
</tr>
<?php
}
?>
</table>

<body>