<?php
session_start();

$_SESSION["username"] = "listen to music";

echo $_SESSION["username"];

session_unset();
?>