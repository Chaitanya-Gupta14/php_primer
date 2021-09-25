<?php 
$title = 'SwitchStatement';
include 'includes/header.php'?>
<h2>Switch statements</h2>
    <?php
   
   $grade = 'd';
   switch($grade){
    case 'A':
        echo '<h3 style="color:green">You have PASSED!!</h3>';
        break;
    case 'B':
        echo '<h3 style="color:orange">You did WELL!!</h3>';
        break;
    DEFAULT:  
        echo '<h3 style="color:red">You Failed!!</h3>';
   }
   
    ?>  
<?php require 'includes/footer.php'?>