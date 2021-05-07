<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Tony Petrotte
CSC-155-201F_2021SP -->
<?php

require('estconn.php');
require('dbfunc.php');

function checkfields($pdo){
    $_SESSION['email']=$_POST['email155'];
    $_SESSION['username'] = $_POST['username155'];

    if(!empty($_POST['username155'])){
        $chk = db_checkUsr($pdo, $_POST['username155']);
        if ($chk!=0){
            echo '<b>Username is already being used</b>';
            return 0;
        }
        if(!empty($_POST['password155'])){
            if(!empty($_POST['password155confirm'])){
                if ($_POST['password155']!=$_POST['password155confirm']){
                    echo 'Passwords do not match';
                    return 0;
                }
                if(!empty($_POST['email155'])){
                    if(!empty($_POST['usergroup155'])){
                        unset($_SESSION['email']);
                        unset($_SESSION['username']);
                        return 1;
                    } else{
                        echo "Please select a user group";
                        return 0;
                    }
                } else{
                    echo "Please enter a valid email";
                    return 0;
                }
            } else{
                echo "<b>Passwords do not match</b>";
                return 0;
            }
        } else{
            echo "Please enter a password";
            return 0;
        }
    } else{
        echo "Please enter a username";
        return 0;
    }
}

if (isset($_POST['submit'])) {
    if ($_POST['submit']=='Create New User'){
        $chk = checkfields($pdo);
        if ($chk==1){
            $p = password_hash($_POST['password155'], PASSWORD_DEFAULT);
            $p = trim($p);
            db_setUsr($pdo, $_POST['username155'], $p, $_POST['email155'], $_POST['usergroup155']);
            header('Location: http://www.csit.parkland.edu/~apetrotte1/csc155/site_v3/login.php');
        }
    } elseif($_POST['submit']=='Cancel'){
        header('Location: http://www.csit.parkland.edu/~apetrotte1/csc155/site_v3/login.php');
    }
}
?>
