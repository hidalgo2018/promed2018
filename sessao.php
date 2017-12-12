<?php


if (empty($_SESSION['nivel'])){
    header('Location:index.php');
    session_destroy();
}
?>