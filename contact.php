<?php include("header.php")?>
<section class="contsectact">
    <div class="container">
        <div class="row">
            <div class="col-sm-3  mx-auto">
                <h1 class="text-center">CONTACT</h1>
                <?php

                  if(isset($_POST["contact_name"])){
                    $contact_name=$_POST["contact_name"];
                    $contact_email=$_POST["contact_email"];
                    $contact_message=$_POST["contact_message"];

                

                $sql = "INSERT INTO contact (id, contact_name, contact_email,contact_message)
                        VALUES ('', '$contact_name', '$contact_email','$contact_message')";

                        if ($conn->query($sql) === TRUE) {
                          echo "New record created successfully";
                        } else {
                          echo "Error: " . $sql . "<br>" . $conn->error;
                        }

                        $conn->close();
                      }
                        ?>

                <form action="contact.php" method="post">
  <div class="mb-3 mt-3">
    <label for="contact_name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="contact_name" placeholder="Enter name" name="contact_name">
  </div>
  <div class="mb-3 mt-3">
    <label for="contact_email" class="form-label">email:</label>
    <input type="email" class="form-control" id="contact_name" placeholder="Enter email" name="contact_email">
  </div>
  <div class="mb-3">
  <label for="contact_message">message:</label>
<textarea class="form-control" rows="5" id="contact_message" name="contact_message"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

            </div>

        </div> 

    </div>

</section>
<?php include("footer.php")?>