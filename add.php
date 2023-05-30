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
        <h4>ADD USER</h4> <hr>
        <form method="POST" autocomplete="off" action="">
            <table>
                <tr>
                    <th><label for="name">name</label></th>
                    <td><input type="text" name="name" id="name" value=""/> <br></td>
                </tr>
                <tr>
                    <th><label for="subject">Subject</label></th>
                    <td><input type="text" name="subject" id="subject" value=""/> <br></td>
                </tr>
                <tr>
                    <th><label for="message">Message</label></th>
                    <td><textarea type="text" name="message" id="message" value=""></textarea></td>
                </tr>
            </table>
            <div class="button">
                <button type="submit" onclick="submitData('insert')">Insert</button>
                <?php require 'script.html';?>
            </div>
        </form>
        <a href="home.php"> Go to home/list</a>
    </div>
</body>
</html>
