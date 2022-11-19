<?php

ob_start();
session_start();

unset($_SESSION['unique_id']);

header('location: login.php');
