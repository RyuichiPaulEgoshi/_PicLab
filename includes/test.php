    <div class="content-container">

        <div class="reqtitle-wrapper">
            <p>REQUEST</p>
        </div>
        <div class="reqcont-wrapper">
            <p></p>
        </div>

        <div class="howtotitle-wrapper">
            <p>HOW TO USE ?</p>
        </div>
        <div class="howtocont-wrapper">
            <p></p>
        </div>
    </div>

    -----

    /* REQUEST */

div.reqtitle-wrapper{
    margin-top: 10px;
    background-color: black;
    opacity: 0.6;
    width: 100%;
    height: 40px;
    color: white;
    text-align: center;
}

div.reqtitle-wrapper p{
    font-size: 15px;
    padding: 10px;
}

div.reqcont-wrapper{
    background-color: white;
    opacity: 0.5;
    width: 100%;
    height: 500px;
}

/* HOW TO USE? */

div.howtotitle-wrapper{
    background-color: black;
    opacity: 0.6;
    width: 100%;
    height: 40px;
    color: white;
    text-align: center;   
}

div.howtotitle-wrapper p{
    font-size: 15px;
    padding: 10px;
}

div.howtocont-wrapper{
    background-color: white;
    opacity: 0.5;
    width: 100%;
    height: 500px;
}

-------

<?php
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
        echo '<li><a href="index4_event.php">ADMIN</a></li>';
    } else{
        //when the acc is active-user
        if($status == "user-active"){
            echo '<li><a href="index4_event.php">USER</a></li>';
        } else {
            //when the acc is passive or guest
            echo '<li><a href="index4_event.php">GUEST</a></li>';
        }
    }
?>

--------

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
            echo '';
        } else{
            //when the acc is active-user
            echo '';
        }
    } else {
        //when the acc is passive or guest
        echo '';
    }
?>

--------


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
            echo '';
        } else{
            //when the acc is active-user
            echo '';
        }
    } else {
        //when the acc is passive or guest
        echo '';
    }
?>


-----

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
            echo '<button class="btn2" type="submit" name="roomdel">DELETE ROOM</button>';
        }
    }
?>
