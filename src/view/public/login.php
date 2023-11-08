<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../view/assets/css/all.css">
    <link rel="icon" href="./img/Cartoon-Lâmpada-PNG.png">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@100&display=swap" rel="stylesheet">
    <meta name="description" content="Bem-vindos(a). Faça login para conferir as grandes novidade obtidas esse semestre.">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <title>Entre com a sua Conta</title>
</head>

<body>
    <div class="div-container">
        <div class="div-contact-box">
            <div class="div-left">
            </div>
            <div class="div-right">
                <h2>
                    Log in
                </h2>
                <form action="../../controller/login.php" method="POST">
                    <input type="text" name="email" class="div-field" placeholder="email@email.com">
                    <input type="password" name="password" class="div-field" placeholder="*********">
                    <?php
                    if (isset($_GET["erro"])) {
                        if ($_GET["erro"] == 1) {
                            echo '<p class="paragraph" style="color: red !important;">email ou senha incorretos, tente novamente!</p>';
                        }
                        if ($_GET["erro"] == 2) {
                            echo '<p class="paragraph" style="color: red !important;">Troca de senha falhou, tente novamente!</p>';
                        }
                        if ($_GET["erro"] == 3) {
                            echo '<p class="paragraph" style="color: green !important;">Email enviado com sucesso!</p>';
                        }
                    }

                    ?>
                    <button type="submit" class="btn div-success" name="submit">Log in</button>
                    <div class="div-paragraph">
                        <a href="../api/forgot.php" class="_97w4">Esqueceu a conta?</a>
                        <a href="../public/login.php">
                            <a href="../public/cadastro.php">Já tem cadastro??</a>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>