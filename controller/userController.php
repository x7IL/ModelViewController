<?php
include 'model/user.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $this->userModel->addUser($username, $password);
            // Redirect to the login page after registration
            header('Location: login.php');
        } else {
            // Display the registration form
            include 'view/register.php';
        }
    }

    public function login() {
        // To be implemented
    }

    public function logout() {
        // To be implemented
    }
}
