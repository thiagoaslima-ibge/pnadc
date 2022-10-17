<?php
$moduleTitle = "Outras formas de trabalho"; //TITULO DA UNIDADE
$topicTitle = ""; //TITULO DO TOPICO
$pageTitle = "Exercício 11"; //TITULO DA PAGINA
$pageSubtitle = ""; //SUBTITULO DA PAGINA	
include "head.php";
?>

<script>
	var exerciseCompletion = 0;
	var feedback01 = {
		type: "multiple-choice",
		correctValue: "5",
		hitFeedback: '<b>Parabéns!</b> Você selecionou a opção correta. A charge que se relaciona diretamente à questão identificada pela pesquisa do IBGE é da mulher tentando equilibrar o seu trabalho, os fazeres domésticos e o cuidado de pessoas. Pensar sobre a nossa cultura e sobre as relações sócio-históricas que contribuem para um grande peso de atividades domésticas sobre as mulheres é fator primordial para entendermos tal dinâmica social, propor reflexões e mudanças.',
		missFeedback: '<b>Atenção!</b> Você não selecionou a opção correta. A charge que se relaciona diretamente à questão identificada pela pesquisa do IBGE é da mulher tentando equilibrar o seu trabalho, os fazeres domésticos e o cuidado de pessoas. Pensar sobre a nossa cultura e sobre as relações sócio-históricas que contribuem para um grande peso de atividades domésticas sobre as mulheres é fator primordial para entendermos tal dinâmica social, propor reflexões e mudanças.',
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

			<!-- MULTIPLA ESCOLHA COM IMAGENS -->
			<form id="exercise01">
				<p>De acordo com Pesquisa Nacional por Amostra de Domicílios Contínua (PNAD Contínua), referente a 2019, as mulheres que trabalham dedicam em média 18,5 horas para afazeres domésticos e cuidados de pessoas das famílias, especialmente os filhos. Homens ocupados dedicam 10,4 horas para essas atividades.</p>
				<p>Qual dentre as charges a seguir se relaciona diretamente à questão identificada pela pesquisa do IBGE, mais especificamente ao chamado “trabalho invisível”?</p>
				<div class="row">
					<label class="col-xs-22 col-xs-offset-2 col-sm-offset-0 col-md-11" for="multiplechoice01_opt01" title="Selecione para escolher a opção 1.">
						<input class="multiple-choice__input--img" id="multiplechoice01_opt01" name="multiplechoice01" type="radio" value="1">
						<img class="image" src="dist/img/charge-1.jpeg" alt="Com uma lâmpada mágica na mão e diante de um gênio que sai de dentro do objeto, homem solicita um emprego ao gênio, o qual, coçando a cabeça, em sinal de dificuldade, pergunta se ele não possui um desejo mais fácil.">
						<p>
							<span>De forma humorada, a charge retrata a dificuldade para se conseguir um emprego.</span>
							<small>Fonte: <a href="http://www.nanihumor.com/">http://www.nanihumor.com/</a></small>
						</p>
					</label>
					<label class="col-xs-22 col-xs-offset-2 col-sm-offset-0 col-md-11 col-md-offset-1" for="multiplechoice01_opt02" title="Selecione para escolher a opção 2.">
						<input class="multiple-choice__input--img" id="multiplechoice01_opt02" name="multiplechoice01" type="radio" value="2">
						<img class="image" src="dist/img/charge-2.jpeg" alt="Em um local desértico, com sol escaldante, cactos, pedras e ossadas de gado morto, um homem branco de terno oferece uma bola para uma criança, subnutrida, com fome, descalça, malvestida que arregala os olhos e pergunta se pode comer a bola.">
						<p>
							<span>Charge faz uma crítica à falta de conhecimento das necessidades básicas da população carente.</span>
							<small>Fonte: <a href="http://www.arionaurocartuns.com.br/2018/06/">http://www.arionaurocartuns.com.br/2018/06/</a></small>
						</p>
					</label>
					<label class="col-xs-22 col-xs-offset-2 col-sm-offset-0 col-md-11" for="multiplechoice01_opt03" title="Selecione para escolher a opção 3.">
						<input class="multiple-choice__input--img" id="multiplechoice01_opt03" name="multiplechoice01" type="radio" value="3">
						<img class="image" src="dist/img/charge-3.jpeg" alt="Em uma monocicleta, na corda bamba, uma mulher, além de portar a sua bolsa equilibra três “pratos”: Um na mão direita, contendo um fogão, acompanhado de panelas e botijão de gás; outro no nariz, com um bebê, uma bola e uma mamadeira e outro na mão esquerda, com cadeira, mesa de escritório e um computador.">
						<p>
							<span>Charge faz uma crítica ao ínfimo reajuste do salário-mínimo</span>
							<small>Fonte: <a href="https://radioloandafm.wordpress.com/2008/03/04/04-de-marco-charge-do-dia-vida-de-mulher/">https://radioloandafm.wordpress.com/2008/03/04/04-de-marco-charge-do-dia-vida-de-mulher/</a></small>
						</p>
					</label>
					<label class="col-xs-22 col-xs-offset-2 col-sm-offset-0 col-md-11 col-md-offset-1" for="multiplechoice01_opt04" title="Selecione para escolher a opção 4.">
						<input class="multiple-choice__input--img" id="multiplechoice01_opt04" name="multiplechoice01" type="radio" value="4">
						<img class="image" src="dist/img/charge-4.jpeg" alt="Dois homens brancos diante de um microscópio monocular. O homem à esquerda, com olhar arregalado, pergunta se o homem à direita, com o olho no microscópio, conseguiu ver o aumento de salário. Este, com expressão de desdém, responde que “sim”, mas que é tão pequeno que está sofrendo bullying das amebas.">
						<p>
							<span>Charge satiriza as semelhanças entre os primeiros anos de vida de uma criança e as necessidades apresentadas por idosos com mobilidade reduzida.</span>
							<small>Fonte: <a href="https://www.obemdito.com.br/italo/salario-minimo-ideal-no-brasil-deveria-ser-de-4000-reais/4978/">https://www.obemdito.com.br/italo/salario-minimo-ideal-no-brasil-deveria-ser-de-4000-reais/4978/</a></small>
						</p>
					</label>
					<label class="col-xs-22 col-xs-offset-2 col-sm-offset-0 col-md-11 col-md-offset-1" for="multiplechoice01_opt05" title="Selecione para escolher a opção 4.">
						<input class="multiple-choice__input--img" id="multiplechoice01_opt05" name="multiplechoice01" type="radio" value="5">
						<img class="image" src="dist/img/charge-5.jpeg" alt="O bebê, no andador infantil, olha intrigado para o idoso, que está segurando um andador de adulto, de quatro apoios, para se manter de pé.">
						<p>
							<span>Charge satiriza o equilíbrio que mulheres fazem para dar conta do trabalho, dos afazeres domésticos e dos cuidados com os filhos.</span>
							<small>Fonte: <a href="https://nativaperiodico.wordpress.com/2011/08/31/eu-vivo-mal-humorada-12/">https://nativaperiodico.wordpress.com/2011/08/31/eu-vivo-mal-humorada-12/</a></small>
						</p>
					</label>
				</div>
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

</body>

</html>