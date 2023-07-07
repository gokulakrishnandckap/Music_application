<?php


$conn['db'] = (new Database())->db;


            // var_dump($_POST['alluser']);

    try{
        if($_POST['alluser'] == "alluser")
        {
            $_SESSION['show'] = "User list";
        $statement = $conn['db']->prepare("SELECT * FROM users where is_admin = 0");
        $statement->execute();

        $list = $statement->fetchAll();
        $_SESSION['alluser'] = $list;
        }
        else if($_POST['premium'] == "premium")
        {
            $_SESSION['show'] = "Premium users list";
        $statement = $conn['db']->prepare("SELECT * FROM users where is_admin = 0 and is_premium = 1");
        $statement->execute();

        $list = $statement->fetchAll();
        $_SESSION['alluser'] = $list;
        }
        else if($_POST['freeuser'] == "freeuser")
        {
            $_SESSION['show'] = "Free users list";
        $statement = $conn['db']->prepare("SELECT * FROM users where is_admin = 0 and is_premium = 0");
        $statement->execute();

        $list = $statement->fetchAll();
        $_SESSION['alluser'] = $list;
        }

        require 'view/list.view.php';
    }
    catch(Expection $e)
    {
        die($e->getMessage());
    }



