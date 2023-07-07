

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
            <a href="/logout"><button>logout</button></a> 
        </div>

        <h3>Hello <?php echo $_SESSION['login']['username'];?> </h3>
        
        <div class="addart">

        <form action="/addart" method="POST">
                <button type = "submit" name="new artist" value="">Add new artist</button><br><br>
            </form>
        </div>
        <div class="addsong">
        <form action="/addsong" method="POST">
                <button type = "submit" name="new song" value="">Add new song</button><br><br>
            </form>
        </div>
        <div class="listoflist">

            <form action="/list" method="POST">
                <button type = "submit" name="alluser" value="alluser">All users</button><br><br>
                <button type = "submit" name="premium" value="premium">Premium users</button><br><br>
                <button type = "submit" name="freeuser" value="freeuser">Free users</button><br><br>
            </form>
        </div>

        <div class="listoflist">

            <form action="/request" method="POST">
                <button type = "submit" name="request" value="alluser">Request List</button><br><br>
            </form> 
        </div>

    </div>





</body>

</html>
