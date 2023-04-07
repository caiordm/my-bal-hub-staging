<?php

include 'config.php';

## Puxando os dados do input;

$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];

## Tirando os espaços do email;

$emailTrimmed = trim($email);

## Verificando se já existe algum usuário;

$usersData = fopen(USERS_DB, 'r');
while ($row = fgetcsv($usersData)) {
    if ($row[0] === $emailTrimmed) {
        header('location: index.php?err=E-mail já cadastrado use outro');
        exit();
    }
}

## Adicionando os itens no 'banco';

$usersData = fopen(USERS_DB, 'a');
fputcsv($usersData, [$email, $name, $password]);

header("location: home.php?email=$email");