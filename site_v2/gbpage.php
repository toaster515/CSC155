<html> 
<head> 
<?php 
session_start(); 
unset( $_SESSION['username'] ); 
session_unset();
header( "refresh:5; url=http://www.csit.parkland.edu/~apetrotte1/csc155/M14/login.php" ); 
?> 
</head> 
<body> 
<center><h1> GOODBYE! </h1></center> 
</body>
</html>
