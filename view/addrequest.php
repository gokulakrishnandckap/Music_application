
<!-- var_dump($_SESSION['REQUEST']); -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>list</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

Hello, <?php echo $_SESSION['login']['username']; ?>

    <!-- <?php var_dump($_SESSION['REQUEST']);?> -->

<table border="0px">
    <tr>
        <th>id</th>
        <th>username</th>
        <th>email</th>
        <th>Action</th>
  
    </tr>
  <?php foreach($_SESSION['REQUEST'] as $key=>$users):?>  
    
        <form action="/Accept" method="post" class="html-form">
            <tr>
                <td><?php echo $key+1 ?></td>
                <td><?php echo $users['username']?></td>
                <td><?php echo $users['email']?></td>

                <td><button name="del" type="submit" value="<?php echo $users['id'];?>">Accept</button></td>
          
       </form>
        <form action="/Reject" method="post" class="html-form">
            <td><button name="edit" type="submit" value="<?php echo $users['id'];?>">Reject</button></td>
        </form> 
        <?php endforeach;?> 
    </tr>
</table>
<button class="btn"><a href="/admin">Back</a></button>

</body>
</html>
