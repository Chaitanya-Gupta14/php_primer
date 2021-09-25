<?php 
$title = 'ForLoop';
include 'includes/header.php'?>
<h2>For Loops</h2>    
<?php
for($count = 0;$count<10;$count++){
    echo "<br/> $count";
}
?>
<?php require 'includes/footer.php'?>