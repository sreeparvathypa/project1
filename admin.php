<?php include("header-admin.php"); ?>
<style>
    tr{
    border: 1px solid black;
}
table{
    width: 50%;
    margin: auto;
}
</style>
<h1 class="text-center">Admin page</h1>


<section class="section dashboard">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
    <table border="1" cellpadding="20px">
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
<?php 
if(isset($_GET['pro_id'])){
    $pro_id = $_GET['pro_id'];
    $sql = "DELETE FROM product WHERE id = '$pro_id'";
   if($conn->query($sql)===TRUE){
    header("Location:admin.php");
   }
   else{
    echo "Error";
   }

}

  if(isset($_GET["pid"])){
    $pid =$_GET["pid"];
    $sql = "SELECT * FROM product WHERE cat_id = '$cid' " ;
  }else{
    $sql =  $sql = "SELECT * FROM product" ;
  }

 
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>

    <tr>
        <td>
        <img src="<?php echo $row["product_image"]?>"  width="100px" alt=""
        class="product_pic">
        </td>
        <td>
        <?php echo $row["product_name"];?>
        </td>
        <td>
        <?php echo $row["product_price"]?>
        </td>
        <td>
        <a href="admin.php?pro_id=<?php echo $row ["id"];?>"><button class="btn-warning"><i class="bi bi"></i>Delete</button>
        </a>
        </td>
    </tr>

    <!-- <div class="col-sm-3 text-center">
      <div class="pro_box">
        <div class="propic_box">
      
        </div>
        <h4></h4>
        <p>Rs.</p>
        <a href="products.php?pid=">
      <a href=""></a><button class="btn-warning"><i class="bi bi"></i>Delete button</button>
      </a>
    </div>
    </div> -->
     <?php 
    }
  } else {
    echo "0 results";
  }
  $conn->close();  
?>
    </table>
      </div>
    </div>
  </div>
 
</section>

<?php include ("footer.php")?>
