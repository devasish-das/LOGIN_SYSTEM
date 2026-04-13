<?php include('includes/header.php'); ?>
<?php session_start(); ?>
<div class="text-center">
   <?php
   if(isset($_SESSION['username'])){
    echo "<h2>Hello,".$_SESSION['username']."</h2>";
   }else{
    header("location:index.php?message= You need to login to enter this site.");
   }

?>
<a href="includes/logout.php"class="btn btn-danger">Logout</a>


</div>

<?php include('includes/footer.php'); ?>
