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
            <p>ALL SPECIAL EVENTS</p>
        </div>
        <div class="cont-wrapper">
            <div class="item-container">
                <img src="pics/event.jpg">
                <ul>
                    <a href="index4_eventinfo.php">Stack League</a>
                    <p>December 25, 2018</p>
                    <p>13:00-17:00</p>
                    <p>
                        StackLeague is a series of hundred-people coding tournaments designed 
                        to display programmers capability to international tech employers. 
                        The tournament is powered by the advanced assessment technologies. 
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