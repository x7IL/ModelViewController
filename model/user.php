<?php
class UserModel {
    public function addUser($username, $password) {
        // Normally, you'd add the user to a database here
        // But for this example, we'll just print out the data
        echo "User added: $username";
    }
}
