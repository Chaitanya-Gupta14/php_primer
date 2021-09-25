<?php 
$title = 'ARRAY'; 
include 'includes/header.php'
?>
<h2>Arrays</h2>
<?php
//homogeneous array - same datatype items
$numbers = array(1,2,8,6,4,9,4,6,2,6,6,46,3,3);
$size = count($numbers);
$i = 0;
do{
echo "<p>This is the number ---> $numbers[$i], at the place $i</p>";
$i++;
}while($i < $size); 
?>
<?php require 'includes/footer.php'?>