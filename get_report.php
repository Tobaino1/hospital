<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 12/17/2019
 * Time: 9:58 AM
 */
?>
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<link rel="icon" href="images/lasulogo.PNG">
<link href="css/bootstrap.min.css" rel="stylesheet">
<div align="center"><h1>Welcome to Agent Based Clinic Management System</h1>
    <p class="block-quote">Our aim has always been to bring world–class medical care within the reach of
        distinguished students.</p>
</div>
<p><?php include('slideshow.php'); ?></p>

<link href="jumbotron.css" rel="stylesheet">
<div align="center">
    <img src="images/lasulogo.PNG">
</div>
<p align="center"> To retrieve your medical report, kindly insert your matriculation number in the form below.</p>
<div align="center">
    <form action="report.php" method="post">
        <div class="form-item">
            <div class="form-item">
                <span><i class="fa fa-book" style="color: green"></i></span>
                <input type="text" name="matric" size="20" required="required" id="matric"
                       placeholder="Matriculation number">
            </div>
            <BR>
            <div class="button-panel">
                <input type="submit" class="button" name="retrieve" value="Retrieve">
            </div>
    </form>
</div>