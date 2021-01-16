<!DOCTYPE html>
<html>
<head>
  <title>Add Records in Database</title>
  <link rel="stylesheet" href="css/style.css">
</head>
   <?php
      include "db.php"; 

      if(isset($_POST['submit']))
      {		
         $product = $_POST['product'];
         $stock = $_POST['stock'];
         $price = $_POST['price'];
         $total = $stock*$price;
         $durationdate = $_POST['durationdate'];

         $que = "INSERT INTO data (product,stock, price,total,durationdate) VALUES ('$product','$stock', '$price', '$total', '$durationdate')";

         $insert = mysqli_query($db, $que);
         header("Location: all_records.php");
      }
   ?>
<body bg-color="#ccc">
   <div class="form-style-6">
      <h1>Coalition Technologies</h1>
      <form method="post" action="#">
         <input type="text" name="product" placeholder="Product name" />
         <input type="text" name="stock" placeholder="Quantity in stock" />
         <input type="text" name="price" placeholder="Price per item" />
         <input type="date" name="durationdate" placeholder="Enter Date ">
         <input type="submit" name="submit" value="Submit" />
      </form>
   </div>
</body>
</html>