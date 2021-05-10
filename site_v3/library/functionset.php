<!-- I honor Parkland's core values by affirming that I have followed all academic integrity guidelines for 
this work.
Tony Petrotte CSC155-201F_2021SP -->

<?php 
require('estconn.php');
require('dbfunc.php');

function logcheck(){
    if(!isset($_SESSION['username'])){
        header('Location: http://www.csit.parkland.edu/~apetrotte1/csc155/site_v3/login.php');
    } elseif (!$_SESSION['username']=='username'){
        header('Location: http://www.csit.parkland.edu/~apetrotte1/csc155/site_v3/login.php');
    }
}
function getheader(){ 
echo "<header>";
echo "<p>";
usrname_get();
echo "</p>";

echo <<<'EOT'
    <p style='text-align:right'>
        <img src='http://www.csit.parkland.edu/~apetrotte1/csc155/site_v3/imgs/toaster2.jpg' style='float:right;width:30px;height:30px;'>
        CSC155-201_2021SP Tony Petrotte
    </p> 
</header> 
EOT;
}

function getfooter(){ 
echo <<<'EOT'
<footer>
    <ul sytle='list-style-type:none;display:inline;color:black;background-color:white;float:center;'>
        <li><a href="p1.php">Page1</a></li>
        <li><a href="p2.php">Page2</a></li>
        <li><a href="p3.php">Page3</a></li>
        <li><a href="p4.php">Page4</a></li>
    </ul> 
</footer> 
EOT;
}

function getnavbar($pdo){  

$g = db_getgroup($pdo, $_SESSION['username']);

if ($g=='user'){
echo <<<'EOT'
<ul>
    <li><a class="activehead" href="http://www.csit.parkland.edu/~apetrotte1/csc155/site_v3/homepage.php">Home</a></li>
    <li><a href="http://www.csit.parkland.edu/~apetrotte1/csc155/site_v3/p1.php">Page1</a></li>
    <li><a href="http://www.csit.parkland.edu/~apetrotte1/csc155/site_v3/p2.php">Page2</a></li>
    <li><a href="http://www.csit.parkland.edu/~apetrotte1/csc155/site_v3/p3.php">Page3</a></li>
    <li><a href="http://www.csit.parkland.edu/~apetrotte1/csc155/site_v3/p4.php">Page4</a></li>
    <li><a href="http://www.csit.parkland.edu/~apetrotte1/csc155/site_v3/cart.php">Cart</a></li>
    <li><a href="http://www.csit.parkland.edu/~apetrotte1/csc155/site_v3/gbpage.php">Logout</a></li> 
</ul> 
EOT;
}elseif ($g=='admin'){
echo <<<'EOT'
<ul>
    <li><a class="activehead" href="http://www.csit.parkland.edu/~apetrotte1/csc155/site_v3/homepage.php">Home</a></li>
    <li><a href="http://www.csit.parkland.edu/~apetrotte1/csc155/site_v3/p1.php">Page1</a></li>
    <li><a href="http://www.csit.parkland.edu/~apetrotte1/csc155/site_v3/p2.php">Page2</a></li>
    <li><a href="http://www.csit.parkland.edu/~apetrotte1/csc155/site_v3/p3.php">Page3</a></li>
    <li><a href="http://www.csit.parkland.edu/~apetrotte1/csc155/site_v3/p4.php">Page4</a></li>
    <li><a href="http://www.csit.parkland.edu/~apetrotte1/csc155/site_v3/cart.php">Cart</a></li>
    <li><a href="http://www.csit.parkland.edu/~apetrotte1/csc155/site_v3/admin.php">Admin</a></li>
    <li><a href="http://www.csit.parkland.edu/~apetrotte1/csc155/site_v3/gbpage.php">Logout</a></li> 
</ul> 
EOT;
}

}

function usrname_form(){
echo <<<'EOT'
<form method="post">
<label for="pname">Preferred Name:</label> 
<br> 
<input type="text" name="pname">
<input type="submit" name="setpname" value="Set">
EOT;
}

function usrname_set(){
if (isset($_POST['pname'])) {
    if ($_POST['setpname'] == 'Set'){
        $cookie_name = 'pname';
        $cookie_value = $_POST['pname'];
        setcookie($cookie_name, $cookie_value, time()+(86400*30),"/");
    }
}
}
function usrname_get(){
    if(isset($_COOKIE['pname'])){
        echo "Hello " . $_COOKIE['pname'] . "!";
    }
}

function purchaseoptions(){ 
echo <<<'EOT'
<form method="post">
    <input type="submit" name="submit" value="Add to Cart">
    <label for="quant">Quantity:</label>
    <select id="quant" name="quant"> 
EOT;

    for($x = 1; $x <= 10; $x++){echo "<option value='$x'>$x</option>";} 
echo "<input type='submit' name='submit' value='Remove'>";
echo "</select></form>";

}

function cartform(){
echo <<<'EOT'
<form method='POST'>
    <input type='submit' name='cart' value='Place Order'>
    <input type='submit' name='cart' value='Clear Cart'>
</form>
EOT;
}

function print_orders($pdo){

    $orders = db_adminorders($pdo);
    $z = count($orders);
    echo "<table>";
    echo "<tr><th>ID</th><th>Username</th><th>Order Date</th><th>Apples</th><th>Oranges</th><th>Bananas</th><th>Mangos</th></tr>";

    for ($x=0; $x<$z; $x++){
        echo "<tr>";
        
        echo "<td>".$orders[$x]['id']."</td>";
        echo "<td>".$orders[$x]['username']."</td>";
        echo "<td>".$orders[$x]['date']."</td>";
        echo "<td>".$orders[$x]['apples']."</td>";
        echo "<td>".$orders[$x]['oranges']."</td>";
        echo "<td>".$orders[$x]['bananas']."</td>";
        echo "<td>".$orders[$x]['mangos']."</td>";
        
        echo "</tr>";
    }
    echo "</table>";


}

function getstyle(){ 
echo <<<'EOT'
<style>
    table, th, td{
        border: 1px solid black;
    }
    div {
        float: left;
        font-family: Tahoma, Verdana, Segoe, sans-serif;
        padding: 10px;
    }
    .fruit{
        height: 500px;
        width: 50%
    }
    #apple{
        background-image: url('imgs/apples_background.jpg')
    }
    #orange{
        background-image: url('imgs/oranges_background.jpg')
    }
    #banana{
        background-image: url('imgs/bananas_background.jpg')
    }
    #mango{
        background-image: url('imgs/mangos_background.jpg')
    }
    #fruitcart{
        background-image: url('imgs/fruitcart.jpg')
    }
    .footer{
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        color: white;
        text-align: center;
    }
    .fruit-box{
        background-color: #F2EBB4;
        width: 200px;
        border: 15px solid #4CAF50;
        padding: 50px;
        margin: 20px;
    }
    .cart-box{
        background-color: #A7E4F7;
        height: 300px;
        width: 200px;
        border: 10px solid #0DB7EE;
        padding: 20px;
        margin: 10px;
    }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }
    .footitem {
        background-color: white;
        text-align: center;
        padding: 0px 10px;
        color: black;
    }
    li {
        float: left;
    }
        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
            li a:hover:not(.active) {
                background-color: #111;
            }
    .activehead {
        background-color: #4CAF50;
    }
    .carte {
        text-align: right;
    }
</style> 

EOT;

}

?>
