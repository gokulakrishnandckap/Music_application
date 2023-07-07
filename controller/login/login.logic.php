<?php
//require 'connection.php';

$conn['db'] = (new Database())->db;


$email = $_POST['email'];

$password = $_POST['password'];



if($email && $password)
{
    $data = $conn['db']->query("SELECT * FROM users where email='$email' and password = '$password'");
    $exits = $data->fetchAll();
    // var_dump($exits[0]['is_admin']);
    if($exits && $exits[0]['is_admin'] == 0)
    {
        $_SESSION['login'] = [
            'username' => $exits[0]['username']
        ];

        $_SESSION['id'] = [
            'id' => $exits[0]['id']
        ];
        
        header('location:/users');
    }
    else if($exits && $exits[0]['is_admin'] == 1)
    {
        $_SESSION['login'] = [
            'username' => $exits[0]['username']
        ];
        header('location:/admin');
    }
    else{
       $_SESSION['Incorrect Details'] = "Incorrect Details";
        header('location:/login');
    }
}