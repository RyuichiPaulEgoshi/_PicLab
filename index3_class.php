<?php

    session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <?php
        include "common/head.com.php";
    ?>
</head>
<body>

    <!--default screen-->

    <?php
        include "common/header.com.php";
    ?>

    <?php
        include "common/nav.com.php";
    ?>

    <div class="content-container">

        <div class="maintitle-wrapper">
            <p>ALL LABORATORY CLASSES</p>
        </div>
        <div class="cont-wrapper">
            <div class="item-container">
                <img src="pics/class.jpg">
                <ul>
                    <a href="index3_classinfo.php">CCS1000</a>
                    <p>stubcode : 35</p>
                    <p>Fundamental of Computers</p>
                    <p>
                        A computer is a device that can be instructed to carry out sequences of 
                        arithmetic or logical operations automatically via computer programming. 
                        Modern computers have the ability to follow generalized sets of operations, called programs. 
                        These programs enable computers to perform an extremely wide range of tasks.
                    </p>
                </ul>
            </div>
        </div>
    </div>

    <!-- footer -->

    <?php
        include "common/footer.com.php";
    ?>
</body>
</html>