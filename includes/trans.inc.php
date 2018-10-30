<?php

session_start();

include 'db.inc.php';



switch (true) {

    //-----ROOM TRANSACTION------
    case (isset($_POST['roomadd'])):
        //
        $rname = mysqli_real_escape_string($conn, $_POST['kname']);
        $rexpl = mysqli_real_escape_string($conn, $_POST['kexpl']);
        $rlocate = mysqli_real_escape_string($conn, $_POST['klocate']);
        $requip = mysqli_real_escape_string($conn, $_POST['kequip']);
        $rseat = mysqli_real_escape_string($conn, $_POST['kseat']);
        //pictures
        $rmpic = mysqli_real_escape_string($conn, $_POST['kmpic']);
        $rs1pic = mysqli_real_escape_string($conn, $_POST['ks1pic']);
        $rs2pic = mysqli_real_escape_string($conn, $_POST['ks2pic']);
        $rs3pic = mysqli_real_escape_string($conn, $_POST['ks3pic']);
        //kmpic
        $file = $_FILES['kmpic'];
        $fileName = $_FILES['kmpic']['name'];
        $fileTmpName = $_FILES['kmpic']['tmp_name'];
        $fileError = $_FILES['kmpic']['error'];
        $fileType = $_FILES['kmpic']['type'];
        //
        $file = $_FILES['ks1pic'];
        $fileName = $_FILES['ks1pic']['name'];
        $fileTmpName = $_FILES['ks1pic']['tmp_name'];
        $fileError = $_FILES['ks1pic']['error'];
        $fileType = $_FILES['ks1pic']['type'];
        //
        $file = $_FILES['ks2pic'];
        $fileName = $_FILES['ks2pic']['name'];
        $fileTmpName = $_FILES['ks2pic']['tmp_name'];
        $fileError = $_FILES['ks2pic']['error'];
        $fileType = $_FILES['ks2pic']['type'];
        //
        $file = $_FILES['ks3pic'];
        $fileName = $_FILES['ks3pic']['name'];
        $fileTmpName = $_FILES['ks3pic']['tmp_name'];
        $fileError = $_FILES['ks3pic']['error'];
        $fileType = $_FILES['ks3pic']['type'];


        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');

        //check empty
        if(empty($rname) || 
        empty($rexpl) || 
        empty($rlocate) || 
        empty($requip) || 
        empty($rseat) || 
        empty($rmpic) || 
        empty($rs1pic) || 
        empty($rs2pic) || 
        empty($rs3pic))
        {
            echo "<script>
            alert('You should not empty');
            window.history.back();
            </script>";
            exit();
        } else {
            //check data
            $sql ="SELECT * FROM _room
            WHERE 
               _room._room_name = ''
            OR _room._room_location ='';";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
                echo "<script>
                alert('Input value(s) is(are) already exist');
                window.history.back();
                </script>";
                exit();
            } else {
                //upload the picture
                if (in_array($fileActualExt, $allowed)) {
                    if ($fileError === 0) {
                        if ($fileSize < 1000000) {
                            $fileNameNew = uniqid('', true).".".$fileActualExt;
                            $fileDestination = '../pics/'.$rname.$fileNameNew;
                            move_uploaded_file($fileTmpName, $fileDestination);
                            
                            //Insert the user into the database
                            $sql2 = "";
                            
                            mysqli_query($conn, $sql2);

                            echo "<script>
                            alert('You added new room!');
                            window.location.href='../index2_room.php';
                            </script>";
                            exit();
                        } else {
                            echo "<script>
                            alert('Your file is too big!');
                            window.history.back();
                            </script>";
                            exit();
                        }
                    } else {
                        echo "<script>
                        alert('There was an error uploading your file!');
                        window.history.back();
                        </script>";
                        exit();
                    }
                } else {
                    echo "<script>
                    alert('You cannot upload files of this type!');
                    window.history.back();
                    </script>";
                    exit();
                }
                
            }
        }
        break;
    
    case (isset($_POST['roomdel'])):
        echo "room del";
        break;

    case (isset($_POST['roomupd'])):
        echo 'room upd';
        break;

    //-----CLASS TRANSACTION------
    case (isset($_POST['classadd'])):
        echo 'class add';
        break;
    
    case (isset($_POST['classdel'])):
        echo 'class del';
        break;

    case (isset($_POST['classupd'])):
        echo 'class upd';
        break;
    
    //-----CLASS REQUEST TRANSACTION------
    case (isset($_POST['classaddreq'])):
        echo 'class add req';
        break;
    
    case (isset($_POST['classupdreq'])):
        echo 'class upd req';
        break;
    
    //-----EVENT TRANSACTION------
    case (isset($_POST['eventadd'])):
        echo 'event add';
        break;

    case (isset($_POST['eventdel'])):
        echo 'event del';
        break;

    case (isset($_POST['eventupd'])):
        echo 'event upd';
        break;

    //-----EVENT REQUEST TRANSACTION------
    case (isset($_POST['eventaddreq'])):
        echo 'event add req';
        break;

    case (isset($_POST['eventupdreq'])):
        echo 'event upd req';
        break;

    //-----USER TRANSACTION------
    case (isset($_POST['useradd'])):
        $ustub = mysqli_real_escape_string($conn, $_POST['nstub']);
        
        $sql = "UPDATE _user
        SET _user_status_fk = 2
        WHERE _user_stub = '$ustub';";
        
        mysqli_query($conn, $sql);

        echo "<script>
        alert('User added!');
        window.location.href='../index1_home.php
        </script>";
        break;

    case (isset($_POST['userdel'])):
        $ustub = mysqli_real_escape_string($conn, $_POST['nstub']);

        $sql = "DELETE FROM _user
        WHERE _user_stub = '$ustub';";
        
        mysqli_query($conn, $sql);

        session_start();
        session_unset();
        session_destroy();
        echo "<script>
        alert('User Deleted!');
        window.location.href='../index1_home.php
        </script>";
        break;

    case (isset($_POST['userupd'])):
        $ustub = mysqli_real_escape_string($conn, $_POST['nstub1']);
        $uname = mysqli_real_escape_string($conn, $_POST['nname1']);
        $uemail = mysqli_real_escape_string($conn, $_POST['nemail1']);
        $upass = mysqli_real_escape_string($conn, $_POST['npass1']);

        $sql = "UPDATE _user
        SET 
        _user_stub = '$ustub',
        _user_name = '$uname',
        _user_email = '$uemail',
        _user_pass = '$upass'
        WHERE _user_stub = '$ustub';";
        
        mysqli_query($conn, $sql);

        session_start();
        session_unset();
        session_destroy();
        echo "<script>
        alert('User Edited!');
        window.location.href='../index1_home.php
        </script>";
        break;

    //-----USER REQUEST TRANSACTION------
    case (isset($_POST['useraddreq'])):
        $ustub = mysqli_real_escape_string($conn, $_POST['nstub']);
        $uname = mysqli_real_escape_string($conn, $_POST['nname']);
        $uemail = mysqli_real_escape_string($conn, $_POST['nemail']);
        $upass = mysqli_real_escape_string($conn, $_POST['npass']);
        $upass2 = mysqli_real_escape_string($conn, $_POST['npass2']);
        //check empty
        if(empty($ustub) || empty($uname) || empty($uemail) || empty($upass) || empty($upass2)){
                echo "<script>
                alert('You should not empty');
                window.history.back();
                </script>";
                exit();
            } else{
                //confirm password is same
                if($upass != $upass2){
                    echo "<script>
                    alert('Your password and confirm are not same');
                    window.history.back();
                    </script>";
                    exit();
                } else {
                    //check data
                    $sql ="SELECT * FROM _user WHERE 
                    ((_user_stub = '$ustub')OR _user_name = '$uname')OR _user_email = '$uemail'";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    if($resultCheck > 0){
                        echo "<script>
                        alert('Input value(s) is(are) already exist');
                        window.history.back();
                        </script>";
                        exit();
                    } else{
                        //Insert the user into the database
                        $sql2 = "INSERT INTO _user
                        (_user_stub, _user_name, _user_email, _user_pass, _user_status_fk)
                        
                        VALUES
                        ('$ustub', '$uname', '$uemail', '$upass', 3);";
                        mysqli_query($conn, $sql2);

                        session_start();
                        session_unset();
                        session_destroy();
                        echo "<script>
                        alert('You requested new account!');
                        window.location.href='../index1_home.php';
                        </script>";
                    }
                } 
            }
        break;

    //-----ERROR------
    default:
        echo 'error';
        break;
}