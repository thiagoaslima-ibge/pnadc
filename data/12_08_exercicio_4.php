<?php
	$moduleTitle = "Outras formas de trabalho"; //TITULO DA UNIDADE
	$topicTitle = ""; //TITULO DO TOPICO
	$pageTitle = "Exercício 4"; //TITULO DA PAGINA
	$pageSubtitle = ""; //SUBTITULO DA PAGINA	
	include "head.php";
?>

<script>	
	var exerciseCompletion = 0;
	var feedback01 = {
    type: "true-or-false",
    correctAnswer: [0,1,1,0],
		missFeedback: [
			"<strong>A sentença é verdadeira</strong>. Tratando-se de trabalhadores conta própria e empregadores, a atividade de produção para o próprio consumo não pode ser a mesma do seu trabalho remunerado.",
			"<strong>A sentença é falsa</strong>. Devem ser consideradas no cálculo as horas dedicadas à limpeza, à reparação, à preparação ou à manutenção de ferramentas ou instrumentos necessários à realização do trabalho.",
			"<strong>A sentença é falsa</strong>. As atividades de decoração, os pequenos reparos, incluindo reparos em instalações elétricas e a manutenção da pintura destinadas unicamente à conservação do domicílio devem ser consideradas como parte dos afazeres domésticos e não produção para o próprio consumo.",
			"<strong>A sentença é verdadeira</strong>. O tempo de deslocamento para o início das atividades de produção para o próprio consumo não deve ser considerado nos quesitos que perguntam “Quantas horas dedicou efetivamente a todas essas atividades.",
		]
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

			<!-- VERDADEIRO OU FALSO -->
			<form class="true-or-false" id="exercise03">
				<p>Com base nos conceitos e quesitos sobre as <strong>Outras formas de trabalho</strong>, na PNAD Contínua, classifique cada afirmativa como <strong>verdadeira</strong> ou <strong>falsa.</strong></p>
				<p class="row true-or-false__item" id="exercise03-01">
					<span class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0">						
						<button class="btn true-or-false__btn-answer" id="exercise03-01__0" type="button" title="Verdadeiro">V</button>
						<button class="btn true-or-false__btn-answer" id="exercise03-01__1" type="button" title="Falso">F</button>							
					</span>
					<span class="col-xs-22 col-xs-offset-1 col-sm-19 col-sm-offset-0">
						<span>Sérgio trabalha como apicultor, por conta própria, e cria abelhas para a produção de mel. Neste caso, a produção de mel para o consumo da sua unidade domiciliar não pode ser registrada, pelo entrevistador, como outra forma de trabalho.</span>
						<span class="exercise__feedback true-or-false__exercise-feedback" id="exercise03-01__comment"></span>
					</span>
				</p>
				<p class="row true-or-false__item" id="exercise03-02">
					<span class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0">						
						<button class="btn true-or-false__btn-answer" id="exercise03-02__0" type="button" title="Verdadeiro">V</button>
						<button class="btn true-or-false__btn-answer" id="exercise03-02__1" type="button" title="Falso">F</button>							
					</span>
					<span class="col-xs-22 col-xs-offset-1 col-sm-19 col-sm-offset-0">
						<span>Ao se registrar a quantidade de horas que o morador dedicou, na semana de referência, às atividades de cultivo, pesca, caça ou criação de animais destinados somente à alimentação das pessoas moradoras do domicílio ou de parente, não devem ser consideradas as horas dedicadas à preparação ou à manutenção de ferramentas ou instrumentos necessários à realização desse trabalho.</span>
						<span class="exercise__feedback true-or-false__exercise-feedback" id="exercise03-02__comment"></span>
					</span>
				</p>
				<p class="row true-or-false__item" id="exercise03-03">
					<span class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0">						
						<button class="btn true-or-false__btn-answer" id="exercise03-03__0" type="button" title="Verdadeiro">V</button>
						<button class="btn true-or-false__btn-answer" id="exercise03-03__1" type="button" title="Falso">F</button>							
					</span>
					<span class="col-xs-22 col-xs-offset-1 col-sm-19 col-sm-offset-0">
						<span>As atividades de decoração destinadas unicamente à conservação do domicílio devem ser consideradas como produção para o próprio consumo, do tipo reparo e construção.</span>
						<span class="exercise__feedback true-or-false__exercise-feedback" id="exercise03-03__comment"></span>
					</span>
				</p>
				<p class="row true-or-false__item" id="exercise03-03">
					<span class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0">						
						<button class="btn true-or-false__btn-answer" id="exercise03-03__0" type="button" title="Verdadeiro">V</button>
						<button class="btn true-or-false__btn-answer" id="exercise03-03__1" type="button" title="Falso">F</button>							
					</span>
					<span class="col-xs-22 col-xs-offset-1 col-sm-19 col-sm-offset-0">
						<span>Ao se registrar a quantidade de horas que o morador dedicou, na semana de referência, às atividades de coleta e de transformação de produtos minerais ou florestais, destinados ao uso das pessoas moradoras do domicílio ou de parente, não deve ser considerado o tempo de deslocamento para o início dessas atividades.</span>
						<span class="exercise__feedback true-or-false__exercise-feedback" id="exercise03-03__comment"></span>
					</span>
				</p>
				<div class="row">
					<div class="col-xs-12 exercise__action-group">							
						<button class="btn btn--main exercise__btn-check-answer" type="button" onclick="trueOrFalse()" disabled="disabled">Confirmar</button>
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