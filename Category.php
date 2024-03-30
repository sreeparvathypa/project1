<?php include( "header.php");
if(isset($_POST["submit"])) {
  $uploaded = 0;
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["cat_image"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
  // Check if image file is a actual image or fake image

  $check = getimagesize($_FILES["cat_image"]["tmp_name"]);
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
if ($_FILES["cat_image"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif"&& $imageFileType != "webp" && $imageFileType != "avif" && $imageFileType != "jfif" ) {
  echo "Sorry, only JPG, JPEG, PNG, WEBP, AVIF, JFIF & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["cat_image"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["cat_image"]["name"])). " has been uploaded.";
    $uploaded = 1;
  } else {
    echo "Sorry, there was an error uploading your file.";
    $uploaded = 0;
  }
}

if($uploaded==1){

$cat_name = $_POST["cat_name"];
$cat_image = $target_file;





$sql = "INSERT INTO category (cat_id, cat_name, cat_image)
VALUES ('','$cat_name','$cat_image')";
if ($conn->query($sql) ===TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();
}
}

?>
<h2>CATEGORY</h2>
<form action="category.php" method="post" enctype="multipart/form-data">
<div class="mb-3 mt-3">
<div class="container">
  <div class="row">
    <div class="col-sm-3">
  <label for="cat_name">category name:</label>
  <input type="text" class="form-control" id="cat_name" placeholder="Enter category name" name="cat_name">
</div>
<div class="mb-3 mt-3">
<div class="col-sm-3">
  <label for="cat_image">category image:</label>
  <input type="file" class="form-control" id="cat_image"  name="cat_image">
</div>
</div>
</div>
<button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>

    </div>
</div>

</body>
</html>


