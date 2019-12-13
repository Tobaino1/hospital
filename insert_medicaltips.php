<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 12/13/2019
 * Time: 7:22 PM
 */
?>
<?php session_start(); ?>
<?php //include('access_db.php'); ?>
<link rel="icon" href="images/lasulogo.PNG">


<link href="bootstrap.min.css" rel="stylesheet">
<div class="container">
    <h1>Welcome to Agent Based Clinic Management System</h1>
    <p class="block-quote">Our aim has always been to bring world–class medical care within the reach for our distinguished students</p>
    <p><?php include('slideshow.php');?></p>
    <?php include ('header.php'); ?>

    <!doctype html>

    <!--<html lang="en" class="no-js">-->
    <head>
        <title>Agent based clinic mgt system </title>

    </head>
    <body>

    <!-- Container -->
</div>
<div align="center">
    <img src="images/lasulogo.PNG">


    <h2 style="color: blue"> Insert Medical tips with the form below </h2>
    <form enctype="multipart/form-data" action="constring_medicaltips.php" name="form"
          method="post">

        <input type="text" id="topic" name="topic" size="70"  placeholder="Topic" required>
        <br><br>
        <input type="text" name="publisher" id="publisher" size="70"  placeholder="Publisher" required>
        <br><br>

        <textarea name="content" cols="70" rows="15"
                  placeholder="copy and paste texts here / type texts here"
                  required></textarea>
        <br><br>
        Upload Headline Image (optional)
        <input type="file" name="image" id="image">
        <br>

        <input type="reset" name="reset" id="submit" value="reset"/>
        <input type="submit" name="submit" id="submit" value="Submit"/>
        <br>
    </form>


</div>

<br>


</div>



</div>

<?php include("footer.php"); ?>

</div>
<!-- End content -->

</div>
<!-- End Container -->


</body>
</html>
