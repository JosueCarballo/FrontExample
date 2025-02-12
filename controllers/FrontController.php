<?php

require_once 'controllers/HomeController.php';
require_once 'controllers/UserController.php';
require_once 'controllers/ConfigurationController.php';

class FrontController {
    public function handleRequest() {
        // Obtener la acción desde la URL (por ejemplo, ?action=home)
        $action = isset($_GET['action']) ? $_GET['action'] : 'home';

        switch ($action) {
            case 'home':
                $controller = new HomeController();
                $controller->index();
                break;
            case 'user':
                $controller = new UserController();
                $controller->index();
                break;
            case 'configuration':
                $controller = new ConfigurationController();
                $controller->index();
                break;
            default:
                echo "404 Not Found";
                break;
        }
    }
}