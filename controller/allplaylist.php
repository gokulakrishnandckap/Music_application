

<?php


// // echo "lkjh";

$conn['db'] = (new Database())->db;
    
//  header("location:/users");


    try{


        $id = $_POST['add'];
        // var_dump($name);
        
        $values = $conn['db']->prepare("SELECT * FROM users where id = $id");
        $values->execute();
        $datas = $values->fetchAll();
        if($datas[0]['is_premium']){
            require 'view/createplay.php';
        }
        else
        {
            header("location:/users");
        }
        
    }
    catch(Expection $e)
    {
        die($e->getMessage());
    }

// require 'view/createplay.php';

