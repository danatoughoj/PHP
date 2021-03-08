<?php 
// 1. Write a function to calculate the factorial of a number (a non-negative integer).
// The function accepts the number as an argument.
echo "Question #1 : <br>";
function number_factorial($number){
    if($number > 0){ 
        $factorial=1;
        $temp=1;
        for($i=1;$i < $number;$i++){
            $temp=$temp*$i;
        }
        return "The factorial of $number : ".$factorial=$temp*$number;
    }
    else{
        echo "you entered a negative number";
    }
}
echo number_factorial(6);
echo "<br>------------------------------ <br>";


// 2. Write a function to check whether a number is prime or not.
// Note: A prime number (or a prime) is a natural number greater than 1 that has no
// positive divisors other than 1 and itself.

echo "Question #2 : <br>";
function check_if_prime($number){
    if($number <= 1){
        echo "$number is not a prime number";
    }
    elseif($number == 2){
        echo "$number is a prime number";
    }
    else{
        for($i=2 ; $i < $number ; $i++){
            if($number%$i == 0){
                return "$number is not a prime number";
            }
            else{
                return "$number is a prime number"; 
            }
        }
    }
}
echo check_if_prime(67);
echo "<br>------------------------------ <br>";


// 3. Write a function to reverse a string.
echo "Question #3 : <br>";

function reverse_string($str){
    echo "$str <br>";
    $reversed_string="";
    for($a=0;$a < strlen($str); $a++){
        $index=(strlen($str)-1)-$a;
        $reversed_string[$a]=$str[$index];
    }
    return $reversed_string;
}
echo reverse_string("Dana");
echo "<br>------------------------------ <br>";


// 4. Write a function to sort an string array depending on the alphabetical order .
echo "Question #4 : <br>";
function sort_string($str){
    echo $str."<br>";
    $sorted_string="";
    $counter=1;
    for($i=strlen($str); $i>0 ; $i--){
        $smallest=$str[0];
        for($a=0; $a< strlen($str); $a++){
            if($str[$a] <= $smallest){
                $smallest=$str[$a];
                $smallest_index=$a;
            }
        }
        $str =substr_replace($str, '', $smallest_index, 1);
        $sorted_string[$counter]=$smallest;
        $counter++;
    }
    return $sorted_string;
}
echo sort_string("jafetdlfczba");
// function sortt($str){
//     $sorted_string="";
//     $smallest="z";
//     for($i=0; $i< strlen($str); $i++){
//         for($a=0; $a< strlen($str); $a++){
//             if($str[$a] == "*"){
//                 continue;
//             }
//             else{
//                 if($str[$a] <= $smallest){
//                     $smallest=$str[$a];
//                     $smallest_index=$a;
//                 }
//             }
//         }
//         $str[$smallest_index]="*";
//         $sorted_string[$i]=$smallest;
//         $smallest="z";
//     }
//     return $sorted_string;
// }
// echo sortt("abddfgyhta");
echo "<br>------------------------------ <br>";


// 5. Write a PHP function that checks whether a string is all lowercase.
echo "Question #5 : <br>";
function check_if_lowercase($str){
    echo "$str <br>";
    $status="";
    for($i=0; $i < strlen($str); $i++){
        if(ord($str[$i]) >= 97 && ord($str[$i]) <= 122 || ord($str[$i]) == 32){
            $status="the string you entered is all lowercase character";
            continue;
        }
        else{
            $status="the string is not all lowercase characters";
            break;
        }
    }
    return $status;
}
echo check_if_lowercase("dana samir toughoj");
echo "<br>------------------------------ <br>";



// 6. Write a PHP function that checks whether a passed string is a palindrome or
// not?
// A palindrome is a word, phrase, or sequence that reads the same backward as
// forward, e.g., madam or nurses run.
echo "Question #6 : <br>";
function check_for_palindrome($str){
    echo $reversed_string= reverse_string($str);echo "<br>";
    if($str == $reversed_string){
        return "The string you entered is palindrome";
    }
    else{
        return "The string you entered is not palindrome";
    }
}
echo check_for_palindrome("madam");
echo "<br>------------------------------ <br>";


// 7-Write a PHP program to find three numbers from an array such that the sum of
// three consecutive numbers equal to a given number.
// Input : (array(2, 7, 7, 1, 8, 2, 7, 8, 7), 16))
echo "Question #7 : <br>";
function sum_of_three($number){
    $numbers=[1,4,6,6,8,9,3,2,6];
    for($i=0; $i < count($numbers)-2;$i++){
        if(($numbers[$i] + $numbers[$i+1] + $numbers[$i+2]) == $number){
            echo "The sum of the three consecutive numbers (".$numbers[$i]." ".$numbers[$i+1]." ".$numbers[$i+2].") equals $number .<br>";
        }
    }
}
sum_of_three(11);
echo "------------------------------ <br>";



?>