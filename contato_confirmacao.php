<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php 
$mensagem = "Nome: ".$_POST['nome']." \n";
$mensagem .= "Email: ".$_POST['email']." \n";
$mensagem .= "Telefone: ".$_POST['telefone']." \n";
$mensagem .= "Assunto: ".$_POST['assunto']." \n";
$mensagem .= "Mensagem:". $_POST['mensagem'];

mail("iaraindus@uol.com.br", "Mensagens do Site IARA", $mensagem);

echo '<p><font face="Tahoma" color="##000000"><span style="font-size:11pt;"><b>Sua mensagem foi 
enviada com sucesso!</b></span></font></p>';
echo '<font face="Tahoma" color="##000000"><span style="font-size:10pt;">Em breve 
entraremos em contato com você! Obrigado!.Iara Ind com </span></font></p>';

?>
</body>
</html>
