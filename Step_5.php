<?php
$course_name = "NODE";
$enrolled_students = 10;
$price = 12.5;
$on_discount= false;

echo "Course title: {$course_name}
Enrolled Students: {$enrolled_students}
Course price: {$price} $ USD
Course on discount:".($on_discount?"yes":"no");
?>