<?php include('dbcon.php'); ?>
<?php include session_start(); ?>


<?php
   if(isset($_POST['login'])){
    $username = $_POST['uname'];
    $email= $_POST['email'];

    $query= "select * from `users` where `username`='$username' and `email`='$email'";
    $result= mysqli_query($conn,$query);
    if(!$result)
      {
         echo "query failed";
      }
      else{
         $row= mysqli_num_rows($result);
         if($row==1){
            $_SESSION['username']= $username;
            header("Location:../home.php");
            }else{
               
               header("Location:../index.php?message= Sorry, your username or email is invalid!");
         }
      }
    

   }

?>