<?php session_start(); ?>
<?php include('access_db.php'); ?>

<link href="bootstrap.min.css" rel="stylesheet">
<link rel="icon" href="images/lasulogo.PNG">

<div class="container">
    <h1>Welcome to Agent Based Clinic Management System</h1>
    <p class="block-quote">Our aim has always been to bring world–class medical care within the reach of distinguished students </p>

    <p><?php include('slideshow.php'); ?></p>

<!doctype html>

<!--<html lang="en" class="no-js">-->
<head>
    <title>Agent based clinic mgt system </title>    
</head>


<!-- Container -->
<body>
    </div>
    <marquee>Students are required to use the form to request for default code in other to have access for login / registration and other clinic activities </marquee>
            <div align="center">
                <img src="images/lasulogo.PNG">
            </div>
        <div align="center">    <h3> Request Form </h3>

            <form id="emailForm" name="emailForm" method="post" action="request_mail.php">
                          <input name="surname" type="text" id="surname" size="45" placeholder="Surname">
<br><br>
                          <input name="email_address" type="text" id="email_address" size="45" placeholder="Email Address"></td>
 <br>  <br>
                           <input name="matric" type="text" id="matric" placeholder="Matric"></textarea>
    <br> <br>
                           <input name="SubmitBtn" type="submit" id="SubmitBtn" value="Submit">
                                     
                            <button type="reset">Reset</button>
                                  
                        </form>
</div>


<?php include("footer.php"); ?>
   
</div>
<!-- End content -->

</div>
<!-- End Container -->


</body>
</html>