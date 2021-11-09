<?php
require_once('connect.php');
$result = mysqli_query($conn, "SELECT * FROM empresas");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title href="index.html">Nação Idosa</title>
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
            <h1 class="fw-bolder">Lares de Idosos</h1>
            <p class="lead">Encontre os melhores lugares onde o seu familiar será bem cuidado.</p>
        </div>
    </header>
    <!-- Lista de localidades-->
    <main class="container">

        <div class="row">
            <div class="col-sm-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">localização</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr class="result_tr">
                            <td><?php echo $row['nome_empresa']; ?></td>
                            <td><?php echo $row['cidade_empresa']; ?></td>
                            <td>

                                <div value="<?php echo $row['id_empresa']; ?>" onclick="sobre(this)"
                                    class="btn btn-warning">
                                    Sobre
                                </div>
                                <!--entra em contato com o lar -->
                                <div value="<?php echo $row['id_empresa']; ?>" onclick="contato(this)"
                                    class="btn btn-danger">
                                    Contato
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
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
    function sobre(e) {
        var id = e.getAttribute('value');
        window.location.href = "info.php?id=" + id;
    }

    function contato(e) {
        let id = e.getAttribute('value');
        window.location.href = "contato.php?id=" + id;
    }
    </script>
</body>

</html>