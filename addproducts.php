<?php include( "header.php");
if(isset($_POST["submit"])) {
  $uploaded = 0;
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["product_image"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
  // Check if image file is a actual image or fake image

  $check = getimagesize($_FILES["product_image"]["tmp_name"]);
  if($check !== false) {
     echo "File is an image - " . $check["mime"] . ".";
     $uploadOk = 1;
  } else {
     echo "File is not an image.";
     $uploadOk = 0;
  }

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["product_image"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["product_image"]["name"])). " has been uploaded.";
    $uploaded = 1;
  } else {
    echo "Sorry, there was an error uploading your file.";
    $uploaded = 0;
  }
}

if($uploaded==1){

$product_name = $_POST["product_name"];
$product_image = $target_file;
$product_cat = $_POST["product_cat"];
$product_price = $_POST["product_price"];
$product_description = $_POST["product_description"];





$sql = "INSERT INTO product (id, product_name, product_image, product_cat, product_price, product_description)
VALUES ('','$product_name','$product_image','$product_cat','$product_price','$product_description')";
if ($conn->query($sql) ===TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();
}
}







?>
<h2 class="text-center">uploads products</h2>
<form action="addproducts.php" method="post" enctype="multipart/form-data">
<div class="mb-2 mt-2">
<div class="container">
  <div class="row">
  <label for="product_name">product name:</label>
  <input type="text" class="form-control" id="product_name" placeholder="Enter product name" name="product_name">
</div>

<div class="mb-2 mt-2">
  <label for="cat_id">choose category:</label>
  <select class="form-control" id="product_cat"  name="product_cat">

    <?php 
    
    $sql = "SELECT * FROM category";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output dat of each row
    while($row = $result->fetch_assoc()){ ?>

<option>
  <?php echo $row["cat_name"] ; ?>
</option>
    <?php
    }}
    
    
    ?>
  </select>
</div>

<div class="mb-3 mt-3">
  <label for="product_image">product_image:</label>
  <input type="file" class="form-control" id="product_image"  name="product_image">
</div>
<div class="mb-3 mt-3">
  <label for="product_price">product_price:</label>
  <input type="numbe=r" class="form-control" id="product_price" placeholder="Enter product price" name="product_price">
</div>
<div class="mb-3 mt-3">
  <label for="product_description">product_description:</label>
  <input type="text" class="form-control" id="product_description"  name="product_description">
</div>


<button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>

    </div>
</div>

</body>
</html>


