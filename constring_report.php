<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 12/17/2019
 * Time: 8:18 AM
 */
?>

    <link rel="icon" href="images/lasulogo.PNG">

<?php
$uploads_dir = 'image_upload/';
$image = $_FILES['image']['name'];
$temp = $_FILES['image']['tmp_name'];


$surname = $_POST['surname'];
$othernames = $_POST['othernames'];
$matric = $_POST['matric'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$bg = $_POST['bg'];
$genotype = $_POST['genotype'];
$pcv = $_POST['pcv'];
$stoolexam = $_POST['stoolexam'];
$urinalysis_ph = $_POST['urinalysis_ph'];
$urinalysis_color = $_POST['urinalysis_color'];
$urinalysis_app = $_POST['urinalysis_app'];
$preg_test = $_POST['preg_test'];
$hc_no = $_POST['hc_no'];


move_uploaded_file($temp, $uploads_dir . basename($image));


// Create connection
//$conn = mysqli_connect("localhost", "root", "", "hospital_db");
$conn = mysqli_connect("localhost", "id11975224_tobaino", "jesusislord1", "id11975224_hospital_db");

// Check connection
if ($conn === false) {
    die ("Error: could not connect." . mysqli_connect_error());
}

$sql = "INSERT INTO report (image, surname, othernames, matric, dob, gender, bg, genotype, pcv, stoolexam, urinalysis_ph, urinalysis_color, urinalysis_app, preg_test, hc_no) VALUES 
('$image', '$surname','$othernames','$matric', '$dob', '$gender', '$bg', '$genotype', '$pcv', '$stoolexam', '$urinalysis_ph', '$urinalysis_color', '$urinalysis_app', '$preg_test', '$hc_no')";

if (mysqli_query($conn, $sql)) {
//    echo "New record created successfully ";
    header("Location: success.php"); // redirecting to the other page
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>