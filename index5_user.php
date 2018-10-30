<?php

    session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <?php
        include "common/head3.com.php";
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
            <p>USER INFORMATION</p>
        </div>
        <div class="cont-wrapper">
            <?php
                include "includes/db.inc.php";

                $apname = $_SESSION['u_name'];

                $sql = "SELECT * FROM _user WHERE 
                _user_name = '$apname'";

                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
            ?>
            <table class="tbl-info">
                <tr>
                    <td class="clm1">School ID :</td>
                    <td class="clm2"><?php echo $row[1]; ?></td>
                </tr>
                <tr>
                    <td class="clm1">User Name :</td>
                    <td class="clm2"><?php echo $row[2]; ?></td>
                </tr>
                <tr>
                    <td class="clm1">Email address :</td>
                    <td class="clm2"><?php echo $row[3]; ?></td>
                </tr>
            </table>
            <form class="form-wrapper" method="POST" action="includes/trans.inc.php">
                <input id="inp" type="button" name="answer" value="EDIT" onclick="showDiv()" />
                <div  id="welcomeDiv" style="display:none;">
                    <input type="text" name="nstub1" placeholder="<?php echo $row[1]; ?>">
                    <input type="text" name="nname1" placeholder="<?php echo $row[2]; ?>">
                    <input type="text" name="nemail1" placeholder="<?php echo $row[3]; ?>">
                    <input type="text" name="npass1" placeholder="<?php echo $row[4]; ?>">
                    <button class="btn3" type="submit" name="userupd">EDIT ACCOUNT</button>  
                </div>
                <div class="invisible">
                    <input type="text" name="nstub" value="<?php echo $row[1]; ?>">
                </div>
                <button class="btn2" type="submit" name="userdel">DELETE ACCOUNT</button>
            </form>
            <script>
                function showDiv() {
                    document.getElementById('welcomeDiv').style.display = "block";
                }
            </script>
        </div>
        <div class="title-wrapper">
            <p>Schedule of Class</p>
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
        <div class="title-wrapper">
            <p>Requesting New/Edited Class</p>
        </div>
        <div class="cont-wrapper">
            <div class="item-container">
                <img src="pics/class.jpg">
                <ul>
                    <a href="index3_classinfo.php">CCS2000</a>
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
        <div class="title-wrapper">
            <p>Schedule of Event</p>
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
        <div class="title-wrapper">
            <p>Requesting New/Edited Event</p>
        </div>
        <div class="cont-wrapper">
            <div class="item-container">
                <img src="pics/event.jpg">
                <ul>
                    <a href="index4_eventinfo.php">Seminar</a>
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