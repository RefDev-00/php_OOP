<?php

class Student{
    var $name;
    var $country = 'None';
}

$student1 = new Student;
$student2 = new Student;

$student1->name ='Refsi';
$student2->name ='Maulana';

echo $student1->name ."<br />";
echo $student2->name ."<br />";