<?php

    function connectToDataBase()
    {
      $sname = "localhost";
        $uname = "root";
        $password = "";

        $db_name = "test_db";

        //kopplar sever variabler med hemsidan
        $conn = mysqli_connect($sname, $uname, $password, $db_name);

        if (!$conn) 
        {
            echo"Connection Failed";
        }  
    
        return $conn;
    }
        
