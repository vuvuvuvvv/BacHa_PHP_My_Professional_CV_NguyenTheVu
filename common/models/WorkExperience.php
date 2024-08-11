<?php
require_once '../../database/db.php';

class WorkExperienceModel {

    private static function getDbConnection() {
        return Database::getConnection();
    }

    public static function getWorkExperienceById($id) {
        $query = "SELECT * FROM work_experience WHERE id = :id";
        $statement = self::getDbConnection()->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public static function getAllWorkExperiences() {
        $query = "SELECT * FROM work_experience";
        return self::getDbConnection()->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function deleteWorkExperienceById($id) {
        $query = "DELETE FROM work_experience WHERE id = :id";
        $statement = self::getDbConnection()->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
    }

    public static function updateWorkExperience($id, $company_name, $position, $start_time, $end_time, $description) {
        $query = "UPDATE work_experience SET
                    company_name = :company_name,
                    position = :position,
                    start_time = :start_time,
                    end_time = :end_time,
                    description = :description
                  WHERE id = :id";
        $statement = self::getDbConnection()->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->bindParam(':company_name', $company_name, PDO::PARAM_STR);
        $statement->bindParam(':position', $position, PDO::PARAM_STR);
        $statement->bindParam(':start_time', $start_time, PDO::PARAM_STR);
        $statement->bindParam(':end_time', $end_time, PDO::PARAM_STR);
        $statement->bindParam(':description', $description, PDO::PARAM_STR);
        $statement->execute();
    }

    public static function addNewWorkExperience($company_name, $position, $start_time, $end_time, $description) {
        $query = "INSERT INTO work_experience (company_name, position, start_time, end_time, description) VALUES 
                    (:company_name, :position, :start_time, :end_time, :description)";
        $statement = self::getDbConnection()->prepare($query);
        $statement->bindParam(':company_name', $company_name, PDO::PARAM_STR);
        $statement->bindParam(':position', $position, PDO::PARAM_STR);
        $statement->bindParam(':start_time', $start_time, PDO::PARAM_STR);
        $statement->bindParam(':end_time', $end_time, PDO::PARAM_STR);
        $statement->bindParam(':description', $description, PDO::PARAM_STR);
        $statement->execute();
    }
}
