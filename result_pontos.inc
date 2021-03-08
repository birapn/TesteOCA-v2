<?php

die("eeee");
//ABRE A TABELA GERAL
echo "<title>Resultado do Seu teste de Personalidade</title>";


<table align=center cellspacing=0 border=1 cellpadding=2><tr>
<td align=center bgcolor=lightblue><font face=verdana size=1>Estabilidade</td>
<td align=center><font face=verdana size=1>Felicidade</td>
<td align=center  bgcolor=lightblue><font face=verdana size=1>Calma</td>
<td align=center><font face=verdana size=1>Certeza</td>
<td align=center  bgcolor=lightblue><font face=verdana size=1>Atividade</td>
</tr>

<tr>
<td align=center><font face=verdana size=2><b>$a</b></td>
<td align=center><font face=verdana size=2><b>$b</b></td>
<td align=center><font face=verdana size=2><b>$c</b></td>
<td align=center><font face=verdana size=2><b>$d</b></td>
<td align=center><font face=verdana size=2><b>$e</b></td>
</tr>

<tr bgcolor=#00008b>
<td height=1></td><td height=1></td><td height=1></td><td height=1></td><td height=1></td>
</tr>

<tr>
<td align=center><font face=verdana size=1>Aberto</td>
<td align=center  bgcolor=lightblue><font face=verdana size=1>Reponsável</td>
<td align=center><font face=verdana size=1>Analise</td>
<td align=center  bgcolor=lightblue><font face=verdana size=1>Acordo</td>
<td align=center><font face=verdana size=1>Comunicação</td>
</tr>

<tr>
<td align=center><font face=verdana size=2><b>$f</b></td>
<td align=center><font face=verdana size=2><b>$g</b></td>
<td align=center><font face=verdana size=2><b>$h</b></td>
<td align=center><font face=verdana size=2><b>$i</b></td>
<td align=center><font face=verdana size=2><b>$j</b></td>
</tr>
<table>

";

echo "<table width=500 border=0 align=center><tr><td><font face=verdana>
<b><center><font size=2 color=green>Anote os resultados ACIMA para <br> comparar com um futuro teste.</font></center></b>";

//EST�VEL X INST�VEL
if ($a >0 and $asuppress ==0){echo "
<br><img align=left src='good.jpg'><font size=2 color=green><strong>PONTO POSITIVO - Est�vel, orientado</strong></font>
<font size=1>
<br>Voc� est� com bons padr�es, sabe o que quer ser. Tem bons dados est�veis e pode levar planos � completa��o.<br></font>";}
elseif ($a <1 and $asuppress ==0){echo "
<br><img align=left src='cancel.jpg'><font size=2 color=red><strong>PONTO A MELHORAR - Inst�vel, impulsivo, disperso</strong></font>
<font size=1>
<br>Voc� n�o est� tomando decis�es com facilidade. N�o est� se preocupando com coisas como o dinheiro, sa�de e posses. Est� tendo dificuldades em come�ar coisas em geral e pode falhar ao cumprir compromissos.<br></font>";}

//FELIZ X TRISTE
if ($b >0 and $bsuppress==0){echo "
<br><img align=left src='good.jpg'><font size=2 color=green><strong>PONTO POSITIVO - Feliz</strong></font>
<font size=1>
<br>Voc� est� alegre, sente-se bem e tem disposi��o para sorrir. Voc� t�m considerado que existem muitas oportunidades e est� atingindo seus objetivos.<br></font>";}
elseif ($b <1 and $bsuppress ==0){echo "
<br><img align=left src='cancel.jpg'><font size=2 color=red><strong>PONTO A MELHORAR - Infeliz, deprimido</strong></font>
<font size=1>
<br>Voc� n�o est� alegre e est� perturbado por problemas passados. Tem tido sonhos desagrad�veis N�o est� atingindo suas metas e tem pensado muito em desgostos e doen�as.<br></font>";}

//CALMO X NERVOSO
if ($c >0 and $csuppress ==0){echo "
<br><img align=left src='good.jpg'><font size=2 color=green><strong>PONTO POSITIVO - Calmo</strong></font>
<font size=1>
<br>Voc� � relaxado, calmo, n�o tem fobias e dorme bem. Tem um bom controle da voz e dos m�sculos. Voc� n�o se surpreende com facilidade, dorme bem � noite e volta ao normal rapidamente depois de um desapontamento. N�o tem habitos nervosos e n�o se distra� com facilidade.<br></font>";}
elseif ($c <1 and $csuppress ==0){echo "
<br><img align=left src='cancel.jpg'><font size=2 color=red><strong>PONTO A MELHORAR - Nervoso</strong></font>
<font size=1>
<br>Voc� est� meio preocupado, tenso e n�o relaxa com facilidade. Tem tido h�bitos nervosos e se distra� com facilidade. Fica muito cansado quando se esfor�a um pouco e n�o volta ao normal com facilidade depois de um desapontamento.</font>";}

//CERTEZA X INCERTEZA
if ($d >0 and $dsuppress ==0){echo "
<br><img align=left src='good.jpg'><font size=2 color=green><strong>PONTO POSITIVO - Certeza, consist�ncia</strong></font>
<font size=1>
<br>Voc� � confi�vel e confia em s� pr�prio, tem um temperamento equilibrado e sabe o que est� fazendo. Voc� pensa logicamente, tem consci�ncia dos valores, � respons�vel e pode conter-se se quiser.<br></font>";}
elseif ($d <1 and $dsuppress ==0){echo "
<br><img align=left src='cancel.jpg'><font size=2 color=red><strong>PONTO A MELHORAR - Incerto, impulsivo, inconsistente</strong></font>
<font size=1>
<br>Voc� est� sem auto-confian�a, e imprevis�vel. T�m mudado de id�ia sem raz�o aparente e n�o tem conseguido se conter muito.<br></font>";}

//ATIVO X INATIVO
if ($e >0 and $esuppress ==0){echo "
<br><img align=left src='good.jpg'><font size=2 color=green><strong>PONTO POSITIVO - Ativo, em movimento</strong></font>
<font size=1>
<br>Voc� tem vigor e tem uma grande variedade de interesses e atividades. � energico, toma responsabilidade e tem iniciativa. � atento, tem muito o que fazer, seus dias est�o cheios e n�o espera os outros te empurrarem, voc� toma a atitude.<br></font>";}
elseif ($e <1 and $esuppress ==0){echo "
<br><img align=left src='cancel.jpg'><font size=2 color=red><strong>PONTO A MELHORAR - Inativo, Sem movimento</strong></font>
<font size=1>
<br>Voc� est� tendo uma atitude mais passiva, falta iniciativa e a pregui�a atrapalha. Tem sido mais reservado. Voc� est� com tend�ncia � esperar que algo aconte�a e evitar a responsabilidade. N�o tem tido muito o que fazer e a agenda n�o � muito cheia. <br></font>";}

//CAPAZ X INIBIDO
if ($f >0 and $fsuppress ==0){echo "
<br><img align=left src='good.jpg'><font size=2 color=green><strong>PONTO POSITIVO - Capaz, aberto, agressivo</strong></font>
<font size=1>
<br>Voc� � auto-confiante. Voc� � aberto, e tem boa id�ia das suas pr�prias capacidades. Expressa livremente opini�es.<br></font>";}
elseif ($f <1 and $fsuppress ==0){echo "
<br><img align=left src='cancel.jpg'><font size=2 color=red><strong>PONTO A MELHORAR - Inibido, submisso</strong></font>
<font size=1>
<br>Voc� tem duvidado da sua pr�pria capacidade, est� inibido. Tem escondido os sentimentos e j� foi parado muitas vezes pelos outros. Tem mantido as opini�es para s� pr�prio.<br></font>";}

//CAUSA X EFEITO
if ($g >0 and $gsuppress ==0){echo "
<br><img align=left src='good.jpg'><font size=2 color=green><strong>PONTO POSITIVO - Respons�vel, objetivo, causa</strong></font>
<font size=1>
<br>Extrovertido, v� o que causou e admite ter causado sem culpa. Toma decis�es sensatas e pode ver o ponto de vista dos outros. � imparcial e n�o � ciumento, pode tomar decis�es se baseando nos fatos e � capaz de iniciativa. � l�gico e cient�fico.<br></font>";}
elseif ($g <1 and $gsuppress ==0){echo "
<br><img align=left src='cancel.jpg'><font size=2 color=red><strong>PONTO A MELHORAR - Irrespons�vel, em efeito</strong></font>
<font size=1>
<br>Voc� est� introvertido, pensando que os demais est�o contra voc�. Tem coisa sobre os quais voc� prefere n�o falar no momento e evita grandes responsabilidades. Tem tomado decis�es baseadas mais na emo��o do que na raz�o.<br></font>";}

//ESTIMA��O X CR�TICA
if ($h >0 and $hsuppress ==0){echo "
<br><img align=left src='good.jpg'><font size=2 color=green><strong>PONTO POSITIVO - L�gico, estima��o correta</strong></font>
<font size=1>
<br>N�o � dif�cil de agradar, pensa bem das pessoas e n�o suspeita o tempo todo. Compreende os demais e pode criticar e aceitar cr�tica. Aceita os outros como s�o e se n�o pode fazer o  que quer, arranja um substituto.<br></font>";}
elseif ($h <1 and $hsuppress ==0){echo "
<br><img align=left src='cancel.jpg'><font size=2 color=red><strong>PONTO A MELHORAR - Muito cr�tico</strong></font>
<font size=1>
<br>Voc� est� intolerante e suspeita dos demais. N�o tem tido muito tato e fica ressentido facilmente.<br></font>";}

//APRECIATIVO X DESACORDO
if ($i >0 and $isuppress ==0){echo "
<br><img align=left src='good.jpg'><font size=2 color=green><strong>PONTO POSITIVO - Apreciativo, empatia</strong></font>
<font size=1>
<br>Voc� � amig�vel e cortes, responde amavelmante � necessidades dos outros e tem considera��o pelos demais. � verdadeiro e pode ver como os outros se sentem em determinadas situa��es.<br></font>";}
elseif ($i <1 and $isuppress ==0){echo "
<br><img align=left src='cancel.jpg'><font size=2 color=red><strong>PONTO A MELHORAR - Falta de acordo</strong></font>
<font size=1>
<br>N�o tem feito amigos com facilidade e n�o tem pensado muito nas necessidades e nos sentimentos dos demais.<br></font>";}

//COMUNICATIVO X RETRA�DO
if ($j >0 and $jsuppress ==0){echo "
<br><img align=left src='good.jpg'><font size=2 color=green><strong>PONTO POSITIVO - Comunicativo</strong></font>
<font size=1>
<br>Voc� � expansivo e acolhedor, amig�vel e � uma �tima companhia, tem muitos amigos e posses. � cordial e expressa opini�es livremente.<br></font>";}
elseif ($j <1 and $jsuppress ==0){echo "
<br><img align=left src='cancel.jpg'><font size=2 color=red><strong>PONTO A MELHORAR - Retra�do</strong></font>
<font size=1>
<br>Voc� tem sido mais individualizado e introvertido. E tem escondido os seus sentimentos. <br></font>";}

//SINDROMES
include "avaliador2.php";

//MENSAGEM FINAL
echo "<p><font size=2><font color=#00008b><strong>ATENÇÃO: </strong></font>A Dianética Recife está à sua disposição para atendê-lo(a)</b>para uma análise completa do seu teste.";

?>