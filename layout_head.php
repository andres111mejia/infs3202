<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<title>Home</title>
        <link rel="icon" href="images/gg.ico" type="images/x-icon">

    <!-- Bootstrap CSS -->
    <link href="libs/css/bootstrap/dist/css/bootstrap.css" rel="stylesheet" media="screen"> 
 
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 
        <link rel="stylesheet" href="style/layout.css" media="screen">
		
	</head>
<body>
<!--==============================header=================================-->
    
   
        <div class="container">
            <div class="clearfix">
            <div class="column menu">
                
                <h1><a href="home.php" onclick="goToByScroll('page1'); return false;">
                    <img src="images/logo.png" alt="Gaming Gadgets"></a>
                </h1>
            </div>        
            <div class="column content">
                <nav class="">
                    <ul id="nav">
                        <li><a href="#">Store Locator</a></li>
                        <li><a href="#">Contact</a></li>
                        <li>
							<a href="cart.php">
								<?php
								// count products in cart
								$cart_item->user_id=1; // default to user with ID "1" for now
								$cart_count=$cart_item->count();
								?>
								Cart <span class="badge" id="comparison-count"><?php echo $cart_count; ?></span>
							</a>
						</li>
                        <li><a href="../login/index.php">Login</a></li>
                    </ul>
                </nav>
                    <form role="search" method="get" action="http://chusmix.com/">
                        <input class="search" placeholder="Search..." type="text" value="" name="s" id="s">
                        <input type="submit" id="searchsubmit" value="Search"/>
                        
                    </form>
            </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    <div class="bar">
        <div class="container2">
            <div class="dropdown">
                <button class="dropbtn">Dropdown</button>
                <div class="dropdown-content">
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
                </div>
            </div> 
            <div class="dropdown">
                <button class="dropbtn">Dropdown</button>
                <div class="dropdown-content">
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
                </div>
            </div> 
            <div class="dropdown">
                <button class="dropbtn">Dropdown</button>
                <div class="dropdown-content">
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
                </div>
            </div> 
            <div class="dropdown">
                <button class="dropbtn">Dropdown</button>
                <div class="dropdown-content">
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
                </div>
            </div> 
        </div>
    </div>
 
    
    </div>
    <br>
    <br>
	
	<div class="container-fluid">    
        <div class="row">
 
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo $page_title ?></h1>
            </div>
        </div>