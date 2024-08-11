<?php
require_once '../../database/db.php';

class BlogModel
{

    private static function getDbConnection()
    {
        return Database::getConnection();
    }

    public static function getBlogById($id)
    {
        $query = "SELECT * FROM blog WHERE id = :id";
        $statement = self::getDbConnection()->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public static function getAllBlogs()
    {
        $query = "SELECT * FROM blog";
        return self::getDbConnection()->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function deleteBlogById($id)
    {
        $query = "DELETE FROM blog WHERE id = :id";
        $statement = self::getDbConnection()->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
    }

    public static function updateBlog($id, $image, $title, $content, $createdTime)
    {
        $query = "UPDATE blog SET
                    image = :image,
                    title = :title,
                    content = :content,
                    created_at = :created_at
                  WHERE id = :id";
        $statement = self::getDbConnection()->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->bindParam(':image', $image, PDO::PARAM_STR);
        $statement->bindParam(':title', $title, PDO::PARAM_STR);
        $statement->bindParam(':content', $content, PDO::PARAM_STR);
        $statement->bindParam(':created_at', $createdTime, PDO::PARAM_STR);
        $statement->execute();
    }

    public static function addNewBlog($title, $content, $image)
    {
        try {
            // Prepare the SQL query
            $query = "INSERT INTO blog (image, title, content) VALUES (:image, :title, :content)";
            $statement = self::getDbConnection()->prepare($query);

            // Bind parameters
            $statement->bindParam(':image', $image, PDO::PARAM_STR);
            $statement->bindParam(':title', $title, PDO::PARAM_STR);
            $statement->bindParam(':content', $content, PDO::PARAM_STR);

            // Execute the statement
            $statement->execute();

            // Check if a row was inserted
            if ($statement->rowCount() > 0) {
                return ['success' => true, 'message' => 'Blog added successfully'];
            } else {
                return ['success' => false, 'message' => 'Failed to add blog'];
            }
        } catch (PDOException $e) {
            // Return error message if an exception occurs
            return ['success' => false, 'message' => 'Database error: ' . $e->getMessage()];
        }
    }
}
