<?php
/* Write a PHP function called reverseWords that takes a sentence as input and returns the sentence with each word reversed.

The function signature should be:
*/

function reverseWords($input)
{
    //Change string to Array   
$newstr = str_split($input,1);
$secarr=[];                          
$length = count($newstr);
//reserve Array 
for($i=0;$i<$length;$i++){ 
    for($j=$length;$j>$i;$j--){
        $secarr[$j]=$newstr[$i];
    }
}




//Change array To string
$string = implode("", $secarr);
//Change array To String but this array continue Tow words 
$newstr1 = str_split($string,7);
// Assagin elments To veribale
$string1=$newstr1[0];
$string2=$newstr1[1];
// change string to array 
$string3=str_split($string1,1);
$length3=count($string3);
$string4=str_split($string2,1);
$length4=count($string4);

// For loop to reserve question mark to End
for($i=0;$i<$length3;$i++){
    if($string3[$i] =="!"){
        $string3[$i]="";
        $string3[$length3-1]="!";
        break;
    }
}
// For loop to reserve Quma mark to End
for($i=0;$i<$length4;$i++){
    if($string4[$i] ==","){
        $string4[$i]=" ";
        $string4[$length3]=", ";
        break;
    }
}
//reserve array to string
$string5 =implode("",$string3);
$string6 =implode("",$string4);
// sum tow varible togother
$string7=$string6."".$string5;
echo($string7);
}

/*
The reverseWords function should perform the following tasks:

Take a sentence as a parameter.
Reverse each word in the sentence while maintaining the order of the words.
Return the modified sentence with reversed words.
Example:
*/

$input = "Hello, World!";
$output = reverseWords($input);
echo $output;
// Output: olleH, dlroW!

