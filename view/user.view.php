

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
           <?php if($_SESSION['id']['id']):?>
           <form action="/createlist" method="POST">
            <button name="add" value="<?php echo $_SESSION['id']['id'];?>">Create playlist</button>
            </form>
           <a href="/yourlist"><button>yourlist</button></a> 
            <a href="/logout"><button>logout</button></a> 
            <form action="/addpremium" method="POST">
            <button name="add" value="<?php echo $_SESSION['id']['id'];?>">Add premium</button>
            </form>
            <?php else : ?>
                <form action="/login" method="POST">
            <button type="submit">login</button>
            </form>
            <?php endif; ?>
        </div><br><br><br>

        
        <h3 style="color:red;"><?php echo $_SESSION['error'];?></h3>
            <?php unset($_SESSION['error']);?>
        <h3>Hello <?php echo $_SESSION['login']['username'];?> </h3>

        <div class="img">
            <?php foreach($_SESSION['artimage'] as $single):?>
                 <img src="<?php echo $single['image_path'];?>" alt="" width="200px" > 
            <?php endforeach;?>   
           

                <div class="list" style="display:flex;justify-content: space-around;">

                
        <div class="allsongs">

                    <?php foreach($_SESSION['allsongs'] as $allsongs):?>
                            
                            <div class="songs">
                                <form action="/share" method="POST">
                                    <h4>Artist Name: <?php echo $allsongs['artname'];?></h4>
                                    <img src="<?php echo $allsongs['image_path'];?>" alt="" width="100px">
                                     <audio src="<?php echo $allsongs['name'];?>"  controls></audio>  
                                     <?php if($_SESSION['id']['id']):?>
                                    <button type="submit" name="playlist" value="<?php echo $allsongs['id'];?>">Share</button>
                                    <?php endif; ?>
                                </form>
                            </div>
                    
                        <?php endforeach;?>  

                        </div>

                        <div class="allartist">
                            <form action="/follow" method="POST">
                                <?php foreach($_SESSION['allartist'] as $allartist):?>
                                    <div class="artist">
                                   
                                            <h4>Artist Name: <?php echo $allartist['name'];?></h4>
                                            <img src="<?php echo $allartist['image_path'];?>" alt="" width="100px">
                                            <?php if(in_array($allartist['id'], $_SESSION['follow'])) : ?>
                                                 <button type="submit" name="follow" value="<?php echo $allartist['id'];?>">Following</button>
                                            <?php else : ?>
                                                <button type="submit" name="follow" value="<?php echo $allartist['id'];?>">Follow</button>
                                            <?php endif; ?>
                                    </div>
                                <?php endforeach;?> 
                        
                            
                            </form>
                       
                        </div>
            </div>
<!--         
            <?php foreach( $_SESSION['song'] as $song):?>
                
                <div class="songs">
                    <form action="/addingsong" method="POST">

                    <audio src="<?php echo $song['name'];?>"  controls></audio>  
                        <button type="submit" name="playlist" value="<?php echo $song['id'];?>">AddPlaylist</button>
                    </form>
                </div>
          
            <?php endforeach;?>    -->
            

            </div>
    </div>



</body>

</html>
