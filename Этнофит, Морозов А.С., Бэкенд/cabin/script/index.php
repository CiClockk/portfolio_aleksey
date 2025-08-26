<?php
    if (isset($_SERVER['HTTP_COOKIE'])) {            
        setcookie("hash_numb", '', -1, "/");
        $new_url = '../../mainpage/call';
        header('Location: '.$new_url);
    }
?>