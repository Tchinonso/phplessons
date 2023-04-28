<?php
session_start();

session_destroy();
header("Location: /phplessons/extras/dashboard.php");

?>