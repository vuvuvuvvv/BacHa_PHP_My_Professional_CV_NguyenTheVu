<?php
require_once '../../database/db.php';

class ProjectModel {

    private static function getDbConnection() {
        return Database::getConnection();
    }

    public static function getProjectById($id) {
        $query = "SELECT * FROM projects WHERE id = :id";
        $statement = self::getDbConnection()->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public static function getAllProjects() {
        $query = "SELECT * FROM projects";
        return self::getDbConnection()->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function deleteProjectById($id) {
        $query = "DELETE FROM projects WHERE id = :id";
        $statement = self::getDbConnection()->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
    }

    public static function updateProject($id, $project_name, $project_image, $position, $description) {
        $query = "UPDATE projects SET
                    project_name = :project_name,
                    project_image = :project_image,
                    position = :position,
                    description = :description
                  WHERE id = :id";
        $statement = self::getDbConnection()->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->bindParam(':project_name', $project_name, PDO::PARAM_STR);
        $statement->bindParam(':project_image', $project_image, PDO::PARAM_STR);
        $statement->bindParam(':position', $position, PDO::PARAM_STR);
        $statement->bindParam(':description', $description, PDO::PARAM_STR);
        $statement->execute();
    }

    public static function addNewProject($project_name, $project_image, $position, $description) {
        $query = "INSERT INTO projects (project_name, project_image, position, description) VALUES 
                    (:project_name, :project_image, :position, :description)";
        $statement = self::getDbConnection()->prepare($query);
        $statement->bindParam(':project_name', $project_name, PDO::PARAM_STR);
        $statement->bindParam(':project_image', $project_image, PDO::PARAM_STR);
        $statement->bindParam(':position', $position, PDO::PARAM_STR);
        $statement->bindParam(':description', $description, PDO::PARAM_STR);
        $statement->execute();
    }
}
