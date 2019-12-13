<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>

<?php
$con = mysqli_connect("localhost","root","","hospital_db");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
?>

