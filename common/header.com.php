<?php
    if (isset($_SESSION['u_id'])){
        $apname = $_SESSION['u_name'];
        echo '
        <div class="header-container">
            <div class="logo-container" onclick="location.href='."'index1_home.php'".';">
            </div>
            <form class="login-container" action="includes/logout.inc.php" method="POST">
                '."<p>$apname</p>".'
                <button type="submit" name="submit">LOGOUT</button>
            </form>
        </div>
        ';
    } else {
        echo '
        <div class="header-container">
            <div class="logo-container" onclick="location.href='."'index1_home.php'".';">
            </div>
            <form class="login-container" action="includes/login.inc.php" method="POST">
                <input type="text" name="uid" placeholder="USERNAME / EMAIL">
                <input type="password" name="pwd" placeholder="PASSWORD">
                <button type="submit" name="submit">LogIn</button>
            </form>
        </div>
    ';
    }
?>