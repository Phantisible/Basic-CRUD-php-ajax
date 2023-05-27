<?php
    require 'connection.php';
    
    if(isset($_POST['action'])){
        if($_POST['action'] == 'insert'){
            insert();
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
            echo $sql;
            // header("Location:home.html");
        
    }
    function display(){

    }
?>