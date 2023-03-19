<!-- mysqli -->
<!-- pdo -->

<?php
    $servername = "localhost";
    $username = 'root';
    $password = '';
    $dbname = 'demo2002';

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("connection failed".mysqli_connect_error());

    }else{

        echo("Connection successfull \n");

        // $sql = "create database demo2002";
        // if(mysqli_query($conn, $sql)){
        //     echo("Databases created");
        // }
        

        // $sql = "create table stu02 (sid int, sname varchar(20))";
        // if(mysqli_query($conn, $sql)){
        //     echo(" Table created ! ");
        // }else{
            //     echo("Table creation failed");
            // }
            
            $sql = "insert into stu02 (sid, sname) values (100, 'Aayush')";
            if(mysqli_query($conn, $sql)){
                    echo(" Row created ! ");
                
            }else{

                    echo("Row creation failed");
            }

    }


?>