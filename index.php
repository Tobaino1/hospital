<?php session_start(); ?>
<?php include('access_db.php'); ?>
<link rel="icon" href="images/lasulogo.PNG">
<link href="bootstrap.min.css" rel="stylesheet">
<div class="container">
    <h1>Welcome to Agent Based Clinic Management System</h1>
    <p class="block-quote">Our aim has always been to bring world–class medical care within our reach for our distinguished students</p>

    <p><?php include('slideshow.php');?></p>

<!doctype html>

<!--<html lang="en" class="no-js">-->
<head>
    <link rel="icon" href="images/lasulogo.PNG">
    <title>Agent based clinic mgt system </title>  
    <link rel="icon" href="images/lasulogo.PNG">
  
</head>
<body>

<!-- Container -->
    </div>
    <marquee>Students that has the default code can access the platform for login / registration and other clinic activities. Students without default code should
    scroll down and use the request link for default code request</marquee>
            <div align="center">
                <img src="images/lasulogo.PNG">
            </div>
            
    <form action="#" method="post">
        <h3 align="center">Access Platform</h3>

<div align="center" ">
           
        <div class="form-item">
            <span><i class="fa fa-key" style="color: green"></i></span>
            <input type="text" name="serial_no" size="30" required="required" placeholder="Matric No" autofocus required></input>
        </div>
<BR>
        <div class="form-item">
            <span><i class="fa fa-key" style="color: green"></i></span>
            <input type="password" name="pin" size="30" required="required" placeholder="default code" required></input>
        </div>
<BR><BR>
        <div class="button-panel">
            <input type="submit" class="button" title="Log In" name="login" value="Login"></input>
            <input type="reset" class="button" title="reset" name="reset" value="reset"></input>

        </div>
    </form>
    <br>
    <h4>Students that are yet to get the default code are required to request for it using the link <a href="view/request.php">Request for Access</a></h4>

</div>
                    
    <?php
    if (isset($_POST['login']))
    {
        $serial_no = mysqli_real_escape_string($con, $_POST['serial_no']);
        $pin = mysqli_real_escape_string($con, $_POST['pin']);

        $query    = mysqli_query($con, "SELECT * FROM access WHERE  serial_no='$serial_no' and pin='$pin'");
        $row    = mysqli_fetch_array($query);
        $num_row  = mysqli_num_rows($query);

        if ($num_row > 0)
        {

            $_SESSION['user_id']=$row['user_id'];
            header('location:welcome.php ');

        }
        else
        {                                                                                                                                                                                                                                                                                                                                                    
            echo 'Invalid Serial No or Pin Combination';
        }
    }
    ?>

</div>

<?php include("footer.php"); ?>
   
</div>
<!-- End content -->

</div>
<!-- End Container -->


</body>
</html>