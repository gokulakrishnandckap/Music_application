<?php


    // var_dump($_POST['del']);
    $conn['db'] = (new Database())->db;

    try{
        $sessionid = $_SESSION['id']['id'];
        // var_dump($sessionid);
    //    var_dump($_SESSION['id']['id']);
        $followid = $_POST['follow'];

        $statement = $conn['db']->prepare("INSERT into follow(user_id,artist_id) VALUES($sessionid,$followid)");
        $statement->execute();

        header("location:/users");

 

    }

    catch(Expection $e)
    {
        die($e->getMessage());
    }