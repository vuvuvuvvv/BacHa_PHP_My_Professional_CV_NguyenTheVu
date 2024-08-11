<?php
require_once '../../common/models/User.php';
require_once '../../common/models/Project.php';
require_once '../../common/models/Blog.php';
require_once '../../common/models/Contact.php';
require_once '../../common/models/Education.php';
require_once '../../common/models/WorkExperience.php';
require_once '../config/config.php';

class SiteController
{
    public function index()
    {
        $web_title = "Dashboard";
        $web_content = "../views/dashboard.php";
        
        $userModel = new UserModel();
        $projectModel = new ProjectModel();
        $educationModel = new EducationModel();
        $workExperienceModel = new WorkExperienceModel();
        $blogModel = new BlogModel();
        $contactModel = new ContactModel();
        
        $user = $userModel::getUserById(1);
        $projects = $projectModel::getAllProjects();
        $educations = $educationModel::getAllEducations();
        $blogs = $blogModel::getAllBlogs();
        $workExperience = $workExperienceModel::getAllWorkExperiences();
        $contact = $contactModel::getAllContacts();

        global $web_layout;
        include_once $web_layout;
    }

    public function admin()
    {
        var_dump("Test");
        die;
    }
}
