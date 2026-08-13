<?php
 ini_set('default_charset','UTF-8');
?>

<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$msg = "<font face=’Verdana’><b>NOME: </b> \t$nome</font><br />";
$msg .= "<font face=’Verdana’><b>E-MAIL: </b> \t$email</font><br />";
$msg .= "<font face=’Verdana’><b>ASSUNTO: </b> \t$assunto</font><br />";
$msg .= "<font face=’Verdana’><b>MENSAGEM: </b> \t$mensagem</font>";

$mensagem = "$msg";
$remetente = "$email";
$destinatario = "fabiozo@gmail.com";
$origem = "Contato Site ZANIRATO Marketing Web";
$headers = "From: ".$remetente."\nContent-type: text/html";
if(!mail($destinatario,$origem,$mensagem,$headers)){
print "falha no envio da mensagem";
} else {
#echo "<script>window.location.href=’obrigado.htm’</script>";
echo "<h2 align=center>Muito obrigado, $nome</h2>";
echo "<p class=text align=center>Em breve estaremos retornando!</p>";
}
?>

<div class="actions" align="center">
     <a href="javascript:javascript:history.go(-1)" class="button">Voltar</a>
</div>