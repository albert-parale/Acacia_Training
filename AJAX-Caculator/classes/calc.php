<?php 
    require_once ('calc-classes.php');
    
    $old = $_POST['old'];
    $num = $_POST['num'];
    $operators = $_POST['operators'];
    
    $class = new Calc($old, $num, $operators);
        echo $class->calcMethod();
?>