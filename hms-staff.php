<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="jumbotron.css" rel="stylesheet">
    <link rel="icon" href="images/lasulogo.PNG">

    <p><?php include('slideshow.php'); ?></p>

<?php 
  include("header.php");
  include("library.php");
  noAccessIfLoggedIn();
  include("nav-bar.php");
?>
<div class="container">
    <h1 align=center style="color: blue">Staff Login</h1>

    <?php
      if (isset($_POST['email'])){
        $type = $_POST['type'];
        $i = login($_POST['email'],$_POST['password'],$type);
        if ($i == 1){
          noAccessIfLoggedIn();
        }
      }
    ?>

<div class="row">

  <div class="col col-xl-6" align="center">
      
      <form action="hms-staff.php" method="POST">
        <div class="form-group">
          <label for="usr">Username:</label>
            <input type="text" class="form-control" name="email" required>
        </div>
          <br>
        <div class="form-group">
          <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="password" required>
        </div>
          <br>
        <div class="form-group">
          <label for="pwd">User Type:</label>
            <select required value=1 class='form-control' name="type">
                <option value="admin" class="option">Admin</option>
                <option value="clerks" class="option">Clerk</option>
                <option value="doctors" class="option">Doctor</option>
          </select>
        </div>
          <br>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Login">
          <input type="reset" name="" class="btn btn-danger">
        </div>
          
      </form>
  </div>

</div>
</div>

<?php 
include("footer.php"); ?>