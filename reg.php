<?php
    $servername = "localhost";
    $username = 'root';
    $password = '';
    $dbname = 'demo2002';

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sid = $_POST['sid'];
    $sname = $_POST['sname'];

    if(!$conn){
        die("connection failed".mysqli_connect_error());

    }else{

        echo("Connection successfull \n");

        $sql = "INSERT INTO stu02(sid, sname) values ($sid, '$sname')";

        if(mysqli_query($conn, $sql)){
            echo("Insertion successfull");
        }
        else{
            echo("Insertion failed");
        }


    }

    ?>