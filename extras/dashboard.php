<?php
session_start();

if(isset($_SESSION['username'])){
    echo '<h1>Welcome ' .  $_SESSION['username'] . '</h1>';
    echo  '<a href="/phplessons/extras/logout.php">Home</a>';
} else {
    echo '<h1> Welcome Guest </h1>';
    echo '<a href="/phplessons/13_sessions.php">Home</a>';
}


?>