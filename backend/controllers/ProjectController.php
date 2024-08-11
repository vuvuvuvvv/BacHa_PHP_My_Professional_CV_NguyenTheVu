<?php
require_once '../../common/models/Project.php';

class ProjectController
{
    // public function add()
    // {
    //     try {
    //         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //             // Validate and sanitize input
    //             $title = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : '';
    //             $content = isset($_POST['content']) ? htmlspecialchars($_POST['content']) : '';

    //             // Validate required fields
    //             if (empty($title) || empty($content)) {
    //                 throw new Exception('Title and content are required.');
    //             }

    //             // Handle file upload
    //             $imagePath = '';
    //             if (isset($_FILES['blog_image']) && $_FILES['blog_image']['error'] === UPLOAD_ERR_OK) {
    //                 $uploadDir = __DIR__ . '/../../common/upload/images/';
    //                 $timestamp = date('YmdHis');
    //                 $filename = $timestamp . '_' . basename($_FILES['blog_image']['name']);
    //                 $uploadFile = $uploadDir . $filename;

    //                 if (!move_uploaded_file($_FILES['blog_image']['tmp_name'], $uploadFile)) {
    //                     throw new Exception('Failed to move uploaded file.');
    //                 }

    //                 $imagePath = '/images/' . $filename;
    //             }

    //             // Save to database
    //             $pjId = ProjectModel::addNewBlog($title, $content, $imagePath);

    //             if (!$pjId) {
    //                 throw new Exception('Failed to add blog.');
    //             }

    //             echo json_encode(['success' => true, 'message' => 'Blog added successfully']);
    //         } else {
    //             throw new Exception('Invalid request method.');
    //         }
    //     } catch (Exception $e) {
    //         echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    //     }
    // }

    public function changeImage()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Ensure the POST request contains the necessary data
            if (!isset($_FILES['file']) || !isset($_POST['id'])) {
                echo json_encode(['status' => 'error', 'message' => 'No file or ID provided']);
                return;
            }

            // Get the Project ID and file
            $pjId = intval($_POST['id']);
            $file = $_FILES['file'];

            // Define the upload directory
            $uploadDir = __DIR__ . '/../../common/upload';

            $timestamp = date('YmdHis');
            $filename = $timestamp . '_' . basename($file['name']);
            $uploadFile = $uploadDir . '/images/'  . $filename;


            // Validate and move the uploaded file
            if ($file['error'] === UPLOAD_ERR_OK) {
                if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
                    // Get the existing Project entry
                    $pj = ProjectModel::getProjectById($pjId);
                    if ($pj) {
                        // Delete the old image file if it exists (already include '/images/')
                        $oldImagePath = $uploadDir . $pj['project_image'];
                        if (!empty($pj['project_image']) && file_exists($oldImagePath)) {
                            unlink($oldImagePath);
                        }

                        // Update the Project record with the new image
                        $image = '/images/' . $filename; // Use the uploaded file name

                        ProjectModel::updateProject($pjId, $pj['project_name'], $image, $pj['position'], $pj['description']);

                        echo json_encode(['status' => 'success', 'message' => 'Image uploaded and Project updated successfully']);
                    } else {
                        echo json_encode(['status' => 'error', 'message' => 'Project not found']);
                    }
                } else {
                    echo json_encode(['status' => 'error', 'message' => 'File move failed']);
                }
            } else {
                echo json_encode(['status' => 'error', 'message' => 'File upload error']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
        }
    }

    // public function edit()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //         // Ensure the POST request contains the necessary data
    //         if (!isset($_POST['id']) || !isset($_POST['title']) || !isset($_POST['content'])) {
    //             echo json_encode(['success' => false, 'error' => 'Missing required fields']);
    //             return;
    //         }

    //         // Get the blog ID and other fields from the POST request
    //         $pjId = intval($_POST['id']);
    //         $title = $_POST['title'];
    //         $content = $_POST['content'];

    //         // Determine which created time to use
    //         if (isset($_POST['specific_time']) && !empty($_POST['specific_time'])) {
    //             $createdTime = $_POST['specific_time'];
    //         } else {
    //             $date = new DateTime("now", new DateTimeZone('Asia/Ho_Chi_Minh'));
    //             $createdTime = $date->format('Y-m-d H:i:s');
    //         }

    //         // Get the existing blog entry
    //         $pj = ProjectModel::getBlogById($pjId);
    //         if ($pj) {
    //             // Update the blog record
    //             ProjectModel::updateBlog($pjId, $pj['image'], $title, $content, $createdTime);

    //             echo json_encode(['success' => true, 'message' => 'Project updated successfully']);
    //         } else {
    //             echo json_encode(['success' => false, 'error' => 'Project not found']);
    //         }
    //     } else {
    //         echo json_encode(['success' => false, 'error' => 'Invalid request method']);
    //     }
    // }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Ensure the POST request contains the necessary data
            if (!isset($_POST['id'])) {
                echo json_encode(['success' => false, 'error' => 'Missing required fields']);
                return;
            }

            // Get the blog ID from the POST request
            $pjId = intval($_POST['id']);

            // Get the existing blog entry
            $pj = ProjectModel::getProjectById($pjId);
            if ($pj) {
                // Retrieve the image path from the blog entry
                $imagePath = $pj['project_image'];

                // Delete the blog record
                ProjectModel::deleteProjectById($pjId);

                $uploadDir = __DIR__ . '/../../common/upload';
                if (!empty($imagePath) && file_exists($uploadDir . $imagePath)) {
                    unlink($uploadDir . $imagePath);
                }
                echo json_encode(['success' => true, 'message' => 'Project deleted successfully']);
            } else {
                echo json_encode(['success' => false, 'error' => 'Project not found']);
            }
        } else {
            echo json_encode(['success' => false, 'error' => 'Invalid request method']);
        }
    }
}
