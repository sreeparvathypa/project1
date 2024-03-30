<?php
 include("header.php");
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="main.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <div class="container mt-5">
        <h1 class="display-2 text-center mb-5">MY SHOPPING BAG</h1>
</head>
<body>
<div class="cart-box">
    <div class="row">
        <div class="col-sm-12">

     


    <div class="cart-page">
        <div class="row">
            <div class ="col-sm-8">

         
      
<div class="container">
    <div class="row">
        <div class="col-sm-3">
        <p class="col-mt-5"><b>Products</b></p>
        </div>

        <div class="col-sm-5">
            <p></p>
        </div>

        <div class="col-sm-2">
        <p class="col-mt-5"><b>Price</b></p>
        
        </div>

        <div class="col-sm-2" >
        <p class="col-mt-5"><b>Total</b></p>
        </div>

    </div>

   

    
    <?php  
      if(isset($_GET["did"])){
        $did =$_GET["did"]; 
        $sql ="DELETE FROM cart WHERE id = '$did'";
        if($conn->query($sql)===TRUE){
            header("location:cart-design.php");
        } 
        else{
            echo "Error";
        }
    }

        if(isset($_GET['qi'])){
            $qi =$_GET['qi']; 
            $sql ="UPDATE `cart` SET `product_qty`=`product_qty`+1,`product_amount`=`product_price` * `product_qty` WHERE `id` = '$qi'";
            
            if($conn->query($sql)===TRUE){
                header("Location:cart-design.php");
               }
               else{
                echo "Error";
               }
            
            }
            if(isset($_GET['qd'])){
                $qd =$_GET['qd']; 
                $sql ="UPDATE `cart` SET `product_qty`=`product_qty`-1,`product_amount`=`product_price` * `product_qty` WHERE `id` = '$qd' AND `product_qty`>1";
                
                if($conn->query($sql)===TRUE){
                    header("Location:cart-design.php");
                   }
                   else{
                    echo "Error";
                   }
                
                }
    
            
            $user = $_SESSION['loginuser'];
            $sql =  "SELECT * FROM cart WHERE cart_user='$user'";
            $sub= 0;

          
          
          $result = $conn->query($sql);
          $sub = 0;
          if ($result->num_rows > 0) {
            // output data of each row
            
            while($row = $result->fetch_assoc()) {

                
                $qty =$row["product_qty"];
                $amt=$qty * $row["product_price"];
                $sub += $amt;
                

                ?>
  

  <?php
    $shp=$tax=$tot=0;
       if(!$_SESSION['loginuser']){
        header("location.login.php");
       }
  ?>

             

    <div class="row my-3">

    <div class="col-sm-3 image
    ">
    <img src="<?php echo $row["product_image"]?>" alt=""
                    class="w-50">
        </div>


        <div class="col-sm-5  bb">
            <div class="">
           <h4> <?php echo $row["product_name"];?></h4>
                  <p><a href="cart-design.php?qd=<?php echo $row['id'];?>" class="btn btn-danger">-</a>
                  <?php echo $row["product_qty"];?>
                  <a href="cart-design.php?qi=<?php echo $row['id'];?>
                  " class="btn btn-success">+</a></p>
                  </div>
        </div>

        <div class="col-sm-2  cc">
        <div class="">
        <p>Rs.<?php echo $row["product_price"]?></p>
        </div>
        </div>

        <div class="col-sm-2 dd" >
        <div class="">
        <p><?php echo $row ["product_amount"]?></p>
        <a href="cart-design.php?did=<?php echo $row["id"];?>"><button class="btn btn-warning"><i class="bi-trash"></i></button>

        </a>
        </div>
        </div>
        </div>



        <?php 
                }

                    $shp= $sub*5/100;
                    $tax =$sub*18/100;
                    $tot= $sub+$shp+$tax;
              
            //   $conn->close();  
            ?>


<!-- <div class="cart1">
    <div class="row">
        
    </div>
    </div> -->

</div>
    
    </div>
    
    <div class="col-sm-4 my-4">
<div class="cart-sum">
    <div class="p-3">
    <p>SUMMARY</p>
   
              <hr>
              <p>SUBTOTAL : ₹<?php echo $sub;?></p>
            <P>Shipping : ₹<?php echo $shp;?></P>
            <p>Sales Tax : ₹<?php echo $tax;?></p>
            <hr>

            <p>ESTIMATED TOTAL : ₹<?php echo $tot;?> </p>

            <hr>

            <div >
                <a href="checkout.php?fromcart=1">
              <button class="check-out">CHECKOUT</button></a>     
            </div>

            


              


            </div>

</div>


    </div>
   
    <?php
    }  
    else{
        echo "0 results";
      }
    ?>
    
</div>
</div>
 </div>
    </div>


    </div>
    

<style>
    
    div.blue{
        background-color: blue;
        
    
      
    }
    .black{
        background-color: green;
       
    }
    .yellow{
        background-color: yellow;
       
    }
    .black{
        background-color: black;
   
    }
    .green{
        background-color: green;
 
    }
    .img{
        /* background-color: black; */
 
       min-height: 50px;

    }
    .bb{
        /* background-color: blue; */
 
        min-height: 50px;

    }
    .cc{
        /* background-color: red; */
        
        min-height: 50px;

    }
    .dd{
        /* background-color: green; */
        
        min-height: 50px;

    }
    .cart-page{
        /* background-color: blue; */
    }
    .cart-box{
         /* background-color: yellow;  */
    }
    /* .my-4{
         background-color: green; 
        border: 1px sol;
    } */

    .cart-sum{
        min-height: 300px;
        background-color: #f4f5f5; 
    }
   .check-out{
 background-color: black;   
 border: none;
color:white;
padding: 10px 20px;
text-align: center;
text-decoration: none;
display: inline-block;
margin: 4px 2px;
cursor: pointer;
border-radius: 16px;
font-weight:bold;
text-shadow: 0px 0px 10px black;
   }
 
    
    

</style>


    
</body>
</html>

<?php include("footer.php")?>