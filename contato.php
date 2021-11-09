<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Formulário de contato</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <br>
    <br>
    <br>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="#page-top">Envie uma mensagem para a empresa:</a>
           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="contato.html" target="_blank">Contact</a></li>
                  
                </ul>
            </div>
        </div>
    </nav>
    <div class="container px-5 my-5">
        <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="post" action="processa_envio.php">
            <div class="form-floating mb-3">
                <input class="form-control" id="nome" name="nome" type="text" placeholder="Nome" data-sb-validations="required" />
                <label for="nome">Nome</label>
                <div class="invalid-feedback" data-sb-feedback="nome:required">Nome is required.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="telefone" name="telefone" type="text" placeholder="Telefone" data-sb-validations="required" />
                <label for="telefone">Telefone</label>
                <div class="invalid-feedback" data-sb-feedback="telefone:required">Telefone is required.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="email" name="email" type="email" placeholder="Email " data-sb-validations="required,email" />
                <label for="email">Email </label>
                <div class="invalid-feedback" data-sb-feedback="email:required">Email is required.</div>
                <div class="invalid-feedback" data-sb-feedback="email:email">Email Email is not valid.</div>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="messagem" name="mensagem" type="text" placeholder="Messagem" style="height: 10rem;" data-sb-validations="required"></textarea>
                <label for="messagem">Messagem</label>
                <div class="invalid-feedback" data-sb-feedback="messagem:required">Messagem is required.</div>
            </div>

            <div class="d-grid">
                <button id="submitButton" type="submit">Submit</button>
                <a href="index.php" class="btn btn-success btn-lg mt-5 text-white">VOLTAR</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</html>