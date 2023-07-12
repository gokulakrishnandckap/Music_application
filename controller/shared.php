<?php

   



    // var_dump($_POST['del']);

    try{
        $songid = $_POST['songid'];
        $userid = $_POST['userid'];
        // var_dump($songid);
        // var_dump($userid);
        // echo $userid;
        
        $statement = $conn['db']->prepare("INSERT into share(user_id,song_id) VALUES($userid,$songid)");
        $statement->execute();

        $values = $conn['db']->prepare("SELECT users.username as username,songs.name as songname,images.image_path as imagepath FROM share join users on share.user_id = users.id join songs on share.song_id = songs.id join images on share.song_id = images.model_id AND images.model_name = 'song'");
        $values->execute();
        $datas = $values->fetchAll();
     
            require "view/shared.view.php";
    }
    catch(Expection $e)
    {
        die($e->getMessage());
    }

// require 'view/createplay.php';

