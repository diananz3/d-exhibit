<?php

session_start();
if(!isset($_SESSION["row"])) header("Location: login.php");