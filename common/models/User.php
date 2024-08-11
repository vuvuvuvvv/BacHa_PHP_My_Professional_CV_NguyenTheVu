<?php
require_once '../../database/db.php';

class UserModel {

    private static function getDbConnection() {
        return Database::getConnection();
    }

    public static function getUserById($id) {
        $query = "SELECT * FROM user WHERE id = :id";
        $statement = self::getDbConnection()->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public static function getAllUsers() {
        $query = "SELECT * FROM user";
        return self::getDbConnection()->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function deleteUserById($id) {
        $query = "DELETE FROM user WHERE id = :id";
        $statement = self::getDbConnection()->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
    }

    public static function updateUser($id, $fullname, $date_of_birth, $address, $email, $phone, $social_network, $description) {
        $query = "UPDATE user SET
                    fullname = :fullname,
                    date_of_birth = :date_of_birth,
                    address = :address,
                    email = :email,
                    phone = :phone,
                    social_network = :social_network,
                    description = :description
                  WHERE id = :id";
        $statement = self::getDbConnection()->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->bindParam(':fullname', $fullname, PDO::PARAM_STR);
        $statement->bindParam(':date_of_birth', $date_of_birth, PDO::PARAM_STR);
        $statement->bindParam(':address', $address, PDO::PARAM_STR);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->bindParam(':phone', $phone, PDO::PARAM_STR);
        $statement->bindParam(':social_network', $social_network, PDO::PARAM_STR);
        $statement->bindParam(':description', $description, PDO::PARAM_STR);
        $statement->execute();
    }

    public static function addNewUser($fullname, $date_of_birth, $address, $email, $phone, $social_network, $description) {
        $query = "INSERT INTO user (fullname, date_of_birth, address, email, phone, social_network, description) VALUES 
                    (:fullname, :date_of_birth, :address, :email, :phone, :social_network, :description)";
        $statement = self::getDbConnection()->prepare($query);
        $statement->bindParam(':fullname', $fullname, PDO::PARAM_STR);
        $statement->bindParam(':date_of_birth', $date_of_birth, PDO::PARAM_STR);
        $statement->bindParam(':address', $address, PDO::PARAM_STR);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->bindParam(':phone', $phone, PDO::PARAM_STR);
        $statement->bindParam(':social_network', $social_network, PDO::PARAM_STR);
        $statement->bindParam(':description', $description, PDO::PARAM_STR);
        $statement->execute();
    }
}
