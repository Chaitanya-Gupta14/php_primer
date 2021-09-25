<?php 
$title = 'Date and Time';
include 'includes/header.php'?>
<h2>Date and Time Manipulations</h2>
<?php
//Same date as of the machine.
    $datenow = getdate();
    print "Today's Date : <br/>";
    echo $datenow['mday'].'<br/>';//for day from date
    echo $datenow['mon'].'<br/>';//for the month
    echo $datenow['year'].'<br/>';
    echo 'Todays Date is: '.$datenow['mday'].'/'.$datenow['mon'].'/'.$datenow['year'].'<br/>';

    //Diff format for printing date
    print date("d/m/y G.i:s<br>",time()).'<br/>'; //17/09/21 15.20:42
    print "Today is: <br/>"; 
    print date("j  F Y, \i\\t\'\\s g.i a",time()).'<br/>'; //17 September 2021, at 3.20 pm
?>  
<?php require 'includes/footer.php'?>