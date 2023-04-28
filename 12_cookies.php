<?php
// to set a cookie
setcookie('name', 'Chinonso', time() + 86400 * 30);

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}

// to delete a cookie, you need to set it then set it to past example.
setcookie('name', 'Chinonso', time() - 86400);



?>