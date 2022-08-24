<?php
    if (isset($_POST['username']) && $_POST['username'] && isset($_POST['pwd']) && $_POST['pwd']){
        // echo $_POST['username'];
        echo json_encode(array('success'=>TRUE));
    }else echo json_encode(array('success'=>FALSE));
?>