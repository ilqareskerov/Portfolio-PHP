<?php
session_start();
session_destroy();
header("Location: ../admin/pages/examples/login.php");

?>