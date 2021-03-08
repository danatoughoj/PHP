<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
        margin:20px;
    }
    table,th,td{
        border: 1px solid black;
    }
    table{
        width:270px;height:270px;margin:20px;
    }
    </style>
</head>
</html>
<?php
// 1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. 
// There will be no hyphen(-) at the starting and ending position.
// Expected Output: 1-2-3-4-5-6-7-8-9-10
echo "*Question #1 : <br>";
for($num=1;$num<=10;$num++){
    echo $num;
    if($num ==10){
        break;
    }
    echo "-";
}
echo "<br>--------------------------- <br>";


// 2. Create a script using a for loop to add all the integers between 0 and 30 and
// display the total.
// Expected Output = total as a number
$total_sum=0;
for($num=1;$num<30;$num++){
    $total_sum+=$num;
}
echo "*Question #2 : <br>";
echo "Total sum is : ".$total_sum;
echo "<br>--------------------------- <br>";


// 3c. Create a script to construct the following pattern, using nested for loop.
// A A A A A
// A A A B B
// A A C C C
// A D D D D
// E E E E E
echo "*Question #3c : <br>";
$counter=0;
for($letter=65;$letter <= 69;$letter++){
    for($i=1;$i<=5;$i++){
        if($i >= 5-$counter){
            echo chr($letter)." ";
        }
        else{
            echo "A "; 
        }
    }
    $counter++;
    echo "<br>";
}
echo "--------------------------- <br>";


// 3b. Create a script to construct the following pattern, using nested for loop.
// 1 1 1 1 1
// 1 1 1 2 2
// 1 1 3 3 3
// 1 4 4 4 4
// 5 5 5 5 5
echo "*Question #3b : <br>";
$counter=0;
for($number=1;$number <= 5;$number++){
    for($i=1;$i<=5;$i++){
        if($i >= 5-$counter){
            echo $number."  ";
        }
        else{
            echo "1  ";
        }
    }
    $counter++;
    echo "<br>";
}
echo "--------------------------- <br>";


// 4. Create a script to construct the following pattern, using a nested for loop.
// 1 0 0 0 0
// 0 2 0 0 0
// 0 0 3 0 0
// 0 0 0 4 0
// 0 0 0 0 5
echo "*Question #4 : <br>";
$counter2=1;
for($number=1;$number <= 5;$number++){
    for($i=1;$i<=5;$i++){
        if($i == $counter2){
            echo $number."  ";
        }
        else{
            echo "0  ";
        }
    }
    $counter2++;
    echo "<br>";
}
echo "--------------------------- <br>";


// 5. Write a program to calculate and print the factorial of a number using a for
// loop. The factorial of a number is the product of all integers up to and including
// that number, so the factorial of 5 is 5*4*3*2*1= 120.
echo "*Question #5 : <br>";

function calculate_factorial($number){
    $factorial=1;
    $factorial_temp=1;
    for($i=1;$i < $number;$i++){
        $factorial_temp=$factorial_temp*$i;
    }
    $factorial=$factorial_temp*$number;
    return "The Factorial of $number = $factorial";
}
echo calculate_factorial(6);
echo "<br>--------------------------- <br>";


// 6. Write a program to calculate and print the Fibonacci sequence using a for loop.
// Fibonacci is a series of numbers where a number is the sum of previous two
// numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and
// so on.
echo "*Question #6 : <br> The Fibonacci sequence : ";
$number1=0;
$number2=1;
$result=0;
echo "0 ";
while($result <=100){
    $result=$number1+$number2;
    echo $result." ";
    $number1=$number2;
    $number2=$result;
}
echo "<br>--------------------------- <br>";


// 7. Write a program which will count the "c" characters in the text
// "OrangeAcademy".
$str="cOrangeAccademyc";
$counter3=0;
for($i=0;$i < strlen($str);$i++){
    if($str[$i] == "c"){
        $counter3++;
    }
}
echo "*Question #7 : <br>";
echo "there are ($counter3) c characters in the string";
echo "<br>--------------------------- <br>";


// 8. Write a PHP script that creates the following table using for loops. Add
// cellpadding="3px" and cellspacing="0px" to the table tag.
// 1 * 1 = 1|1 * 2 = 2 |1 * 3 = 3 |1 * 4 = 4 |1 * 5 = 5
// 2 * 1 = 2|2 * 2 = 4 |2 * 3 = 6 |2 * 4 = 8 |2 * 5 = 10
// 3 * 1 = 3|3 * 2 = 6 |3 * 3 = 9 |3 * 4 = 12|3 * 5 = 15
// 4 * 1 = 4|4 * 2 = 8 |4 * 3 = 12|4 * 4 = 16|4 * 5 = 20
// 5 * 1 = 5|5 * 2 = 10|5 * 3 = 15|5 * 4 = 20|5 * 5 = 25
// 6 * 1 = 6|6 * 2 = 12|6 * 3 = 18|6 * 4 = 24|6 * 5 = 30
echo "*Question #8 : <br>";
echo "<table style='width:450px'>";
    for($number1=1;$number1 <= 5;$number1++){
        echo"<tr>";
        for($number2=1;$number2 <= 6;$number2++){
            $result=$number1*$number2;
            echo "<td> $number1 * $number2 = $result </td>";
        }
        echo "</tr>";
    }
echo "</table>";
echo "<br>--------------------------- <br>";



// 9. Write a PHP script using nested for loop that creates a chess board as shown
// below.
// Use table width="270px" and take 30px as cell height and width.
echo "*Question #9 : <br>";
echo "<table>";
    for($row=1;$row <= 8;$row++){
        echo "<tr>";
        for($cell=1; $cell <= 8;$cell++){
            if($row % 2 == 1){
                if($cell % 2 == 1){
                    echo "<td style='background-color:black'></td>";
                }
                elseif($cell % 2 == 0){
                    echo "<td style='background-color:white'></td>";
                }
            }
            else{
                if($cell % 2 == 1){
                    echo "<td style='background-color:white'></td>";
                }
                elseif($cell % 2 == 0){
                    echo "<td style='background-color:black'></td>";
                }
            }
        }
        echo "</tr>";
    }
echo "</table>";
echo "<br>--------------------------- <br>";


// 10. Write a PHP script that creates the following table (use for loops).
echo "*Question #10 : <br>";
echo "<table>";
    for($row=1;$row <= 10;$row++){
        echo"<tr>";
        for($cell=1;$cell <= 10;$cell++){
            $result=$row*$cell;
            echo "<td>$result</td>";
        }
        echo "</tr>";
    }
echo "</table>";
echo "<br>--------------------------- <br>";




// 11. Write a PHP program which iterates the integers from 1 to 50. For multiples of
// three print "Fizz" instead of the number and for the multiples of five print "Buzz".
// For numbers which are multiples of both three and five print "FizzBuzz"
echo "*Question #11 : <br>";
for($i=1; $i <= 50;$i++){
    if($i % 3 == 0 && $i % 5 == 0){
        echo "FizzBuzz <br>";
    }
    elseif($i % 5 == 0){
        echo "Buzz <br>";
    }
    elseif($i % 3 == 0){
        echo "Fizz <br>";
    }
}
echo "<br>--------------------------- <br>";


// 12. Write a PHP program to generate and display the first n lines of a Floyd
// triangle. (use n=5 and n=11 rows).
// According to Wikipedia Floyd's triangle is a right-angled triangular array of natural
// numbers, used in computer science education. It is named after Robert Floyd. It
// is defined by filling the rows of the triangle with consecutive numbers, starting
// with a 1 in the top left corner:
// Sample output for n = 5 :
// 1
// 2 3
// 4 5 6
// 7 8 9 10
// 11 12 13 14 15
echo "*Question #12 : <br>";
function floyed_triangle($n){
    $number3=1;
    for($i=1;$i <= $n ;$i++){
        for($a=1;$a <= $i; $a++){
            echo $number3." ";
            $number3++;
        }
        echo "<br>";
    }
}
floyed_triangle(11);
echo "--------------------------- <br>";



// 13. Write a PHP program to print alphabet pattern 'A'.
// Expected Output:
//     *
//   *   *
//  *  *  *
// *       *
echo "*Question #13 : <br>";
for ($row = 0; $row <= 10; $row++) {
    for ($column = 0; $column <= 10; $column++) {
        if ((($column == 1 or $column == 10) and $row != 0) or (($row == 0 or $row == 5) and ($column > 1 and $column < 10))) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>"; 
}
echo "<br>--------------------------- <br>";


// 14. Write a PHP program to print alphabet pattern 'B'.
// Expected Output:
// ****
// * *
// * *
// ****
// * *
// * *
// ****
echo "*Question #14 : <br>";
for ($row = 0; $row < 11; $row++) {
    for ($col = 0; $col <= 11; $col++) {
        if ($col == 1 or (($row == 0 or $row == 5 or $row == 10) and ($col < 10 and $col > 1)) or ($col == 10 and ($row != 0 and $row != 5 and $row != 10))) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
echo "<br>--------------------------- <br>";


// 15. Write a PHP program to print alphabet pattern 'C'.
// Expected Output:
// ***
// * *
// *
// *
// *
// * *
// ***
echo "*Question #15 : <br>";
for ($row = 0; $row < 11; $row++) {
    for ($col = 0; $col <= 11; $col++) {
        if (($col == 1 and ($row != 0 and $row != 10)) or (($row == 0 or $row == 10) and ($col > 1 and $col < 9)) or ($col == 9 and ($row == 1 or $row == 9))) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
echo "<br>--------------------------- <br>";


// 16.Write a PHP program to print alphabet pattern.
// Expected Output:
//     A
//    A B
//   A B C
//  A B C D
// A B C D E
//  A B C D
//   A B C
//    A B
//     A

echo "*Question #16 : <br>";
function drawDiamond($a) {
    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $count= 0;
    echo "<pre>";
    for ($i= 1;$i<=($a/2);$i++) {
      for ($s=($a/2); $s>=$i; $s--) {
       print(" ");
      }
      for ($j= 1; $j<(2*$i); $j++) {
       print("$str[$count]");
      }
      $count++;
      print ("\n");
     }
    for ($p=1;$p<=$a+1;$p++) {
     print("$str[$count]");
     $count++;
    }
    print("\n");
    $h=1;
    for ($d=1;$d<=($a/2);$d++) {
     for ($e=1;$e<=$d;$e++) {
      print(" ");
     }
     $count--;
     for ($f=($a-$h);$f>=1;$f--) {
      print("$str[$count]");
     }
     $h=$h+2;
     print("\n");
    }
    echo "</pre>";
   }
drawDiamond(10);
echo "<br>--------------------------- <br>";






?>