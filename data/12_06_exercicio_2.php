<?php
	$moduleTitle = "Outras formas de trabalho"; //TITULO DA UNIDADE
	$topicTitle = ""; //TITULO DO TOPICO
	$pageTitle = "Exercício 2"; //TITULO DA PAGINA
	$pageSubtitle = ""; //SUBTITULO DA PAGINA	
	include "head.php";
?>

<script>	
	var exerciseCompletion = 0;
	var feedback01 = {
    type: "multiple-choice",
    correctValue: "1",
    hitFeedback: '<b>Parabéns!</b> Você selecionou a opção correta. Para ser considerado produção para o próprio consumo, o produto ou serviço deve ser somente para consumo de membro(s) do domicílio ou de parente(s) que residiam em outro domicílio. Além disso, as atividades realizadas mediante venda ou troca de produtos ou serviços não são deverão ser consideradas.',
    missFeedback: '<b>Atenção!</b> Para ser considerado produção para o próprio consumo, o produto ou serviço deve ser somente para consumo de membro(s) do domicílio ou de parente(s) que residiam em outro domicílio. Além disso, as atividades realizadas mediante venda ou troca de produtos ou serviços não são deverão ser consideradas. Neste sentido, a doação de peixes para um vizinho idoso, não parente, trata-se de trabalho voluntário e não produção para o próprio consumo.',
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
			<form id="exercise02">
        <p>Dentre as situações abaixo apresentadas, qual <strong>não</strong> pode ser considerada produção para o próprio consumo, de acordo com os conceitos da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua?</p>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice02_opt01" title="Selecione para escolher a opção 1.">					
					<input id="multiplechoice02_opt01" name="multiplechoice02" type="radio" value="1">
					Carlos, após se aposentar, dedicou-se à pesca para o consumo dos moradores de sua unidade domiciliar. Parte do produto das suas pescarias também é compartilhado com o vizinho, não parente, que é idoso e mora sozinho.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice02_opt02" title="Selecione para escolher a opção 2.">					
					<input id="multiplechoice02_opt02" name="multiplechoice02" type="radio" value="2">
					Joana, além do seu trabalho remunerado, possui uma pequena horta no fundo de sua casa onde cultiva hortaliças para o consumo exclusivo da família.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice02_opt03" title="Selecione para escolher a opção 3.">					
					<input id="multiplechoice02_opt03" name="multiplechoice02" type="radio" value="3">
					Alexandre, além de estudar, trabalhou 15 horas, na semana de referência, cuidando da criação de galinhas e da plantação de legumes que se destinavam, apenas, à alimentação dos moradores de sua unidade domiciliar.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice02_opt04" title="Selecione para escolher a opção 4.">					
					<input id="multiplechoice02_opt04" name="multiplechoice02" type="radio" value="4">
					Andrade, possui dois irmãos: um mora com ele e outro não. Na semana de referência, empregou 30 horas construindo, sem contrapartida financeira, uma canoa a ser utilizada pelo irmão que não mora no mesmo domicílio.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice02_opt05" title="Selecione para escolher a opção 5.">					
					<input id="multiplechoice02_opt05" name="multiplechoice02" type="radio" value="5">
					Adriana, além de trabalhar, empregou 20 horas, na semana de referência, construindo um novo cômodo em sua residência.
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