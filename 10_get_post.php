<?php
// echo $_GET['name'];
// echo $_GET['age'];


if(isSet($_POST['submit'])){
    echo $_POST['name'];
    echo $_POST['age'];
}




?>

<!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=chinonso&age=29">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
<div>
    <label for="name">Name: </label>
    <input type="text" name="name">
</div>
<div>
    <label for="name">Age: </label>
    <input type="text" name="age">
</div>
<input type="submit" name="submit" value="submit"> -->


<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=chinonso&age=29">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
    <label for="name">Name: </label>
    <input type="text" name="name">
</div>
<div>
    <label for="name">Age: </label>
    <input type="text" name="age">
</div>
<input type="submit" name="submit" value="submit">

</form>