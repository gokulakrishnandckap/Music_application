<?php

        $conn['db'] = (new Database())->db;


        try{

        $statement = $conn['db']->prepare("SELECT * FROM user_premium_request INNER JOIN users ON user_id=users.id");
        $statement->execute();
        $request = $statement->fetchAll();
        $_SESSION['REQUEST'] =  $request;


       
        require 'view/addrequest.php';
        

        }
        catch(Expection $e)
        {
            die($e->getMessage());
        }

