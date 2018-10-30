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
            <p>MTCL1</p>
        </div>

        <div class="cont-wrapper">
            <!--picture-->
            <img class="mySlides" src="pics/mtcl1_main.jpg">
            <img class="mySlides" src="pics/mtcl1_sub1.jpg">
            <img class="mySlides" src="pics/mtcl1_sub2.jpg">
            <img class="mySlides" src="pics/mtcl1_sub3.jpg">
            <div class="button-container">
                <button onclick="plusDivs(-1)"> ← </button>
                <button onclick="plusDivs(1)"> → </button>
            </div>
            <!--decription-->
            <p>
                a space which provides computer services to a defined community. 
                Computer labs are typically provided by libraries to the public, 
                by academic institutions to students who attend the institution, 
                or by other institutions to the public or to people affiliated with that institution. 
            </p>
            <!--information-->
            <table class="tbl-info">
                <tr>
                    <td class="clm1">Room Name :</td>
                    <td class="clm2">MTCL1</td>
                </tr>
                <tr>
                    <td class="clm1">Location :</td>
                    <td class="clm2">Mary Thomas</td>
                </tr>
                <tr>
                    <td class="clm1">Seats :</td>
                    <td class="clm2">60 seats</td>
                </tr>
                <tr>
                    <td class="clm1">Equipments :</td>
                    <td class="clm2">Computer, Projecter, Whiteboard</td>
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

        <div class="title-wrapper">
            <p>Event Schedule</p>
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