<?php 

require_once 'config.php';

if(isset($_POST['textin']) && !empty($_POST['textin'])   )

//peguei os dados do bagui
$mensagem = addslashes($_POST['textin']);
$data_atual = date('d/m/Y');


//preparando os comamando
$smtp  = $conn->prepare("INSERT INTO mensagens (mensagem, data) VALUES (?, ?)");

$smtp->bind_param("ss", $mensagem, $data_atual);

if($smtp->execute()) {
    echo "Mensagem enviada! por favor retorne.";
    header('Location: vermensagens.php');
} else{
    echo "Não foi enviada, tente novamente!" .$smtp->error;

}

$smtp->close();
$conn->close();


?>