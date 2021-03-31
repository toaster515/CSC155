<!-- I honor Parkland's core values by affirming that I have followed all academic integrity guidelines for 
this work.
Tony Petrotte CSC155-201F_2021SP -->



<html> 
<head> 
<?php
    session_start();
    require('functionset.php');
    logcheck();

    if (!isset($_SESSION['apples'])){
	$_SESSION['apples']=0;
    }
    if (!isset($_SESSION['oranges'])){
	$_SESSION['oranges']=0;
    }
    if (!isset($_SESSION['bananas'])){
	$_SESSION['bananas']=0;
    }
    if (!isset($_SESSION['mangos'])){
	$_SESSION['mangos']=0;
    }
	
    getstyle();
?>

</head> 
<body> 

<?php getheader(); ?>
<?php getnavbar(); ?> 
<h2>Checkout</h2> 
<br>
<h4>Your Fruit Basket:</h4>
<hr>
<?php
	echo "<p>";
	print_r($_SESSION['apples']);
	echo "  apples in the basket<br>";
	print_r($_SESSION['oranges']);
	echo "   oranges in the basket<br>";
	print_r($_SESSION['bananas']);
	echo "  bananas in the basket<br>";
	print_r($_SESSION['mangos']);
	echo "   mangos in the basket<br>";	
?>

<?php getfooter(); ?>

</body>
</html>
