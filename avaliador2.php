<?php
// INICIO
$bsinmsg .= "
<br>
<p>Outros Pontos a Observar
<br>
";

//MAYBE
if ($mc >100)
{$bsinmsg .="<br>Muitas respostas incertas. O teste n�o � v�lido, exceto para mostrar que voc� est� preso em muitas d�vidas na vida ou n�o est� disposto a passar pelas perguntas. Isso geralemtne indica uma inabilidade de lidar com as coisas.<br>";
$suppress =1;
$reason ="maybe";} 
 
//SINDROMES SEÇÃO A
if ($a >69 AND $b >69 AND $c >69 AND $d >69 AND $e >69 AND $f >69 AND $g >69 AND $h >69 AND $i >69 AND $j >69)
{$bsinmsg .="<br>Todos os pontos do teste est�o altos. Isso � bom ou pode indicar que voc� pessoa n�o tem um contato real com o universo f�sico. Se esse for o caso, voc� pode estar muito suprimido pelo seu ambiente.<br>";
$suppress =1;
$reason ="teetie";}

if ($a >-96 AND $a <-39 AND $b >-101 AND $b <-66 AND $c >-95 AND $c <-64 AND $d >-84 AND $d <36 AND $e >2 AND $e <46 AND $f >21 AND $f <73 AND $g >-93 AND $g <-54 AND $h >-99 AND $h < -34 AND $i >-91 AND $i <19 AND $j >-73 AND $j <23)
{$bsinmsg .="<br>O gr�fico rand�mico. Isto acontece quando uma pessoa responde ao OCA randomicamente. OU porque eles n�o entendem as quest�es ou porque por alguma raz�o pura e simplesmente n�o ligam, uma pessoa com este gr�fico respondeu ao question�rio randomicamente e n�o � poss�vel analisa-lo mais que isto.<br>";
$suppress =1;
$reason ="ramdom";}

if ($g >89 and $i >89)
{$bsinmsg .="<br>Voc� pode ter um complexo de m�rtir ou de persegui��o.<br>";}

//SUPRESSOR
if ($suppress ==1)
{$bsinmsg .= "<br>Avalia��o concluida.<br>";}

else {
//SINDROMES SE�AO C
if ($a <-39 AND $b <-39 AND $c <-39)
{$bsinmsg .= "<br>'A', 'B' e 'C' baixos - Voc� est� fixo em perdas do passado. Frequentemente indicam um abandono na inf�ncia.<br>";}

if ($a <-39 AND $e >69)
{$bsinmsg .= "<br>'A' Baixo e 'E' alto - Aten��o muito dispersa.<br>";}

if ($e >69 AND $a <-39 AND $b <-39 AND $c <-39)
{$bsinmsg .= "<br>'E' alto e 'A', 'B' e 'C' baixos - Pode pensar que a vida n�o vale a pena.<br>";}

if ($a <-39 AND $j <-39 AND $b >-40 AND $b <70 AND $c >-40 AND $c <70 AND $d >-40 AND $d <70 AND $e >-40 AND $e <70 AND $f >-40 AND $f <70 AND $g >-40 AND $g <70 AND $h >-40 AND $h <70 AND $i >-40 AND $i <70)
{$bsinmsg .= "<br>'A' e 'J' Baixos e o restante m�dio (entre -40 e 70) - A pessoa est� em um ambiente supressivo, onde sua realidade � reduzida, e n�o pode comunicar por que isso ser� distorcido e usado contra voc�.<br>";}

if ($f >69 AND $a <-39 AND $c <-39 AND $g <-39)
{$bsinmsg .= "<br>'F' alto e 'A', 'C' e 'G' baixos - Provavelmente voc� est� propenso a �mpetos de ira. Temperamental.<br>";}

if ($a >69 AND $h <-39)
{$bsinmsg .= "<br>'A' alto e 'H' Baixo  - Perfeccionista.<br>";}

if ($a >69 AND $d >-40 AND $d <70)
{$bsinmsg .= "<br>'A' alto e 'D' Medio  - Voc� opera individualmente sob dados que aprendeu, em vez de certeza pessoal. <br> Voc� tem compreens�o intelectual. A maioria dos estudantes opera assim quando os dados n�o s�o completamente compreendidos por eles.<br>";}

if ($f >69 AND $b <-39 AND $g <-39)
{$bsinmsg .= "<br>'F' alto e 'B' e 'G' baixos - Complexo de inferioridade.<br>";}

if ($b >69 AND $d <-39)
{$bsinmsg .= "<br>'B' alto e 'D' baixo  - Alegria e tristeza muito vari�veis.<br>";}

if ($c <-39 AND $h <-39)
{$bsinmsg .= "<br>'C' e 'H' baixos - Voc� est� lidando com um problema em tempo presente.<br>";}

if ($d <-39 AND $j >69)
{$bsinmsg .= "<br>'D' baixo e 'J' alto - N�o pode conter-se. Compulsivo.<br>";}

if ($d <-39 AND $g >69)
{$bsinmsg .= "<br>'D' baixo e 'G' alto - Est� extrovertido compulsivamente, n�o pode se conter.<br>";}

if ($a <-39 AND $b <-39 AND $c <-39 AND $d >69 AND $e >69 AND $f >69 AND $g <-39 AND $h <-39 AND $i <-39 AND $j <-39)
{$bsinmsg .= "<br>'D','E' e 'F' altos e o restante baixo - Caprichoso, um tanto irrespons�vel e pensa demais em s� pr�prio. Pode ter uma inclina��o � destrui��o.<br>";}

if ($d <-39 AND $g <-39 AND $h <-39 AND $i <-39)
{$bsinmsg .= "<br>'D', 'G', 'H' e 'I' baixos - N�o admite que as pessoas sejam que elas s�o. Gostaria de mudar a forma de pensar dos outros.<br>";}

if ($e <-39 AND $f <-39 AND $j <-39)
{$bsinmsg .= "<br>'E', 'F' e 'J' baixos - Voc� pode ter uma defici�ncia hormonal e deveria consultar um m�dico.<br>";}

if ($e <-39 AND $f <-39 AND $a >-40 AND $a <70 AND $b >-40 AND $b <70 AND $c >-40 AND $c <70 AND $d >-40 AND $d <70 AND $g >-40 AND $g <70 AND $h >-40 AND $h <70 AND $i >-40 AND $i <70 AND $j >-40 AND $j <70)
{$bsinmsg .= "<br>'E' e 'F' baixos e o restante m�dio - Geralmente este perfil indica uma pessoa drogada ou alco�latra ou uma pessoa que esta sendo pesadamente suprimida por outra.<br>";}

if ($e >69 AND $g <-39)
{$bsinmsg .= "<br>'E' alto e 'G' baixo - Falta de iniciativa.<br>";}

if ($f >69 AND $g <-39 AND $h <-39)
{$bsinmsg .= "<br>'F' alto e 'G' e 'H' baixos - � dif�cil de lidar com voc�. G�nio forte.<br>";}

if ($f <70 AND $i >69 AND $j >69 AND $b >69)
{$bsinmsg .= "<br>'F' m�dio e 'I', 'J' e 'B' altos - Do�ura e Luz, pouco contato real com o universo f�sico.<br>";}

if ($i >69 AND $j <-39)
{$bsinmsg .= "<br>'I' alto e 'J' baixo - Voc� gosta de agradar os outros para demonstrar compaix�o.<br>";}

if ($a <-39 AND $c <-39 AND $d <-39 AND $g <-39 AND $h <-39 AND $i <-39 AND $j <-39)
{$bsinmsg .= "<br>'A', 'C', 'D', 'G', 'H', 'I' e 'J' baixos - Voc� tem dificuldades no trabalho, principalmente se ocupa cargos de l�der.<br>";}


//SINDROMES SE��O D
if ($c >$a AND $c >$b AND $c >$d AND $c >$e AND $c >$f AND $c >$g AND $c >$h AND $c >$i AND $c >$j)
{$bsinmsg .= "<br>'C' ACIMA DE TODOS OS DEMAIS - Auto controle. Voc� est� condicionado(a) devido a educa��o severa, onde voc� n�o podia demonstrar emo��o de esp�cie alguma ou expressar nenhuma opini�o.<br>";}

if ($d >$a AND $d >$b AND $d >$c AND $d >$e AND $d >$f AND $d >$g AND $d >$h AND $d >$i AND $d >$j)
{$bsinmsg .= "<br>'D' ACIMA DE TODOS OS DEMAIS - Euforia. Voc� d� o m�ximo de s� numa situa��o onde se encontra. Lutando com a vida e obt�m poucos resultados. O presente social permite que voc� encubra bastante bem e apresente um verniz de 'N�o h� nada errado comigo'.<br>";}

if ($e >$f)
{$bsinmsg .= "<br>'E' MAIS ALTO QUE 'F' - Voc� tem feito mais do que c�moda e competentemente pode manejar. D E F precisam estar absolutamente alinhados, indicando que a voc� est� manejando sua atividade com capacidade e certeza.<br>";}

if ($f >$e)
{$bsinmsg .= "<br>'F' MAIS ALTO QUE 'E' - Voc� n�o est� fazendo tanto quanto poderia.<br>";}

if ($i >$a AND $i >$b AND $i >$c AND $i >$d AND $i >$e AND $i >$f AND $i >$g AND $i >$h AND $i >$j)
{$bsinmsg .= "<br>'I' ACIMA DE TODOS OS DEMAIS - Pessoa � muito cora��o mole, alvo f�cil ou tolo.<br>";}
}
$bsinmsg .="</p><br><hr width=90% align=left><br>";

echo $bsinmsg;

?>
