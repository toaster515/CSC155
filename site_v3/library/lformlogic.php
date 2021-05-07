<?php 

require('estconn.php');
require('dbfunc.php');

if (isset($_POST['submit'])) {
    if ($_POST['submit'] == 'Login'){
        $ucheck = db_checkUsr($pdo, $_POST['username']);
        if ($ucheck!=0){
            $hash = strval(db_getpass($pdo, $_POST['username']));
            $hash = trim($hash);

            if (password_verify(trim($_POST['password']), $hash)) {
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['username'] = $_POST['username'];
	            header('Location: homepage.php');
            }else {
                echo 'Invalid';
            }
        }else {
	        echo 'No record of username:'.$_POST['username'];
        }

    } elseif ($_POST['submit'] == 'Forgot Password?'){
        echo "It's 'password'";
    } elseif ($_POST['submit'] == 'Register'){
        header('Location: http://www.csit.parkland.edu/~apetrotte1/csc155/site_v3/NewUser.php');
    }
}
?>
