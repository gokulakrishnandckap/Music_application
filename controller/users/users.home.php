<?php

$conn['db'] = (new Database())->db;


        try{
            if($_SESSION['id']['id']){
                $statement = $conn['db']->prepare("SELECT songs.id,songs.name,artist.name as artname,images.image_path FROM songs join artist on songs.artist_id = artist.id join images on songs.id = images.model_id  AND images.model_name = 'song'");
                $statement->execute();
                $allsongs = $statement->fetchAll();
                $_SESSION['allsongs'] =  $allsongs;



                $state = $conn['db']->prepare("SELECT artist.id,artist.name,images.image_path FROM artist join images on artist.id = images.model_id  AND images.model_name = 'artist'");
                $state->execute();
                $allartist = $state->fetchAll();
                // var_dump($allartist);
                $_SESSION['allartist'] =  $allartist;


                $query = $conn['db']->prepare("SELECT artist_id,artist.name FROM follow join artist on artist.id = follow.artist_id join users on users.id = follow.user_id where users.id = ".$_SESSION['id']['id']);
                $query->execute();
                $follow = $query->fetchAll();
                // var_dump($follow);
                
                $array = [];
                foreach($follow as $val)
                {
                    
                    array_push($array,$val['artist_id']);

                }
                $_SESSION['follow'] =  $array;
           
   
           
            require "view/user.view.php";

            }
            else
            {
                $statement = $conn['db']->prepare("SELECT songs.id,songs.name,artist.name as artname,images.image_path FROM songs join artist on songs.artist_id = artist.id join images on songs.id = images.model_id  AND images.model_name = 'song'");
                $statement->execute();
                $allsongs = $statement->fetchAll();
                $_SESSION['allsongs'] =  $allsongs;



                $state = $conn['db']->prepare("SELECT artist.id,artist.name,images.image_path FROM artist join images on artist.id = images.model_id  AND images.model_name = 'artist'");
                $state->execute();
                $allartist = $state->fetchAll();
                // var_dump($allartist);
                $_SESSION['allartist'] =  $allartist;


                require "view/user.view.php";
            }

        }
        catch(Expection $e)
        {
            die($e->getMessage());
        }



