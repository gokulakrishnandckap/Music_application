<?php

        $conn['db'] = (new Database())->db;

// var_dump($_POST['name']);

        try{


            $artName = $_POST['artname'];
            $values = $conn['db']->prepare("SELECT * FROM artist where name = '$artName'");
            $values->execute();
            $data = $values->fetchAll();
            $id = $data[0]['id'];

            //    var_dump($_FILES);
         
                $fileNames = $_FILES['song']['name'];
                $fileTmpname = $_FILES['song']['tmp_name'];
                $folder = "images/".$fileNames;
                move_uploaded_file($fileTmpname,$folder);    
                    $uploadFolder = 'images/';
                $statement = $conn['db']->prepare("INSERT into songs(name,artist_id) values('$folder',$id)");
                $statement->execute();
                $values = $conn['db']->prepare("SELECT * FROM songs ORDER BY id desc limit 1");
                $values->execute();
                $data = $values->fetchAll();
                $ids = $data[0]['id'];

                $fileName = $_FILES['img']['name'];
         
                $fileTmpName = $_FILES['img']['tmp_name'];
                $folders = "images/".$fileName;
                move_uploaded_file($fileTmpName,$folders);    

                   $imagePath = $conn['db']->prepare("INSERT into images(image_path,model_id,model_name) values('$folders',$ids,'song')");
                   $imagePath->execute();

            

                header("location:/admin");
            // }
        }
        catch(Expection $e)
        {
            die($e->getMessage());
        }

