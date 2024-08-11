<?php
require_once '../../database/db.php';

class EducationModel {

    private static function getDbConnection() {
        return Database::getConnection();
    }

    public static function getEducationById($id) {
        $query = "SELECT * FROM education WHERE id = :id";
        $statement = self::getDbConnection()->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public static function getAllEducations() {
        $query = "SELECT * FROM education";
        return self::getDbConnection()->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function deleteEducationById($id) {
        $query = "DELETE FROM education WHERE id = :id";
        $statement = self::getDbConnection()->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
    }

    public static function updateEducation($id, $school_name, $major, $start_time, $end_time) {
        $query = "UPDATE education SET
                    school_name = :school_name,
                    major = :major,
                    start_time = :start_time,
                    end_time = :end_time
                  WHERE id = :id";
        $statement = self::getDbConnection()->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->bindParam(':school_name', $school_name, PDO::PARAM_STR);
        $statement->bindParam(':major', $major, PDO::PARAM_STR);
        $statement->bindParam(':start_time', $start_time, PDO::PARAM_STR);
        $statement->bindParam(':end_time', $end_time, PDO::PARAM_STR);
        $statement->execute();
    }

    public static function addNewEducation($school_name, $major, $start_time, $end_time) {
        $query = "INSERT INTO education (school_name, major, start_time, end_time) VALUES 
                    (:school_name, :major, :start_time, :end_time)";
        $statement = self::getDbConnection()->prepare($query);
        $statement->bindParam(':school_name', $school_name, PDO::PARAM_STR);
        $statement->bindParam(':major', $major, PDO::PARAM_STR);
        $statement->bindParam(':start_time', $start_time, PDO::PARAM_STR);
        $statement->bindParam(':end_time', $end_time, PDO::PARAM_STR);
        $statement->execute();
    }
}
