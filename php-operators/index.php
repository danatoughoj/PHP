<?php
// 1. Write a PHP script to see if the specified year is a leap year or not
echo "*Question #1 : <br>";
$year_days=366;

if($year_days == 366){
    echo "this is a leap year <br>";
}
elseif($year_days == 365){
    echo "this is an ordinary year <br>";
}
else{
    echo "your entered a wrong number year days should be 365 or 366 <br>";
}
echo "-------------------------------- <br>";


// 2. Write a PHP script to check the season depending on set temperature if the
// temperature is below 20 we are in winter otherwise the season is summer.
echo "*Question #2 : <br>";
$temperature=10;

if($temperature <= 20){
    echo "We are in winter! <br>";
}
else{
    echo "We are in summer! <br>";
}
echo "-------------------------------- <br>";


// 3. Write a PHP script to calculate the sum of the two mapped integers. If the two
// values are the same, then three times their sum is returned.

function calculate($Number1,$Number2){
    if($Number1 === $Number2){
        return 3*($Number1+$Number2);
    }
    else{
        return $Number1+$Number2;
    }
}
echo "*Question #3 : <br>";
echo "the Sum is : ".calculate(5,5)."<br>";
echo "-------------------------------- <br>";


// 4. Write a PHP script to get the absolute difference between n and 100. If n is
// greater than 100, return triple the absolute difference.

function absoulte_difference($number){
    if($number > 100){
        return (abs($number-100))*3;
    }
    else{
        return abs($number-100);
    }
}
echo "*Question #4 : <br>";
echo "the absolute difference is : ".absoulte_difference(90)."<br>";
echo "-------------------------------- <br>";


// 5. Write PHP script to check two integers, and return true if one is 30 or if their sum
// is 30.

function check_for_30($number1 ,$number2){
    if(($number1 ===30 || $number2 === 30) || ($number1+$number2 === 30)){
        return "true";
    }
    else{
        return "none of the numbers you enterd is 30, nore the sum of the two numbers equals 30.";
    }
}
echo "*Question #5 : <br>";
echo check_for_30(10,20)."<br>";
echo "-------------------------------- <br>";


// 6. Write a PHP script to check an integer and return an integer if it is within 10 of
// 100 or 200.
echo "*Question #6 : <br>";
echo "-------------------------------- <br>";

// 7. Write in PHP script to check if the given positive number is a multiple of 3 or a
// multiple of 7

function multiple_of($number){
    if($number % 3 == 0){
        return "the number you entered is multiple of 3";
    }
    elseif($number % 7 == 0){
        return "the number you entered is multiple of 7";
    }
    else{
        return "the number you entered is not a multiple of 7 nore a multiple of 3";
    }
}
echo "*Question #7 : <br>";
echo multiple_of(6)."<br>";
echo "-------------------------------- <br>";


// 8. Write a PHP script to create a new string where "if" is added to the front of a
// particular string. If the series really begins with "if," then return the string
// unchanged.

function add_if_to_string($str){
    $position=strpos($str," ");
    $first_word=substr($str,0,$position);
    if($first_word == "if"){
        return $str;
    }
    else{
        return "if ".$str;
    }
}

echo "*Question #8 : <br>";
echo add_if_to_string("you go you come")."<br>";
echo "-------------------------------- <br>";


// 9. Write a PHP script to remove the character in a specific position from a specific
// string. The position selected in range 0..1 string length inclusive
function remove_character($str, $position) 
 {
    return substr_replace($str," ",$position,1);
 }
echo "*Question #9 : <br>";
echo remove_character("this is the second task in the backend part",42)."<br>";
echo "-------------------------------- <br>";


// 10. Write PHP script to check two integers if either is in the range 100..200 inclusive.
function check_numbers($number1,$number2){
    if(($number1 >= 100 && $number1 <= 200) || ($number2 >= 100 && $number2 <= 200)){
        return "one of or both numbers you entered are in the range of 100 and 200";
    }
    else{
        return "none of the numbers you entered is in the range of 100 and 200";
    }
}
echo "*Question 10# : <br>";
echo check_numbers(800,400)."<br>";
echo "-------------------------------- <br>";


// 11. Write a PHP script to check if two valid values are in the range of 20.50
// inclusive. Returns true if 1 or another in the listed range is false.
function numbers_in_range($number1,$number2){
    return (($number1 <= 20 || $number2 >= 50) || ($number2 <= 20 || $x >= 50));
}
echo "*Question 11# : <br>";
echo numbers_in_range(10,30)."<br>";
echo "-------------------------------- <br>";


// 12. Write PHP script to check for the largest number among three integers
$largest;
function largest_number($number1,$number2,$number3){
    if($number1 > $number2){
        if($number1 < $number3){
            $largest=$number3;
        }
        else{
            $largest=$number1;
        }
    }
    else{
        if($number2 > $number3){
            $largest=$number2;
        }
    }
    return $largest;
}
echo "*Question 12# : <br>";
echo largest_number(100,23,130)."<br>";
echo "-------------------------------- <br>";


// 13. Write in PHP script to check the number closest to 100 between two integers.
// Return 0 if the two numbers are equal
function closest_number($number1,$number2){
    if($number1 == $number2){
        return "0";
    }
    else{
        $difference1=abs(100-$number1);
        $difference2=abs(100-$number2);
        if($difference1 < $difference2){
            return $number1." is closet to (100) than ".$number2;
        }
        else{
            return $number2." is closet to (100) than ".$number1;
        }
    }
}
echo "*Question 13# : <br>";
echo closest_number(93,80)."<br>";
echo "-------------------------------- <br>";


// 14. Write a PHP script that accepts two integers and returns an integer if one of them
// is 5, their sum, or difference between them is 5.

function check_for_five($number1,$number2){
    if($number1 == 5 || $number2 == 5){
        return 5;
    }
    elseif(($number1+$number2 == 5) || ($number1-$number2 == 5)){
        return 5;
    }
    else {
        return "neither of the numbers you entered is 5, nore the sum or difference between them is 5";
    }
}
echo "*Question 14# : <br>";
echo check_for_five(10,5)."<br>";
echo "-------------------------------- <br>";
?>