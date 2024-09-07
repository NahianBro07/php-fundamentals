<?php
/*
//Check if the number is Even
function isEven($number)//parameter
{

    if($number%2==0){
        return true;
    }
    return false;
}

//Type hinting

function factorial(int $f){ //type hint from version 7 above

    //From below 7 php version 
   
    // if(gettype($f)!="integer"){
    //     return "invalid";
    // }

    $result = 1;

    for($i = $f; $i > 1; $i--){
        $result *= $i;
    }
    return $result;
}

// Default value or optional parameter

function serve($item = "coffee", $numberOfItem ="2 cups"){
    echo "{$numberOfItem} of {$item} has/have been serverd";
}

// Return Type Fix

function sum(int $a, int $b, int $c):int //=> return type fixing
{
    return $a+$b+$c;
}

//Unlimited argument accept

    function sum(int ...$numbers):int{
    // function sum(int $x, int $y, int ...$numbers):int {
    $result = 0;
    for($i = 0; $i < count($numbers); $i++){
        $result += $numbers[$i];
    }
    echo count($numbers);
    echo PHP_EOL;
    return $result;
}
echo "Sum of ".sum (1,2,3,4,5);

// Breaking a large function into smaller funtion
// ((12-10)*10)/2

function doTaskA(int $a, int $b){
    return $a - $b; 
}
function doTaskB(int $resultA, int $c){
    return $resultA * $c;
}
function doTaskC(int $resultB, int $d){
    return $resultB / $d;
}
function doLargerTask(){
    $resultA = doTaskA(12, 10);
    $resultB = doTaskB($resultA, 10);
    $resultC = doTaskC($resultB, 2); 
    return $resultC; 
}
echo doLargerTask(); 

//Recursive function or recursion

function number($counter, $end, $Stepping=1){
    if($counter > $end){
        return;
    }
    echo $counter."\n";
    $counter += $Stepping;
    number($counter, $end, $Stepping);
}
echo number(21,37);


// Static keyword(keep their value after the function ended)

function fibonacci($old, $new, $end){
    
    static $start;
    $start = $start ?? 1;

    if ($start > $end){
        return;
    }
    $start++;
    echo $old." ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;
    
    fibonacci($old, $new, $end);
}

echo fibonacci(0, 1, 10);

// Variable Scope

$name = "Earth";

function globalScope(){
    // global $name;
    // echo $name;
    echo $GLOBALS['name'];//Super Global
}
echo globalScope()."\n";

function localScope(){
    // global $name;

    $name = "Earth";
    echo $name;
   
}
echo localScope()."\n";
// echo $name;

function doSomething(){
    $i= $i ?? 0;
    $i++;
    echo $i."\n";

}
doSomething();
doSomething();
doSomething();
doSomething();
doSomething();

function staticScope(){
    static $i;
    $i= $i ?? 0;
    $i++;
    echo $i."\n";
}
staticScope();
staticScope();
staticScope();
staticScope();
staticScope();

function factorial($number){

    if ($number <= 1){
        return 1;
    }
    echo PHP_EOL;
    return $number * factorial($number-1);
}
echo factorial(3);*/


?>


