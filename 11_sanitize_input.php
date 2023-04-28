<?php
// if(isSet($_POST['submit'])){
//     echo $_POST['name'];
//     echo $_POST['age'];
// }

//protecting your site from harmful javascript
// 1 htmlspecialchars method
// if(isSet($_POST['submit'])){
//     $name = htmlspecialchars ($_POST['name']) ;
//     $age = htmlspecialchars($_POST['age']) ;
//     echo $name;
//     echo $age;
// }


// 2 filter_input.
if(isSet($_POST['submit'])){
    //IF its a GET request you will use INPUT_POST.
    $name = filter_input (INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS) ;
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS) ;
    echo $name;
    echo $age;
}
//prefer to use filter_input.


// 3 filter_var.
//filter var must not have to do inputs, it can any normal validation.
// if(isset($_POST['submit'])){

//     $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);

//     echo $name;
// }

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ; ?>" method="POST">
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