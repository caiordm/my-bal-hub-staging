<?php 

session_start();

var_dump($_SESSION);

$name = $_SESSION["name"];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./styleHome.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@400;600;800&family=Bebas+Neue&display=swap&family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="main-container">
        <div class="menu">dfvrtgtrf</div>
        <div class="content">
            <section class="section1">
                <section class="section2">
                    <h1>Olá, <?= $name ?>!</h1>
                    <button id="creator" onclick="windowCreator()"> Criar História </button>
                </section>
                <section class="section3">
                    <button id="my-button" class="newHistory">
                        <ion-icon id="add-circle" name="add-circle"></ion-icon>
                        <span>New history</span>
                    </button>
                </section>
            </section>
        </div>
    </div>
    <script src="./javascript/creator.js"></script>
</body>

</html>