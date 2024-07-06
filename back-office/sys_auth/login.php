<?php
session_start();
require_once("../database/connect.php");
$db = new connect();

/**
 * Check if have $_POST
 */
if (!isset($_POST["username"]) || !isset($_POST["password"])) {
    $_SESSION['resp_err'] = "Something went wrong.";
    header("Location:../login.php");
    exit;
} else {
    /**
     * Check if user or pass be empty ?
     */
    if ($_POST["username"] === "" || $_POST["password"] === "") {
        $_SESSION['resp_warn'] = "Username or Password should not be empty.";
        header("Location:../login.php");
        exit;
    } else {
        try {
            $stmt = $db->conn->prepare("SELECT * FROM user WHERE user=:username and pass=:password");
            $stmt->execute(['username' => $_POST['username'], 'password' => $_POST['password']]);

            $_countData = 0;
            $_auth_user = "";
            $_auth_role = "";
            foreach ($stmt->fetchAll() as $row) {
                $_auth_user = $row["user"];
                $_auth_role = $row["role"];
                $_countData += 1;
            }

            if ($_countData > 0) {
                /**
                 * Authentication success
                 */
                $_SESSION["auth"] = "pass";
                $_SESSION["auth_user"] = $_auth_user;
                $_SESSION["auth_role"] = $_auth_role;
                header("Location:../dashboard.php");
                exit;
            } else {
                /**
                 * Authentication fail
                 */
                $_SESSION['resp_warn'] = "Username or Password incorrect.";
                header("Location:../login.php");
                exit;
            }
        } catch (Exception $e) {
            echo "Can't fetch data : " . $e;
        }
    }
}
