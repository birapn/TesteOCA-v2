<?php
//CONFIGURAÇÂO

//Raiz DO TESTE com barra no final
$root = "https://www.dianeticabrasil.com.br/teste/";

//BUSCA AS VARIÁVEIS
include "buscavars.php";

//FAZ O CÁLCULO DA TRANPARENCIA
include "transparencia.php";

//ESCOLHE  O GABARITO COM BASE NO SEXO E IDADE E GERA O RESULTADO FINAL DE CADA COLUNA
if ($sexo == 'MASC' AND $idade == 'MAIOR')
{include "h_maior.php";}
elseif ($sexo == 'MASC' AND $idade == 'MENOR')
{include "h_menor.php";}
elseif ($sexo == 'FEM' AND $idade == 'MAIOR')
{include "f_maior.php";}
elseif ($sexo == 'FEM' AND $idade == 'MENOR')
{include "f_menor.php";}

/*//TESTA FUNC
$a = 80;
$b = 80;
$c = 80;
$d = 60;
$e = 80;
$f = 80;
$g = 80;
$h = 80;
$i = 80;
$j = 80;*/


//1 -  FAZ O GRAFICO PARA MENSAGEM
include "grafico.php";
//2 - PUXA OS CARTÕES
include "avaliador.php";
//3 - MANDA E-MAILS 
include "emails.php";

//CABEÇALHO
include "header.php";
//RESULTADO
include "resp_novoteste.php";
//RODAPÉ
include "footer.php";

/*echo "$msg";*/

?>
