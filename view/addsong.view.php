<!DOCTYPE html>
<html lang="en">
<head>
    <title>list</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

    Hello, <?php echo $_SESSION['login']['username']; ?>
    <div class="pop">
    <form action="/insertsong" method="post" enctype="multipart/form-data">
           

            <label>Artist Name</label>
            <input type="text" name="artname">
            <label>song Name</label>
            <input type="file" name="song" >
            <label>image</label>
            <input type="file" name="img" >
            <button type="submit">Sumbit</button>

        </form>

    </div>

</body>
</html>
