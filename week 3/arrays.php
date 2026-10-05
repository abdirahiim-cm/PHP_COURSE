<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php



// Two-dimensional Numerical Indexed Array

    $student = array (
                array ("Mohamed", 1990, "Hodan", "0608124390"),
                array ("Ahmed", 2001, "Yaaqshiid", "0608124391"),
                array ("Jaamac", 1986, "Shangaani", "0608124392"),
);
echo ("Printing array key/value pairs:<br>");
foreach ($student as $k)
    echo ("$k[0], $k[1], $k[2], $k[3]<br>");

echo "Array elements are:<br>";
foreach ($student as $s) {
     foreach ($s as $v)
         echo ("$v<br>");
}



//  xample (is_array, in_array, count)

$students = ["Ali", "Ahmed", "Hassan"];

if (is_array($students)) {
    echo "Students is an array";
}


$students = ["Ali", "Ahmed", "Hassan"];

if (in_array("Ahmed", $students)) {
    echo "Ahmed is in the list";
}

$students = ["Ali", "Ahmed", "Hassan"];

echo count($students);




// explode()
$names = "Ali,Ahmed,Hassan";

$students = explode(",", $names);

print_r($students);


// shuffle()
$students = ["Ali", "Ahmed", "Hassan"];

shuffle($students);

print_r($students);




// array_merge()
$students1 = ["Ali", "Ahmed"];
$students2 = ["Hassan", "Mohamed"];

$students = array_merge($students1, $students2);

print_r($students);


//array_reverse()
$students = ["Ali", "Ahmed", "Hassan"];

$students = array_reverse($students);

print_r($students);



// array_push()
$students = ["Ali", "Ahmed"];

array_push($students, "Hassan");

print_r($students);


// array_pop()
$students = ["Ali", "Ahmed", "Hassan"];

array_pop($students);

print_r($students);


// end()
$students = ["Ali", "Ahmed", "Hassan"];

echo end($students);


    ?>


</body>
</html>
