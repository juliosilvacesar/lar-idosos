<?php
require "bibliotecas\PHPMailer\Exception.php";
require "bibliotecas\PHPMailer\OAuth.php";
require "bibliotecas\PHPMailer\PHPMailer.php";
require "bibliotecas\PHPMailer\POP3.php"; //Protocolo de recebimento de e-mail.
require "bibliotecas\PHPMailer\SMTP.php";

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class Mensagem
{
    public $email = null;
    public $assunto = null;
    public $status = array('nome' => null, 'mensagem' => ''); //Informa qual mensagem deve ser disparada em caso de erro ou acerto.

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
}

$mensagem = new Mensagem();
$mensagem->__set('nome', $_POST['nome']);
$mensagem->__set('telefone', $_POST['telefone']);
$mensagem->__set('email', $_POST['email']);
$mensagem->__set('mensagem', $_POST['mensagem']);

$mail = new PHPMailer(true);

try {
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->SMTPDebug = false;
    $mail->isSMTP();
    $mail->Host = 'ssl://smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'lar.idoso.2.0.2.1@gmail.com';
    $mail->Password = '20210800';

    $mail->Port = 465;

    $mail->setFrom($mensagem->__get('email'));
    $mail->addAddress('lar.idoso.2.0.2.1@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Formulario de contato - LAR IDOSOS';
    $mail->Body = 'Chegou um email de:' . $mensagem->__get('nome') . "\r\n" . ' Assunto: ' . $mensagem->__get('mensagem') . "\r\n" . ' Email: ' . $mensagem->__get('email') . ' por Vanessa Lopes Administrador (Teste).';
    $mail->AltBody = 'Chegou o email  do SITE LAR DE IDOSOS';

    $mail->send();
    $mensagem->status['nome'] = 1;
    $mensagem->status['mensagem'] = 'Email enviado com sucesso';
} catch (Exception $e) {
    $mensagem->status['nome'] = 2;
    $mensagem->status['descricao'] = 'Mensagem não pode ser enviada <br />.' . 'Motivo do erro: ' . $mail->ErrorInfo;
}
?>

<html>

<head>
    <meta charset="utf-8" />
    <title>Formulário de Contato</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="py-3 text-center">
            <!-- <img class="d-block mx-auto mb-2"  alt="" width="72" height="72"> -->
            <h2>Formulario</h2>
            <p class="lead">Formulário de Contato</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php if ($mensagem->status['nome'] == 1) { ?>
                <div class="container">
                    <h1 class="display-4 text-success">Sucesso</h1>
                    <p><?php $mensagem->status['mensagem']; ?></p>
                    <a href="index.php" class="btn btn-success btn-lg mt-5 text-white">VOLTAR</a>
                </div>
                <?php } ?>

                <?php if ($mensagem->status['nome'] == 2) { ?>
                <div class="container">
                    <h1 class="display-4 text-danger">Falha</h1>
                    <p><?php $mensagem->status['mensagem'] ?></p>
                    <a href="index.php" class="btn btn-success btn-lg mt-5 text-white">VOLTAR</a>
                </div>
                <?php } ?>
            </div>
        </div>
</body>

</html>