<?php
/**
 * Created by PhpStorm.
 * User: toshiba
 * Date: 14/06/2018
 * Time: 13:13
 */

session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
header("location:/regroup/index.php"); //to redirect back to "index.php" after logging out
exit();
$Connecte=false;
?>
