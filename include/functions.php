<?php
      function insertIntoSystem($userName, $password, $email)
      {
            $connect = connectWithDatabase("localhost", "root", "", "registratiesysteem");

            $password = md5($password);

            $sql = "INSERT INTO `users` (`UserName`, `Password`, `Email`) VALUES ('" .$userName. "', '" .$password. "', '" .$email. "');";

            $result = $connect->query($sql);
      }

      function selectFromSystem($id)
      {
            $connect = connectWithDatabase("localhost", "root", "", "registratiesysteem");

            $select = "SELECT * FROM `users` WHERE Id='" .$id. "'";

            $result = $connect->query($select);
            return $result->fetch_all();
      }

      function deleteFromSystem($id)
      {
            $connect = connectWithDatabase("localhost", "root", "", "registratiesysteem");

            $delete = "DELETE FROM `users` WHERE id='" .$id. "'";
            
            $result = $connect->query($delete);
      }

      function updateUsers($id, $newUserName, $newPassword, $newEmail)
      {
            $connect = connectWithDatabase("localhost", "root", "", "registratiesysteem");

            $update = "UPDATE `users` SET" 
                  .($newUserName != null? ", UserName='" .$newUserName . "'" : "") 
                  .($newPassword != null? ", Password='" .$newPassword . "'" : "") 
                  .($newEmail != null? ", Email='" .$newEmail . "'" : "") 
                  ."' WHERE id='" .$id. "';";
            
            $update = str_replace("SET,", "SET", $update);
            
            $result = $connect->query($update);
      }

      function selectFromMedewerker($id)
      {

            $select = "SELECT * FROM `medewerker`";

            $result = $connect->query($select);
            return $result->fetch_all();
      }
?>