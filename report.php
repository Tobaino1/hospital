<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 12/15/2019
 * Time: 3:53 AM
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
            distinguised students.</p>
    </div>
    <p><?php include('slideshow.php'); ?></p>

    <link href="jumbotron.css" rel="stylesheet">
<?php
include("header.php");
?>

<?php
$con = mysqli_connect("localhost", "root", "", "hospital_db");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
?>
<?php
//if (isset($_POST['login']))
//    $names=$row['names'];
//{
//
//    $names = mysqli_real_escape_string($con, $_POST['names']);
//    $unique_id = mysqli_real_escape_string($con, $_POST['unique_id']);
//}


//$query=$con->query("select * from report WHERE matric= '$matric'");
$query = $con->query("select * from report ");
while ($row = mysqli_fetch_array($query)) {

    $surname = $row['surname'];
    $othernames = $row['othernames'];
    $matric = $row['matric'];
    $dob = $row['dob'];
    $gender = $row['gender'];
    $image = $row['image'];
    $bg = $row['bg'];
    $genotype = $row['genotype'];
    $pcv = $row['pcv'];
    $stoolexam = $row['stoolexam'];
    $urinalysis_ph = $row['urinalysis_ph'];
    $urinalysis_color = $row['urinalysis_color'];
    $urinalysis_app = $row['urinalysis_app'];
    $preg_test = $row['preg_test'];
    $hc_no = $row['hc_no'];


    ?>
    <div align="center">
        <img src="images/lasulogo.PNG">
        <h4 align="center" style="color: blue">LAGOS STATE UNIVERSITY HEALTH CENTER, OJO LAGOS. </h4>
        <h4 style="color: red" align="center">STUDENT MEDICAL REPORT</h4>
    </div>
    <table class="table-bordered" border="2" width="1000" align="center">
        <tbody>
        <th>
            <br>

            <!--        <td><a href="edit_admin.php?id=$row[id]">Edit / Update Bio-data</a></td>-->
            <img src="image_upload/<?php echo $image ?>" width="80" height="80" align="right"><br>
            <div><strong style="color: blue"> SURNAME:</strong> <?php echo $surname; ?> </div>
            <br>
            <div><strong style="color: blue"> OTHER NAMES:</strong> <?php echo $othernames; ?> </div>
            <br>
            <div><strong style="color: blue"> MATRIC NUMBER:</strong> <?php echo $matric; ?> </div>
            <br>
            <div><strong style="color: blue"> DATE OF BIRTH:</strong> <?php echo $dob; ?> </div>
            <br>
            <div><strong style="color: blue"> GENDER:</strong> <?php echo $gender; ?> </div>
            <br>
            <div><strong style="color: blue"> BLOOD GROUP:</strong> <?php echo $bg; ?> </div>
            <br>
            <div><strong style="color: blue"> GENOTYPE:</strong> <?php echo $genotype; ?> </div>
            <br>
            <div><strong style="color: blue"> PCV:</strong> <?php echo $pcv; ?> </div>
            <br>
            <div><strong style="color: blue"> STOOL EXAM:</strong> <?php echo $stoolexam; ?> </div>
            <br>
            <div><strong style="color: blue"> URINALYSIS PH:</strong> <?php echo $urinalysis_ph; ?> </div>
            <br>
            <div><strong style="color: blue"> URINALYSIS COLOR:</strong> <?php echo $urinalysis_color; ?> </div>
            <br>
            <div><strong style="color: blue"> URINALYSIS APPEARANCE:</strong> <?php echo $urinalysis_app; ?> </div>
            <br>
            <div><strong style="color: blue"> PREGNANCY TEST:</strong> <?php echo $preg_test; ?> </div>
            <br>
            <div><strong style="color: blue"> HEALTH CENTER NUMBER:</strong> <?php echo $hc_no; ?> </div>
            <br>


        </th>
        </tbody>
    </table>
<?php } ?>
<?php
include("footer.php");
?>