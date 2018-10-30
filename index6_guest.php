<?php

    session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <?php
        include "common/head4.com.php";
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
            <p>Create New User</p>
        </div>
        <div class="cont-wrapper">
            <form class="form-wrapper" method="POST" action="includes/trans.inc.php">
                <p>School ID</p>
                <input type="text" name="nstub" placeholder="◯◯-◯◯◯◯-◯◯">
                <p>Full Name</p>
                <input type="text" name="nname" placeholder="First Middle Last">
                <p>Email address</p>
                <input type="text" name="nemail" placeholder="email address">
                <p>Password</p>
                <input type="password" name="npass" placeholder="password">
                <p>Confirm Passsword</p>
                <input type="password" name="npass2" placeholder="confirmation">
                <button class="btn1" type="submit" name="useraddreq">Request New Account</button>
            </form>
        </div>
    </div>

    <!-- footer -->

    <?php
        include "common/footer.com.php";
    ?>
</body>
</html>