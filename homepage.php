<!-- I honor Parkland's core values by affirming that I have followed all academic integrity guidelines for 
this work. Tony Petrotte CSC155-201F_2021SP --> 
<html> 
<head> 
<?php
    session_start();
    require('library/functionset.php');
    logcheck();
    getstyle();
?>
</head> 

<body>
    <?php getheader(); ?>
    <?php getnavbar(); ?>
    <section>
        <h1>Home Page</h1>
    </section>
    <?php getfooter(); ?> 
</body> 
</html>
