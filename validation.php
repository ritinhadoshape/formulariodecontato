<?php
$nome = filter_input( INPUT_POST , 'nome', FILTER_SANITIZE_STRING);
$telfone= filter_input(INPUT_POST , 'telefone', FILTER_VALIDATE_INT);
$msg= filter_input(INPUT_POST , 'msg' , FILTER_SANITIZE_STRING);

$to= 'drita6818@gmail.com';
$subject= "novo contato pelo site";
$message = "nome: $nome
           telefone: $telefone
           mensagem: $msg";
           $headers = 'From: drita6818@gmail.com' . "\r\n" .
        'Reply-To: drita6818@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
$enviarEmail= mail($to, $subject , $message , $headers);


if($enviarEmail){
    echo "email enviado com sucesso";
}
else{
    echo "erro ao enviar sua mensagem";
}
