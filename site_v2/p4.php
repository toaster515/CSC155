<!-- I honor Parkland's core values by affirming that I have followed all academic integrity guidelines for 
this work.
Tony Petrotte CSC155-201F_2021SP -->



<html> 
<head> 
<?php
    session_start();
    require('library/functionset.php');
    logcheck();

    if (!isset($_SESSION['mangos'])){
	$_SESSION['mangos']=0;
    }
    if (isset($_POST['submit'])){
	if ($_POST['submit']=='Add to Cart'){
		if (isset($_POST['quant'])){
			$_SESSION['mangos'] += intval($_POST['quant']);
		}
	} elseif ($_POST['submit']=='Remove'){
		$_SESSION['mangos']=0;
	}
    }

    getstyle();
?>

</head> 
<body> 

<?php getheader(); ?>
<?php getnavbar(); ?> 
<h2>Mangos</h2> 

<div class="fruit" id="mango">
<div class="fruit-box">
<?php purchaseoptions(); ?>
<?php
if (isset($_SESSION['mangos'])){
	echo "<p>";
	print_r($_SESSION['mangos']);
	echo "  mangos in the cart";	
}
?>
</div>
</div>

<div class="footer">
<?php getfooter(); ?>
</div>
</body>
</html>
