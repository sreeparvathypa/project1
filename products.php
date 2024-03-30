  <style>
    .cart1{

  border: none;
  color: black;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 16px;
  font-weight:bold;
   
    }
    .pro_box{
      min-height: 300px;
      margin: 15px 0px;
    }
    img.pro_pic{
      max-width: 100%;
      max-height: 200px;
    }
   .propic_box{
      height: 200px;
    }
</style>

<?php
  include("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <title>PRODUCTS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">





  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Template Main CSS File -->
  <link href="product.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <?php


   if (isset($_GET["pid"])){
    $pid =$_GET["pid"];
    $cart_user =$_SESSION["loginuser"];
    $sql ="SELECT * FROM cart WHERE product_id = '$pid' AND cart_user = '$cart_user'";
    $result = $conn->query($sql);
    if($result-> num_rows > 0) {
      while($row =$result->fetch_assoc() ){
        $prod_qty = $row['product_qty']+=1;
        $prod_amount = $prod_qty*$row["product_price"];
        $sql = "UPDATE `cart` SET `product_qty`='$prod_qty',`product_amount`='$prod_amount' WHERE product_id = '$pid' AND cart_user = '$cart_user'";
        if($conn->query($sql)===TRUE){

        }
        
      }
    }
    else{
    if(!isset($_SESSION["loginuser"])){
      header("Location: login.php");
  }
  else{

     $pid =$_GET["pid"];
    $sql ="SELECT * FROM product WHERE id = '$pid'";

    $result = $conn->query($sql);

    if($result-> num_rows > 0) {

      while($row =$result->fetch_assoc() ){

        $cart_user =$_SESSION["loginuser"];
        $prod_id =$pid;
        $prod_name =$row["product_name"];
        $prod_price =$row["product_price"];
        $prod_image =$row["product_image"];
        $prod_qty = 1;
        $prod_amount =$row["product_price"];

        $sql = "INSERT INTO `cart`(`id`, `cart_user`, `product_id`, `product_name`, `product_price`, `product_image`, `product_qty`, `product_amount`) VALUES ('','$cart_user',' $prod_id','$prod_name','$prod_price','$prod_image','$prod_qty','$prod_amount')";
      if ($conn->query($sql) === TRUE) {
        echo "product added to cart successfully";
    } else {
      echo "Error: " .$sql ."<br>" . $conn->error;
    }
    
    }
     
  }
   
} 
}  
}
  
  
  ?>

<div class="offcanvas offcanvas-start" id="demo">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">category</h1>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
  <?php 

$sql =  $sql = "SELECT * FROM category" ;



$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) { ?>

<a class="nav-link " href="products.php?cid=<?php echo $row["cat_name"]?>">
  <i class="bi bi-grid"></i>
  <span><?php echo $row["cat_name"];?></span>
</a>
    
 <?php 
}
} else {
echo "0 results";
}

?>
  </div>
</div>

<!-- Button to open the offcanvas sidebar -->
<button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
<i class="bi bi-list"></i>
</button>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1 class="text-center">PRODUCTS</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Product</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="section dashboard">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
      <div class="row">

 

             

<?php 
  if(isset($_GET["cid"])){
    $cid =$_GET["cid"];
    $sql = "SELECT * FROM product WHERE product_cat = '$cid'" ;
  }else{
    $sql =  $sql = "SELECT * FROM product" ;
  }

 
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>

    <div class="col-sm-3 text-center">
      <div class="pro_box">
        <div class="propic_box">
        <img src="<?php echo $row["product_image"]?>" alt=""
        class="pro_pic">
        </div>
        <h4><?php echo $row["product_name"];?></h4>
        <p>Rs.<?php echo $row["product_price"]?></p>
        <a href="products.php?pid=<?php echo $row ["id"];?>">
      <button class="cart1 btn-warning"><i class="bi bi-cart btn"></i></button>
      </a>
    </div>
    </div>
     <?php 
    }
  } else {
    echo "0 results";
  }
  $conn->close();  
?>



</div>
      </div>
    </div>
  </div>
 
</section>
                  
 
     
          
  
</body>

</html>