<?php
session_start();
require_once("../connection/conn.php");
require_once("../DAO/Usuario.php");
if (isset($_POST['submit']) && (!empty($_POST['email'])) && (!empty($_POST['password']))) {
    $pdo = new Database();
    $email = $_POST['email'];
    $password = (md5($_POST['password']));
    $UsuarioDAO = new UsuarioDAO($pdo->getConnection());
    $user = $UsuarioDAO->efetuarLogin($email, $password);
    if ($user != "Usuário nao encontrado") {
        $_SESSION["id"] = $user->getId();
        $_SESSION['name'] = $user->getName();
        $_SESSION['last_name'] = $user->getLast_name();
        $_SESSION['email'] = $user->getEmail();
        $_SESSION['password'] = $user->getPassword();
        header("Location:../view/public/system.php");
    } else {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header("Location:../view//public/login.php?erro=1");
    }
} else {
    header('Location: ../view//public/login.php?erro=1');
}
