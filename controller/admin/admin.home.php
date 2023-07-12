<?php
if($_SESSION['admin'] == 0) 
{
    $_SESSION['error'] = "Could not access admin";
    header("location:/users");
}

require 'view/admin.view.php';

