<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>
    table{
        background-color: grey;
    }
</style>
<body>
    <div class="content">
        <h4>EDIT USER</h4> <hr>
        <form method="POST" autocomplete="off" action="home.php">
            <?php 
                require 'connection.php';
                $id = $_GET["id"];
                echo $_GET["id"];
                $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = $id"));
                echo $rows['id'];
            ?>
            <table>
                <tr>
                    <input type="hidden" id="id" value="<?php echo $rows['id'];?>"/>
                    <th><label for="name">name</label></th>
                    <td><input type="text" name="name" id="name" value="<?php echo $rows['name'];?>"/> <br></td>
                </tr>
                <tr>
                    <th><label for="subject">Subject</label></th>
                    <td><input type="text" name="subject" id="subject" value="<?php echo $rows['subject'];?>"/> <br></td>
                </tr>
                <tr>
                    <th><label for="message">Message</label></th>
                    <td><textarea type="text" name="message" id="message" value="<?php echo $rows['message'];?>"></textarea></td>
                </tr>
            </table>
            <div class="button">
                <button type="submit" onclick="submitData('edit')">Edit</button>
                <?php require 'script.html';?>
            </div>
        </form>
        <a href="home.php"> Go to home/list</a>
    </div>
</body>
</html>
