<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<div align="center"><h1>Welcome to Agent Based Clinic Management System</h1>
    <p class="block-quote">Our aim has always been to bring world–class medical care within the reach of distinguised students.</p>
     </div>  
    <p><?php include('slideshow.php');?></p>

<link href="jumbotron.css" rel="stylesheet">
<?php
  include("header.php");
  include("library.php");
  noAccessForAdmin();
  noAccessIfNotLoggedIn();
  if($_SESSION["user-type"] != 'normal'){
    include("nav-bar.php");
  }
?>
<div class="container">
     
<!--   <h2>Welcome, <?php echo $_SESSION["fullname"];?>!</h2>
 -->      

 <div class='alert alert-info'>
  
            <marquee>  <strong>Info!</strong> Your Appointment will be booked for the week - <? echo date("d/m/y"); ?>. Appointment time comes in batches, BATCH A (between 9:30 to 12:30) BATCH B (1:30 to 3:30) once appointment is confirmed. </marquee></div>
      <h3>Welcome User! Enter Information to book an appointment </h3>
                <?php
                  if(isset($_POST['apfullname'])){
                    $i = enter_patient_info($_POST['apfullname'],$_POST['apAge'],$_POST['apweight'],$_POST['apphone_no'],$_POST['apaddress']);
                    appointment_booking($i, $_POST['apSpecialist'], $_POST['apCondition']);
                    unset($_POST['apfullname']); //unset all post variables
                    if (isset($_POST['apfullname'])){
                      echo '<script type="text/javascript">location.reload();</script>';
                    }

                  }
                ?>
            <form action="add_patient.php" method="POST">

            <div class="form-group" >
              <label for="usr">Full Name:</label>
              <input type="text" class="form-control" id="usr" name="apfullname" required>
            </div>
<br>
            <div class="form-group">
              <label for="pwd">Age: (in years)</label>
              <input type="number" class="form-control" id="pwd" name="apAge" min="1" max="200" required>
            </div>

            <br>
            <div class="form-group">
              <label for="pwd">Weight (in kgs):</label>
              <input type="tel" class="form-control" id="pwd" name="apweight" min="1" max="300" required>
            </div>

            <br>
            <div class="form-group">
              <label for="pwd">Phone No:</label>
              <input type="tel" class="form-control" id="pwd" name="apphone_no" required>
            </div>

            <br>
            <div class="form-group">
              <label for="pwd">Address:</label>
              <textarea class="form-control" id="pwd" name="apaddress" required></textarea>
            </div>
<br>
            <div class="form-group">
              <label for="pwd">Doctor Needed:</label>
              <select required value=1 name="apSpecialist">
                <option value="Audiologist" class="option">Audiologist - Ear Expert</option>
                <option value="Allergist" class="option">Allergist - Allergy Expert</option>
                <option value="Anesthesiologist" class="option">Anesthesiologist - Anesthetic Expert</option>
                <option value="Cardiologist" class="option">Cardiologist - Heart Expert</option>
                <option value="Dentist" class="option">Dentist - Oral Care Expert</option>
                <option value="Dermatologist" class="option">Dermatologist - Skin Expert</option>
                <option value="Endocrinologist" class="option">Endocrinologist - Endocrine Expert</option>
              </select>
            </div>
<br>
            <div class="form-group">
              <label for="pwd">Medical Condition / Purpose of visit:</label>
              <textarea class="form-control" id="pwd" name="apCondition" required></textarea>
            </div>
<br>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" >
              <input type="reset" name="" class="btn btn-danger">
            </div>
          </form>
</div>
<?php
  include("footer.php");
?>
