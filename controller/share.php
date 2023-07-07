<?php


try{
$id = $_POST['add'];

    $sate = $conn['db']->query("SELECT * from  users  WHERE id = $id and is_premium = 1");
    $sate->execute();
    $datas = $sate->fetchAll();
    // var_dump($datas);
    if($datas)
    {
        $sate = $conn['db']->query("SELECT * from  users  WHERE id != $id and is_premium = 1");
        $sate->execute();
        $datas = $sate->fetchAll();

        // var($datas

    }
    else{
        header("location:/users");
    }
}

catch(Expection $e)
{
    die($e->getMessage());
}