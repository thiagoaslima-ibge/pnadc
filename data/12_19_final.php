<?php
$moduleTitle = "Outras formas de trabalho"; //TITULO DA UNIDADE
$topicTitle = "Encerramento"; //TITULO DO TOPICO
$pageTitle = "Final da unidade"; //TITULO DA PAGINA	
$pageSubtitle = "Chegamos ao final da Unidade 12 do Treinamento, na qual pudemos conhecer os quesitos sobre as outras formas de trabalho."; //SUBTITULO DA PAGINA	
require "head.php";
?>

<main class="page-content okgo">

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

	<div class="row old-style-figures">

		<!-- Conteudo da pagina [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Para concluir esta unidade, compartilhamos uma imagem, um podcast, além do texto da pesquisadora de gênero e direitos humanos, Liz Cosmelli:</p>
		</div>

		<!-- Imagem pequena (com hostpot) [inicio] -->
		<figure class="hotspot-container img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<img class="hotspot-container__image" src="dist/img/charge-6.jpg" alt="Em uma pista de corrida com seis raias, as três primeiras são ocupadas por mulheres e três demais por homens, todos os seis agachados, aguardando o sinal para a largada. Tanto homens quanto mulheres utilizam o dress code corporativo, bem formal. As raias femininas estão obstruídas por um varal de roupas, tábua de passar e outros utensílios domésticos. As raias masculinas estão inteiramente livres.">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-8 col-sm-offset-0 col-md-5 col-lg-4 img-container__caption">
				<div class="img-container__top-line"></div>
				Charge ironiza a meritocracia ao apontar que, apesar de largarem do mesmo local, supostamente em condições de igualdade, as raias femininas possuem obstáculos que os homens não enfrentam.
				<small class="img-container__img-src">Fonte: <a href="https://paisefilhos.uol.com.br/wp-content/uploads/2019/02/1-3.jpg">https://paisefilhos.uol.com.br/wp-content/uploads/2019/02/1-3.jpg</a></small>
			</figcaption>
		</figure>
		<!-- Imagem pequena (com hostpot) [fim] -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			
			<!-- Video incorporado (YouTube) [inicio] -->
			<div class="video-wrapper">
				<div class="video-wrapper__iframe video-wrapper__iframe--focusable" id="youtube-video--example01"></div>
			</div>
			<!-- Video incorporado (YouTube) [fim] -->

			<!-- Citacao em bloco [inicio] -->
			<blockquote class="quote">
				<p>"A administração do lar nos foi direcionada por uma sociedade masculina detentora do poder político e religioso durante séculos, controlando inclusive nossa capacidade reprodutiva. (...)</p>
				<p>Segundo dados divulgados em 2019 pelo Instituto Brasileiro de Geografia e Estatística (IBGE), as mulheres dedicam em média 18,5 horas semanais aos afazeres domésticos e cuidado de pessoas, na comparação com 10,3 horas semanais gastas nessas atividades pelos homens. (...). A sobrecarga de horas de trabalho das mulheres é uma das barreiras para a participação feminina no mercado de trabalho em igualdade de condições com os homens. Dificultando consequente acesso a recursos econômicos que lhes permitam maior grau de autonomia. (...)</p>
				<p>Ao retratar a questão da divisão doméstica no Brasil, evidenciamos não só a desigualdade de gênero no país, mas também de classe e raça. É necessário ter o olhar interseccional para esse problema, especialmente, para a realização de um panorama completo e formulação de políticas inclusivas para garantir melhores condições de trabalho a essas mulheres. Importante refletir e evidenciar que as dificuldades e sobrecargas entre elas não são as mesmas. Mulheres negras, brancas, periféricas, da classe média, dos centros urbanos e rurais, se deparam com essa jornada dupla e invisível de formas bem diferentes.</p>
				<p>Devemos olhar para a nossa história ao tocar nesse ponto. Como dito anteriormente, as mulheres foram sobrecarregadas por esses serviços desde sempre. Porém, há uma diferença entra as mulheres brancas e negras. Enquanto as brancas lutam para conseguir sua autonomia econômica e emancipação profissional, as negras ainda são vinculadas a serviços domésticos e de cuidado, com similaridades a época da escravidão.</p>
				<footer>
					<p class="quote__author">
						<a href="https://diplomatique.org.br/voce-poderia-ter-me-pedido-o-trabalho-invisivel-das-mulheres/">
							Diplomatique
						</a>
					</p>
				</footer>
			</blockquote>
			<!-- Citacao em bloco [fim] -->

			<p>Por fim, convidamos você a refletir sobre a importância do seu trabalho, enquanto entrevistador, contribuindo para a coleta de dados e informações que permitem conhecer a realidade nacional e olhar de forma crítica e problematizadora para a nossa sociedade, em busca de melhorias e mudanças.</p>
		</div>

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<button class="btn modal_call" id="faq001">Referências</button>
		</div>

	</div>
</main>

<!-- Janela modal [inicio] -->
<article class="modal" id="modal_faq001">
	<header class="modal__header">
		<h2 class="modal__heading-1">Referências</h2>
		<button class="btn modal__btn-close">Fechar</button>
	</header>
	<div class="row modal__content">
		<div class="col-xs-24">
			<p>INSTITUTO BRASILEIRO DE GEOGRAFIA E ESTATÍSTICA – IBGE. Coordenação de Trabalho e rendimento. <strong>Pesquisa nacional por amostra de domicílios: Manual Básico da Entrevista.</strong> IBGE, 2019.</p>
			<p>INSTITUTO BRASILEIRO DE GEOGRAFIA E ESTATÍSTICA – IBGE. Coordenação de Trabalho e rendimento. <strong>Pesquisa nacional por amostra de domicílios: Notas Técnicas</strong>, 5ª ed. IBGE, Rio de Janeiro, RJ, 2019.</p>
		</div>
	</div>
</article>
<!-- Janela modal [fim] -->

<?php include "foot.php"; ?>

<!-- Inclua o script a seguir para incorporar videos do YouTube -->
<script src="https://www.youtube.com/iframe_api"></script>

<script>
/* Configuracao e ativacao da incorporacao de video do YouTube [inicio] */
function onYouTubeIframeAPIReady() {
	//Funcao que cria o player do YouTube. O primeiro parametro e o elemento, o segundo a ID do video
	buildYouTubePlayer('youtube-video--example01', 'eOJALUR0ZTM');
};
/* Configuracao e ativacao da incorporacao de video do YouTube [fim] */
</script>

</body>

</html>