<?php

if (isset($_POST['submit'])) {
    session_start();
    session_unset();
    session_destroy();
    echo "<script>
    alert('good bye!');
    window.location.href='../index1_home.php';
    </script>";
    exit();
}