<?php
	$moduleTitle = "Outras formas de trabalho"; //TITULO DA UNIDADE
	$topicTitle = ""; //TITULO DO TOPICO
	$pageTitle = "Exercício 6"; //TITULO DA PAGINA
	$pageSubtitle = ""; //SUBTITULO DA PAGINA	
	include "head.php";
?>

<script>	
	var exerciseCompletion = 0;
	var feedback01 = {
    type: "multiple-choice",
    correctValue: "3",
    hitFeedback: '<b>Parabéns!</b> Você selecionou a opção correta. A atividade feita em benefício de si mesmo ou de outra pessoa do domicílio ou da família não é trabalho voluntário. O estágio não remunerado, necessário para a entrada em um emprego ou requisito para a conclusão de um curso, não é trabalho voluntário, pois viola o requisito de não obrigatoriedade. O trabalho voluntário realizado compulsoriamente, como cumprimento de sentença judicial, não deve ser considerado na pesquisa. O requisito da não obrigatoriedade é mantido, mesmo nas situações em que o trabalho voluntário for realizado por “obrigação social”, explícita na pressão de amigos ou dos pais, nas expectativas de grupos sociais etc.',
    missFeedback: '<b>Atenção!</b> Você não selecionou a opção correta. A atividade feita em benefício de si mesmo ou de outra pessoa do domicílio ou da família não é trabalho voluntário. O estágio não remunerado, necessário para a entrada em um emprego ou requisito para a conclusão de um curso, não é trabalho voluntário, pois viola o requisito de não obrigatoriedade. O trabalho voluntário realizado compulsoriamente, como cumprimento de sentença judicial, não deve ser considerado na pesquisa. O requisito da não obrigatoriedade é mantido, mesmo nas situações em que o trabalho voluntário for realizado por “obrigação social”, explícita na pressão de amigos ou dos pais, nas expectativas de grupos sociais etc.',
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
        <p>Sobre o trabalho voluntário, é correto afirmar:</p>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt01" title="Selecione para escolher a opção 1.">					
					<input id="multiplechoice01_opt01" name="multiplechoice01" type="radio" value="1">
					O estágio não remunerado, necessário para a entrada em um emprego ou requisito para a conclusão de um curso, em algumas situações, pode ser considerado trabalho voluntário.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt02" title="Selecione para escolher a opção 2.">					
					<input id="multiplechoice01_opt02" name="multiplechoice01" type="radio" value="2">
					O trabalho voluntário realizado compulsoriamente, como cumprimento de sentença judicial deve ser registrado no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt03" title="Selecione para escolher a opção 3.">					
					<input id="multiplechoice01_opt03" name="multiplechoice01" type="radio" value="3">
					A atividade feita em benefício de si mesmo ou de outra pessoa do domicílio ou da família não é trabalho voluntário.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt04" title="Selecione para escolher a opção 4.">					
					<input id="multiplechoice01_opt04" name="multiplechoice01" type="radio" value="4">
					Quando o trabalho voluntário for realizado por “obrigação social”, explícita na pressão de amigos ou dos pais e nas expectativas de grupos sociais, não deve ser registrado no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt05" title="Selecione para escolher a opção 5.">					
					<input id="multiplechoice01_opt05" name="multiplechoice01" type="radio" value="5">
					Participar de mutirão para construir a casa de um primo configura-se como trabalho voluntário.
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