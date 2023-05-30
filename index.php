<?php
    require 'connection.php';
    
    if(isset($_POST['action'])){
        if($_POST['action'] == 'insert'){
            insert();
        }else if($_POST["action"] == "edit"){
            edit();
        }else{
            delete();
        }
    }

    function insert(){
        global $conn;
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $sql = "INSERT INTO users VALUES ('','$name','$subject','$message', CURRENT_TIMESTAMP)";
        //inserting using query/ sql;
        mysqli_query($conn, $sql);
        header("Location:home.php");
        
    }
    function edit(){
        global $conn;

        $id = $_POST["id"];
        $name = $_POST["name"];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        
        $sql = "UPDATE users SET name = '$name', subject = '$subject', message = '$message' WHERE id = $id";
        mysqli_query($conn, $sql);
        echo "Updated Successfully";
    }
    function delete(){
        global $conn;
        
        $id = $_POST["action"];
        $sql = "DELETE FROM users WHERE id = $id";
        mysqli_query($conn, $sql);
        echo "Deleted Successfully";
    }
?>