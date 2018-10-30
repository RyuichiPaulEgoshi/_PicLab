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
            <p>CCS1000</p>
        </div>

        <div class="cont-wrapper">
            <!--picture-->
            <img class="mySlides" src="pics/class.jpg">
            <!--decription-->
            <p>
                A computer is a device that can be instructed to carry out sequences of 
                arithmetic or logical operations automatically via computer programming. 
                Modern computers have the ability to follow generalized sets of operations, called programs. 
                These programs enable computers to perform an extremely wide range of tasks.
            </p>
            <!--information-->
            <table class="tbl-info">
                <tr>
                    <td class="clm1">class title :</td>
                    <td class="clm2">CC1000</td>
                </tr>
                <tr>
                    <td class="clm1">stub code :</td>
                    <td class="clm2">35</td>
                </tr>
                <tr>
                    <td class="clm1">description :</td>
                    <td class="clm2">Fundamental of Computers</td>
                </tr>
                <tr>
                    <td class="clm1">Room :</td>
                    <td class="clm2">MTCL1</td>
                </tr>
                <tr>
                    <td class="clm1">Instructor :</td>
                    <td class="clm2">Mr.Thomas</td>
                </tr>
            </table>
        </div>

        <div class="title-wrapper">
            <p>Class Schedule</p>
        </div>

        <div class="cont-wrapper">
            <table class="tbl-schedule">
                <tr>
                    <th>time</th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th>Saturday</th>
                </tr>
                <tr>
                    <td>7:00-7:30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>7:30-8:30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>8:00-8:30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>8:30-9:30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>9:00-9:30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>9:30-10:30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
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