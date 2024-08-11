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
        $web_title = "My Professional";
        $web_content = "../views/home.php";
        
        $userModel = new UserModel();
        $projectModel = new ProjectModel();
        $educationModel = new EducationModel();
        $workExperienceModel = new WorkExperienceModel();
        $blogModel = new BlogModel();
        
        $user = $userModel::getUserById(1);
        $projects = $projectModel::getAllProjects();
        $educations = $educationModel::getAllEducations();
        $blogs = $blogModel::getAllBlogs();
        $workExperience = $workExperienceModel::getAllWorkExperiences();

        global $web_layout;
        include_once $web_layout;
    }

    public function about()
    {
        var_dump("Test");
        die;
    }
}
