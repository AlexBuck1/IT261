<?php
// my variables

// don't forget that a variable is merely a container for data


$name = "Alex"; // Alex is a string
$name = 'Alex';
echo $name;

$body_temp = 98; // 98 is an integer
$body_temp_new = 98.6; // 98.6 is a float
echo '>br>';
echo "<br>";
echo $body_temp;
echo "<br>";
echo $body_temp_new;
echo "<br>";
echo "My name is $name!";
echo "<br>";
echo 'My name is $name!'; // I like single quotes

echo "<br>";
echo 'My name is '.$name.' !'; // I like single quotes

echo "<br>";
echo 'The normal body temperature for a human being is '. $body_temp_new .' ';
echo "<br>";
$name = 'Sharon';
echo $name;
echo "<br>";
$x = 20;
$y = 5;

$z = $x + $y; // I am using the term "assigned" vs equals
echo $z;
echo "<br>";
$z = $x * $y;
echo $z;
echo "<br>";
$z = $x / $y;
echo $z;

echo "<br>";

$first_name = 'Alex';
$last_name = 'Buck';
echo $first_name.' '.$last_name;

echo "<br>";
echo "My full name is $first_name $last_name";
echo "<br>";
echo 'My full name is '.$first_name.' '.$last_name.'';