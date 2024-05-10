<?php

if (isset($_POST['uname']) && isset($_POST['password'])) {
    # code...
} else {
    header("Location: index.php");
    exit();
}

?>