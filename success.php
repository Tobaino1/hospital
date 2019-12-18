<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 12/17/2019
 * Time: 8:52 PM
 */
?>

<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
    <link rel="icon" href="images/lasulogo.PNG">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">
    <h1 align="center">Welcome to Agent Based Clinic Management System</h1>
    <p class="block-quote" align="center"> Our aim has always been to bring world–class medical care within our reach
        for our distinguished students</p>

    <p><?php include('slideshow.php'); ?></p>

<?php
//  include("header.php");
include("library.php");
include("header_admin.php");

noAccessForClerk();
noAccessForDoctor();
noAccessForNormal();

noAccessIfNotLoggedIn();

?>

    <h3 align="center">Record created successfully</h3>
<?php include("footer.php"); ?>