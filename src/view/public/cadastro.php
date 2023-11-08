<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../view/assets/css/all.css">
    <link rel="icon" href="./img/Cartoon-Lâmpada-PNG.png">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@100&display=swap" rel="stylesheet">
    <meta name="description"
        content="Bem-vindos(a). Faça seu registration para conferir as grandes novidade obtidas esse semestre.">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <script src="../../view/assets/js/password.js" defer></script>
    <title>Entre com a sua Conta</title>
</head>

<body>
    <div class="div-container">
        <div class="div-contact-box">
            <div class="div-left">
            </div>
            <div class="div-right">
                <h2>
                    Registration
                </h2>
                <form action="../../controller/cadastro.php" method="POST">
                    <div class="field">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="div-field" required placeholder="Maria ">
                    </div>
                    <div class="field">
                        <label for="name">Last name:</label>
                        <input type="text" name="last_name" id="last_name" class="div-field" required
                            placeholder="Maria ">
                    </div>
                    <div class="all-input">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" class="div-field" placeholder="gabriel@email.com" required>
                    </div>
                    <div class="all-input">
                        <label>Senha:</label>
                        <input type="password" id="password" minlength="6" maxlength="12"
                            onKeyUp="verificaForcaSenha();" class="div-field" placeholder="*******" />
                        <span id="password-status"></span>
                    </div>

                    <div class="all-input">
                        <label for="">Confirmation</label for="">
                        <input type="password" name="password" id="confirmation_password" class="div-field"
                            placeholder=" ********" required>
                    </div>
                    <button type="submit" class="btn div-success" name="submit">Registration</button>
                    <div class="div-paragraph">
                        <?php
                        if (isset($_GET["erro"])) {
                            if ($_GET["erro"] == 4) {
                                echo '<p class="paragraph" style="color: red !important; display: flex;
                            justify-content: center;">Email já cadastrado ! Tente novamante!</p>';
                            }
                        }
                        ?>
                        <a href="../api/forgot.php" class="_97w4">Esqueceu a conta? </a>
                        <a href="../public/login.php">Faça seu login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../../view/assets/js/password.js" defer></script>
</body>

</html>