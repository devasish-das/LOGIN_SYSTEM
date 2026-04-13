<?php include('includes/header.php'); ?>


        <div>
            <?php
             if(isset($_GET['message']))
                {
                    echo "<h4>".$_GET['message']."</h4>";
                }
            ?>
        </div>
        <form class="form" action="includes/login.php" method="post">
        <div class="form-group">
            <label for="uname">Username</label>
            <input type="text" name="uname" class="form-control" >
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group mt-3">
            <input type="submit" name="login" id="Login" class="btn btn-success" >
        </div>
    </form>
    

<?php include('includes/footer.php'); ?>
