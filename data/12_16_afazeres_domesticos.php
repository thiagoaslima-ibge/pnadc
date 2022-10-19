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
	.survey-icon-container img {
		/* https://codepen.io/sosuke/pen/Pjoqqp */
		-webkit-filter: invert(41%) sepia(10%) saturate(4109%) hue-rotate(181deg) brightness(90%) contrast(77%);
		filter: invert(41%) sepia(10%) saturate(4109%) hue-rotate(181deg) brightness(90%) contrast(77%);
	}

	.tabela-atividades>div {
		display: flex;
		align-items: center;
		margin: 15px 0;
	}

	.tabela-atividades p {
		margin: 0;
	}

	.tabela-atividades p.label {
		font-weight: normal;
		text-align: left;
		flex: 0 0 30%;
		letter-spacing: -0.5px;
		padding-right: 5px;
	}

	.tabela-atividades p.value {
		flex: 0 0 14%;
		padding-left: 10px;
		color: #a0a0a0;
	}

	.tabela-atividades .barra {
		height: 20px;
	}

	.tabela-atividades .barra[data-size="1"] {
		flex: 0 0 14%;
	}

	.tabela-atividades .barra[data-size="2"] {
		flex: 0 0 28%;
	}

	.tabela-atividades .barra[data-size="3"] {
		flex: 0 0 42%;
	}

	.tabela-atividades .barra[data-size="4"] {
		flex: 0 0 56%;
	}

	.tabela-atividades .barra[data-ident="1"] {
		margin-left: 14%;
	}

	.tabela-atividades .barra[data-ident="2"] {
		margin-left: 28%;
	}

	.tabela-atividades .barra[data-ident="3"] {
		margin-left: 42%;
	}

	.tabela-atividades .barra.azul {
		background-color: #2F5C8F;
	}

	.tabela-atividades .barra.rosa {
		background-color: #B999BE;
	}

	.tabela-atividades .barra.laranja {
		background-color: #D85C27;
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
					<img src="dist/img/pnad-survey-icon.svg" />
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

			<h5>Cuidado de animais domésticos</h5>
			<p>São tarefas realizadas por morador do domicílio relativas à alimentação, limpeza, banho, passeio, assim como dar remédio, levar no veterinário etc.</p>

			<h5>Cuidar da organização do domicílio</h5>
			<p>Neste conjunto de atividades também se incluem: fazer lista de compras; planejar o cardápio da refeição; planejar o orçamento doméstico; fazer os pagamentos no banco, na internet ou diretamente ao prestador de serviços; estabelecer as atividades que o trabalhador doméstico deverá realizar ao longo do dia; chamar pintor, eletricista ou bombeiro hidráulico para fazer reparos ou obras etc.</p>

			<h5>Fazer compras ou pesquisar preços de bens para o domicílio</h5>
			<p>Neste conjunto de atividades deve ser considerada a realização de compras ou pesquisa de preço no estabelecimento comercial, por telefone ou internet.</p>

			<h5>Cuidados com o automóvel</h5>
			<p>Lavar o carro, levar ao mecânico ou para a vistoria é considerado afazer doméstico no item 3.</p>

			<h5>Alimentos de grande durabilidade X alimentos de pouca durabilidade</h5>
			<p>As atividades de preparo de alimentos de pouca durabilidade, para o consumo imediato ou a serem congelados, para consumo em período relativamente curto, devem ser consideradas como parte dos afazeres domésticos. Como exemplo temos o ato de fazer feijão, arroz, legumes, carnes e tortas.</p>
			<p>Alimentos de grande durabilidade como a produção, o processamento e a conservação de carnes (abate de animais para produção de charque, de carne de sol, de peixe salgado, de linguiça defumada etc.) ou a produção de marmeladas, de goiabadas, de conservas, de queijos, de geleias, de farinha, de manteiga, de gordura animal, de massas caseiras, de torrefação e moagem de café etc. devem ser consideradas como produção para o próprio consumo. Portanto, para o presente quesito, diante de tal situação, o entrevistador deverá selecionar “Não”.</p>

			<h5>Pequenos reparos &times; confecção</h5>
			<p>Trocar zíper, botão, fazer bainha é afazer doméstico, abrangido por este quesito e deverá ser marcado “Sim” pelo entrevistador. Já fazer uma roupa é produção pra próprio consumo e deverá ser marcado “Não”, no presente quesito.</p>

			<h5>Afazeres domésticos &times; construção para o próprio consumo</h5>
			<p>Trocar lâmpada, pintar cômodo, rejuntar o piso, consertar uma tomada são consideradas atividades domésticas. Em contrapartida, reformas e grandes consertos no domicílio, realizadas por morador(es), tais como trocar toda a rede elétrica, azulejos, pisos, construir cômodo ou fazer ampliação do domicílio, não são atividades domésticas. Essas atividades devem ser consideradas como construção para o próprio uso.</p>
		</div>
		<!-- Quesito 120 [fim] -->

		<!-- Quesito 121a [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<img src="dist/img/pnad-survey-icon.svg" />
				</div>
				Quesito 121a
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/modulo-outras-formas/md/outras--quesito121a.jpg" media="(min-width:600px)">
					<source srcset="dist/img/modulo-outras-formas/sm/outras--quesito121a.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/modulo-outras-formas/md/outras--quesito121a.jpg" alt="Quesito 121a contendo a pergunta 'Na semana de 11/04/2021 a 17/04/2021, fez alguma tarefa doméstica em domicílio de parente?'">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">121a</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Este quesito visa identificar a realização de atividades de afazeres domésticos para parentes que não residiam no mesmo domicílio do entrevistado.</p>
			<p>O entrevistador irá selecionar <strong>Sim</strong>, caso o morador tenha executado, para parente, alguma das atividades listadas no quesito anterior.</p>
		</div>
		<!-- Quesito 121a [fim] -->

		<!-- Quesito 121b [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<img src="dist/img/pnad-survey-icon.svg" />
				</div>
				Quesito 121b
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/modulo-outras-formas/md/outras--quesito121b.jpg" media="(min-width:600px)">
					<source srcset="dist/img/modulo-outras-formas/sm/outras--quesito121b.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/modulo-outras-formas/md/outras--quesito121b.jpg" alt="Quesito 121b contendo a pergunta 'Na semana de 11/04/2021 a 17/04/2021, qual foi o total de horas que dedicou às atividades de cuidados de pessoas e/ou afazeres domésticos?'">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">121b</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Este quesito será habilitado apenas se for selecionado Sim para atividades de cuidado de pessoas e/ou afazeres domésticos. Nesta situação, o entrevistador vai solicitar ao morador que some as horas efetivamente dedicadas, na semana de referência, às <strong>atividades de cuidados de pessoas</strong> no domicílio ou de parentes e as <strong>atividades domésticas</strong> realizadas no próprio domicílio ou em domicílio de parente.</p>

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>As atividades de cuidado de pessoas e tarefas domésticas realizadas de forma simultânea devem ser contabilizadas uma única vez.</q>
			</aside>
			<!-- Realce [fim] -->

			<p>Imaginemos o exemplo de um morador que, na semana de referência, cuidou da organização do domicílio enquanto monitorava seu filho de seis anos, brincando. A atividade de monitoramento durou 3 horas e a de organização doméstica durou 1 hora. Nesse caso, o registro para o presente quesito será de 3 horas.</p>

			<h5>Atividades simultâneas</h5>
			<div class="tabela-atividades lining-figures">
				<div>
					<p class="label">Cuidado de pessoas</p>
					<div class="barra azul" data-size="3"></div>
					<p class="value">3 horas</p>
				</div>
				<div>
					<p class="label">Afazeres domésticos</p>
					<div class="barra laranja" data-size="1"></div>
					<p class="value">1 hora</p>
				</div>
				<div>
					<p class="label">Registro no DMC</p>
					<div class="barra" data-size="1">
						<div class="barra azul" style="margin: 0; height: 10px;"></div>
						<div class="barra laranja" style="margin: 0; height: 10px;"></div>
					</div>
					<div class="barra azul" data-size="2"></div>
					<p class="value">3 horas</p>
				</div>
			</div>

			<h5>Atividades não simultâneas</h5>

			<div class="tabela-atividades lining-figures">
				<div>
					<p class="label">Cuidado de pessoas</p>
					<div class="barra azul" data-size="3"></div>
					<p class="value">3 horas</p>
				</div>
				<div>
					<p class="label">Afazeres domésticos</p>
					<div class="barra laranja" data-ident="3" data-size="1"></div>
					<p class="value">1 hora</p>
				</div>
				<div>
					<p class="label">Registro no DMC</p>
					<div class="barra azul" data-size="3"></div>
					<div class="barra laranja" data-size="1"></div>
					<p class="value">4 horas</p>
				</div>
			</div>

		</div>
		<!-- Quesito 121b [fim] -->

		<!-- Quesito 122 [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<img src="dist/img/pnad-survey-icon.svg" />
				</div>
				Quesito 122
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/modulo-outras-formas/md/outras--quesito122.jpg" media="(min-width:600px)">
					<source srcset="dist/img/modulo-outras-formas/sm/outras--quesito122.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/modulo-outras-formas/md/outras--quesito122.jpg" alt="Quesito 122 contendo a pergunta 'Quem foi o informante da parte 4?'">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">122</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Neste quesito o entrevistador deverá informar qual foi a pessoa que prestou as informações nas perguntas relativas às Outras formas de trabalho. Esta informação é extremamente importante, pois em uma eventual checagem de dados, podemos procurar diretamente a pessoa que, prestou as informações.</p>
			<p>Por fim, assista o vídeo, a seguir, para compreender a dinâmica de funcionamento do DMC nos quesitos sobre as outras formas de trabalho:</p>
			<!-- @TODO: Qual video incluir aqui? -->
			<!-- Video incorporado (YouTube) [inicio] -->
			<div class="video-wrapper">
				<div class="video-wrapper__iframe video-wrapper__iframe--focusable" id="youtube-video--example01"></div>
			</div>
			<!-- Video incorporado (YouTube) [fim] -->
		</div>
		<!-- Quesito 122 [fim] -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<button class="btn modal_call" id="faq001">PNAD Contínua na mídia</button>
		</div>

	</div>
</main>

<!-- Janela modal [inicio] -->
<article class="modal" id="modal_faq001">
			<header class="modal__header">
				<h2 class="modal__heading-1">PNAD Contínua na mídia</h2>
				<button class="btn modal__btn-close">Fechar</button>
			</header>
			<div class="row modal__content">
				<div class="col-xs-24">
					<ul class="bulleted-list">
						<li>
							<a href="https://www.terra.com.br/economia/mais-homens-fazem-tarefa-domestica-mas-mulheres-ainda-trabalham-o-dobro-em-casa-aponta-ibge,6ac3d772311f01c9626942c4111d2986vywy78l2.html">
								Mais homens fazem tarefa doméstica, mas mulheres ainda trabalham o dobro em casa, aponta IBGE
							</a></li>

						<li><a href="https://agenciadenoticias.ibge.gov.br/agencia-noticias/2012-agencia-de-noticias/noticias/20912-mulheres-continuam-a-cuidar-mais-de-pessoas-e-afazeres-domesticos-que-homens">
								Mulheres continuam a cuidar mais de pessoas e afazeres domésticos que homens
							</a></li>

						<li><a href="https://agenciadenoticias.ibge.gov.br/agencia-sala-de-imprensa/2013-agencia-de-noticias/releases/18566-pnad-continua-2016-90-6-das-mulheres-e-74-1-dos-homens-realizaram-afazeres-domesticos-ou-cuidados-de-pessoas">
								PNAD Contínua 2016: 90,6% das mulheres e 74,1% dos homens realizaram afazeres domésticos ou cuidados de pessoas
							</a></li>

						<li><a href="https://agenciadenoticias.ibge.gov.br/agencia-noticias/2012-agencia-de-noticias/noticias/24268-pais-tem-7-2-milhoes-de-pessoas-que-fazem-trabalho-voluntario">
								País tem 7,2 milhões de pessoas que fazem trabalho voluntário
							</a></li>
						<li><a href="https://agenciadenoticias.ibge.gov.br/agencia-noticias/2012-agencia-de-noticias/noticias/27878-com-envelhecimento-cresce-numero-de-familiares-que-cuidam-de-idosos-no-pais">
								Com envelhecimento, cresce número de familiares que cuidam de idosos no país
							</a></li>
					</ul>
				</div>
			</div>
		</article>
		<!-- Janela modal [fim] -->

<?php include "foot.php"; ?>

</body>

</html>