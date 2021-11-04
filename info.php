<?php
session_start();
if (isset($_POST['id_empresa'])) {
    $_SESSION['id_empresa'] = $_POST['id_empresa'];
}

$id_empresa = $_SESSION['id_empresa'];
// echo "<p style='color:#fff'>O id da empresa foi: $id_empresa</p>";
// echo "<br>";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style2.css">
    <title>Informações</title>
</head>

<body>

    <div class="container shadow">
        <header class="flex center shadow">
            <img class="logo" onclick="window.location.href='index.php'" src="./assets/img/logo.png" alt="">
            <h2>INFORMAÇÕES</h2>
        </header>
        <div class="non3"></div>
        <div class="info flex">
            <h1 class="title">BOM LAR</h1>
            <div class="txt">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo officia accusantium nobis, aperiam at
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo officia accusantium nobis
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo officia accusantium nobis
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo officia accusantium nobis
                    in incidunt</p>
            </div>
        </div>
        <img class="image" src="./assets/img/senior-couple.png" alt="">

        <div class="btn flex center">CADASTRAR</div>
        <div class="non"></div>
        <footer class="flex">
            <div class="purple"></div>
        </footer>
        <div class="contato flex center">
            <div class="footer"><strong>Telefone:</strong> (00) 9 1234-56789</div>
            <div class="footer"><strong>Email:</strong> nacaoidosa@email.com</div>
        </div>

    </div>

</body>

</html>