    <div class="container footer">
      <hr>
      <footer>
        <h5 align="center">
        <?php
                if (!isset($_SESSION['username'])) {
                    echo '<a class="nav-link" href="hms-staff.php">Staff Login</a>
                  </li>';
                }
        ?>
        </h5>
        <h5 align="center">
        Made and managed by Keerthi, Thejanie & Gopi - <?php echo date('Y'); ?>
        </h5>
      </footer>
    </div>
  </body>
</html>
