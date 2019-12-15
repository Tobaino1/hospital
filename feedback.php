<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 12/15/2019
 * Time: 2:55 AM
 */
?>
<?php session_start(); ?>
<?php include('access_db.php'); ?>

<link href="bootstrap.min.css" rel="stylesheet">
<link rel="icon" href="images/lasulogo.PNG">

<div class="container">
    <h1>Welcome to Agent Based Clinic Management System </h1>
    <p class="block-quote">Our aim has always been to bring world–class medical care within the reach of distinguished
        students </p>

    <p><?php include('slideshow.php'); ?></p>

    <!doctype html>

    <!--<html lang="en" class="no-js">-->
    <head>
        <title>Feedback | Agent based clinic mgt system </title>
    </head>


    <!-- Container -->
    <body>
</div>
<marquee>Students are required to use the feedback form to send us message, suggestions.</marquee>
<div align="center">
    <img src="images/lasulogo.PNG">

</div>
<div align="center"><h3> Feedback Form </h3>

    <form id="emailForm" name="emailForm" method="post" action="feedback_mail.php">
        <input name="matric" type="text" id="matric" size="45" placeholder="Matric"></textarea>
        <br> <br>
        <input name="surname" type="text" id="surname" size="45" placeholder="Surname">
        <br><br>
        <input name="email_address" type="text" id="email_address" size="45" placeholder="Email Address"></td>
        <br> <br>

        <textarea name="content" cols="45" rows="15" align="justify"
                  placeholder="Message here" required></textarea>
        <br>
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
