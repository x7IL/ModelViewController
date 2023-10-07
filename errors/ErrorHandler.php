<?php

class ErrorHandler {

    public function handleException(Exception $e) {
        // Log the errors (you can integrate proper logging later)
        error_log($e->getMessage());

        if ($e instanceof NotFoundException) {
            // Handle not found errors
            include 'view/404.php';
        } elseif ($e instanceof DatabaseException) {
            // Handle database errors
            include 'view/database_error.php';
        } else {
            // Handle generic errors
            include 'view/errors.php';
        }
    }
}
