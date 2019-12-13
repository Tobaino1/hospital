<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 12/13/2019
 * Time: 8:15 PM
 */
?>

<?php
$topic = $_POST['topic'];
$publisher = $_POST['publisher'];

$uploads_dir = 'image_upload/';
$image = $_FILES['image']['name'];
$temp = $_FILES['image']['tmp_name'];

$content = $_POST['content'];

move_uploaded_file($temp, $uploads_dir . basename($image));


// Create connection
$conn = mysqli_connect("localhost", "root", "", "hospital_db");
//    $conn = mysqli_connect("localhost", "lagosrep_tobaino", "pass?1><m", "hospital_db");

// Check connection
if ($conn === false) {
    die ("Error: could not connect." . mysqli_connect_error());
}


$sql = "INSERT INTO medicaltips(topic, publisher, image, content) VALUES 
('$topic', '$publisher','$image','$content')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully ";
//        header("Location: success.php"); // redirecting to the other page
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
