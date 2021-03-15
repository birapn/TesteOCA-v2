<?php
	include "buscavars.php";
	include "header.php";
	$i = $_POST['R$i'];

	echo"
	<form action=resultado.php method=post>
	<div style='margin-top:20px;margin-bottom:20px;'>
		<div class='container-sm text-center'>
			
			<!--Pergunta 1-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você faz observações ou acusações impensadas que mais tarde lamenta?</h1>
				<div>
					<div class='form-check form-check-inline '>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 2-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Permanece sereno quando os outros estão nervosos?</h1>
				<div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 3-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você consulta horários de trens, listas telefônicas ou dicionários só por prazer?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>
				
			<!--Pergunta 4-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Quando alguém lhe pede para tomar uma decisão, você é influenciado pelo fato de gostar ou não da pessoa envolvida?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 5-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você pretende ter dois filhos ou menos embora a sua saúde e renda lhe permitam ter mais?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>
			
			<!--Pergunta 6-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Tem às vezes contrações nos músculos sem nenhuma razão lógica para isso?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>
			
			<!--Pergunta 7-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você preferiria estar em uma posição em que não tivesse a responsabilidade de tomar decisões?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>
			
			<!--Pergunta 8-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Outras pessoas consideram que as suas ações são imprevisíveis?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 9-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Pensa que se deveria gastar mais dinheiro em segurança social?</h1> 
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 10-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Tem muito interesse pelas outras pessoas?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>
			
			<!--Pergunta 11-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >A sua voz é monótona em vez de ter um tom variável?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>
			<!--Pergunta 12-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você normalmente deixa que seja a outra pessoa que comece a conversa?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 13-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você está prontamente interessado na conversa das outras pessoas?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 14-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >A idéia de causar dor a animais de caça ou peixes impediria você de caçar ou pescar?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 15-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você tem um comportamento impulsivo com frequência?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 16-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Fala devagar?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 17-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você geralmente se preocupa com a necessidade de proteger a sua saúde?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 18-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Uma ação inesperada faz com que os seus músculos se contraiam?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 19-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você normalmente é atencioso quando exige algo dos seus funcionários, parentes ou alunos?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 20-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você acha que poderia fazer um 'julgamento rápido' que seja válido?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 21-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Os seus fracassos passados ainda o preocupam?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 22-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você percebe que fica hiperativo por vários dias?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 23-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Fica ressentido pelos esforços dos outros quando lhe dizem o que fazer?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 24-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Normalmente é difícil para você 'admitir que errou e assumir a culpa'?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 25-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você tem um pequeno círculo de amigos íntimos em vez de um grande número de amigos e conhecidos?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 26-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >A sua vida é uma luta constante pela sobrevivência?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 27-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você canta ou assobia com frequência só por diversão?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 28-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Os seus amigos o consideram afetuoso?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 29-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você preferiria dar ordens ao invés de recebê-las?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 30-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você gosta de contar às pessoas o último escândalo sobre os seus colegas?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 31-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você poderia concordar com disciplina rígida?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 32-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >A idéia de começar tudo de novo o preocupa muito?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 33-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você faz esforços para fazer os outros rirem ou sorrirem?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 34-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você acha fácil expressar as suas emoções?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 35-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você evita reclamar quando a outra pessoa chega atrasada a um encontro?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 36-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você às vezes é considerado pelos outros como 'desmancha-prazeres'?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 37-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você considera que existem pessoas que são definitivamente hostis e agem contra você?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 38-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você admitiria que está errado só para 'manter a paz'?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>


			<!--Pergunta 39-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você sente verdadeiro afeto só por algumas pessoas?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 40-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você raramente se sente feliz a menos que tenha uma razão especial?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 41-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você 'circula por aí' em uma reunião social?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 42-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você toma precauções razoáveis para evitar acidentes?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 43-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >A ideia de falar perante outras pessoas deixa você nervoso?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 44-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Se visse um artigo em uma loja que está etiquetado abaixo do preço correto por engano, tentaria obtê-lo por esse preço?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 45-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você sente muitas vezes que as pessoas estão olhando para você ou falando de você pelas costas?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 46-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você constantemente se mete em problemas?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 47-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você tem algum medo ou ódio em particular?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 48-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você prefere ser espectador em vez de participar ativamente em um esporte?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>


			<!--Pergunta 49-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você acha fácil ser imparcial?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 50-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você mantém um comportamento cortês claramente estabelecido perante os outros membros da sua família?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 51-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você pode iniciar uma conversa em uma reunião social?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 52-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você compraria 'a crédito' na esperança de poder manter os pagamentos?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 53-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você fica transtornado por algum tempo quando ocorre alguma coisa inesperada, como um acidente ou algum outro acontecimento perturbador?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 54-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você leva em conta o bem de todos os interessados em vez de pensar só nas suas vantagens pessoais?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 55-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Ao ouvir uma palestra tem às vezes a ideia de que o orador está se referindo exclusivamente a você?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 56-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >O 'barulho exterior' raramente interfere na sua concentração?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 57-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você geralmente está 'em dia' em relação aos assuntos cotidianos?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 58-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você consegue planejar e trabalhar confiantemente para realizar algo em um prazo de 6 meses?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 59-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você considera que o sistema moderno de 'prisões sem grades' está condenado ao fracasso?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 60-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você tem tendência a ser descuidado?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 61-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você às vezes tem a sensação de que a vida é um sonho em que tudo parece irreal?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 62-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você se recupera rapidamente do efeito das más notícias?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 63-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Quando você critica, tenta encorajar ao mesmo tempo?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 64-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Normalmente você é considerado 'frio'?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 65-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >As suas opiniões não são suficientemente importantes para que sejam ditas a outras pessoas?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 66-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você é tão seguro de si mesma que às vezes irrita os outros?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 67-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você mantém um 'contato estreito' com objetos seus que emprestou a amigos?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 68-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você se diverte com atividades que você mesmo escolheu?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 69-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >A música emotiva afeta muito você?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 70-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você condena totalmente uma pessoa por ela ser sua rival ou oponente em um certo aspecto das suas relações com ela?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 71-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Com frequência você 'fica pensando' sobre morte, doença, dor e desgostos?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 72-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você fica perturbado com a ideia de perder a dignidade?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 73-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você sempre fica guardando coisas que 'podem ser úteis'?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 74-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você criticaria as falhas e apontaria os pontos negativos do caráter ou de algum trabalho feito por alguém?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 75-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você aprecia abertamente as coisas belas?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 76-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Às vezes você dá objetos que, na verdade, não lhe pertencem?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 77-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você cumprimenta as pessoas efusivamente?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 78-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você fica pensando com frequência nas desgraças passadas?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 79-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você às vezes é considerado contundente nas suas ações ou opiniões?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 80-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você aceita críticas facilmente e sem ressentimento?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 81-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Quando tenta descansar, não se deixa perturbar pelos 'barulhos de fundo'?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 82-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você tem tendência para ser ciumento?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 83-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você tende a adiar fazer coisas e depois descobre que é tarde demais?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 84-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você prefere acatar os desejos dos outros em vez de tentar fazer as coisas do seu jeito?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 85-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você acha fácil começar um projeto?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 86-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você rói unhas ou morde a ponta do lápis?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 87-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você 'aumenta o volume' das suas emoções só para criar um efeito?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 88-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Se estivéssemos invadindo outro país, você se sentiria compassivo pelos pacifistas nesse país?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 89-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você é melindroso com algumas questões pessoais??</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 90-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você tem poucos interesses e atividades que são de sua própria escolha?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 91-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você às vezes tem um pensamento que fica rodando na cabeça por vários dias?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 92-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você come devagar?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 93-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você consegue ser uma influência estabilizadora quando outros entram em pânico?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>


			<!--Pergunta 94-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você pararia para descobrir se uma pessoa precisa de ajuda mesmo que ela não tivesse pedido diretamente?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 95-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você tem ideias preconcebidas a favor da sua escola, universidade, clube ou equipe, etc.?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 96-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você paga as suas dívidas e mantém as suas promessas quando é possível?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 97-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você dorme bem?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 98-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você usaria castigo corporal em uma criança de dez anos que se recusasse a  obedecer a você?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 99-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você prefere ter um papel passivo em qualquer clube ou organização a que pertença?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 100-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você é lógico e científico na sua forma de pensar?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 101-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >A juventude de hoje tem mais oportunidades do que a da geração passada?</h1>
				<div>
					<div class='form-check form-check-inline '>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 102-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você joga fora coisas e só depois descobre que precisa delas?</h1>
				<div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 103-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você desistiria facilmente de um determinado rumo se esse lhe estivesse causando uma quantidade considerável de inconvenientes?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>
				
			<!--Pergunta 104-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você se 'enche de entusiasmo' apenas por alguns assuntos?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 105-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você raramente suspeita das ações dos outros?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>
			
			<!--Pergunta 106-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Às vezes você se pergunta se alguém realmente se importa com você?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>
			
			<!--Pergunta 107-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você recusa responsabilidade por duvidar da sua aptidão para lidar com o assunto?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>
			
			<!--Pergunta 108-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Às vezes você se sente compelido a repetir alguma coisa ou notícia interessante?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 109-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você tende a exagerar alguma reclamação justificada?</h1> 
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 110-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >A sua expressão facial é mais variada do que fixa?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>
			
			<!--Pergunta 111-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você geralmente precisa justificar ou reforçar uma opinião depois de tê-la dado?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>
			<!--Pergunta 112-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você admira aberta e sinceramente a beleza em outras pessoas?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 113-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Seria necessário um verdadeiro esforço da sua parte para que considerasse o assunto do suicídio?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 114-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você se considera dinâmico na sua atitude em relação à vida?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 115-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Um desacordo afetaria o seu relacionamento geral com outra pessoa?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 116-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Um pequeno fracasso da sua parte raramente o incomoda?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 117-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Às vezes você sente que fala demais?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 118-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você sorri muito?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 119-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >É fácil agradar você?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 120-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Quando você encontra oposição direta, ainda assim segue em frente em vez de se dar por vencido?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 121-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Mesmo que a distância não seja muito grande, você ainda assim preferiria ir de carro em vez de ir a pé?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 122-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você fica incomodado pelo barulho do vento ou com o rangido que a casa faz de noite?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 123-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >A sua opinião é influenciada por olhar para as coisas desde o ponto de vista das suas experiências, ocupação ou educação?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 124-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você comete gafes com freqüência?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 125-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você suspeita das pessoas que lhe pedem dinheiro emprestado?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 126-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >As suas decisões são influenciadas por interesses pessoais?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 127-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você pode ficar bastante entusiasmado com 'coisas pequenas e simples'?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 128-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você frequentemente age de uma forma, embora o seu próprio bom senso lhe indique o contrário?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 129-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você é a favor da discriminação racial e da diferença de classes?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 130-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você tem consciência de algum maneirismo físico tal como puxar o cabelo, nariz, orelhas, ou coisa parecida?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 131-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você pode se adaptar rapidamente e tirar proveito de novas situações ainda que estas possam ser difíceis?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 132-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Alguns barulhos o fazem ficar irritado?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 133-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Quando você quer, pode ver as coisas sobre o ponto de vista de outras pessoas?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 134-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você vai dormir quando quer, em vez de seguir um horário exato?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 135-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >As 'pequenas fraquezas' dos outros fazem você perder a paciência?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 136-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >As crianças o irritam?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 137-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >É menos conversador que os seus colegas?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 138-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você normalmente realiza tarefas pronta e sistematicamente?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>


			<!--Pergunta 139-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você ajudaria um companheiro de viagem em vez de deixar isso aos serviços oficiais?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 140-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Quando vota, você opta diretamente pelo partido em vez de estudar os candidatos e as propostas?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 141-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você com frequência fica pensando nas suas doenças ou experiências dolorosas passadas?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 142-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você se sente muito incomodado em ambientes desordenados?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 143-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você geralmente critica um espetáculo que vê ou um livro que lê?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 144-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Quando você conta um incidente divertido, pode imitar facilmente os maneirismos ou o modo de falar do incidente original?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 145-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Em assuntos sobre os quais você não é perito, as suas idéias são suficientemente importantes para ser compartilhada com outros?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 146-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você tem tendência para arrumar a desordem na casa dos outros?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 147-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você pode aceitar uma derrota facilmente sem a necessidade de 'engolir o seu desapontamento'?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 148-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você se sente deprimido com freqüência?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>


			<!--Pergunta 149-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você se sente incomodado na companhia de crianças?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 150-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Fica frustrado por não ser capaz de fazer algo em vez de procurar uma atividade ou sistema alternativo?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 151-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você às vezes é completamente incapaz de entrar no espírito das coisas?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 152-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você raramente expressa os seus ressentimentos?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 153-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Trabalha em 'impulsos', estando relativamente inativo e depois furiosamente ativo por um dia ou dois?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 154-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >A quantidade de trabalhos incompletos que tem em mãos incomoda você?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 155-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >As pessoas gostam de estar na sua companhia?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 156-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você poderia permitir que alguém completasse as 'duas palavras finais' em palavras cruzadas sem interferir?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 157-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você leva em conta os pontos positivos da maioria das pessoas e raramente fala delas de forma depreciativa?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 158-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você ri ou sorri com bastante facilidade?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 159-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >É claro e enfático na voz e modos?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 160-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você é expansivo apenas para com os amigos?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 161-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Os seus interesses e áreas de conhecimento são tão importantes que lhe deixam pouco tempo para mais alguma coisa?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 162-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você gostaria de 'começar uma nova atividade' na área em que vive?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 163-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você tomaria as medidas necessárias para matar um animal para poupá-lo do sofrimento?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 164-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >É fácil para você relaxar?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 165-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você raramente lamenta das desgraças e fracassos do passado?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 166-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >A ideia do medo ou apreensão provoca reações físicas em você?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 167-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você pode confiar na decisão que tomou sobre uma situação emocional em que você esteja envolvido?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 168-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Outra pessoa poderia considerá-lo realmente ativo?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 169-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você acha difícil começar uma tarefa que necessita ser feita?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 170-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você se opõe ao 'sistema de liberdade condicional' para os criminosos?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 171-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você perde muito tempo com preocupações desnecessárias?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 172-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Em um desacordo, acha difícil compreender como a outra pessoa não consegue ver o seu ponto de vista e concordar com você?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 173-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você lida bem com os problemas da vida diária?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 174-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você normalmente é sincero com os outros?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 175-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Prefere 'esperar que uma coisa aconteça' em vez de causá-la?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 176-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você gasta demais em relação ao que ganha?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 177-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você pode correr um 'risco calculado' sem muita preocupação?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 178-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Se você se envolvesse em um leve acidente de carro, tomaria realmente o cuidado de reparar qualquer prejuízo que tenha causado?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 179-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Outros intimidam você?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 180-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Faz concessões aos seus amigos, enquanto com outros usaria um julgamento mais severo?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 181-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você pondera com freqüência sobre a sua própria inferioridade?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 182-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >As pessoas criticam você para outras pessoas?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 183-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você fica envergonhado com uma saudação calorosa, tal como um beijo, um abraço ou um tapinha nas costas, quando feito em público?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 184-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Com freqüência deixa de fazer alguma coisa que quer por causa do que outras pessoas querem?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 185-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você às vezes tem certeza das suas opiniões sobre um assunto, ainda que não seja um perito?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 186-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você muitas vezes se encontra 'indo em todas as direções ao mesmo tempo?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 187-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Os seus conhecidos parecem pensar que você é mais capaz do que você pensa que é?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 188-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você acha a idéia da morte ou mesmo a lembrança da morte repugnante?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 189-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Tendo resolvido uma discussão, você continua a se sentir de mau humor por algum tempo?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 190-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você é amável no tom de voz, atitudes e expressão?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 191-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >A vida parece um tanto vaga e irreal para você?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 192-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você costuma se sentir perturbado com o destino das vítimas de guerra e refugiados políticos?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 193-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >'Simples conhecidos' recorrem a você para obter auxílio ou conselho sobre as dificuldades pessoais que eles têm?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>


			<!--Pergunta 194-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Se perde um objeto, fica com a idéia que 'alguém deve ter roubado ou extraviado'?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 195-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Se pensasse que alguém suspeita de você e de suas ações, abordaria o assunto em vez de deixar que ele o resolvesse sozinho?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 196-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Ás vezes você acha que a sua idade está contra você (jovem demais ou velho demais)?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 197-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você tem períodos em que está triste e deprimido sem razão aparente?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 198-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você reclama das condições que tem de enfrentar na vida?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 199-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você tende a esconder os seus sentimentos?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<!--Pergunta 200-->
			<div class='border' style='margin-top: 30px;'>
				<h1 class=' fs-4 fw-bold ' >Você considera que tem muitos amigos calorosos?</h1>
			   <div> 
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='+'>
						<label class='form-check-label'>+</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='m'>
						<label class='form-check-label' for='inlineRadio2'>M</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='radio' name='R$i' value='-'>
						<label class='form-check-label' for='inlineRadio2'>-</label>
					</div>
				</div>
			</div>

			<button type='button' class='btn btn-primary' style='margin-top: 30px;'>Enviar Formulário</button>

		</div>


	</form>
	
</div>
	";
// //PERGUNTAS

// 	echo "<form action=resultado.php method=post>
// 	";

// 	for ($i=1 ; $i <201 ; $i++)
// 	{
// 		echo "
// 		<div style='margin-top:20px;margin-bottom:20px;'>
// 			<div class='container-sm text-center'>

// 				<div class='input-group form-check form-check-input'>
// 					<input class='form-check-input form-check-inline' value='+' name='R$i' type='radio'>+
// 					<input class='form-check-input form-check-inline' value='m' name='R$i' type='radio'>M
// 					<input class='form-check-input form-check-inline' value='-' name='R$i' type='radio'>-
// 					$i. ${'p'.$i}
// 					<br><br>
// 				</div>
				
// 			</div>
// 		</div>
// 		";
// 	}


// //AGRUPAMENTO DE VARIÁVEIS
// 	echo "
// 		<input type=hidden name=nome value='$nome'>
// 		<input type=hidden name=sobrenome value='$sobrenome'>
// 		<input type=hidden name=sexo value='$sexo'>
// 		<input type=hidden name=idade value='$idade'>
// 		<input type=hidden name=cidade value='$cidade'>
// 		<input type=hidden name=uf value='$uf'>
// 		<input type=hidden name=telefone value='$telefone'>
// 		<input type=hidden name=telefone2 value='$telefone2'>
// 		<input type=hidden name=mail value='$mail'>
// 		<input type=hidden name=conhecipor value='$conhecipor'>
// 		<center>
// 		<input type=submit value=$np>
// 	</form>
// 	";

	

	include "footer.php";
?>
