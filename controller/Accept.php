<?php


    // var_dump($_POST['del']);

    try{
        $id = $_POST['del'];
        $data = $conn['db']->query("UPDATE users SET is_premium = 1 WHERE id = $id");
        // $exits = $data->fetchAll();
        $data = $conn['db']->query("UPDATE user_premium_request SET is_progress = 'completed' WHERE user_id = $id");

        header("location:/admin");

        // UPDATE users SET is_premium = 1 WHERE id = $id

    }

    catch(Expection $e)
    {
        die($e->getMessage());
    }