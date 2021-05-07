<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Tony Petrotte
CSC-155-201F_2021SP -->

<?php
$user = "apetrotte1"; 
$dsn = "mysql:host=localhost;dbname=$user;charset=utf8mb4"; 
$options = [
  PDO::ATTR_EMULATE_PREPARES => false, // turn off emulation mode for "real" prepared statements
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array 
]; 
try {
  $pdo = new PDO($dsn, $user, $user, $options);
} catch (Exception $e) {
  error_log($e->getMessage());
  echo("DB Connection Error");
  exit('Something weird happened');
}
?>
