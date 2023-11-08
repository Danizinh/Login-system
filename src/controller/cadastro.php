<?php
session_start();
require_once("../connection/conn.php");
require_once("../DAO/Usuario.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submit']) && (!empty($_POST['name'])) && (!empty($_POST['last_name'])) && (!empty($_POST['email'])) && (!empty($_POST['password']))) {
        $pdo = new Database();
        $name = $_POST['name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $UsuarioDAO = new UsuarioDAO($pdo->getConnection());
        $result = $UsuarioDAO->efetuarCadastro($name, $last_name, $email, $password);
        if ($result) {
            header('Location:../view/public/login.php');
        } else {
            header('Location:../view/public/cadastro.php?erro=4');
        }
    } else {
        header('Location:../view/public/cadastro.php?erro=4');
    }
}
