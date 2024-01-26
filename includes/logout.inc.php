<?php
session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["usersUid"]);
header("location: ../Mainpage.php");
        exit();