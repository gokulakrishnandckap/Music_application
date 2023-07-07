<!DOCTYPE html>
<html lang="en">
<head>
    <title>list</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

    Hello, <?php echo $_SESSION['login']['username']; ?>
    <div class="pop">
    <form action="/inserting" method="post" enctype="multipart/form-data">
           

            <label>Artist Name</label>
            <input type="text" name="name">

            <label>image</label>
            <input type="file" name="files[]" multiple>
            <button type="submit">Sumbit</button>

        </form>

    </div>

</body>
</html>
