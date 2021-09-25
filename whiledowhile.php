<?php 
$title = 'While Do While';
include 'includes/header.php'
?>
<h2>While/do while</h2>
<h2>While loop</h2>
<?php
$grade = 'A';
//While loop
while($grade < 'F'){
    echo "<p>$grade is smaller than F</p>";
    $grade++;
}
?>
<h2>Do While loop</h2>
<?php
//Do-While loop
do{
    echo "<p><b>$grade</b> is equal to F</p>";
    $grade++;
}while($grade < 'G');
?>

<?php require 'includes/footer.php'?>