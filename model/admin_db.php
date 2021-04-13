<?php
    //function to register a new admin
    function add_admin($username, $password) {
        global $db;
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $query = 'INSERT INTO administrators (username, password)
                    VALUES (:username, :password)';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':password', $hash);
        $statement->execute();
        $statement->closeCursor();
    }

    //function to see is password and username are valid
    function is_valid_admin($username, $password) {
        global $db;
        $query = 'SELECT password FROM administrators 
                    WHERE username = :username';
        $statement = $db ->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();
        $hash = (!empty($row['password'])) ? $row['password'] : NULL; 
        return password_verify($password, $hash);
    }

    //Function to see if username exists
    function username_exists($username) {
        global $db;
        $query = 'SELECT COUNT * FROM administrators' ;
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->execute();
        $result = $statement->fetchColumn();
        $statement->closeCursor();
        return $result;
            if ($result != 0) {
                $result = true;
            } else { $result == 0; 
                    $result = false;
            }
    }
    