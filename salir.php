<?php
    @session_start();
    session_unset();
    session_destroy();
    if(empty($redirectTo)){
        $redirectTo= "index.php";
    }
    header("Location: $redirectTo");
    exit();
?>
