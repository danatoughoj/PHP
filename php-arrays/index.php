<?php
// 1. $color = array('white', 'green', 'red', 'blue', 'black');
// Write a script that display the following string -
// "The memory of that scene for me is like a frame of film forever frozen at that
// moment: the red carpet, the green lawn, the white house, the leaden sky. The
// new president and his first lady. - Richard M. Nixon"
// The words 'red', 'green' and 'white' should come from $color variables .
echo "Question #1 : <br>";
$colors1 = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at
 that moment: the $colors1[2] carpet, the $colors1[1] lawn, the $colors1[0] house, the
  leaden sky. The new president and his first lady. - Richard M. Nixon";
echo "<br>-----------------------------<br>";


// 2. $color = array('white', 'green', 'red'')
// Write a PHP script that will display the colors in the following order :
// Output :
// white, green, red,
// ● green
// ● red
// ● white
echo "Question #2 : <br>";
$colors2 = array('white', 'green', 'red');
foreach($colors2 as $color){
    echo "<li> $color </li>";
}
echo "<br>-----------------------------<br>";


// 3. $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
// "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>
// "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
// "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
// "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United
// "Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech
// "Republic"=>"Prague", "Estonia"=>"Tallinn", "Hungary"=>"Budapest") ;
// Create a PHP script which displays the capital and country name from the above
// array $cities. Sort the list by the capital of the country.
// Sample Output :
// The capital of Netherlands is Amsterdam
// The capital of Greece is Athens
// The capital of Germany is Berlin
echo "Question #3 : <br>";
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>"Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>"Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin","Greece" => "Athens", "Ireland"=>"Dublin","Netherlands"=>"Amsterdam","Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallinn", "Hungary"=>"Budapest") ;

foreach($cities as $key => $value){
    echo "The capital of $key is $value <br>";
}
echo "-----------------------------<br>";


// 4. $x = array(1, 2, 3, 4, 5);
// Delete an element from the above PHP array. After deleting the element, integer
// keys must be normalized.
// Sample Output :
// array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
// array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }
echo "Question #4 : <br>";
$x = array(1, 2, 3, 4, 5);
print_r($x);
echo "<br>";
array_splice($x, 2, 1);
print_r($x);
echo "<br>-----------------------------<br>";


// 5. $color = array(4 => 'white', 6 => 'green', 11=> 'red');
// Write a PHP script to get the first element of the above array.
// Expected result : white
echo "Question #5 : <br>";
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
print_r($color);
echo "<br>".$color["4"];
echo "<br>-----------------------------<br>";


// 7. Write a PHP script that inserts a new item in an array in any position.
// Expected Output :
// Original array :
// 1 2 3 4 5
// After inserting '$' the array is :
// 1 2 3 $ 4 5
echo "Question #6 : <br>";
function add_to_array($item,$position){
    $names=["dana","samir","toughoj"];
    $part_one=array_slice($names,0,$position);
    $part_two=array_slice($names,$position);
    array_push($part_one,$item);
    return array_merge($part_one, $part_two);;
}
print_r(add_to_array("Abdallah",2));
echo "<br>-----------------------------<br>";


?>