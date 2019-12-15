<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>

              <?php
                if (isset($_SESSION['username'])) {
                    echo '<li class="nav-item" style="align-items: right;"> <a class="nav-link" href="logout.php">Logout</a>
                  </li>';
            echo '<li class="nav-item" style="align-items: right;"> <a class="nav-link" href="faq.php">FAQs</a></li>';
           echo '<li class="nav-item" style="align-items: right;"> <a class="nav-link" href="medicaltips.php"> Get medical tips </a></li>';
           echo '<li class="nav-item" style="align-items: right;"> <a class="nav-link"href="welcome.php"> Appointment page</a></li>' ;
                    echo '<li class="nav-item" style="align-items: right;"> <a class="nav-link"href="feedback.php"> Send a feedback / Contact us</a></li>';
                    echo '<li class="nav-item" style="align-items: right;"> <a class="nav-link"href="report.php"> Retrieve / View medical report</a></li>';


                }
              ?>
            </ul>
        </nav>
        </div>
