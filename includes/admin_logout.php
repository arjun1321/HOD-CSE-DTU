<?php session_start();
        ob_start();
?>

<?php

    $_SESSION['username'] = null;
    header("Location: ../login.php");
    
?>