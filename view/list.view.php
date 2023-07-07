<!DOCTYPE html>
<html lang="en">
<head>
    <title>list</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

Hello, <?php echo $_SESSION['login']['username']; ?>


<h2><?php echo $_SESSION['show'];?></h2>
<table border="0px">
    <tr>
        <th>id</th>
        <th>username</th>
        <th>email</th>
        <th>is_premium</th>
  
    </tr>
  <?php foreach($_SESSION['alluser'] as $key=>$users):?>  
    
        <form action="/delete" method="post" class="html-form">
            <tr>
                <td><?php echo $key+1 ?></td>
                <td><?php echo $users['username']?></td>
                <td><?php echo $users['email']?></td>
                <td><?php echo $users['is_premium']?></td>
                <td><button name="del" type="submit" value="<?php echo $users['id'];?>">delete</button></td>
          
       </form>
        <form action="/edit" method="post" class="html-form">
            <td><button name="edit" type="submit" value="<?php echo $users['id'];?>">Edit</button></td>
        </form> 
        <?php endforeach;?> 
    </tr>
</table>
<button class="btn"><a href="/admin">Back</a></button>

</body>
</html>
