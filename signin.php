<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBAL Hub</title>
    <link rel="stylesheet" href="styleSignin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@400;600;800&family=Open+Sans:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="forms">
        <form action="login.php" method="post">
            <h3>ENTRAR</h3>
            <div class="inputs">
                <input type="email" name="email" placeholder="Seu e-mail" required>
                <input type="password" name="password" placeholder="Sua senha" required>
                <?php if (isset($_GET['err'])) : ?>
                    <div> <?= $_GET['err'] ?> </div>
                <?php endif ?>
            </div>
            <button type="submit">Entrar</button>
            <a href="index.php">Não tem conta? Cadastre-se</a>
        </form>
    </div>
    <div class="contents">
        <div class="texts">
            <h2>My</h2>
            <h2 class="text-green">BECOME A LEGEND</h2>
            <h2>Hub</h2>
            <h4>Documente sua história e seus feitos no Rumo ao Estrelato, desde títulos, recordes, clubes, estatísticas e muito mais.</h4>
        </div>
    </div>
</body>

</html>