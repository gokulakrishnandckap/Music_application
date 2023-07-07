<!DOCTYPE html>
<html lang="en">
<head>
    <title>list</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

    Hello, <?php echo $_SESSION['login']['username']; ?>
    <div class="pop">
    <?php if($_SESSION['error']) : ?>
            <h3><?php echo $_SESSION['error'];?></h3>
        <?php endif; ?>

        <?php unset($_SESSION['error']);?>
    <form action="/create" method="post" enctype="multipart/form-data">
           

            <label>Name</label>
            <input type="text" name="name">
            <button type="submit">Sumbit</button>

        </form>

    </div>

</body>
</html>
