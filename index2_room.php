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
            <p>ALL LABORATORY ROOMS</p>
        </div>
        <div class="cont-wrapper">
            <?php
                if (isset($_SESSION['u_id'])){

                    include 'includes/db.inc.php';

                    $sql = "SELECT _status_name
                    FROM _status
                    INNER JOIN _user
                    ON _status._status_id = _user._user_status_fk 
                    WHERE _user_name = '$apname';";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $status = $row['_status_name'];

                    //when the acc is admin
                    if($status == "admin"){
                        echo '
                        <form class="form-wrapper" method="POST" action="index2_roomnew.php">
                        <button class="btn1" type="submit" name="roomadd">CREATE NEW ROOM</button>
                        </form>';
                    }
                }
            ?>
            <div class="item-container">
                <img src="pics/mtcl1_main.jpg">
                <ul>
                    <a href="index2_roominfo.php">MTCL1</a>
                    <p>MT building</p>
                    <p>
                        a space which provides computer services to a defined community. 
                        Computer labs are typically provided by libraries to the public, 
                        by academic institutions to students who attend the institution, 
                        or by other institutions to the public or to people affiliated with that institution. 
                        Users typically must follow a certain user policy to retain access to the computers. 
                    </p>
                </ul>
                <?php
                    if (isset($_SESSION['u_id'])){

                        include 'includes/db.inc.php';

                        $sql = "SELECT _status_name
                        FROM _status
                        INNER JOIN _user
                        ON _status._status_id = _user._user_status_fk 
                        WHERE _user_name = '$apname';";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $status = $row['_status_name'];

                        //when the acc is admin
                        if($status == "admin"){
                            echo '
                            <form class="form-wrapper" method="POST" action="includes/trans.inc.php">
                            <div class="invisible">
                            </div>
                            <button class="btn2" type="submit" name="roomdel">DELETE THIS ROOM</button>
                            <button class="btn3" type="submit" name="roomupd">EDIT THIS ROOM</button>
                            </form>';
                        }
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- footer -->

    <?php
        include "common/footer.com.php";
    ?>
</body>
</html>