<?php

require_once('../model/conexao.php');

try {
    if (!isset($_POST['name']) && !isset($_POST['email']) && !isset($_POST['password'])) {
        die('Dados não chegaram corretamente!');
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT email FROM users WHERE email = :email;";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);

    if ($stmt->execute()) {
        if ($stmt->rowCount() > 0) {
            header('location: ../view/cadastro/index.php?err=Já existe um usuario com este email');
            exit();
        }
    }

    $query = "INSERT INTO users(name, email, password) VALUES(:name, :email, :password);";
    $stmt = $conn->prepare($query);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
        header('location: ../view/cadastro/index.php?success=Cadastrado com sucesso!');
        exit();
    } else {
        header('location: ../view/cadastro/index.php?success=Não conseguimos te cadastrar :-(');
        exit();
    }
} catch (PDOException $e) {
    echo 'Houve algum erro na consulta ao banco:' . $e->getMessage();
}
