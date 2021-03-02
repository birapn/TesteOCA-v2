<?php



//CABEÇALHO

include "header.php";

$opiniao = $_POST['opiniao'];
$conheci = $_POST['conhecipor'];
?>



<p><br>INDIQUE ESTE TESTE PARA UM(A) AMIGO(A)<br>



<form action='endteste.php' method='post'>
<?php
 echo "<input type='hidden' name='opiniao' value='$opiniao'/>";
 echo "<input type='hidden' name='conhecipor' value='$conhecipor'/>";
?>

<input type=radio name=quero value=INDICO checked>Selecione aqui se quer indicar o teste para seu\sua amigo(a).<br>

<input type=radio name=quero value='NÃO INDICO' >Não vou indicar agora.<br><br>




<table>

<?php

if ($nome1 == null)

{echo "Nome: ";}

else 

{echo "Nome: ";}

echo "

<input maxlength='150' size='52' name='nome' value='$nome1'>

Sobrenome: <input maxlength='150' size='52' name='sobrenome' value='$sobrenome1'>

Telefone: <input maxlength='11' size='13' name='fone' value='$fone1'>

Telefone (Celular): <input maxlength='11' size='13' name='fonecel' value='$fonecel1'>

";

if ($mail == null)

{echo "E-mail: ";}

else 

{echo "E-mail: ";}

echo "

<input size='23' name='mail' value='$mail1'>

<center>

<input type=submit value='Enviar dados'>

</form>";









//RODAPÉ

include "footer.php";



/*echo "$msg";*/



?>
