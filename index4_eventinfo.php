<?php

    session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <?php
        include "common/head2.com.php";
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
            <!--title-->
            <p>Stack League</p>
        </div>

        <div class="cont-wrapper">
            <!--picture-->
            <img class="mySlides" src="pics/event.jpg">
            <!--decription-->
            <p>
                StackLeague is a series of hundred-people coding tournaments designed 
                to display programmers capability to international tech employers. 
                The tournament is powered by the advanced assessment technologies. 
            </p>
            <!--information-->
            <table class="tbl-info">
                <tr>
                    <td class="clm1">event title :</td>
                    <td class="clm2">Stack League</td>
                </tr>
                <tr>
                    <td class="clm1">date :</td>
                    <td class="clm2">December 25, 2018</td>
                </tr>
                <tr>
                    <td class="clm1">time :</td>
                    <td class="clm2">13:00-17:00</td>
                </tr>
                <tr>
                    <td class="clm1">room :</td>
                    <td class="clm2">MTCL1</td>
                </tr>
            </table>
        </div>
    </div>

    <script>

        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = x.length}

            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            x[slideIndex-1].style.display = "block";  
        }
    </script>

    <!-- footer -->

    <?php
        include "common/footer.com.php";
    ?>
</body>
</html>