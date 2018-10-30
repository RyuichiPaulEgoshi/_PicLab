<div class="nav-container">
    <ul>
        <li><a href="index1_home.php">HOME</a></li>
        <li><a href="index2_room.php">ROOMS</a></li>
        <li><a href="index3_class.php">CLASSES</a></li>
        <li><a href="index4_event.php">EVENTS</a></li>
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
                    echo '<li><a href="index7_admin.php">ADMIN</a></li>';
                } else{
                    //when the acc is active-user
                    echo '<li><a href="index5_user.php">USER</a></li>';
                }
            } else {
                //when the acc is passive or guest
                echo '<li><a href="index6_guest.php">GUEST</a></li>';
            }
        ?>
        <!--<li><a href="index5_user.php">USER</a></li>-->
    </ul>
</div>