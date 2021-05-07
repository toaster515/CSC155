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
        <h1><b>Welcome To This Goofy Fruit Site!</b></h1>
        <hr>
        <div class='fruit'>
        <p><b>Feel free to shop around for random fruit to fill that aching void inside your soul!</b></p>
        <p>...that is until the existential weight of your purposeless existence invevitably crashes back over you like a tsunami, 
        washing away the ever so delicate veil of distraction you use to tolerate the never ending negativity that is your ceaseless inner monologue!</p>
        <p>But you should probably have a banana because you sound hungry!</p>
        <br>
        <?php 
        usrname_form();
        usrname_set();
        ?>
        </div>       
    </section>

    <div class="footer">
    <?php getfooter(); ?>
    </div>

</body> 
</html>
