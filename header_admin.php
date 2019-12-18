<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 12/17/2019
 * Time: 4:47 PM
 */
?>
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<?php
if (isset($_SESSION['username'])) {
    echo '<li class="nav-item" style="align-items: right;"> <a class="nav-link" href="logout.php">Logout</a>   </li>';
    echo '<li class="nav-item" style="align-items: right;"> <a class="nav-link" href="admin_home.php">Admin | home</a>   </li>';
    echo '<li class="nav-item" style="align-items: right;"> <a class="nav-link" href="insert_medicaltips.php"> Add medical tips</a></li>';
    echo '<li class="nav-item" style="align-items: right;"> <a class="nav-link" href="insert_report.php"> upload student medical report</a></li>';
}
?>
</ul>
</nav>
</div>
