<?php
class AdminDB {
    //function to register a new admin
    public static function add_admin($username, $password) {
        $db = Database::getDB();
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
    public static function is_valid_admin($username, $password) {
        $db = Database::getDB();
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
    public static function username_exists($username) {
        $db = Database::getDB();
        $query = "SELECT COUNT(*) FROM administrators WHERE username = :username";
        $statement = $db->prepare($query);
        $statement->bindParam(':username', $username);
        $statement->execute();
        $result = $statement->fetchColumn();
        return $result;
    }
}
    