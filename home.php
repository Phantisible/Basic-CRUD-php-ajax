<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <h4>Home List</h4>
        <form method="GET" action="" autocomplete="off">
            <label for=""> NAME </label>
            <table>
                <tr>
                    <th> ID </th>
                    <th> Name </th>
                    <th> Subject </th>
                    <th> Message </th>
                    <th> Date </th>
                    <th> Action </th>
                </tr>
                <?php
                    require 'connection.php';
                    $rows = mysqli_query($conn, "SELECT * FROM users");
                    $x = 1;
                ?>
                <?php foreach($rows as $row):?>
                <tr id = <?php echo $row['id'];?>>
                    <td> <?php echo $row['id'];?> </td>
                    <td> <?php echo $row['name'];?></td>
                    <td> <?php echo $row['subject'];?></td>
                    <td> <?php echo $row['message'];?></td>
                    <td> <?php echo $row['date'];?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <button type="button" onclick="submitData(<?php echo $row['id'];?>)">Delete</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <div class="button">
                <a href="add.php">Add User</a>
                <?php require 'script.html';?>
            </div>
       </form>
    </div>
</body>
</html>