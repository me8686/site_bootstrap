<?php
session_start();
unset($_SESSION["login"]);
unset($_SESSION["username"]);
session_destroy();
header("Location: index.php?logout=success");
exit();
?>
