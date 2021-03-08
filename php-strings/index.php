<?php 

// php string 
// 1. Write a PHP script to : 
// a) transform a string all uppercase letters.
// b) transform a string all lowercase letters. 
// c) make a string's first character uppercase. 
// d) make a string's first character of all the words uppercase.

$str_original = "orange coding academy";
$str_upper = strtoupper($str_original);
$str_lower =strtolower($str_original);
$str_first_capital =ucfirst($str_original);
$str_all_first_capital =ucwords($str_original);

echo "*question #1 solution:"."<br>";
echo "- original string (".$str_original." )<br>";
echo "a)".$str_upper."<br>";
echo "b)".$str_lower."<br>";
echo "c)".$str_first_capital."<br>";
echo "d)".$str_all_first_capital."<br>";

echo "----------------------------------- <br>";

// 2.Write a PHP script to split the following string. Sample string : '082307' Expected Output : 08:23:07

$str_splited=substr(chunk_split($str_original, 2, ':'), 0, -1);
echo "*question #2 solution:"."<br>";
echo "- original string (".$str_original." )<br>";
echo $str_splited."<br>";


echo "----------------------------------- <br>";
// 3.Write a PHP script to check whether a string contains a specific string? 
// Sample string : 'The quick brown fox jumps over the lazy dog.' 
// Check whether the said string contains the string 'jumps'.


echo "*question #3 solution:"."<br>";
echo "- original string (".$str_original." )<br>";
$word="orange";
$str_find_word=strpos($str_original, $word);
if ($str_find_word !== false) {
    echo "The word '$word' was found <br>";
} else {
    echo "The word '$word' was not found <br>";
}


echo "----------------------------------- <br>";
// 4. Write a PHP script to extract the file name from the following string. 
// Sample String : 'www.example.com/public_html/index.php' Expected Output : 'index.php'
 $url="http://localhost/php-strings/index.php";
 $fileName=substr(strrchr($url,"/"),1);
 
echo "*question #4 solution:"."<br>";
echo "- original url (".$url." )<br>";
echo "file name is :".$fileName."<br>";


echo "----------------------------------- <br>";
// 5.Write a PHP script to extract the user name from the following email ID. 
// Sample String : 'Orange@example.com' Expected Output : 'Orange'

$email="Dana@gmail.com";
$username=strstr($email,"@",true);

echo "*question #5 solution:"."<br>";
echo "- Email : (".$email." )<br>";
echo "user name is :".$username."<br>";

echo "----------------------------------- <br>";
// 6.Write a PHP script to get the last three characters of a string. 
// Sample String : 'Orange@example.com' Expected Output : 'com'

$last_three_characters=substr(strrchr($email,"."),-3);

echo "*question #6 solution:"."<br>";
echo "- Email : (".$email." )<br>";
echo "last three characters :".$last_three_characters."<br>";


echo "----------------------------------- <br>";


// 7.Write a PHP script to generate simple random passwords [do not use rand() function] from a given string. S
// ample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz' 
// Note : Password length may be 6, 7, 8 etc. Expected OutPut: 254ABCc


function generateRandom($len){
    $str_original="orange coding academy";
    $shuffled = str_shuffle($str_original);
    $result= substr($shuffled, 0, $len);
    return $result;
};

echo "*question #7 solution:"."<br>";
echo "- original string  : (".$str_original." )<br>";
echo "Random password :".generateRandom(7)."<br>";

echo "----------------------------------- <br>";
// 8.Write a PHP script to replace the first 'the' of the following string with 'That'. 
// Sample date : 'the quick brown fox jumps over the lazy dog.' 
// Expected Result : That quick brown fox jumps over the lazy dog.

$str2_original="the quick brown fox jumps over the lazy dog.";
$str_replaced=preg_replace("/the/","That",$str2_original,1);
echo "*question #8 solution:"."<br>";
echo "-original string  : (".$str_original." )<br>";
echo "updated string  :".$str_replaced."<br>";


echo "----------------------------------- <br>";
// 9.Write a PHP script to find the first character that is different between two strings.
//  String1 : 'football' String2 : 'footboll' 
//  Expected Result : First difference between two strings at position 5: "a" vs "o"
$compaired_str1="football";
$compaired_str2="footboll";
$pos = strspn($compaired_str1 ^ $compaired_str2, "\0");
echo "*question #9 solution:"."<br>";
echo "-string 1:".$compaired_str1."<br>";
echo "-string 2:".$compaired_str2."<br>";
printf(
    'First difference at position %d: "%s" vs "%s" <br>',
    $pos, $compaired_str1[$pos], $compaired_str2[$pos]
);




echo "----------------------------------- <br>";
// 10.Write a PHP script to put a string in an array. 
// Sample strings : "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky."; 
// Expected Result (using var_dump()) : array(4) { [0]=> string(30) "Twinkle, twinkle, little star," [1]=> string(26) "How I wonder what you are." [2]=> string(27) "Up above the world so high," [3]=> string(26) "Like a diamond in the sky." }

$orginal_song="Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$seperated_song=explode("\n",$orginal_song);

echo "*question #10 solution:"."<br>";
echo "-original song  : (".$orginal_song." )<br>";
echo " seperated song :";
var_dump($seperated_song);
echo "<br>";


echo "----------------------------------- <br>";
// 11.Write a PHP script to print the next character of a specific character. 
// Sample character : 'a' Expected Output : 'b' 
// Sample character : 'z' Expected Output : 'a'

function nextcharacter($character){
    $character_ascii=ord($character);
    echo "-current letter  : ".$character."<br>";
    if($character_ascii == 122 ){
        return "next charachter : a";
    } else if ($character_ascii == 90)
    {
        return "next charachter : A";
    }
    else{
        $next_character_ascii=$character_ascii+1;
        $next_character=chr($next_character_ascii);
        return "next charachter : ".$next_character;
    }

}

echo "*question #11 solution:"."<br>";
echo nextcharacter("z")."<br>";


echo "----------------------------------- <br>";
// 12.Write a PHP script to remove a part of a string from the beginning. 
// Sample string : 'orange@example.com' 
// Expected Output : 'example.com'

$email_sliced=substr($email,strlen('Dana@'));
echo "*question #12 solution:"."<br>";
echo "- original email  : (".$email." )<br>";
echo " first part removed :".$email_sliced."<br>";


echo "----------------------------------- <br>";
// 13.Write a PHP script to insert a string at the specified position in a given string. 
// Original String : 'The brown fox' 
// Insert 'quick' between 'The' and 'brown'. 
// Expected Output : 'The quick brown fox'

$textTest="The brown fox";
$textAdd=" quick";
$newText=substr_replace($textTest,$textAdd,3,0);

echo "*question #13 solution:"."<br>";
echo "-original string  : (".$textTest." )<br>";
echo "Quick word added:".$newText."<br>";



echo "----------------------------------- <br>";
// 14.Write a PHP script to get the first word of a sentence. 
// Original String : 'The quick brown fox' 
// Expected Output : 'The'

$pos2=strpos($str_original," ");
$str_first_word_removed=substr($str_original,$pos2);

echo "*question #14 solution:"."<br>";
echo "-original string  : (".$str_original." )<br>";
echo " first word removed :".$str_first_word_removed."<br>";


echo "----------------------------------- <br>";
// 15.Write a PHP script to remove all leading zeroes from a string. 
// Original String : '000547023.24'
// Expected Output : '547023.24'
$number="000547023.24";
$zeros_removed=ltrim($number,"0");


echo "*question #15 solution:"."<br>";
echo "-original number  : (".$number." )<br>";
echo "leading zeros removed : ".$zeros_removed."<br>";


echo "----------------------------------- <br>";
// 16.Write a PHP script to remove part of a string. 
// Original String : 'The quick brown fox jumps over the lazy dog' 
// Remove 'fox' from the above string. 
// Expected Output : 'The quick brown jumps over the lazy dog'
$str_updated=str_replace("coding"," ",$str_original);

echo "*question #16 solution:"."<br>";
echo "-original string  : (".$str_original." )<br>";
echo "updated string : ".$str_updated."<br>";



echo "----------------------------------- <br>";
//17. Write a PHP script to remove trailing slash from a string. 
// Original String : 'The quick brown fox jumps over the lazy dog///' 
// Expected Output : 'The quick brown fox jumps over the lazy dog'
$str3_original="The quick brown fox jumps over the lazy dog///";
$slash_removed=rtrim($str3_original,"/");

echo "*question #17 solution:"."<br>";
echo "-original string  : (".$str3_original." )<br>";
echo "trailing slash removed : ".$slash_removed."<br>";


echo "----------------------------------- <br>";
// 18.Write a PHP script to get the characters after the last '/' in an url. 
// Sample URL : 'http://www.example.com/5478631' 
// Expected Output : '5478631'
$url2="http://www.example.com/5478631";
$fileName2=substr(strrchr($url2,"/"),1);

echo "*question #18 solution:"."<br>";
echo "- original url (".$url2." )<br>";
echo "file name is :".$fileName2."<br>";

echo "----------------------------------- <br>";
// 19.Write a PHP script to replace Special characters from the following string. 
// Sample String : '"\1+2/32:2-3/43' 
// Expected Output : '1 2 3 2 2 3 4 3'
$special_charcters=array('"','\\','+',':','-','/');
$str4_original='"\1+2/32:2-3/43';
$special_characters_removed=str_replace($special_charcters," ",$str4_original);

echo "*question #19 solution:"."<br>";
echo "- original string (".$str4_original." )<br>";
echo "Special characters removed :".$special_characters_removed."<br>";


echo "----------------------------------- <br>";
// 20.Write a PHP script to select first 5 words from the following string.
//  Sample String : 'The quick brown fox jumps over the lazy dog' 
//  Expected Output : 'The quick brown fox jumps'
$str5_original="The quick brown fox jumps over the lazy dog";
$str5_seperated=explode(" ",$str5_original);
$array_sliced=array_splice($str5_seperated,0,5);
$str_updated2=implode($array_sliced," ");

echo "*question #20 solution:"."<br>";
echo "- original string (".$str5_original." )<br>";
echo "first 5 words :".$str_updated2."<br>";


echo "----------------------------------- <br>";
// 21.Write a PHP script to remove comma(s) from the following numeric string. 
// Sample String : '2,543.12' 
// Expected Output : 2543.12;
$str6_original='2,543.12';
$commas_removed=str_replace(",","",$str6_original);

echo "*question #21 solution:"."<br>";
echo "- original string (".$str6_original." )<br>";
echo "Commas removed :".$commas_removed."<br>";


echo "----------------------------------- <br>";
// Write a PHP script to print letters from 'a' to 'z';
echo "*question #22 solution:"."<br>";
echo "letters from 'a' to 'z' : <br>";

for($i=97;$i<=122;$i++){
    echo " ".chr($i);
}


?>