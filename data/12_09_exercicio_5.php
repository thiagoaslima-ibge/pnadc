<?php
	$moduleTitle = "Outras formas de trabalho"; //TITULO DA UNIDADE
	$topicTitle = ""; //TITULO DO TOPICO
	$pageTitle = "Exercício 5"; //TITULO DA PAGINA
	$pageSubtitle = ""; //SUBTITULO DA PAGINA	
	include "head.php";
?>

<script>	
	var exerciseCompletion = 0;
	var feedback05 = {
    type: "multiple-choice",
    correctValue: "2",
    hitFeedback: '<b>Parabéns!</b> Você selecionou a opção correta. Tratando-se de atividade de produção de alimentos, deve ser considerada apenas aquela voltada para alimentos de grande durabilidade. As atividades de preparo de alimentos de pouca durabilidade, para o consumo imediato ou a serem congelados, para consumo em período relativamente curto, devem ser consideradas como parte dos afazeres domésticos. Portanto, cozinhar arroz ou feijão, no escopo da PNAD Contínua não deve ser considerado como produção para o próprio consumo e sim afazer doméstico.',
    missFeedback: '<b>Atenção!</b> Você não selecionou a opção correta. Tratando-se de atividade de produção de alimentos, deve ser considerada apenas aquela voltada para alimentos de grande durabilidade. As atividades de preparo de alimentos de pouca durabilidade, para o consumo imediato ou a serem congelados, para consumo em período relativamente curto, devem ser consideradas como parte dos afazeres domésticos. Portanto, cozinhar arroz ou feijão, no escopo da PNAD Contínua, não deve ser considerado como produção para o próprio consumo e sim afazer doméstico.',
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
			<form id="exercise05">
        <p>Pode ser considerado como produção de bens de uso doméstico para o próprio consumo, <strong>exceto:</strong></p>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice02_opt01" title="Selecione para escolher a opção 1.">					
					<input id="multiplechoice02_opt01" name="multiplechoice02" type="radio" value="1">
					Abater de animais para produção de charque ou de carne de sol.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice02_opt02" title="Selecione para escolher a opção 2.">					
					<input id="multiplechoice02_opt02" name="multiplechoice02" type="radio" value="2">
					Cozinhar arroz e feijão.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice02_opt03" title="Selecione para escolher a opção 3.">					
					<input id="multiplechoice02_opt03" name="multiplechoice02" type="radio" value="3">
					Produzir de vinho.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice02_opt04" title="Selecione para escolher a opção 4.">					
					<input id="multiplechoice02_opt04" name="multiplechoice02" type="radio" value="4">
					Confeccionar um artigo decorativo.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice02_opt05" title="Selecione para escolher a opção 5.">					
					<input id="multiplechoice02_opt05" name="multiplechoice02" type="radio" value="5">
					A fabricação de bens duráveis utilizados por moradores do domicílio ou por parentes e amigos que residem em outro domicílio no mesmo terreno.
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