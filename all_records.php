<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Coalition Technologies Records</h2>

<table border="2">
<tr>
    <td>Sr.No.</td>
    <td>product Name</td>
    <td>stock</td>
    <td>price</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

   <?php

      include "db.php"; 

      $records = mysqli_query($db,"select * from data"); 

      while($data = mysqli_fetch_array($records))
      {
      ?>
     <tr>
         <td><?php echo $data['id']; ?></td>
         <td><?php echo $data['product']; ?></td>
         <td><?php echo $data['stock']; ?></td>  
         <td><?php echo $data['price']; ?></td>
         <td><?php echo $data['durationdate']; ?></td>    
         <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
         <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
      </tr>	
      <?php
      }
   ?>
</table>

</body>
</html>