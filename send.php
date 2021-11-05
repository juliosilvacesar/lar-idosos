<?php

    /*echo '<pre>';
    print_r($_POST);
    echo '</pre>';*/

    //Requisitando scripts da biblioteca
    require "biblioteca\PHPMailer\Exception.php";
    require "biblioteca\PHPMailer\OAuth.php";
    require "biblioteca\PHPMailer\PHPMailer.php";
    require "biblioteca\PHPMailer\POP3.php"; //Protocolo de recebimento de e-mail.
    require "biblioteca\PHPMailer\SMTP.php"; //Protocolo de envio de e-mail.

    use PHPMailer\PHPMailer\PHPMailer; //Estou puxando a classe PHPMailer
    use PHPMailer\PHPMailer\Exception; //Estou puxando a classe/modele Exeption


    class Mensagem {
        public $email = null;
        public $message = null;
        public $status = array('name' => null, 'telephone' => ''); //Informa qual mensagem deve ser disparada em caso de erro ou acerto.

        function __get($atributo){
            return $this->$atributo;
        }

        function __set($atributo,$valor){
            $this->$atributo = $valor;
        }

    }

    $mensagem = new Mensagem();
    $mensagem->__set('telephone',$_POST['telephone']);
    $mensagem->__set('message',$_POST['message']);

    $mail = new PHPMailer(true);
    try{
        //Server settings
        $mail->SMTPDebug = false; //Caso queira ver o debug basta usar 2 ou true
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; //Servidor de recebimento e envio de e-mail da plataforma.
        $mail->SMTPAuth = true;
        $mail->Username = 'vanessasamira1996@gmail.com';//Quem vai enviar o email.
        $mail->Password = '71958148742';
        $mail->SMTPSecire = 'tls';
        $mail->Port = 587;


        $mail->setFrom('vanessasamira1996@gmail.com');
        $mail->addAddress('vanessasamira1996@gmail.com','Vanessa'); //Quem  está recebendo.
       

        //Content
        $mail->isHTML(true);
        //$mail->Subject = 'Aula 383'; (Título)
        $mail->Subject = 'Formulário de contato - Lar de Idoso'; 
        //$mail->Body = 'Este é o html, sendo convertido para mensagem em <b>PHP</b>'; (Mensagem que pode ter personalização html).
        $mail->Body =  'Um cliente entrou em contato' . $mensagem->__get('email') . ' foi movido para a pose de ' . $mensagem->__get('message') . ' Por Teste.';
        $mail->AltBody = 'Esse é o email caso a plataforma não aceite HTML'; //Mensagem sem personalização html.

        $mail->send();
        $mensagem->status['telephone'] = 1;
        $mensagem->status['descricao'] = 'Email enviado com sucesso';

    }catch(Exception $e){
        $mensagem->status['telephone'] = 2;
        $mensagem->status['descricao'] = 'Mensagem não pode ser enviada <br />.' . 'Motivo do erro: ' . $mail->ErrorInfo;
    }

?>

<html>
    <head>
    <meta charset="utf-8" />
    	<title>Formulário de contato</title>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">  
			<div class="py-3 text-center">
				<!-- <h2>Nome</h2> -->
				<p class="lead">Formulário de contato </p>
			</div>
      		<div class="row">
      			<div class="col-md-12">
                <?php if($mensagem->status['telephone'] == 1){?>
                    <div class="container">
                        <h1 class="display-4 text-success">Sucesso</h1> 
                        <p><?php $mensagem->status['descricao']; ?></p>   
                        <a href="index.html" class="btn btn-success btn-lg mt-5 text-white">VOLTAR</a>
                    </div>    
                <?php } ?>

                <?php if($mensagem->status['telephone'] == 2){?>
                    <div class="container">
                        <h1 class="display-4 text-danger">Falha</h1> 
                        <p><?php $mensagem->status['descricao'] ?></p>
                        <a href="index.html" class="btn btn-success btn-lg mt-5 text-white">VOLTAR</a>
                    </div>    
                <?php } ?>
            </div>
        </div>
    </body>
</html>