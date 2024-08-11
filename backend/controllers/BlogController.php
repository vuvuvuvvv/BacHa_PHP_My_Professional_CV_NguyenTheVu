<?php
require_once '../../common/models/Blog.php';

class BlogController
{
    public function add()
    {
        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Validate and sanitize input
                $title = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : '';
                $content = isset($_POST['content']) ? htmlspecialchars($_POST['content']) : '';

                // Validate required fields
                if (empty($title) || empty($content)) {
                    throw new Exception('Title and content are required.');
                }

                // Handle file upload
                $imagePath = '';
                if (isset($_FILES['blog_image']) && $_FILES['blog_image']['error'] === UPLOAD_ERR_OK) {
                    $uploadDir = __DIR__ . '/../../common/upload/images/';
                    $timestamp = date('YmdHis');
                    $filename = $timestamp . '_' . basename($_FILES['blog_image']['name']);
                    $uploadFile = $uploadDir . $filename;

                    if (!move_uploaded_file($_FILES['blog_image']['tmp_name'], $uploadFile)) {
                        throw new Exception('Failed to move uploaded file.');
                    }

                    $imagePath = '/images/' . $filename;
                }

                // Save to database
                $blogId = BlogModel::addNewBlog($title, $content, $imagePath);

                if (!$blogId) {
                    throw new Exception('Failed to add blog.');
                }

                echo json_encode(['success' => true, 'message' => 'Blog added successfully']);
            } else {
                throw new Exception('Invalid request method.');
            }
        } catch (Exception $e) {
            echo json_encode(['success' => false, 'error' => $e->getMessage()]);
        }
    }

    public function changeImage()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Ensure the POST request contains the necessary data
            if (!isset($_FILES['file']) || !isset($_POST['id'])) {
                echo json_encode(['status' => 'error', 'message' => 'No file or ID provided']);
                return;
            }

            // Get the blog ID and file
            $blogId = intval($_POST['id']);
            $file = $_FILES['file'];

            // Define the upload directory
            $uploadDir = __DIR__ . '/../../common/upload';

            $timestamp = date('YmdHis');
            $filename = $timestamp . '_' . basename($file['name']);
            $uploadFile = $uploadDir . '/images/'  . $filename;


            // Validate and move the uploaded file
            if ($file['error'] === UPLOAD_ERR_OK) {
                if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
                    // Get the existing blog entry
                    $blog = BlogModel::getBlogById($blogId);
                    if ($blog) {
                        // Delete the old image file if it exists (already include '/images/')
                        $oldImagePath = $uploadDir . $blog['image'];
                        if (!empty($blog['image']) && file_exists($oldImagePath)) {
                            unlink($oldImagePath);
                        }

                        // Update the blog record with the new image
                        $image = '/images/' . $filename; // Use the uploaded file name

                        BlogModel::updateBlog($blogId, $image, $blog['title'], $blog['content'], $blog['created_at']);

                        echo json_encode(['status' => 'success', 'message' => 'Image uploaded and blog updated successfully']);
                    } else {
                        echo json_encode(['status' => 'error', 'message' => 'Blog not found']);
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

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Ensure the POST request contains the necessary data
            if (!isset($_POST['id']) || !isset($_POST['title']) || !isset($_POST['content'])) {
                echo json_encode(['success' => false, 'error' => 'Missing required fields']);
                return;
            }

            // Get the blog ID and other fields from the POST request
            $blogId = intval($_POST['id']);
            $title = $_POST['title'];
            $content = $_POST['content'];

            // Determine which created time to use
            if (isset($_POST['specific_time']) && !empty($_POST['specific_time'])) {
                $createdTime = $_POST['specific_time'];
            } else {
                $date = new DateTime("now", new DateTimeZone('Asia/Ho_Chi_Minh'));
                $createdTime = $date->format('Y-m-d H:i:s');
            }

            // Get the existing blog entry
            $blog = BlogModel::getBlogById($blogId);
            if ($blog) {
                // Update the blog record
                BlogModel::updateBlog($blogId, $blog['image'], $title, $content, $createdTime);

                echo json_encode(['success' => true, 'message' => 'Blog updated successfully']);
            } else {
                echo json_encode(['success' => false, 'error' => 'Blog not found']);
            }
        } else {
            echo json_encode(['success' => false, 'error' => 'Invalid request method']);
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Ensure the POST request contains the necessary data
            if (!isset($_POST['id'])) {
                echo json_encode(['success' => false, 'error' => 'Missing required fields']);
                return;
            }

            // Get the blog ID from the POST request
            $blogId = intval($_POST['id']);

            // Get the existing blog entry
            $blog = BlogModel::getBlogById($blogId);
            if ($blog) {
                // Retrieve the image path from the blog entry
                $imagePath = $blog['image'];

                // Delete the blog record
                $deleteResult = BlogModel::deleteBlogById($blogId);

                $uploadDir = __DIR__ . '/../../common/upload';
                if (!empty($imagePath) && file_exists($uploadDir . $imagePath)) {
                    unlink($uploadDir . $imagePath);
                }
                echo json_encode(['success' => true, 'message' => 'Blog deleted successfully']);
            } else {
                echo json_encode(['success' => false, 'error' => 'Blog not found']);
            }
        } else {
            echo json_encode(['success' => false, 'error' => 'Invalid request method']);
        }
    }
}
