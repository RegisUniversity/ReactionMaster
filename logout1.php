<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
session_destroy();
unset($_SESSION['username']);
$_SESSION['message']="you are logged out";
header('Location:index1.php');