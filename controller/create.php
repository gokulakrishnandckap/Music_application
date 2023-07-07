<?php

// // echo "lkjh";

$conn['db'] = (new Database())->db;
    
//  header("location:/users");


    try{


        $name = $_POST['name'];
        

        $values = $conn['db']->prepare("SELECT * FROM playlists where name = '$name'");
        $values->execute();
        $datas = $values->fetchAll();

        if($datas)
        {
            $_SESSION['error'] = "Name is alreay created";

            header('location:/createlist');
        }
        else{
            $values = $conn['db']->prepare("INSERT INTO playlists(name) VALUES('$name')");
            $values->execute();

            header('location:/users');
            // $datas = $values->fetchAll();   
        }
        // $_SESSION['playlist'] =  $data;
        // // header("location:/users");
        // require 'view/playlist.view.php';

    }
    catch(Expection $e)
    {
        die($e->getMessage());
    }
