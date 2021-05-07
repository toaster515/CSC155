<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Tony Petrotte
CSC-155-201F_2021SP -->
<html> 
<head> 
<?php 
session_start(); 
unset( $_SESSION['username'] ); 
session_unset();
header( "refresh:5; url=http://www.csit.parkland.edu/~apetrotte1/csc155/site_v3/login.php" ); 
?> 
</head> 
<body> 
<center><h1> GOODBYE! </h1></center> 
</body>
</html>
