<?php 

include 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];

$emailTrimmed = trim($email);
## Verificando se a conta existe 

$usersData = fopen(USERS_DB, 'r');

## Se o email e senha forem iguais vai pro home com o email no header
## Senão diz que tá errado a senha ou o email;

while ($row = fgetcsv($usersData, 1000, ",")) {
    if ($row[0] === $emailTrimmed) {
        if ($row[2] === $password) {
            header("location: home.php?email=$email");
            exit();
            http_response_code(302);
        }
    } else {
        header('location: signin.php?err=E-mail ou senha errados!');
    }
}

?>