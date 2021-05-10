<!-- I honor Parkland's core values by affirming that I have followed all academic integrity guidelines for 
this work.
Tony Petrotte CSC155-201F_2021SP -->

<html> 
<head> 
<?php
    session_start();
    require('library/functionset.php');
    logcheck();

	function clearcart(){
		$_SESSION['apples']=0;
		$_SESSION['oranges']=0;
		$_SESSION['bananas']=0;
		$_SESSION['mangos']=0;
	}
	function fruitcheck(){
		if ($_SESSION['apples']==0 && $_SESSION['oranges']==0 && $_SESSION['bananas']==0 && $_SESSION['mangos']==0){
			return 0;
		}else{
			return 1;
		}
	}
	function cartlogic($pdo){
		if (isset($_POST['cart'])){
			if ($_POST['cart']=='Place Order'){
				$chk = fruitcheck();
				if ($chk==1){
					echo "Order Placed: Let's pretend like you'll actually get these";
					date_default_timezone_set('America/Chicago');
					$datetime = date('Y/m/d H:i:s');
					$arr = array($_SESSION['username'], $datetime, $_SESSION['apples'], $_SESSION['oranges'], $_SESSION['bananas'], $_SESSION['mangos']);
					db_placeorder($pdo, $arr);
					clearcart();
				} else{
					echo "There isn't anything in your cart... you do know how this works right?";
				}
			} elseif($_POST['cart']=='Clear Cart'){
				echo "Cart cleared";
				clearcart();
			}
		}
	}

    if (!isset($_SESSION['apples'])){$_SESSION['apples']=0;}
    if (!isset($_SESSION['oranges'])){$_SESSION['oranges']=0;}
    if (!isset($_SESSION['bananas'])){$_SESSION['bananas']=0;}
    if (!isset($_SESSION['mangos'])){$_SESSION['mangos']=0;}
	
	
    getstyle();
?>

</head> 
<body> 

<?php getheader(); ?>
<?php getnavbar($pdo); ?> 
<h2>Checkout</h2> 
<h4>Your Fruit Basket:</h4>
<hr>
<div class="fruit" id="fruitcart">
<div class="cart-box">
<?php
	cartlogic($pdo);
	echo "<p>";
	print_r($_SESSION['apples']);
	echo "  apples in the basket<br>";
	print_r($_SESSION['oranges']);
	echo "   oranges in the basket<br>";
	print_r($_SESSION['bananas']);
	echo "  bananas in the basket<br>";
	print_r($_SESSION['mangos']);
	echo "   mangos in the basket<br>";	
	echo "<br>";
	cartform();
	
?>
</div></div>
<div class="footer">
<?php getfooter(); ?>
</div>

</body>
</html>
