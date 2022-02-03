<!-- DataTypes -->
<!-- 1. String -->
<?php
    $a = "Hello";
    echo $a;
?>

<!-- 2. Integer -->
<?php
    $a = 20;
    echo $a;
?>

<!-- 3. Float -->
<?php
    $a = 1.2;
    echo $a;
?>

<!-- 4. Boolean -->
<?php
    $a = true;
    $b = false;
    echo $a;
    echo $b;
?>

<!-- 5. Array -->
<?php
    $friends = array('a','b','c');
    echo $friends;
?>

<!-- 6. NUll -->
 <?php
    $a = null;
    echo $a;
?> 

<!-- 7. Object -->
<?php 
    class Human{
        public $name;
        public $age;
        public function __Construct($name, $age)
        {
              $this->name = $name;
              $this->age = $age;  
        }
        public function message()
        {
            return "name : " . $this->name . "  Age : " . $this->age;
        }
    }

    $vandana = new Human("vandana", 20);
    echo $vandana->message();
?>


