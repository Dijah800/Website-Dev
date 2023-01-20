  <?php
  session_start();
  if (isset($_SESSION["count"])) {
    $_SESSION["count"] += 1;
    echo "You've visited here {$_SESSION['count']} times";
  }
  else {
    $_SESSION["count"] = 1;
    echo "You've visited once";
 }
 ?>
