<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 12/17/2019
 * Time: 8:15 AM
 */
?>
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
    <p class="block-quote">Our aim has always been to bring world–class medical care within the reach for our
        distinguished students</p>
    <p><?php include('slideshow.php'); ?></p>
    <?php include('header_admin.php'); ?>

    <!doctype html>

    <!--<html lang="en" class="no-js">-->
    <head>
        <title> Report | Agent based clinic mgt system </title>

    </head>
    <body>

    <!-- Container -->
</div>
<div align="center">
    <img src="images/lasulogo.PNG">


    <h2 style="color: blue"> Insert Student Medical Report with the form below </h2>
    <table class="table-bordered" border="2" width="1000" align="center">
        <tbody>
        <th>
            <form enctype="multipart/form-data" action="constring_report.php" name="form" method="post">

                Upload Student Passport
                <input type="file" name="image" id="image">
                <br><br>
                <input type="text" id="surname" name="surname" size="70" placeholder="Surname" required>
                <br><br>
                <input type="text" name="othernames" id="othernames" size="70" placeholder="Other names" required>
                <br><br>
                <input type="text" id="matric" name="matric" size="70" placeholder="Matric" required>
                <br><br>
                <input type="text" name="dob" id="dob" size="70" placeholder="Date of birth" required>
                <br><br>
                <input type="text" id="gender" name="gender" size="70" placeholder="Gender" required>
                <br><br>
                <input type="text" name="bg" id="bg" size="70" placeholder="bg" required>
                <br><br>

                <input type="text" id="genotype" name="genotype" size="70" placeholder="Genotype" required>
                <br><br>
                <input type="text" name="pcv" id="pcv" size="70" placeholder="PCV" required>
                <br><br>

                <input type="text" id="stoolexam" name="stoolexam" size="70" placeholder="Stool Exam" required>
                <br><br>
                <input type="text" name="urinalysis_ph" id="urinalysis_ph" size="70" placeholder="Urinalysis PH"
                       required>
                <br><br>

                <input type="text" id="urinalysis_color" name="urinalysis_color" size="70"
                       placeholder="Urinalysis Color" required>
                <br><br>
                <input type="text" name="urinalysis_app" id="urinalysis_app" size="70"
                       placeholder="Urinalysis Appearance" required>
                <br><br>

                <input type="text" id="preg_test" name="preg_test" size="70" placeholder="preg_test" required>
                <br><br>
                <input type="text" name="hc_no" id="hc_no" size="70" placeholder="Health Center ID NO" required>
                <br><br>

                <input type="reset" name="reset" id="submit" value="reset"/>
                <input type="submit" name="submit" id="submit" value="Submit"/>
                <br>
            </form>
        </th>
        </tbody>
    </table>

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
