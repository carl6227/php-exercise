<html>
 <!-- 1. Create a simple HTML form and accept the user name and display the name through PHP echo statement. -->
My name is: <?php
if(isset($_GET['submit1'])){
    echo $_GET["name"];
}


?><br>
<br><br> 



<?php
// 2. Write a PHP program to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum. -->
if(isset($_GET['Fnum'])){

 $firstNumber=intval($_GET['Fnum']);
 $secondNumber=intval($_GET['Snum']);

 if($firstNumber==$secondNumber){
     echo "Answer: ". ($firstNumber+$secondNumber)*3 . "<br> ";
 }else{
     echo "Answer: ".  ($firstNumber + $secondNumber) ."<br><br> <br> <br> <br>  " ;

 }
}



// 3. Create a script to construct the following pattern, using a nested for loop.
3.;
for($i=1;$i<=5;$i++)
{
   for ($j=1;$j<=$i;$j++)
    {
	 echo "*";
	    if($j< $i)
		 {
		   echo "&nbsp ";
		 }
     }
 echo "<br>";
}
for ($i = 1; $i <= 5; $i++)
{
 
    for ($j = 1; $j <= 6 - $i; $j++)
    {
        echo '*';
        echo "&nbsp ";
    }
 
    echo "<br>";
}

echo '<br><br>';
// 4. Write a function to check whether a number is prime or not.
if(isset($_GET['inputNumber'])){
function isPrime($input){
    for ($i = 2; $i<$input; $i++) {  
      if ($input % $i == 0) {  
      return 0;

      }
}
return 1;
}


if (isPrime($_GET['inputNumber'])==1){

    echo "Input is a Prime number";
}else{

    echo "Input is not a Prime number";
}
;

}
echo '<br><br>';
// 5. Write a PHP function that checks whether a string is all lowercase.
if(isset($_GET['inputString'])){
function isLower($strInput){
      if( ctype_lower($strInput)==true){

        echo "String is in lowercase";
      }else{

      echo  "String is not in lowercase";
      }
       
}

isLower($_GET['inputString']);

}

echo '<br><br>';
// 6.Write a PHP function that checks whether a passed string is a palindrome
if(isset($_GET['strInput'])){
function isPalindrome($firstString){
    if($firstString==strrev($firstString)){
        echo "String is a Palindrome";
    }else{
        echo "String is not a Palindrome";
    }

}

isPalindrome($_GET['strInput']);
}

echo '<br><br>';

// 7. Create a simple 'birthday countdown' script, the script will count the number of days between current day and birthday. 
if(isset($_GET['inputBday'])){
function birthdayCountdown($Bday){
   echo 'Day/Days unitl your Birthday: ' . intval(strtotime($Bday)-strtotime(date('m/d/y')))/86400;
};
birthdayCountdown($_GET['inputBday']);

}
echo '<br><br>';
// 8. Write a PHP script to calculate the difference between two dates.
if(isset($_GET['fDay'])){
function subtractDAte($fDay,$sDay){
   echo 'Answer: ' . intval(strtotime($fDay)-strtotime($sDay))/86400;
};
subtractDate($_GET['fDay'],$_GET['sDay']);
}

echo '<br><br>';
// 9.Write a PHP function to convert Arabic Numbers to Roman Numerals.

if(isset($_GET['inputNum'])){
function numberToRoman($num)  
{ 
    $n = intval($num);
    $result = ''; 

    $romanWithValues = array(
        'M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 
        'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 
        'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1
    ); 
 
    foreach ($romanWithValues as $roman => $value)  
    {
        $matches = intval($n / $value); 
        $result .= str_repeat($roman, $matches); 
        $n = $n % $value; 
    } 

    echo $result; 
} 
 numberToRoman($_GET['inputNum']);
}
 echo '<br><br>';

// 10. Write a PHP program to sort a list of elements using Bubble sort

$myArr=array(4,5,7,8,9,2);
echo 'Original Array: 4,5,7,8,9,2 '.'<br>';
sort($myArr);
echo 'Sorted Array: ';
foreach($myArr as $Elem){
    echo $Elem;
}




?>

</html>