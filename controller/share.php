<?php


try{
// $id = $_POST['add'];    
   $songid = $_POST['playlist'];   
$sessionid = $_SESSION['id']['id'];

    $sate = $conn['db']->query("SELECT * from  users  WHERE id = $sessionid  and is_premium = 1");
    $sate->execute();
    $datas = $sate->fetchAll();

    if($datas)
    {
        $sate = $conn['db']->query("SELECT * from  users  WHERE is_premium = 1 AND id != $sessionid");
        $sate->execute();
        $share = $sate->fetchAll();

        require "view/share.view.php";   
        // var_dump($share);
        // $sate = $conn['db']->query("SELECT * from  users  WHERE id != $id and is_premium = 1");
        // $sate->execute();
        // $datas = $sate->fetchAll();
        // var_dump()
        // echo "verified";
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