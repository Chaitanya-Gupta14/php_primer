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
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CAAG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav">
    <li class="nav-item"><a class="nav-link" href="index.php"><b>Home</b></a></li>    
    <li class="nav-item"><a class="nav-link" href='ifstatement.php'>If statements page</a></li>
    <li class="nav-item"><a class="nav-link" href='switchstatement.php'>Switch statements page</a></li>
    <li class="nav-item"><a class="nav-link" href='forloop.php'>For loop page</a></li>
    <li class="nav-item"><a class="nav-link" href='whiledowhile.php'>While/do While page</a></li>
    <li class="nav-item"><a class="nav-link" href='arrays.php'>Arrays page</a></li>
    <li class="nav-item"><a class="nav-link" href='stringmanip.php'>String Manipulation page</a></li>
    <li class="nav-item"><a class="nav-link" href='datetimemanip.php'>Date and Time Manipulation page</a></li>
    <li class="nav-item"><a class="nav-link" href='functions.php'>Functions page</a></li>
   </ul>
   </div>
  </div>
</nav> 
<div class="container">