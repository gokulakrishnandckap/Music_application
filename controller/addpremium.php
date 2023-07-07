<?php

   

$conn['db'] = (new Database())->db;
    
//  header("location:/users");


    try{
        // $id = $_POST['playlist'];
        $id = $_POST['add'];
        // var_dump($id);
        $statement = $conn['db']->prepare("INSERT into user_premium_request(user_id) values($id)");
        $statement->execute();

        header("location:/users");

    }
    catch(Expection $e)
    {
        die($e->getMessage());
    }

