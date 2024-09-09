<?php
/*
echo "hello world";
echo "\n";
define ('PI', 3.14);
$name = 'John';
$salary = 1000;
echo "My name is {$name} and I earn {$salary} dollars \n";
echo constant ('PI');

$planet = "Earth";
echo 'We\'re on planet '.$planet;

$fName = "John";
$sName = "cooper";
$uName = strtoupper($fName); 
$lName = strtolower($sName);
echo "$uName\n";
echo $lName;
echo "\n";
printf("Name in Uppercase = %s\n",$uName);
printf("My name is %s, My frnd is %s %s","Nahian",$uName,$lName);

$planet1="Mercury";
$planet2="Jupiter";
echo "The smallest planet is ".$planet1." The biggest planet is ".$planet2."\n";
echo "The smallest planet is {$planet1} The biggest planet is {$planet2}\n";
printf("The smallest planet is %s The biggest planet is %s\n", strtoupper($planet1),strrev($planet2));

$name = "Nahian";
var_dump($name);

$n = 10;
$m = $n++;
echo $n,"\n",$m,"\n";
$x = 10;
$y = ++$x;
echo $y,"\n",$x;

$fName = "Nahian";
$lName = "Khan";
printf('My name is %2$s %1$s', $fName, $lName); // ($fName, $lName) => arguments
echo "\n";
printf('The equavilent of %1$d is %1$b', 10);
echo "\n";
$m = 45.675;
$o=45;
$p=65;
printf("%.2f", $m);
echo "\n";
printf('%04d', $o);
echo "\n";
printf('%04d', $p);
echo "\n";
printf("%08.2f \n", $p);
$output = sprintf('My name is %2$s %1$s', $fName, $lName);
echo "$output \n";
echo strtoupper($output);

//Switch statement
$n=-5;
$r = $n % 2;
switch ($r) {
    case 0: 
        switch($n){
            case $n>0:
                echo "{$n} is Positive Even\n";
                break;
            case $n<0:
                echo "{$n} is Negative Even\n";
                break;
        }
    default:
        switch ($n){
            case $n>0:
                echo "{$n} is Positive Odd\n";
                break;
            case $n<0:
                echo "{$n} is Negative Odd\n";
                break;
        }
}
Switch(true){
    case ($r == 0 && $n > 0):
        echo "{$n} is Positive Even\n";
        break;
    case ($r == 0 && $n < 0):
        echo "{$n} is Negative even\n";
        break;
    case($r == 1 && $n > 0):
        echo "{$n} is Positive Odd\n";
        break;
    case($r == -1 && $n < 0):
        echo "{$n} is Negative Odd\n";
        break;
}
$string ="10";

switch ($string) {
    case (string)"KingNahian":
        echo"KingNahian";
        break;
    case (string) 10:
        echo "10";
        break;
    case (string) "10Nahian":
        echo "10Nahian";
        break;
    default:
        echo "Not Found";
}


//Alternate syntex

$n=300;
if ($n%2==0) {
    echo "{$n} is Even";
    echo PHP_EOL;
} else {
    echo "{$n} is Odd";
    echo PHP_EOL;

}
if ($n%2==0):
    echo "{$n} is Even";
    echo PHP_EOL;
else:
    echo "{$n} is Odd";
    echo PHP_EOL;
endif;
switch($n%2==0):
    case true:
        echo "{$n} is Even";
        echo PHP_EOL;
        break;
    case false:
        echo "{$n} is Odd";
        echo PHP_EOL;
        break;
endswitch;


//mathay gobor diye vora
//brain da chuidda gese


//Terniary Operator Sepacial Case
$n=11;
echo $n%2==0 ? "{$n} is Even" : (($n%2!=0) ? "{$n} is Odd" : "Not Found");


//For loop
for($i=10, $j=0; $i>=0; $i--, $j++){
    echo $i.":".$j." ";
     echo $i.":".(10-$i).PHP_EOL;
    ;
}
echo"\n";

$n=3;
for($i=$n, $f=1; $i>1; $i--){
    $f*=$i;
}
printf("Factorial of %d is %d \n",$n,$f);

// factorial form 1 to 10
$n=1;
$j=1;
for($i=1; $i<=10; $i++){
    $n*=$i;
    $j++;
    echo "Factorial of {$i} is {$n}\n";
}
echo "number of iteration is {$j}\n";


//Fibanacci Series
//0 1 1 2 3 5 8 13 21 34
$a = 0;
$b = 1;
for ($i = 0; $i < 10; $i++) {
    echo $a . " "; 
    $c = $a + $b; 
    $b = $a;  
    $a = $c;
}
$a = 0;//veryold
$b = 1;//old
$c = 1;//new

for($i=0; $i<20; $i++){
    echo $a." ";
    $a = $b;
    $b = $c;
    $c = $a+$b;
}

// Null Coles Operator

$default_lat = 10.2;
$default_long = 20.3;
$user_lat;
// $lat = isset($user_lat) ? $user_lat : $default_lat;
$lat = $user_lat ?? $default_lat;##
echo $lat;


// Functions

include_once "function.php";
$x =13;
if(isEven($x))//argument
{
    echo "{$x} is a Even Number";
}
else{
    echo "{$x} is a Odd Number";
}

include_once "function.php";
$fac = 5;
echo "Factorial of {$fac} is ".factorial($fac); 

include_once "function.php";
//$item = "Coffee";
//$numberOfItem = "2 cups";
//serve($item, $numberOfItem);
serve();

include_once "function.php";
echo "Sum of 3 numbers are ".sum(5,6,7);*/

?>