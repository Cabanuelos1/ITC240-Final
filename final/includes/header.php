<?php include 'config.php' ; ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<title><?=$title?></title>

<link href="final-css/stylesheet.css" type="text/css" rel="stylesheet" />

<!--Remy Sharp Shim -->
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->
</head>

<body>

<div id="wrapper">

<header>
<a href="index.php"> 
<img id="logo" src="final-images/logo.jpeg" alt="logo">
</a>
<h1 id="header-title">
Body Like Zeus
</h1>

</header>


<nav>
<div id="navigation">
<ul id="navigation-list">


 <li id="navi"><?=makeLinks($nav1)?></li>
 
</ul>
</div>
</nav>

<div id="pic">

<img src="final-images/austin.jpeg" alt="weights" >

</div>