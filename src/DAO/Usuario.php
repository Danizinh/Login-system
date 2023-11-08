<?php

require_once("../model/Usuario.php");
class UsuarioDAO
{
    private $pdo;

    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    function listarUsuario()
    {
        $sql = "SELECT * FROM usuario";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function inserirUsuario($usuario)
    {
        $sql = "INSERT INTO usuario(name,last_name,email,password) VALUES(:name,:last_name,:email,:password)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':name', $usuario['name']);
        $stmt->bindParam(':last_name', $usuario['last_name']);
        $stmt->bindParam(':email', $usuario['email']);
        $stmt->bindParam(':password', $usuario['password']);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function atualizarUsuario($id, $name, $last_name, $email, $password)
    {
        $sql = "UPDATE usuario SET name=:name, last_name=:last_name, email=:email, password=:password WHERE id=:id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function excluirUsuario($id)
    {
        $sql = "DELETE FROM usuario WHERE id=:id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function efetuarLogin($email, $password)
    {
        $sql = "SELECT * FROM usuario WHERE email=:email and password=:password";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                return new Usuario(
                    $user["id"],
                    $user["name"],
                    $user["last_name"],
                    $user["email"],
                    $user["password"]
                );
            } else {
                return "Usuário não encontrado";
            }
        }
    }

    function efetuarCadastro($name, $last_name, $email, $password)
    {
        $sql = "SELECT * FROM usuario WHERE email=:email";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        if ($stmt->rowCount() <= 0) {
            $sql = "INSERT INTO usuario (name, last_name, email, password) VALUES (:name, :last_name, :email, :password)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(":name", $name);
            $stmt->bindValue(":last_name", $last_name);
            $stmt->bindValue(":email", $email);
            $stmt->bindValue(":password", $password);
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
}
