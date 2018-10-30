<?php


    session_start();

    if(isset($_POST['submit'])) {

        include 'db.inc.php';

        $uid = mysqli_real_escape_string($conn, $_POST['uid']);
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

        //check input are empty

        if (empty($uid) || empty($pwd)) {
            echo "<script>
            alert('You should not empty');
            window.history.back();
            </script>";
            exit();
        } else {
            $sql = "SELECT _user_id, _user_stub, _user_name, _user_email, _user_pass, _status_name FROM _user
            INNER JOIN _status
            ON _user._user_status_fk = _status._status_id
            WHERE ((_user_name = '$uid' 
            OR _user_email = '$uid') 
            AND _user_pass = '$pwd')
            AND (_status_name = 'user-active'
            OR _status_name = 'admin')
            ;";
            $result = mysqli_query($conn, $sql);
            $reultCheck = mysqli_num_rows($result);
            if ($reultCheck < 1) {
                echo "<script>
                alert('Your input(s) is(are) wrong');
                window.history.back();
                </script>";
                exit();
            } else {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['u_id'] = $row['_user_id'];
                $_SESSION['u_stub'] = $row['_user_stub'];
                $_SESSION['u_name'] = $row['_user_name'];
                $_SESSION['u_email'] = $row['_user_email'];
                $_SESSION['u_status'] = $row['_status_name'];
                echo "<script>
                alert('welcome!');
                window.location.href='../index1_home.php';
                </script>";
                exit();
            }
        }
    } else {
        echo "<script>
            alert('Error!');
            window.history.back();
            </script>";
            exit();
    }