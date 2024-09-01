<?php


class AdminsModels
{
    private $mysqli;

    public function __construct()
    {
        include '../config/connection.php';
        $this->mysqli = $mysqli;
    }

    public function sign_in($email, $password)
    {
        $email = $this->mysqli->real_escape_string($email);
        $password_user = '';

        $stmt = $this->mysqli->prepare("SELECT password_user FROM Users WHERE email_user = ?");
        if (!$stmt) {
            // Handle preparation error
            echo 'Error preparing statement: ' . $this->mysqli->error;
            return;
        }

        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($password_user);

        if ($stmt->fetch()) {
            if (password_verify($password, $password_user)) {
                // Password is correct, start session
                session_start(); // Make sure session_start() is called
                $_SESSION['userData'] = $email;
                $stmt->close();
                return 200; // OK
            } else {
                $stmt->close();
                return 404; // Wrong Password
            }
        } else {
            $stmt->close();
            return 505; // User Not Found
        }

    }

    public function sign_up($email, $password){
        $email_user = $this->mysqli->real_escape_string($email);
        $password_user = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $this->mysqli->prepare("INSERT INTO users (email_user,password_user) VALUES (?,?)");
        $stmt->bind_param("ss", $email_user,$password_user);

        if ($stmt->execute()) {
            $stmt->close();
            return 200;
        } else {
            $stmt->close();
            return 404;
        }

    }

    public function __destruct()
    {
        $this->mysqli->close();
    }
}