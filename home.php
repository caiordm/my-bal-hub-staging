<?php

include 'config.php';

## Puxei esse email do header que veio do add ou login;

$email = $_GET['email'];
$dataUsers = fopen(USERS_DB, 'r');

while ($row = fgetcsv($dataUsers)) {
    if ($row[0] == $email) {
        list($email, $name, $password) = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Voce entrou! <?= $name ?></h1>
</body>

</html>