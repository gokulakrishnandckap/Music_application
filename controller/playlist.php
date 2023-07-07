<?php



$conn['db'] = (new Database())->db;



    try{
        $id = $_POST['playlist'];
        
        $statement = $conn['db']->prepare("INSERT into playlist(song_id) values($id)");
        $statement->execute();
        header("location:/users");

    }
    catch(Expection $e)
    {
        die($e->getMessage());
    }


