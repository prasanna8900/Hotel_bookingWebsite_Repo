<?php
include('inc/essential.php');
session_start();
session_destroy();
redirect('index.php');
?>