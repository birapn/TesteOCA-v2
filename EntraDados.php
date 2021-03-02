<?php
    $nome = $_POST['nome'];
    $mail = $_POST['mail'];
    $sobrenome = $_POST['sobrenome'];
    $sexo = $_POST['sexo'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $telefone = $_POST['telefone'];
    $telefone2 = $_POST['telefone2'];
    $mail = $_POST['mail'];
    $conhecipor = $_POST['conhecipor'];
?>

<br><h2>Dados Pessoais:</h2><br>

<form action='prepara.php' method='post'>
<table>
<?php
if ($nome == null)
{echo "Nome: ";}
else 
{echo "Nome: ";}

echo "
<input name='nome' value='$nome'required>
Sobrenome: <input name='sobrenome' value='$sobrenome'>
	

Idade: <input type=radio value='MAIOR' name='idade' CHECKED>Mais de 18 anos
<input type=radio value='MENOR' name='idade'>Menos de 18 anos
	

Sexo: <input type=radio value='MASC' name='sexo' checked>Masculino
<input type=radio value='FEM' name='sexo'>Feminino
	

Cidade: <input maxlength='50' size='10' name='cidade' value='$cidade'required>
UF: <input maxlength='2' size='3' name='uf' value='$uf'required>
	

Telefone Fixo: <input maxlength='11' size='13' name='telefone' value='$telefone'>;
Telefone (Celular): <input maxlength='11' size='13' name='telefone2' value='$telefone2'>
";

if ($mail == null)
{echo "E-mail:";}
else 
{echo "E-mail:";}

echo "
<input name='mail' value='$mail'required>
<br>
Nos diga na caixa abaixo, de que forma ficou conhecendo o teste?
<p>(Exemplo: google, facebook, instagram, indicação de um amigo, panfleto, etc.)
<br></br>
<textarea name='conhecipor' value='$conhecipor'></textarea><br><br>
<input type=submit value='Enviar dados'>
";
?>
