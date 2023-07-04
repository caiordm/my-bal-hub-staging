<?php 

require_once('../model/conexao.php');

try {
    if (!isset($_POST['email']) && !isset($_POST['password'])) {
        die('Dados não chegaram corretamente!');
    }
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM users WHERE email = :email AND password = :password";
    $stmt = $conn->prepare($query);

    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    $users = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if($users) {
        session_start();
        $_SESSION['auth'] = true;
        $_SESSION['name'] = $users["name"];
        $_SESSION['email'] = $users["email"];
        $_SESSION['password'] = $users['password'];
        header('location: ../view/homepage');
        exit();
    } else {
        header('location: ../view/login/index.php?err=Email ou senha errados');
        exit();
    }
} catch (PDOException $e) {
    echo "Hove algum erro na consulta!!" . $e->getMessage();
}

?>