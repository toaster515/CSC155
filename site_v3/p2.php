<!-- I honor Parkland's core values by affirming that I have followed all academic integrity guidelines for 
this work.
Tony Petrotte CSC155-201F_2021SP -->



<html> 
<head> 
<?php
    session_start();
    require('library/functionset.php');
    logcheck();

    if (!isset($_SESSION['oranges'])){
	$_SESSION['oranges']=0;
    }
    if (isset($_POST['submit'])){
	if ($_POST['submit']=='Add to Cart'){
		if (isset($_POST['quant'])){
			$_SESSION['oranges'] += intval($_POST['quant']);
		}
	} elseif ($_POST['submit']=='Remove'){
		$_SESSION['oranges']=0;
	}
    }

    getstyle();
?>

</head> 
<body> 

<?php getheader(); ?>
<?php getnavbar($pdo); ?> 
<h2>Oranges</h2> 

<div class="fruit" id="orange">
<div class="fruit-box">
<?php purchaseoptions(); ?>
<?php
if (isset($_SESSION['oranges'])){
	echo "<p>";
	print_r($_SESSION['oranges']);
	echo "  oranges in the cart";	
}
?>
</div>
</div>

<div class="footer">
<?php getfooter(); ?>
</div>
</body>
</html>
