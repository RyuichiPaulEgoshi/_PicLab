<?php

    session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <?php
        include "common/head5.com.php";
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
            <p>CREATE NEW ROOM</p>
        </div>

        <div class="cont-wrapper">
            <form class="form-wrapper" method="POST" action="includes/trans.inc.php">
                <!--room name-->
                <h1>Room Title</h1>
                <input type="text" name="kname" placeholder="MTCL">
                <h1>Explanation</h1>
                <textarea name="kexpl" cols="54" rows="10"></textarea>
                <h1>Location</h1>
                <input type="text" name="klocate" placeholder="MT build.">
                <h1>Equipments</h1>
                <textarea name="kequip" cols="54" rows="5"  placeholder="Desctop Computer / Projector / etc."></textarea>
                <h1>Seats</h1>
                <input type="number" name="kseat" min="0" placeholder="50">
                <h1>Pictures</h1>
                <p>Main Picture</p>
                <input class="pic-inp" type="file" name="kmpic">
                <p>Sub Picture 1</p>
                <input class="pic-inp" type="file" name="ks1pic">
                <p>Sub Picture 2</p>
                <input class="pic-inp" type="file" name="ks2pic">
                <p>Sub Picture 3</p>
                <input class="pic-inp" type="file" name="ks3pic">
                <button class="btn1" type="submit" name="roomadd">CREATE NEW ROOM</button>
            </form>
        </div>
    </div>

    <!-- footer -->

    <?php
        include "common/footer.com.php";
    ?>
</body>
</html>