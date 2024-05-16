<?php
session_start();
include "../DB_connection.php";

// Vérifie si la méthode de requête est POST
function isPostRequest() {
    return $_SERVER["REQUEST_METHOD"] === "POST";
}

// Redirige vers la page de connexion avec un message d'erreur
function redirectToLoginWithError($error) {
    header("Location: ../login.php?error=$error");
    exit;
}

// Valide les champs du formulaire
function validateFormFields($uname, $pass, $role) {
    return !empty($uname) && !empty($pass) && !empty($role);
}
/*
if (empty($uname)) {
    $em  = "Username is required";
    header("Location: ../login.php?error=$em");
    exit;
}else if (empty($pass)) {
    $em  = "Password is required";
    header("Location: ../login.php?error=$em");
    exit;
}else if (empty($role)) {
    $em  = "An error Occurred";
    header("Location: ../login.php?error=$em");
    exit;
}

*/






// Récupère la table associée au rôle
function getRoleTable($role) {
    $rolesTables = [
        '1' => 'admin',
        '2' => 'teacher',
        '3' => 'student',
        '4' => 'former'
    ];
    return $rolesTables[$role] ?? null;
}

if (isPostRequest()) {
    $uname = trim($_POST['uname']);
    $pass = $_POST['pass'];
    $role = $_POST['role'];

    if (!validateFormFields($uname, $pass, $role)) {
        redirectToLoginWithError("All fields are required");
    }

    $table = getRoleTable($role);

    if (!$table) {
        redirectToLoginWithError("Invalid role");
    }

    $stmt = $conn->prepare("SELECT id_user, username, password FROM $table WHERE username = ?");
    $stmt->execute([$uname]);

    if ($stmt->rowCount() === 1) {
        $user = $stmt->fetch();
        $user_id = $user['id_user'];
        $username = $user['username']; 
        $db_password = $user['password'];

        if ($pass === $db_password) { 
            $_SESSION['role'] = $table;
            $_SESSION[$table.'_id'] = $user_id;
            $_SESSION[$table.'_username'] = $$username;
            header("Location: ../$table/dashboard.php");
            exit;
        } else {
            redirectToLoginWithError("Incorrect password");
        }
    } else {
        redirectToLoginWithError("User not found");
    }
} else {
    header("Location: ../login.php");
    exit;
}
?>
