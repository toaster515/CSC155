<?php 
if (isset($_POST['submit'])) {
    if ($_POST['submit'] == 'Login'){
        if ($_POST['username'] == 'username' && $_POST['password'] == 'password') {
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = 'username';
	    header('Location: homepage.php');
        }else {
            echo 'Invalid';
        }
    } elseif ($_POST['submit'] == 'Forgot Password?'){
        echo "It's 'password'";
    } elseif ($_POST['submit'] == 'Register'){
        echo "Not a real option, just use username and password";
    }
}
?>
