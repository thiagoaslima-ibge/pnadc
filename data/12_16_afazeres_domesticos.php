<?php
$moduleTitle = "Outras formas de trabalho"; //TITULO DA UNIDADE
$topicTitle = ""; //TITULO DO TOPICO
$pageTitle = "Afazeres domésticos"; //TITULO DA PAGINA	
$pageSubtitle = "Os afazeres domésticos são as atividades realizadas em benefício próprio e dos moradores, sem envolver qualquer tipo de remuneração em dinheiro, produtos ou mercadorias."; //SUBTITULO DA PAGINA	
require "head.php";
?>

<style>
	.survey-icon-container {
		width: 34px;
		height: 42px;
		color: #416CB4;
		display: inline-block;
		vertical-align: middle;
		margin-right: 0.63rem;
	}
</style>

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
			<p>Também compreendem o exercício de tarefas relacionadas às atividades de arrumação ou limpeza de quintal ou de terreno que circunda a residência e tenham caráter exclusivamente doméstico.</p>

			<!-- Citacao em bloco [inicio] -->
			<blockquote class="quote" cite="http://www.google.com.br/">
				<p>Na casa do estudante Thales Portugal (nome fictício a pedido da fonte) é mais ou menos assim que funciona. Ele mora com a mãe, uma professora de 58 anos, e o pai, que com seus 65 anos é advogado e técnico em eletrotécnica aposentado. Ele e a mãe passam a maior parte do tempo fora de casa por conta das demandas de estudo e trabalho. (...)</p>
				<p>"Eu lavo a louça e o banheiro, minha mãe varre, limpa a casa e cozinha. Meu pai é a madame que só come, dorme e suja. Minha mãe diz que ele é de outra época e que não vai mudar. Não acho justo que numa casa de três pessoas apenas duas façam as coisas", conta o estudante.</p>
				<footer>
					<p class="quote__author">
					Fonte: <a href="https://www.correio24horas.com.br/noticia/nid/homens-estao-fazendo-menos-tarefas-domesticas-na-bahia-aponta-ibge/">
						Correio 24 horas
					</a>
					</p>
				</footer>
			</blockquote>
			<!-- Citacao em bloco [fim] -->

			<p>A situação acima não é percebida apenas no domicílio do Thales. Está presente em muitos domicílios brasileiros.</p>
			<p>Pensar sobre a nossa cultura e sobre as relações sócio-históricas que contribuem para um grande peso de atividades domésticas sobre as mulheres é fator primordial para entendermos tal dinâmica social, propor reflexões e mudanças. Iniciar essa reflexão só é possível a partir de dados confiáveis sobre o “trabalho invisível”.</p>
		</div>

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Atividades de cultivo, pesca ou criação de animais</h2>
			<p>A primeira seção do questionário sobre produção para o próprio consumo é composta de três quesitos que visam identificar e qualificar as atividades em cultivo, pesca ou criação de animais. Vejamos, a seguir:</p>
		</div>

		<!-- Destaque [inicio] -->
		<section class="feature feature--example">
			<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
				<h2 class="feature__title">Certificação de metodologias</h2>
				<p>De acordo com a <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua, dados de 2019, as mulheres que trabalham dedicavam em média 18,5 horas para afazeres domésticos e cuidados de pessoas da família, especialmente os filhos. Homens ocupados dedicavam em média 10,4 horas para essas atividades.</p>
			</div>
		</section>
		<!-- Destaque [fim] -->

		<!-- Quesito 120 [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<?php echo getIcon('pnadc-survey') ?>
				</div>
				Quesito 120
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/modulo-outras-formas/md/outras--quesito120.jpg" media="(min-width:600px)">
					<source srcset="dist/img/modulo-outras-formas/sm/outras--quesito120.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/modulo-outras-formas/md/outras--quesito120.jpg" alt="Quesito 120 contendo a pergunta 'Na semana de 11/04/2021 a 17/04/2021, fez tarefas domésticas para o próprio domícilio, tais como:'">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">120</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Neste quesito, o entrevistador irá marcar <strong>Sim</strong> ou <strong>Não</strong>, para cada um dos tipos de afazeres domésticos, para cada morador. A seguir, a lista completa, constante do DMC:</p>
			
			<!-- Lista ordenada [inicio] -->
			<ul class="numeric-list">
				<li>Preparar ou servir alimentos, arrumar a mesa ou lavar as louças?</li>
				<li>Cuidar da limpeza ou manutenção de roupas e sapatos?</li>
				<li>Fazer pequenos reparos ou manutenção do domicílio, do automóvel, de eletrodomésticos ou outros equipamentos?</li>
				<li>Limpar ou arrumar o domicílio, a garagem, o quintal ou o jardim?</li>
				<li>Cuidar da organização do domicílio (pagar contas, contratar serviços, orientar empregados etc.)?</li>
				<li>Fazer compras ou pesquisar preços de bens para o domicílio?</li>
				<li>Cuidar dos animais domésticos?</li>
				<li>Outras tarefas domésticas?</li>
			</ul>
			<!-- Lista ordenada [fim] -->

			<p>Observe as seguintes orientações, na seleção dos itens acima listados:</p>
		</div>
		<!-- Quesito 120 [fim] -->

		<!-- Quesito 117b [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<?php echo getIcon('pnadc-survey') ?>
				</div>
				Quesito 117b
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/modulo-outras-formas/md/outras--quesito117b.jpg" media="(min-width:600px)">
					<source srcset="dist/img/modulo-outras-formas/sm/outras--quesito117b.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/modulo-outras-formas/md/outras--quesito117b.jpg" alt="Quesito 117b contendo a pergunta 'Na semana de 11/04/2021 a 17/04/2021, a qual(ais) morador(es) dedicou esse(s) cuidados?'">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">117b</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Quando o morador declarar, no quesito anterior, que ele e/ou alguém no domicílio realizou tarefas de cuidados de moradores do próprio domicílio, será habilitado este quesito, que traz informações do quadro de moradores. O entrevistador vai selecionar aquele(s) que recebeu(ram) cuidados, do morador em questão, na semana de referência.</p>

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>O entrevistador deve pronunciar com bastante clareza o nome constate logo abaixo da pergunta, no DMC, a fim de que a correta relação entre <strong>morador cuidador</strong> e <strong>morador cuidado</strong> seja efetuada.</q>
			</aside>
			<!-- Realce [fim] -->
		</div>
		<!-- Quesito 117b [fim] -->

		<!-- Quesito 119 [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<?php echo getIcon('pnadc-survey') ?>
				</div>
				Quesito 119
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/modulo-outras-formas/md/outras--quesito119.jpg" media="(min-width:600px)">
					<source srcset="dist/img/modulo-outras-formas/sm/outras--quesito119.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/modulo-outras-formas/md/outras--quesito119.jpg" alt="Quesito 119 contendo a pergunta 'Na semana de 11/04/2021 a 17/04/2021, cuidou de parentes que não moravam neste domicílio e que precisavam de cuidados (crianças, idosos, enfermos ou pessoas com necessidades especiais)?'">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">119</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Este quesito visa identificar a realização de atividades de cuidado ao morador parente que não residia no mesmo domicílio, mesmo que o cuidado tenha sido realizado no próprio domicílio do entrevistado. Por exemplo, a avó que cuida do neto, sendo este morador de outro domicílio; filhos que monitoram a saúde da mãe idosa, moradora em outro domicílio etc.</p>
			<p>O entrevistador irá selecionar <strong>Sim</strong> ou <strong>Não</strong>, conforme o caso. As orientações para o preenchimento são as mesmas já apresentadas no quesito 117a, que apresenta os tipos de tarefa de cuidados.</p>

			<button class="btn modal_call" id="faq001">Tarefas de cuidados</button>
			<!-- Janela modal [inicio] -->
			<article class="modal" id="modal_faq001">
				<header class="modal__header">
					<h2 class="modal__heading-1">Tarefas de cuidados</h2>
					<button class="btn modal__btn-close">Fechar</button>
				</header>
				<div class="row modal__content">
					<div class="col-xs-24">
						<h5>Auxiliar nos cuidados pessoais (alimentar, vestir, pentear, dar remédio, dar banho, colocar para dormir)</h5>
						<p>O morador auxiliou nos cuidados pessoais (alimentou, vestiu, penteou, deu remédio, deu banho, colocou para dormir) de moradores do domicílio que eram crianças, idosos, enfermos ou pessoas com necessidades especiais. Além dos cuidados mencionados, podem ser considerados quaisquer outras atividades de apoio nos cuidados pessoais de outro(s) morador(es). Exemplo: trocar fralda; amamentar; levar ao banheiro; escovar os dentes; fazer a barba etc.</p>

						<h5>Auxiliar em atividades educacionais</h5>
						<p>O morador auxiliou em atividades educacionais de moradores do domicílio que eram crianças ou adolescentes, idosos ou pessoas com necessidades especiais. São consideradas atividades educacionais: orientar ou ajudar nos deveres e nas atividades escolares em geral, realizar atividades que incentivem o desenvolvimento cognitivo, visando facilitar o processo de aprendizado de crianças ou pessoas portadoras de necessidades especiais.</p>

						<h5>Ler, jogar ou brincar</h5>
						<p>O morador realizou atividades de leitura, jogos ou brincadeiras para moradores do domicílio que eram crianças, idosos, enfermos ou pessoas com necessidades especiais. São consideradas todas as atividades de recreação dentro ou fora do domicílio realizadas pela pessoa que cuida.</p>

						<h5>Monitorar ou fazer companhia dentro do domicílio</h5>
						<p>O morador monitorou ou fez companhia dentro do domicílio a moradores do domicílio que eram crianças, idosos, enfermos ou pessoas com necessidades especiais. São consideradas atividades de monitoramento e companhia: ficar atento para situações em que é necessária a participação da pessoa que está cuidando, observar uma criança enquanto brinca para não se acidentar, acompanhar se o idoso tomou todos os remédios de forma correta, ficar atento e disponível às necessidades de um enfermo ou idoso ao longo do dia etc.</p>

						<h5>Transportar ou acompanhar para escola, médico, exames, parque, praça, atividades sociais, culturais, esportivas ou religiosas</h5>
						<p>O morador transportou ou acompanhou para escola, médico, exame, parque, praça, atividades sociais, culturais, esportivas ou religiosas, moradores do domicílio que eram crianças, idosos, enfermos ou pessoas com necessidades especiais. Também são consideradas atividades de transporte ou acompanhamento levar o idoso a um baile, transportá-lo para a casa de amigos ou parentes, levar crianças para natação e outras atividades etc.</p>

						<h5>Outras tarefas de cuidados de moradores</h5>
						<p>O morador realizou outras tarefas de cuidados de moradores do domicílio: crianças, idosos, enfermos ou pessoas com necessidades especiais.</p>
					</div>
				</div>
			</article>
			<!-- Janela modal [fim] -->

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>Não devem ser consideradas as pessoas não parentes que moram em outro domicílio e receberam cuidados, como por exemplo vizinhos e amigos. Neste caso, trata-se de trabalho voluntário e não de cuidado de pessoas.</q>
			</aside>
			<!-- Realce [fim] -->
		</div>
		<!-- Quesito 119 [fim] -->

	</div>
</main>

<?php include "foot.php"; ?>

</body>

</html>