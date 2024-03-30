<?php include("header.php")?>
<section class="registraion">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center
            ">
                <h1>REGISTRATION</h1>
                </div>

                <?php

               $msg = "";
                if(isset($_POST["reg_name"])){
                  $reg_name=$_POST["reg_name"];
                  $reg_email=$_POST["reg_email"];
                  $reg_username=$_POST["reg_username"];
                  $reg_password=$_POST["reg_password"];
                  $reg_phone=$_POST["reg_phone"];
                  $reg_dob=$_POST["reg_dob"];
                  
                  
                  $sql="INSERT INTO `registration`(`id`, `reg_name`, `reg_email`, `reg_username`, `reg_password`, `reg_phone`, `reg_dob`) VALUES (NULL,'$reg_name','$reg_email','$reg_username','$reg_password','$reg_phone','$reg_dob')";

                  if ($conn->query($sql) === TRUE) {
                     $msg= "New record created successfully";
                   } else {
                     $msg= "Error: " . $sql . "<br>" . $conn->error;
                   }

                   $conn->close();
                 }
                   ?>
               

               
   <div class="col-sm-7 mx-auto">
   <form action="registration.php" method="post">
         <div><?php echo $msg; ?></div>
        <div class="mb-3 mt-3">
            <label for="reg_name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="reg_name">
         </div>


         <div class="mb-3 mt-3">
            <label for="reg_email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="reg_email">
         </div> 

         <div class="mb-3 mt-3">
            <label for="reg_username" class="form-label">username:</label>
            <input type="username" class="form-control" id="usename" placeholder="Enter username" name="reg_username">
         </div>

         <div class="mb-3 mt-3">
            <label for="reg_password" class="form-label">Password:</label>
            <input type="text" class="form-control" id="number" placeholder="Enter password" name="reg_password">
         </div>

         <div class="mb-3 mt-3">
            <label for="reg_phone" class="form-label">phone:</label>
            <input type="number" class="form-control" id="phone" placeholder="Enter phone" name="reg_phone">
         </div>

         <div class="mb-3 mt-3">
            <label for="reg_dob" class="form-label">dob:</label>
            <input type="date" class="form-control" id="dob" placeholder="Enter dob" name="reg_dob">
         </div>


         
        
        
            <div class="form-check mb-3">
             <label class="form-check-label">
             <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
          
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
   </div>            

                </div>  
                </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


             


<?php include("footer.php")?>