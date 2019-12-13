<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 12/13/2019
 * Time: 7:22 PM
 */
?>
<?php session_start(); ?>
<?php include('access_db.php'); ?>

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
        <h2 style="color: blue"> Get Medical Tips From Experts on different Health / Medical related trends. </h2>

    <?php
    $query = $con->query("select * from medicaltips order by id desc limit 15");
    while ($row = mysqli_fetch_array($query)) {

        $image = $row['image'];
        $topic = $row['topic'];
        $publisher = $row['publisher'];
        $content = $row['content'];

        ?>

         <img src="image_upload/<?php echo $image; ?>" width="130" height="50"
                          align="center"><p></p>
        <strong style="color: red"> Topic: <?php echo $topic; ?> <strong style="color: blue">By: <?php echo $publisher; ?></strong></strong>
        <p><?php echo $content; ?> </p>

    <?php } ?>

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