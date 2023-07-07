

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
        <!-- <div class="header">
            <form action="/search" method="POST">
            <input type="search" class="searchuser" name="search" placeholder = "search">
            <button type="sumbit" class= "btn" name="searc">search</button>
            </form>
           <a href="/allplaylist"><button>Your playlist</button></a> 
            <a href="/logout"><button>logout</button></a> 
        </div> -->

        <h3>Hello <?php echo $_SESSION['login']['username'];?> </h3>

        <div class="img">          

            <?php foreach( $_SESSION['playlist'] as $song):?>
                <div class="songs">
                    <form action="/playlist" method="POST">
                    <audio src="<?php echo $song['name'];?>"  controls></audio>  
                        <button type="submit" name="playlist" value="<?php echo $song['id'];?>">remove</button>
                    </form>
                </div>
          
            <?php endforeach;?>   
            <a href="/users"><button>back</button></a>

            
            
          <!-- <audio src="song1.mp3" controls></audio> -->
            </div>
    </div>



</body>

</html>
