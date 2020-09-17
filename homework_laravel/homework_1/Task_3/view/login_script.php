<?php 
session_start();

require_once '../classes/Login.php';

$user = new Login($_POST['username'], $_POST['password']);