<?php

require_once('../model/database.php');
require_once('../model/admin_db.php');


switch ($action) {
    case 'logout': {
        $_SESSION = array();
        session_destroy();
        $login_message = 'You have been logged out.';
        include('./view/login.php');
        break;
    }
    case 'show_register': {
        include('./view/register.php');
        break;
    }
    case 'show_login': 
        include('./view/login.php');
        break;

    case 'login': {
        $username = filter_input(INPUT_POST, 'username');
        $passowrd = filter_input(INPUT_POST, 'password');
        if (is_valid_admin($username, $passowrd)) {
            $_SESSION['is_valid_admin'] = true;
            header("Location: ./view/vehicle_list.php");
        } else {
            $login_message = 'You must login to view this page.';
            include('./view/login.php');
        }
    }
    case 'register': {
        include('./util/valid_register.php');
        valid_registration($username, $password, $confirm_password);
        if (!empty($errors)) {
            include('./view/register.php');
        } else {
            add_admin($username, $password);
            $_SESSION['is_valid_admin'] = true;
            header("Location: ./view/vehicle_list.php");
        }

    }
    


    
} 
