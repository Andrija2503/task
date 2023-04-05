<?php

require 'class/Admin.php';
require 'class/Student.php';
require 'class/Profesor.php';

$student1 = new Student('Pero', 'Peric', '11111111111', 'pero@gmail.com');
$student1->info();

$admin1 = new Admin('Janko', 'Jankovic', '11143466565', 'janko@gmail.com');
$admin1->info();

$profesor1 = new Profesor('Ivan', 'Ivanovic', '18490328423', 'ivan@gmail.com');
$profesor1->info();

?>