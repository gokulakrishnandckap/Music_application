<?php

// echo "lkjh";

$conn['db'] = (new Database())->db;
    
//  header("location:/users");


    try{

            
        $search = $_POST["search"];
        // var_dump($search);
        $values = $conn['db']->prepare("SELECT * FROM artist where name = '$search'");
        $values->execute();
        $data = $values->fetchAll();
        // var_dump($data);
        $ids;
        foreach($data as $datum)
        {
            $ids = $datum['id'];
        }
        $val = $conn['db']->prepare("SELECT * FROM images where model_id= $ids and model_name = 'artist'");
        $val->execute();
        $datas = $val->fetchAll();

        $_SESSION['artimage'] = $datas;



        // $_SESSION['valu'] =  $data;

        $song = $conn['db']->prepare("SELECT * FROM songs where artist_id = $ids");
        $song->execute();
        $songs = $song->fetchAll();
        // var_dump($songs);
        $_SESSION['song'] =  $songs;
        // $idss = $songs[0]['id'];
        // // $ids;
        // // foreach($data as $datum)
        // // {
        // //     $ids = $songs['id'];
        // // }
        // $vals = $conn['db']->prepare("SELECT * FROM images where model_id= $idss and model_name = 'song'");
        // $vals->execute();
        // $datum = $vals->fetchAll();
        // // var_dump($datum);

        // $_SESSION['imgs'] = $datum;
        // var_dump($_SESSION['song']);


        require_once 'controller/users/users.home.php';
           
    }
    catch(Expection $e)
    {
        die($e->getMessage());
    }


