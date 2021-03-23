<?php
if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
    if ($_POST['username'] == 'username' && $_POST['password'] == 'password') {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = 'username';
	header('Location: homepage.php');
    }else {
        echo 'Invalid';
    }
}
?>
