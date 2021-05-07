<html>
<head>
    <?php
        session_start();
        require('library/nformlogic.php');
    ?>
    <style>
        input[type=text], input[type=password] {
            width: 100%;
            border: 2px solid #ccc;
            font-size: 12px;
            background-color: white;
        }

        input[type=submit], input[type=reset] {
            background-color: #0DB7EE;
            border: solid;
            border-color: #63D6FA;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>
<?php
    if (isset($_SESSION['username'])){
        $u = $_SESSION['username'];
        $e = $_SESSION['email'];
    }else{
        $u = '';
        $e = '';
    }
?>
<body>
    <div>
        <table align='center'>
            <form method='POST'>
                <tr><td colspan='2' align='center'>This is class testing site, please do not enter real passwords!</td></tr>
                <tr>
                    <td align='right'>New Username:</td>
                    <td><input type='text' name='username155' value='<?php echo $u; ?>' placeholder="username"></td>
                </tr>
                <tr>
                    <td align='right'>New Password:</td>
                    <td>
                        <input type='password' name='password155' value='' placeholder="password">
                    </td>
                </tr>
                <tr><td align='right'>Confirm Password:</td><td><input type='password' name='password155confirm' value='' placeholder="confirm password"></td></tr>
                <tr><td align='right'>Email:</td><td><input type='text' name='email155' value='<?php echo $e; ?>' placeholder="email"></td></tr>
                <tr>
                    <td align='right'>User Group:</td>
                    <td>
                        <select name='usergroup155'>
                            <option>user</option>
                            <option>admin</option>
                        </select>
                    </td>
                </tr>
                <tr><td colspan='2' align='center'></td></tr>
                <tr>
                    <td colspan='2' align='center'>
                        <input type='submit' name='submit' value='Create New User'>
                        <input type='submit' name='submit' value='Cancel'>
                    </td>
                </tr>
            </form>
        </table>
    </div>
</body>
</html>