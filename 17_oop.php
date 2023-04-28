<?php
class User {
    public $name;
    public $email;
    public $password;

    // a constructor is a method that runs when an object is created.
    public function __construct($name, $email, $password){
        $this -> name = $name;
        $this -> email = $email;
        $this -> password = $password;
    }

    //method is a function that blongs to a class
    function setName($name){
        $this -> name = $name;
    }
    function getName(){
        return $this -> name;
    }
}

// instatiate a user object.
$user1 = new User('john','john@gmail.com', '123123123');

$user1 -> setName('chinonso');

// var_dump($user1);
// echo $user1 -> getName();
// echo $user1 -> email;


//Inheritance
class Employee extends User {
    public function __construct($name, $email, $password, $title) {
        parent:: __construct($name, $email, $password);
        $this -> title = $title;
    }

    public function get_title() {
        return $this -> title;
    }
}

$employee1 = new Employee('julia', 'julia@gmail.com', '23212jj', 'HR');
echo $employee1 -> get_title();
?>