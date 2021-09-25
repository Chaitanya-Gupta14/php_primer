<?php 
$title = 'IfStatement';
include 'includes/header.php'?>
<h2>If Statement</h2>
  
    <?php
    //An if statement can carry out function based in the value of the variable.
      
    $grade = 80;
    if($grade >= 50){
        echo '<h3 style="color:green">You have PASSED</h3>';
    }
    else{
        echo '<h3 style="color:red">You have FAILED</h3>';
    }
    ?> 
<?php require 'includes/footer.php'?>