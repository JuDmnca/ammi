<?php
if (isset($_SESSION['account']) && !empty($_SESSION['account'])) {
  $Connected = $_SESSION['account'];
}
else {
  $Connected = false;
}
?>
