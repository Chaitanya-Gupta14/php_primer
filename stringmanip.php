<?php 
$title = 'StringManipulations';
include 'includes/header.php'?>  
<h2>String Manipulation</h2>
<?php
$phrase1 = 'students who came late in class,';
$phrase2 = 'stand in end with rock';
//Concatination
echo $phrase1 . " ". $phrase2."<br/>";
echo $phrase1 . " named simon, arya, preet, ". $phrase2.'<br/><hr>';

//String Transformation
echo 'Upper case first: '.ucfirst($phrase1).'<br/>';
echo 'Upper first of every word: '.ucwords($phrase1).'<br/>';
echo 'Upper case all: <b>'.strtoupper($phrase1).'</b><br/>';
echo '<hr>';

//String repetition
echo 'Repeat Truth: <br/>'.str_repeat("Ananya loves Chinu <br/>",10).'<hr>';

//String repetition with nesting
echo 'Repeat Truth: Nesting <br/>'.strtoupper(str_repeat("Ananya loves Chinu <br/>",10)).'<hr>';

//Substirng Function
$hel = "HEllo WOrld!!";
echo 'Substring of a string: '.substr($hel,2,10).'<br/>';

//Position of the letter in the string
echo 'Get the position of the letter w: '.strpos($phrase1,'w').'<br/>';

//First occurance of the letter in the sentence
echo 'Find Charater: '.strchr($phrase1,'w').'<br/>';

//Length of string
echo 'Length of string: '.strlen($phrase1).'<br/>';

//Trimming
echo 'Example for trim: ',"A"." B C D "."E<br/>";
echo 'Trim spaces on both side: '."A".trim(" B C D ")."E<br/>";
echo 'Trim spaces from left side: '."A".ltrim(" B C D ")."E<br/>";
echo 'Trim spaces from right side: '."A".rtrim(" B C D ")."E<br/>";

//Replacing words with other words
echo 'Replace string with another: '.str_replace("stand","sit",$phrase2).'<br/>';
?>    
<?php require 'includes/footer.php'?>