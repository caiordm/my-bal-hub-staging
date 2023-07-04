<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBAL Hub</title>
    <link rel="stylesheet" href="./styleCadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@400;500;600;700;800&family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="contents">
        <div class="texts">
            <h2>My</h2>
            <h2 class="text-green">BECOME A LEGEND</h2>
            <h2>Hub</h2>
            <h4>Documente sua história e seus feitos no Rumo ao Estrelato, desde títulos, recordes, clubes, estatísticas e muito mais.</h4>
        </div>
    </div>
    <div class="forms">
        <form action="../../controller/cadastroUsuario.php" method="post">
            <h3>CADASTRE-SE</h3>
            <?php if (isset($_GET['success'])) : ?>
                <div class="success">
                    <i class="bi bi-check-circle-fill"></i><?= $_GET['success'] ?>
                </div>
            <?php endif ?>
            <?php if (isset($_GET['err'])) : ?>
                <div class="alert">
                <i class="bi bi-exclamation-diamond-fill"></i><?= $_GET['err'] ?> 
                </div>
            <?php endif ?>
            <div class="inputs">
                <input type="text" name="name" placeholder="Seu nome" required>
                <input type="email" name="email" placeholder="Seu e-mail" required>
                <input type="password" name="password" placeholder="Sua senha" required>
            </div>
            <button type="submit">Cadastre-se</button>
            <a href="../login/">Já tem uma conta? Entre</a>
        </form>
    </div>
</body>

</html>