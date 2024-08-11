<?php
require_once '../config/config.php';
// require_once '../models/SinhVien.php';

// url = .../frontend/web/?url=site/

// URL analysis
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';
$url = filter_var($url, FILTER_SANITIZE_URL);
$urlParts = explode('/', $url);

// Detect controller & method
$controllerName = !empty($urlParts[0]) ? ucfirst($urlParts[0]) . 'Controller' : 'SiteController';
$methodName = isset($urlParts[1]) ? $urlParts[1] : 'index';

// Check controller exists and call corresponding method name
if (file_exists('../controllers/' . $controllerName . '.php')) {
    require_once '../controllers/' . $controllerName . '.php';
    if (class_exists($controllerName)) {
        $controller = new $controllerName();
        if (method_exists($controller, $methodName)) {
            $controller->$methodName();
        } else {
            var_dump("Method $methodName not found in controller $controllerName.");
            die;
        }
    } else {
        var_dump("Controller class $controllerName not found.");
        die;
    }
} else {
    var_dump("Controller file $controllerName.php not found.");
    die;
}
