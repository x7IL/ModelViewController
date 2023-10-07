<?php

// Include the error handling classes
require_once 'errors/ErrorHandler.php';
require_once 'errors/NotFoundException.php';
require_once 'errors/DatabaseException.php';
require_once 'model/database.php';  // Ensure the database class is included

// Set the custom error handler
$handler = new ErrorHandler();
set_exception_handler([$handler, 'handleException']);

// Include other necessary files and configurations
include 'controller/mainController.php';
// ... (include other necessary files)

// Initialize and route the request (as per your MVC logic)
$controller = new MainController();
$controller->home();

// Other logic for your index.php can go here ...
