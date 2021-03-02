<?php
//BUSCA AS VARIÁVEIS
include "buscavars.php";
include "header.php";

if ($nome ==null or $mail ==null)
{echo "<br>
Por favor, verifique os campos em vermelho";
include_once "EntraDados.php";}

if ($nome !=null AND $mail !=null)
{echo "
<form action=teste.php method=post>
<br>
  TESTE DE PERSONALIDADE OXFORD
<br />

Este teste tem como propósito, proporcionar dados que nos ajude a orientá-la(o)
em como melhorar as áreas de sua vida, nas quais você possa estar tendo qualquer dificuldade.<br />
<br>

IMPORTANTE!!! Reserve 20 a 30 minutos do seu tempo e se possível sem interrupções e distrações para responder as perguntas a seguir.<br />
<br>

INSTRUÇÕES
<br>
<br />
<ul>Responda todas as perguntas da maneira como se sente agora.</ul>
<ul>Não fique muito tempo na mesma questão.</ul>
<ul>Responda assim que entender e vá para a próxima.</ul>
<ul>A precisão do resultado depende da sinceridade das suas respostas.</ul>
<br />

<br><br />
RESPONDA:
<br><br />
<strong>(+)</strong> SIM OU NA MAIORIA DAS VEZES SIM.<br />
<strong>(m)</strong> TALVEZ OU EM DÚVIDA.<br />
<strong>(-)</strong> NÂO OU NA MAIORIA DAS VEZES NÃO.<br />



<input type='hidden' name='nome' value='$nome' />
<input type='hidden' name='sobrenome' value='$sobrenome' />
<input type='hidden' name='sexo' value='$sexo' />
<input type='hidden' name='idade' value='$idade' />
<input type='hidden' name='cidade' value='$cidade' />
<input type='hidden' name='uf' value='$uf' />
<input type='hidden' name='telefone' value='$telefone' />
<input type='hidden' name='telefone2' value='$telefone2' />
<input type='hidden' name='mail' value='$mail' />
<input type='hidden' name='conhecipor' value='$conhecipor' />

<br>
<input type=submit value=Comecar!>
<br />
</form>
";}

include "footer.php";
?>
