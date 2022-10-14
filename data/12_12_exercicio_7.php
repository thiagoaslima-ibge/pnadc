<?php
	$moduleTitle = "Outras formas de trabalho"; //TITULO DA UNIDADE
	$topicTitle = ""; //TITULO DO TOPICO
	$pageTitle = "Exercício 7"; //TITULO DA PAGINA
	$pageSubtitle = ""; //SUBTITULO DA PAGINA	
	include "head.php";
?>

<script>	
	var exerciseCompletion = 0;
	var feedback01 = {
    type: "multiple-choice",
    correctValue: "4",
    hitFeedback: '<b>Parabéns!</b> Você selecionou a opção correta. A participação do morador em programas de voluntariado empresarial, nos quais a empresa oferece incentivos (remuneração ou benefícios) para a participação dos trabalhadores, não é considerado trabalho voluntário, pois a atividade resultante viola a condição de “não remunerado”.',
    missFeedback: '<b>Atenção!</b> Você não selecionou a opção correta. A participação do morador em programas de voluntariado empresarial, nos quais a empresa oferece incentivos (remuneração ou benefícios) para a participação dos trabalhadores, não é considerado trabalho voluntário, pois a atividade resultante viola a condição de “não remunerado”. , Trabalhadores voluntários podem receber ajuda de custo, sem descaracterizar a atividade como trabalho voluntário, por exemplo: o reembolso e o pagamento de despesas de alimentação e transporte, ou reembolso por qualquer item necessário à realização do trabalho realizado; o oferecimento de brindes e presentes simbólicos em gratidão ao trabalho realizado; benefícios não monetários na forma de desenvolvimento de habilidades, conexões sociais, contatos de trabalho, posição social e sentimento de autoestima.',
  };
</script>

<main class="page-content">

	<header class="page-header col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<?php	
			if ($topicTitle != '') {
				echo "<p class='page-header__topic-title'><span class='page-header__topic-tag-style'>$topicTitle</span></p>";
			}			
			echo "<h1 class='page-header__page-title'>$pageTitle</h1>";
			if ($pageSubtitle != '') {
				echo "<p class='lead'>$pageSubtitle</p>";
			}
		?>
	</header>
	
	<!-- <CONTEUDO -->
	<div class="row">	
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<!-- MULTIPLA ESCOLHA -->
			<form id="exercise01">
        <p>Dentre as situações abaixo, marque aquela que <strong>não</strong> pode ser considerada como trabalho voluntário, de acordo com a PNAD Contínua:</p>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt01" title="Selecione para escolher a opção 1.">					
					<input id="multiplechoice01_opt01" name="multiplechoice01" type="radio" value="1">
					Bruna é enfermeira formada há 10 anos, trabalha como voluntária em um asilo, mas recebe o reembolso por conta de despesas de alimentação e transporte até o local.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt02" title="Selecione para escolher a opção 2.">					
					<input id="multiplechoice01_opt02" name="multiplechoice01" type="radio" value="2">
					Paulo é psicólogo, especialista em educação inclusiva e concede palestras sobre acessibilidade, respeito e empatia nas escolas da rede pública, sem cobrar nada. No entanto, com este trabalho ganhou projeção e virou diretor no seu trabalho remunerado.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt03" title="Selecione para escolher a opção 3.">					
					<input id="multiplechoice01_opt03" name="multiplechoice01" type="radio" value="3">
					Renata visita regularmente, crianças internadas em um orfanato e ajuda com alimentação, brincadeiras e rodas de conversa. No final do último ano, na véspera de Natal, recebeu uma homenagem e lindos brindes da direção do orfanato, como reconhecimento ao trabalho realizado.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt04" title="Selecione para escolher a opção 4.">					
					<input id="multiplechoice01_opt04" name="multiplechoice01" type="radio" value="4">
					Anderson participa de um programa de voluntariado empresarial. A empresa o libera, mensalmente, de um dia de trabalho, com a manutenção de pagamento, a fim de que ele realize uma atividade voluntária organizada pela própria empresa.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt05" title="Selecione para escolher a opção 5.">					
					<input id="multiplechoice01_opt05" name="multiplechoice01" type="radio" value="5">
					Ana Luísa trabalha na cantina da sua igreja, semanalmente, preparando bolos e salgados, sem contrapartida financeira. A renda obtida com a venda dos alimentos é integralmente utilizada nos trabalhos sociais organizados pela igreja.
				</label>
				<div class="row">
					<div class="col-xs-24 exercise__action-group">							
						<button class="btn btn--main exercise__btn-check-answer" type="button" onclick="multipleChoice()" disabled="disabled">Confirmar</button>							
						<div class="exercise__feedback"></div>
					</div>
				</div>
			</form>

		</div>
	</div>
	<!-- /CONTEUDO> -->
	
</main>

<article class="modal" id="modal_retry">
	<header class="modal__header" style="padding-bottom:0;">			
		<h2 class="modal__heading-1">Atenção</h2>
		<button class="btn modal__btn-close">Fechar</button>
	</header>
	<p>Você não selecionou a opção correta. Tente novamente!</p>	
</article>

<?php
	include "foot.php";
?>

<!-- Inclua o script a seguir para utilizar os exercicios -->
<script src="dist/js/exercises.min.js"></script>

</body></html>