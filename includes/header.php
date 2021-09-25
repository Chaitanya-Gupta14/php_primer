<!-- This is a seperate only header file to include it to each of the php files at the begining using "include" command -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- This below is the Code for CSS from Bootstrap to enhance the look -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>PHP PRIMER - <?php echo $title; ?></title>
</head>
<body>
 <!--message for u love  -->
 <div class="container">
<h2>Click on the link to jump to the required page</h2>
<ul class="nav">
    <li class="nav-item"><a class="nav-link" href="index.php"><b><:Back:></b></a></li>    
    <li class="nav-item"><a class="nav-link" href='ifstatement.php'>If statements page</a></li>
    <li class="nav-item"><a class="nav-link" href='switchstatement.php'>Switch statements page</a></li>
    <li class="nav-item"><a class="nav-link" href='forloop.php'>For loop page</a></li>
    <li class="nav-item"><a class="nav-link" href='whiledowhile.php'>While/do While page</a></li>
    <li class="nav-item"><a class="nav-link" href='arrays.php'>Arrays page</a></li>
    <li class="nav-item"><a class="nav-link" href='stringmanip.php'>String Manipulation page</a></li>
    <li class="nav-item"><a class="nav-link" href='datetimemanip.php'>Date and Time Manipulation page</a></li>
    <li class="nav-item"><a class="nav-link" href='functions.php'>Functions page</a></li>
   </ul>