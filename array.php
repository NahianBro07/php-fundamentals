<?php
/*
// Array
// Array Manipulation
$array = [
    "A",
    "B",
    2,
    "D"
];
echo $array[2];
echo PHP_EOL;
$arr = array(
    "X",
    "Y",
    "Z"
);
array_push($arr, "E");
array_unshift($arr, "w");
$n = count($arr);
for($i = 0; $i < $n; $i++){
    echo $arr[$i]."\n";
}
array_pop($arr);
array_shift($arr);

$n = count($arr);
for($i = 0; $i < $n; $i++){
    echo $arr[$i]."\n";
}


//Associative array

$foods = [
    'veg' => 'a, b, c, d',
    'fruits' => 'e, f, g, h, i',
];

// print_r($foods);

//echo $foods['veg'];

// for($i = 0; $i < count($foods); $i++){
//     echo $foods[$i];
// }
// foreach($foods as $key=>$value){
//     echo $key." = ".$value."\n";
// }

$keys = array_keys($foods);

for($i = 0; $i < count($keys); $i++){
    $key = $keys[$i] ;
    echo $key."\n";
} 

$values = array_values($foods);
for($i = 0; $i < count($values); $i++){
    $value = $values[$i];
    echo $value."\n";
}

//Array to string "join" and string to array "explode"

$vegis = explode(', ','1, 2, 3, 4, 5'); //(', ) => delimiter

echo $vegis[0];
echo PHP_EOL;

$vegisString = join (', ',$vegis);
echo $vegisString."\n";

$muliDelimiter = preg_split ('/(, |,)/','a, b, c, d, e,f,g, i');
echo count($muliDelimiter);

//Multi-dimensional or nested array

$foods = [
    'vegis' => explode(', ','a, b, c, d'),
    'fruits' => explode(', ','e, f, g, h, i'),
    'juice' => explode(', ','j, k, l, m'),
];
array_push($foods['juice'], 'n');
print_r($foods);
echo $foods['vegis'][2];
$sample = [
    [1,2,3],
    [11,22,33],
    [111,222,333, ['a','b', ['ac','ab']]],
    [1111,2222,3333, [5, 6, 7]],
];
print_r($sample);
echo  $sample[2][3][2][1];


//Associative array to string - serialized or json

$student = [
    'fName' => 'Nahian',
    'lName' => 'Ahmed',
    'age' => 25,
];

echo $student['fName']." ".$student['lName']."\n";

printf("%s %s \n", $student['fName'], $student['lName']);

$serialized = serialize($student);
echo $serialized."\n";

$unserialized = unserialize($serialized);
print_r ($unserialized);

$encode = json_encode($student);
echo $encode."\n";

$decode = json_decode($encode, true);
print_r ($decode)."\n";



//Copy by value and copy by reference

//Copy by value or deep copy
$currentJob = array(
    'salaray'=> 'ok',
    'environment' => 'lively',
    'mode' => 'only-chill',
);

$newJob = $currentJob;
$newJob['mode'] = 'work'; 
print_r($currentJob);
print_r($newJob);

//Copy by reference or shallow data

$what_if = [
    'car' => 'yes',
    'life' => 'magnesimo',
    'peace' => 'yes',
];
// $reality = &$what_if;
// //& => only reference of the memory address. That is why the value changes in both array
// $reality['car'] = 'lucid-dream';
// print_r($what_if);
// print_r($reality); 

function printData($value){
    $value['life'] = 'hell';
    print_r($value);
}
printData($what_if);
print_r($what_if);

function printData2(&$value2){
    $value2['life'] = 'hell';
    print_r($value2);
}
printData2($what_if);
print_r($what_if);


//Data remove from associative array

$alphabet = [
    '1' => 'a',
    '2' => 'b',
    '3' => 'c',
    '4' => 'd',
    '5' => 'e',
    '6' => 'f',
];

print_r($alphabet)."\n";
unset($alphabet['6']);
print_r($alphabet);


//Check if there is any value in a variable or not

$value = 0;

if(isset($value)){
    echo "Value is set\n";
}else{
    echo "Not set\n";
}

if(empty($value)){
    echo "Empty\n";
}else{
    echo "Not empty\n";
}

if(isset($value) && is_numeric($value) || $value != ''){
    echo "Value is set, not empty";
}else{
    echo 'Value isn\'t set, empty';
}

//Extracting some data from an array while keeping the original array intact

$fruits = array(
    "apple",//-8
    "mango",//-7
    "banana",//-6
    "orange",//-5
    "lime",//-4
    "pineaple",//-3
    "licchi",//-2
    "Guava"//-1
);

$random =[
    "a" =>"1",
    "b" =>"2",
    "c" =>"3",
    "d" =>"4",
    "e" =>"5",
    "f" =>"6",
    "g" =>"7",
    "h" =>"8",
    "i" =>"9",
    "j" =>"10",
    "k" => "",
    12,
    13=>13,
    
];      

$someFruits = array_slice($fruits,3,1);
print_r($someFruits);
$someFruits = array_slice($fruits, -8,-4);
print_r($someFruits);
$someFruits = array_slice($fruits, -4,-1,true);
print_r($someFruits);
$randomData = array_slice($random, 4, 6);
print_r($randomData);
$randomData = array_slice($random, 4, null);
print_r($randomData);
$randomData = array_slice($random, 4,null, true);
print_r($randomData);*/

//Array katakati

$fruits = array(
    "apple",//-8
    "mango",//-7
    "banana",//-6
    "orange",//-5
    "lime",//-4
    "pineaple",//-3
    "licchi",//-2
    "Guava"//-1
);
// $someFruits = array_splice($fruits, 2,2);
// print_r($someFruits);
// print_r($fruits);
$newfruits = array("jack","dragon");
$someFruits = array_splice($fruits, 2,2,$newfruits);
print_r($someFruits);
print_r($fruits);


?>