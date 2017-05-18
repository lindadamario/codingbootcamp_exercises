<?php

$course_name ="Coding Bootcamp";
$my_name="Linda";
$result= 11-3;
$instructors=["Jan", "Daniel", "Michael", "Jakub"];

function greet_me() {
    echo "Good morning Prague!";
}

greet_me();

$my_greeting = "Good morning " . $my_name;

echo $my_greeting;

sort($instructors);

foreach($instructors as $name) { //$name now is a declared variable. Even if there was a previous variable called $name, this one overlap it.

    break;
}

function greet_someone($name) {
    
    return ("Hello " . $name);
}


foreach($instructors as $name)
{
    echo greet_someone($name) . "<br>"; //"name" was defined before that's why we can use it now
}
?>