<?php

require_once('../../model/conexao.php');

session_start();
$name = $_SESSION["name"];
$id = $_SESSION["userId"];

try {

    
    $sql = "SELECT * FROM histories WHERE user_id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    
    $histories = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
} catch(PDOException $e) {
    echo $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../public/css/styleHome.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@400;600;800&family=Open+Sans:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <aside>
        <h2>Olá, <?= $name ?>!</h2>
    </aside>
    <main>
        <div class="header-main">
            <h1>Suas histórias</h1>
            <a href="#">
                <b>+</b> Nova História
            </a>
        </div>
        <section>
            <?php foreach($histories as $history): ?>
            <a href="#" class="card">
                <div class="texts">
                    <h3><?= $history['title'] ?></h3>
                    <p><?= $history['description'] ?></p>
                </div>
                <div class="infos">
                    <span>Clube atual: <?= $history['current'] ?></span>
                    <span>Início da carreira: <?= $history['begin'] ?></span>
                </div>
            </a>
            <?php endforeach ?>
        </section>
    </main>
</body>
</html>