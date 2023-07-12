

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Music application
    </title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">


        <div class="shared">
        
            <?php foreach($share as $send):?>
                <form action="/shared" method="POST">

                 <!-- <?php var_dump($songid);?> -->
                    <input type="text" name="songid"  value="<?php echo $songid;?>" hidden>
                    <h4><?php echo $send['username'];?></h4>
                    <button type="sumbit" name="userid" value="<?php echo $send['id'];?>">share</button>
                </form>
              

            <?php endforeach;?>   
           

        </div>



</body>

</html>
