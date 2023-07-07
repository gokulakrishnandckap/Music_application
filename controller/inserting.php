<?php

        // $conn['db'] = (new Database())->db;

// var_dump($_POST['name']);

        try{
            $name = $_POST['name'];
                    $uploadFolder = 'images/';
                $statement = $conn['db']->prepare("INSERT into artist(name) values('$name')");
                $statement->execute();
                $values = $conn['db']->prepare("SELECT * FROM artist ORDER BY id desc limit 1");
                $values->execute();
                $data = $values->fetchAll();
                $id = $data[0]['id'];
                foreach ($_FILES['files']['tmp_name'] as $key => $image) {
                    $imageTmpName = $_FILES['files']['tmp_name'][$key];
        
                    $imageName = $_FILES['files']['name'][$key];
        
        
                    $result = move_uploaded_file($imageTmpName,$uploadFolder.$imageName);
                   $imagePath = $conn['db']->prepare("INSERT into images(image_path,model_id,model_name) values('$uploadFolder$imageName',$id,'artist')");
                   $imagePath->execute();
                }

                // var_dump($_FILES);


                header("location:/admin");
            // }
        }
        catch(Expection $e)
        {
            die($e->getMessage());
        }

