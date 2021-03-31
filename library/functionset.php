<!-- I honor Parkland's core values by affirming that I have followed all academic integrity guidelines for 
this work.
Tony Petrotte CSC155-201F_2021SP -->

<?php 
function logcheck(){
    if(!isset($_SESSION['username'])){
        header('Location: http://www.csit.parkland.edu/~apetrotte1/csc155/M14/login.php');
    } elseif (!$_SESSION['username']=='username'){
        header('Location: http://www.csit.parkland.edu/~apetrotte1/csc155/M14/login.php');
    }
}
function getheader(){ 
echo <<<'EOT'
<header>
    <p style='text-align:right'>
        <img src='http://www.csit.parkland.edu/~apetrotte1/csc155/M14/library/toaster2.jpg' style='float:right;width:30px;height:30px;'>
        CSC155-201_2021SP Tony Petrotte
    </p> 
</header> 
EOT;
}
function getfooter(){ 
echo <<<'EOT'
<footer>
    <ul sytle='list-style-type:none;display:inline;color:black;background-color:white;float:center;'>
        <li><a href="library/p1.php">Page1</a></li>
        <li><a href="library/p2.php">Page2</a></li>
        <li><a href="library/p3.php">Page3</a></li>
        <li><a href="library/p4.php">Page4</a></li>
    </ul> 
</footer> 
EOT;
}

function getnavbar(){  
echo <<<'EOT'
<ul>
    <li><a class="activehead" href="http://www.csit.parkland.edu/~apetrotte1/csc155/M14/homepage.php">Home</a></li>
    <li><a href="http://www.csit.parkland.edu/~apetrotte1/csc155/M14/library/p1.php">Page1</a></li>
    <li><a href="http://www.csit.parkland.edu/~apetrotte1/csc155/M14/library/p2.php">Page2</a></li>
    <li><a href="http://www.csit.parkland.edu/~apetrotte1/csc155/M14/library/p3.php">Page3</a></li>
    <li><a href="http://www.csit.parkland.edu/~apetrotte1/csc155/M14/library/p4.php">Page4</a></li>
    <li><a href="http://www.csit.parkland.edu/~apetrotte1/csc155/M14/library/cart.php">Cart</a></li>
    <li><a href="http://www.csit.parkland.edu/~apetrotte1/csc155/M14/library/gbpage.php">Logout</a></li> 
</ul> 
EOT;
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

function getstyle(){ 
echo <<<'EOT'
<style>
    div {
        color: #fff;
        font-family: Tahoma, Verdana, Segoe, sans-serif;
        padding: 10px;
    }
    .container {
        background-color: #2E4272;
        display: flex;
    }
    .fixed {
        background-color: #4F628E;
        width: 200px;
    }
    .flex-item {
        background-color: #7887AB;
        flex-grow: 1;
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
