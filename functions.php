<?php 
$title = 'Functions';
include 'includes/header.php'?>
 <h2>Functions</h2>
<?php
    //Callign a Function on the top or before everything else
    function heelobro(){
        echo 'You finally found the home button <br/>';
    }
    
    //Callign a Function on the top or before everything else
    //Here the variables are only available for the function 
    //after that they are not declared
    function adding($a,$b){
        $c = $a + $b;
        return $c;
    }

    //Changing the value of the function by using its location or say address
    function change(&$i){
        $i = 10;
        return $i;
    }

    //calling a function using for loop
    $i = 0;
    for(;$i < 6;$i++){
        if($i == 3){
            heelobro();
            break;
        }//i=3
        else 
            echo "you are a moron<br/>";
}
    echo adding(2,3).'<br/>';

    echo change($i).'<br/>';
?>
<?php require 'includes/footer.php'?>