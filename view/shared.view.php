

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
        <!-- var_dump($datas); -->
            <?php foreach($datas as $send):?>
                <form action="/shared" method="POST">
              
                    <h1>Shared Songs</h1>
                   <a href="/users">Back</a> 
                    <h4><?php echo $send['username'];?></h4>

                    <img src="<?php echo $send['imagepath'];?>" alt="" width="100px">
                    <audio src="<?php echo $send['songname'];?>"  controls></audio> 
                </form>
              

            <?php endforeach;?>   
           

        </div>



</body>

</html>
