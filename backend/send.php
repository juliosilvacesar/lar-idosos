<?php

if (isset($_POST(['email']) && !empty($_POST(['email'])) {
$name = addslashes($_POST(['name']))
$email =  addslashes($_POST(['email']))
$telephone =  addslashes($_POST(['telephone']))
$message = addslashes($_POST(['message']))

//Direcionando o email para a pessoa
$to = "vanessasamira1996@gmail.com";
//Informando o Assunto
$subject = "Lar de Idoso - Contato";
$body = "Nome:".$name. "\n"
        "Telefone:".$telephone. "\n"
          "Email:".$email. "\n" 
             "Mensagem:".$message;

$header = "From:vanessashirlenee_estrela@hotmail.com"."\r\n"
."Reply-To:".$email."\r\n"
."X=Mailer:PHP/".phpversion();


if (mail($to,$subject,$body,$header)) {
   echo("Email Enviado com Sucesso");
}

} else {
    echo("Ops,TeMOS um Erro, seu email nao foi enviado!");

}
?>
