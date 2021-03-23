<?php
    session_start();
	if(!isset($_SESSION['username'])){
		header('Location: http://www.csit.parkland.edu/~apetrotte1/csc155/M12/login.php');
	}
?>

<html>
<head>
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

                li a.activehead {
                    background-color: #4CAF50;
                }

                li a.carte {
                    text-align: right;
                }
    </style>
</head>
<body>
<?php include('headbar.html'); ?>
<h2>Page4 placeholder</h2>
</body>
