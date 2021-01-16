<!DOCTYPE html>
<html>
<head>
  <title>Add Records in Database</title>
  <link rel="stylesheet" href="css/style.css">
</head>
   <?php
      include "db.php"; 

         
         
         $que = "select * from data where id=".$_GET['id'];      ;

         $insert = mysqli_query($db, $que);
         $data = mysqli_fetch_array($insert);
         if(isset($_POST['submit'])) 
      {
         $product = $_POST['product'];
         $stock = $_POST['stock'];
         $price = $_POST['price'];
         $total = $stock*$price;
         $durationdate = $_POST['durationdate'];      
         $edit = mysqli_query($db,"update data set product='$product', stock='$stock', price='$price', total='$total',durationdate='$durationdate' where id='$data[0]'");
      
      if($edit)
      {
         mysqli_close($db); 
         header("location:all_records.php"); 
         exit;
      }
      else
      {
         echo mysqli_error();
      }    	
   }
      
   ?>
<body bg-color="#ccc">
   <div class="form-style-6">
      <h1>Coalition Technologies</h1>
      <form method="post" action="#">
         <input type="text" name="product" value="<?php echo $data['product'] ?>" placeholder="Product name" />
         <input type="text" name="stock" value="<?php echo $data['stock'] ?>" placeholder="Quantity in stock" />
         <input type="text" name="price" value="<?php echo $data['price'] ?>" placeholder="Price per item" />
         <input type="date" name="durationdate" value="<?php echo $data['durationdate'] ?>" placeholder="Enter Date ">
         <input type="submit" name="submit" value="Submit" />
      </form>
   </div>
</body>
</html>