<?php
	$moduleTitle = "Outras formas de trabalho"; //TITULO DA UNIDADE
	$topicTitle = ""; //TITULO DO TOPICO
	$pageTitle = "Exercício 10"; //TITULO DA PAGINA
	$pageSubtitle = ""; //SUBTITULO DA PAGINA	
	include "head.php";
?>

<script>	
	var exerciseCompletion = 0;
	var feedback01 = {
    type: "multiple-choice",
    correctValue: "5",
    hitFeedback: '<b>Parabéns!</b> Você selecionou a opção correta. Trocar lâmpada, pintar cômodo, rejuntar o piso, consertar uma tomada são consideradas atividades domésticas. Em contrapartida, reformas e grandes consertos no domicílio, realizadas por morador(es), tais como trocar toda a rede elétrica, azulejos, pisos, construir cômodo ou fazer ampliação do domicílio, não são atividades domésticas. Essas atividades devem ser consideradas como construção para o próprio uso.',
    missFeedback: '<b>Atenção!</b> Você não selecionou a opção correta. Trocar lâmpada, pintar cômodo, rejuntar o piso, consertar uma tomada são consideradas atividades domésticas. Em contrapartida, reformas e grandes consertos no domicílio, realizadas por morador(es), tais como trocar toda a rede elétrica, azulejos, pisos, construir cômodo ou fazer ampliação do domicílio, não são atividades domésticas. Essas atividades devem ser consideradas como construção para o próprio uso.',
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
        <p>Sobre os afazeres domésticos, marque a alternativa incorreta, de acordo com os quesitos e conceitos da PNAD Contínua::</p>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt01" title="Selecione para escolher a opção 1.">					
					<input id="multiplechoice01_opt01" name="multiplechoice01" type="radio" value="1">
					Os afazeres domésticos são as atividades realizadas em benefício próprio e dos moradores, sem envolver qualquer tipo de remuneração em dinheiro, produtos ou mercadorias.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt02" title="Selecione para escolher a opção 2.">					
					<input id="multiplechoice01_opt02" name="multiplechoice01" type="radio" value="2">
					Trocar lâmpada, pintar cômodo, rejuntar o piso, consertar uma tomada são consideradas atividades domésticas.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt03" title="Selecione para escolher a opção 3.">					
					<input id="multiplechoice01_opt03" name="multiplechoice01" type="radio" value="3">
					As atividades de cuidado de pessoas e tarefas domésticas realizadas de forma simultânea devem ser contabilizadas uma única vez.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt04" title="Selecione para escolher a opção 4.">					
					<input id="multiplechoice01_opt04" name="multiplechoice01" type="radio" value="4">
					Lavar o carro, levar ao mecânico ou para a vistoria é considerado afazer doméstico.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt05" title="Selecione para escolher a opção 5.">					
					<input id="multiplechoice01_opt05" name="multiplechoice01" type="radio" value="5">
					Reformas e grandes consertos no domicílio, realizadas por morador(es), tais como trocar toda a rede elétrica, azulejos, pisos, construir cômodo ou fazer ampliação do domicílio são consideradas atividades domésticas.
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