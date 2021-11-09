<?php
<<<<<<< HEAD
require_once('connect.php');

$id_empresa = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM empresas WHERE id_empresa = '$id_empresa'");
$row = mysqli_fetch_assoc($result);

=======
session_start();
if (isset($_POST['id_empresa'])) {
    $_SESSION['id_empresa'] = $_POST['id_empresa'];
}

$id_empresa = $_SESSION['id_empresa'];
// echo "<p style='color:#fff'>O id da empresa foi: $id_empresa</p>";
// echo "<br>";
>>>>>>> fc58e1542d698c10a2830a115776a02919c60ac9
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<<<<<<< HEAD
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?php echo $row['nome_empresa']; ?> - Lar de Idosos</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="#page-top">Nação idosa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Sobre</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-primary bg-gradient text-white">
        <div class="container px-4 text-center">
            <h1 class="fw-bolder"><?php echo $row['nome_empresa']; ?></h1>
            <p class="lead">
                <i>"<?php echo $row['descricao_empresa']; ?>"</i>
            </p>
        </div>
    </header>
    <!-- Lista de localidades-->
    <main class="container">

        <div class="row" style="margin: 50px 0;">
            <div class="col-sm-12">
                <h6 style="display: inline">Endereço:</h6> <span><?php echo $row['endereco_empresa']; ?> -
                    <?php echo $row['estado_empresa']; ?></span><br>
            </div>
            <div class="col-sm-12">
                <h6 style="display: inline">Telefone:</h6> <span><?php echo $row['telefone_empresa']; ?></span><br>
            </div>
            <div class="col-sm-12">
                <h6 style="display: inline">Cep:</h6> <span><?php echo $row['cep_empresa']; ?> </span><br>
            </div>
        </div>

        <div class="row">
            <div style="width: 100px;margin: 10px 15px;" value="<?php echo $row['id_empresa']; ?>"
                onclick="contato(this)" class="btn btn-danger">
                Contato
            </div>
        </div>
    </main>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container px-4">
            <p class="m-0 text-center text-white">Copyright &copy; Projeto academico sem fins lucrativos 2021</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <script>
    function contato(e) {
        let id = e.getAttribute('value');
        window.location.href = "contato.html?id=" + id;
    }
    </script>
=======
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

>>>>>>> fc58e1542d698c10a2830a115776a02919c60ac9
</body>

</html>