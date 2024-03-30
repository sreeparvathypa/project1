<?php
include("header.php");
$scc =$err =$m ="";
     if(isset($_POST["log_username"])){
            $log_username = $_POST["log_username"];
            $log_password = $_POST["log_password"];

                 $sql = "SELECT * FROM `registration` WHERE `reg_username` = '$log_username' AND `reg_password` = '$log_password'";
                        
                          $result = $conn->query($sql);
                            
                            if($result->num_rows > 0) {
                                $_SESSION["loginuser"] = $log_username;
                                header("Location: account.php");
                            }
                                 else {
                                  echo "invalid";

                                 } 
                                    
                                 }
                             
                                ?>    
                   

                   <section id="Login">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 mx-auto">
                <h1 class="display-3">Login</h1>

                <?php if($m==1){   ?>
                         <span class="text-success"><?php echo $scc; ?></span>
                <?php }  else if($m==0){   ?>   
                    <span class="text-danger"><?php echo $err; ?></span>
                    <?php }  ?>  
                
                    <form action="" method="post">
             <div class="mb-3 mt-3">
                        <label class="form-label">username:</label>
                        <input type="text" class="form-control" name="log_username">
              </div>
            
              <div class="mb-3 mt-3">
                        <label class="form-label">password:</label>
                        <input type="password" class="form-control" name="log_password">
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>

             </form>

          </div>

        </div> 

    </div>

</section>
<?php
 include("footer.php")?>