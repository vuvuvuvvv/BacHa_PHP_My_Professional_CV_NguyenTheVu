<?php
require_once '../../database/db.php';

class ContactModel {

    private static function getDbConnection() {
        return Database::getConnection();
    }

    public static function getContactById($id) {
        $query = "SELECT * FROM contact WHERE id = :id";
        $statement = self::getDbConnection()->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public static function getAllContacts() {
        $query = "SELECT * FROM contact";
        return self::getDbConnection()->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function deleteContactById($id) {
        $query = "DELETE FROM contact WHERE id = :id";
        $statement = self::getDbConnection()->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
    }

    public static function updateContact($id, $name, $email, $subject, $message) {
        $query = "UPDATE contact SET
                    name = :name,
                    email = :email,
                    subject = :subject,
                    message = :message
                  WHERE id = :id";
        $statement = self::getDbConnection()->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->bindParam(':name', $name, PDO::PARAM_STR);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->bindParam(':subject', $subject, PDO::PARAM_STR);
        $statement->bindParam(':message', $message, PDO::PARAM_STR);
        $statement->execute();
    }

    public static function addNewContact($name, $email, $subject, $message) {
        $query = "INSERT INTO contact (name, email, subject, message) VALUES 
                    (:name, :email, :subject, :message)";
        $statement = self::getDbConnection()->prepare($query);
        $statement->bindParam(':name', $name, PDO::PARAM_STR);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->bindParam(':subject', $subject, PDO::PARAM_STR);
        $statement->bindParam(':message', $message, PDO::PARAM_STR);
        $statement->execute();
    }
}
