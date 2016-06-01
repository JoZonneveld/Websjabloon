<?php

      function connect()
      {
            $serverName       =     "localhost";
            $userName         =     "root";
            $password         =     "";
            $dbName           =     "test";
            
            
            $connect = new mysqli($serverName, $userName, $password, $dbName);
            
            if($connect->connect_error)
            {
                  die("Connection failed: " . $connect->connect_error);
            } 
            return $connect;
      }

      function insertInMedewerker($naam)
      {
            $connect = connect();

            mysqli_query($connect,"INSERT INTO medewerker (id,naam) 
                        VALUES ('','$naam')");
      }

      function deleteFromMedewerker($userid)
      {
            $connect = connect();

            mysqli_query($connect,"DELETE FROM medewerker WHERE id = '$userid'");
      }

      function updateMedewerker($userid, $naam)
      {
            $connect = connect();

            mysqli_query($connect,"UPDATE medewerker SET naam = '$naam' where id = '$userid'");
      }
?>