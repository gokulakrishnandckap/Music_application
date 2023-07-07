

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
        <div class="header">
            <form action="/search" method="POST">
            <input type="search" class="searchuser" name="search" placeholder = "search">
            <button type="sumbit" class= "btn" name="searc">search</button>
            </form>
           <!-- <a href="/createlist"><button name= "check" value="<?php echo $_SESSION['id']['id'];?>">Create playlist</button></a>  -->
           <form action="/createlist" method="POST">
            <button name="add" value="<?php echo $_SESSION['id']['id'];?>">Create playlist</button>
            </form>
           <a href="/yourlist"><button>yourlist</button></a> 
            <a href="/logout"><button>logout</button></a> 
            <form action="/addpremium" method="POST">
            <button name="add" value="<?php echo $_SESSION['id']['id'];?>">Add premium</button>
            </form>
        </div><br><br><br>


        <div class="share">
        <form action="/share" method="POST">
            <button name="add" value="<?php echo $_SESSION['id']['id'];?>">share</button>
            </form>
        </div>

        <h3>Hello <?php echo $_SESSION['login']['username'];?> </h3>

        <div class="img">
            <?php foreach($_SESSION['artimage'] as $single):?>
                 <img src="<?php echo $single['image_path'];?>" alt="" width="200px" > 
            <?php endforeach;?>   
           
<!-- <?php var_dump($_SESSION['imgs']);?> -->
            <?php foreach( $_SESSION['song'] as $song):?>
                
                <div class="songs">
                    <form action="/addingsong" method="POST">
                        <!-- <img src="<?php echo $song;?>" alt=""> -->
                    <audio src="<?php echo $song['name'];?>"  controls></audio>  
                        <button type="submit" name="playlist" value="<?php echo $song['id'];?>">AddPlaylist</button>
                    </form>
                </div>
          
            <?php endforeach;?>   
            

            </div>
    </div>



</body>

</html>
