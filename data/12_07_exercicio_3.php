<?php
	$moduleTitle = "Outras formas de trabalho"; //TITULO DA UNIDADE
	$topicTitle = ""; //TITULO DO TOPICO
	$pageTitle = "Exercício 3"; //TITULO DA PAGINA
	$pageSubtitle = ""; //SUBTITULO DA PAGINA	
	include "head.php";
?>

<script>	
	var exerciseCompletion = 0;
	var feedback03 = {
    type: "multiple-choice",
    correctValue: "3",
    hitFeedback: '<b>Parabéns!</b> Você selecionou a opção correta. Para ser considerado produção para o próprio consumo, o produto ou serviço deve ser somente para consumo de membro(s) do domicílio ou de parente(s) que residiam em outro domicílio. Além disso, as atividades realizadas mediante venda ou troca de produtos ou serviços não são deverão ser consideradas.',
    missFeedback: '<b>Atenção!</b> Você não selecionou a opção correta. Para ser considerado produção para o próprio consumo, o produto ou serviço deve ser somente para consumo de membro(s) do domicílio ou de parente(s) que residiam em outro domicílio. Além disso, as atividades realizadas mediante venda ou troca de produtos ou serviços não são deverão ser consideradas.',
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
			<form id="exercise03">
        <p>Pode ser considerada como produção para o próprio consumo:</p>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice02_opt01" title="Selecione para escolher a opção 1.">					
					<input id="multiplechoice02_opt01" name="multiplechoice02" type="radio" value="1">
					A produção, coleta ou armazenamento de produtos agrícolas, de pesca, de caça e de criação de animais para uso exclusivo dos próprios moradores do domicílio e doação de apenas cinco porcento para instituições de caridade.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice02_opt02" title="Selecione para escolher a opção 2.">					
					<input id="multiplechoice02_opt02" name="multiplechoice02" type="radio" value="2">
					A fabricação de artigos do vestuário e calçados por moradores do domicílio com a intenção de venda, apenas para parentes e amigos.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice02_opt03" title="Selecione para escolher a opção 3.">					
					<input id="multiplechoice02_opt03" name="multiplechoice02" type="radio" value="3">
					A coleta ou transformação de produtos minerais para uso exclusivo dos próprios moradores do domicílio ou de parentes que residiam em outro domicílio.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice02_opt04" title="Selecione para escolher a opção 4.">					
					<input id="multiplechoice02_opt04" name="multiplechoice02" type="radio" value="4">
					A construção, ampliação ou realização de grandes reparos para um amigo, morador em outro domicílio no mesmo condomínio.
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