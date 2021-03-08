<?php  
// 1- Write php script to calculate Electricity bill 
// Rule
// ● For first 50 units – Rs. 2.50/unit
// ● For next 100 units – Rs. 5.00/unit
// ● For next 100 units – Rs. 6.20/unit
// ● For units above 250 – Rs. 7.50/unit 

$electricity_bill=0;
$units=120;
if($units >0 && $units <=50){
    $electricity_bill=$units*2.50;
}
elseif($units >50 && $units <= 150){
    $electricity_bill=($units-50)*5.00;
    $electricity_bill+=50*2.50;
}
elseif($units >150 && $units <=250){
    $electricity_bill=($units-150)*6.20;
    $electricity_bill+=50*2.50;
    $electricity_bill+=100*5.00;
}
elseif( $units >250){
    $electricity_bill=$units*7.50;
}

echo "*Question #1 : <br>";
echo "Elictricity bill : ".$electricity_bill."<br>";
echo "-------------------------------------<br>";

// 2- Write php script to make a calculator
// Operations:
// ● Addition
// ● Subtraction
// ● Multiplication
// ● Division 

$Number1=2;
$Number2=4;
$operation="+";

echo "*Question #2 : <br>";
if($operation == "+"){
    echo $Number1."+".$Number2."= ";
    echo $Number1+$Number2;
    echo "<br>";
}
elseif($operation == "-"){
    echo $Number1."-".$Number2."= ";
    echo $Number1-$Number2;
    echo "<br>";
}
elseif($operation == "*"){
    echo $Number1."*".$Number2."= ";
    echo $Number1*$Number2;
    echo "<br>";
}
elseif($operation == "/"){
    echo $Number1."/".$Number2."= ";
    echo $Number1/$Number2;
    echo "<br>";
}
echo "-------------------------------------<br>";


// 3-Write php script to check if a person is eligible to vote
// Rule
// ● Minimum age required for voting is 18.
// ● You can use PHP Functions.
// ● You can use Decision Making Statements.

function is_elgibile($age){
    if($age>=18){
        return "you are eligible to vote!";
    }
    else{
        return "sorry, you are not eligible to vote.";
    }
}
echo "*Question #3 : <br>";
echo is_elgibile(18)."<br>";
echo "-------------------------------------<br>";


// 4-Write php script to check whether a number is positive,
// negative or zero
// Rule
// ● You can use if else conditions.
// ● You should use appropriate PHP Operators.
// ● Also check if it is not a numeric value.


echo "*Question #4 : <br>";
$number=0;

if(is_int($number)){
    echo "you enterd a valid number <br>";
    if($number < 0){
        echo "the number you enterd is negative <br>";
    }
    elseif($number > 0){
        echo "the number you enterd is positive <br>";
    }
    else{
        echo "the number you enterd is zero <br>";
    }
}
echo "-------------------------------------<br>";


?>



