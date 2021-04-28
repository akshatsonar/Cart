<?php
	
include_once "php/functions.php";

?>

<div class="nav">
            <nav class="navi">
                <ul class="navii">
                    <li><a href="index.php" class="nav1">Home</a></li>
                    <li><a href="store.php" class="nav1">Store</a></li>
                    <li><a href="cart.php" class="nav1">
                    	<span>Cart</span>
                    	<span> <?= makeCartBadge(); ?> </span>
                    </a></li>
                </ul>
            </nav> 
</div>