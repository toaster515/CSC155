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
    if (isset($_POST['submit'])){
	if ($_POST['submit']=='Add to Cart'){
		if (isset($_POST['quant'])){
			$_SESSION['apples'] += intval($_POST['quant']);
		}
	} elseif ($_POST['submit']=='Remove'){
		$_SESSION['apples']=0;
	}
    }

    getstyle();
?>

</head> 
<body> 

<?php getheader(); ?>
<?php getnavbar(); ?> 
<h2>Apples</h2> 
<?php purchaseoptions(); ?>

<?php
if (isset($_SESSION['apples'])){
	echo "<p>";
	print_r($_SESSION['apples']);
	echo "  apples in the cart";	
}
?>

<?php getfooter(); ?>

</body>
</html>
