    <div class="container footer">
      <hr>
      <footer>
        <p align="right">
        <?php
                if (!isset($_SESSION['username'])) {
                    echo '<a class="nav-link" href="hms-staff.php">Staff Login</a>
                  </li>';
                }
        ?>
        </p>
        <p align="right">
        <a href="https://twitter.com/@tobainocycle">Copyright, Dept of computer Science, 2019. Design by Smart_Tobaino</a> - <?php echo date('Y'); ?>
        </nav>
		</p>
      </footer>
    </div>
  </body>
</html>
