    <?php include( "header.php");
   if(!isset($_SESSION["loginuser"])){
    header("Location: login.php");
   }
    ?>
<h1 class="text-center"> My Account</h1>
<p>
    
</p>
<?php include("footer.php")?>