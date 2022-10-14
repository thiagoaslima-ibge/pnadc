<?php
$moduleTitle = "Outras formas de trabalho"; //TITULO DA UNIDADE
$topicTitle = ""; //TITULO DO TOPICO
$pageTitle = "Cuidado de pessoas"; //TITULO DA PAGINA	
$pageSubtitle = "Este grupo de questões investiga os moradores de 14 anos ou mais de idade que exerceram atividades de cuidado de pessoas, na semana de referência."; //SUBTITULO DA PAGINA	
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
			<p>Para a <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua, os cuidados de pessoas são aqueles destinados aos moradores do domicílio ou aos parentes que residiam em outro domicílio e que necessitavam de tais cuidados, como: crianças, idosos, enfermos ou pessoas com necessidades especiais.</p>

			<!-- Citacao em bloco [inicio] -->
			<aside class="quote" style="padding: 0.5rem 1rem; font-style: italic">
				<p>Com a necessidade de ajudar a mãe na fase mais delicada da vida, a operadora de telemarketing Elisângela de Sousa, de 43 anos, deixou o emprego e resolveu dedicar-se apenas à mãe. “Nessa fase, nessa idade, o que ela [a mãe] está precisando, é de segurança. Então eu tive que parar [tudo] e dizer ‘tem que ser eu’, porque se eu deixasse ela na mão dos outros, não ia dar certo”, conta Elisângela. A idosa, Maria do Socorro Pinto, tem 84 anos está na fase de que precisa de ajuda até mesmo para ações mais básicas, como tomar banho.</p>
				<p><small>Fonte: <a href="https://diariodonordeste.verdesmares.com.br/metro/ceara-e-o-4-estado-no-pais-com-mais-familiares-que-se-dedicam-apenas-a-cuidar-de-idosos-1.2951655">Diário do Nordeste</a></small></p>
			</aside>
			<!-- Citacao em bloco [fim] -->

			<p>Trata-se, portanto, de um exemplo bastante comum nos domicílios de um país cujo número de idosos vem aumentando. No entanto, convém destacar a diferença entre cuidados de pessoas e trabalho voluntário:</p>
			<p>Se os cuidados foram destinados aos moradores do domicílio ou aos parentes que residiam em outro domicílio, trata-se de <strong>cuidado de pessoas</strong>. Se os cuidados foram destinados a terceiros, isto é, pessoas que não moram na mesma casa que o voluntário e não são seus parentes, trata-se de <strong>trabalho voluntário</strong>. Em ambas situações o trabalho não pode ser remunerado.</p>
			<p>Vejamos, a seguir, os quesitos sobre cuidados de pessoas:</p>
		</div>

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Atividades de cultivo, pesca ou criação de animais</h2>
			<p>A primeira seção do questionário sobre produção para o próprio consumo é composta de três quesitos que visam identificar e qualificar as atividades em cultivo, pesca ou criação de animais. Vejamos, a seguir:</p>
		</div>

		<!-- Quesito 117a [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<?php echo getIcon('pnadc-survey') ?>
				</div>
				Quesito 117a
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/modulo-outras-formas/md/outras--quesito117a.jpg" media="(min-width:600px)">
					<source srcset="dist/img/modulo-outras-formas/sm/outras--quesito117a.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/modulo-outras-formas/md/outras--quesito117a.jpg" alt="Quesito 117a contendo a pergunta 'Na semana de 11/04/2021 a 17/04/2021, realizou tarefas de cuidados a moradores deste domicílio que eram cianças, idosos, enfermos ou pessoas com necessidades especiais?'">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">117a</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>Considera-se cuidado de pessoas as atividades realizadas por um morador em apoio ou auxílio a outro que não poderia realizá-las de forma independente.</q>
			</aside>
			<!-- Realce [fim] -->

			<p>Essas pessoas poderão ser crianças, idosos, enfermos ou pessoas que necessitam de cuidados especiais.</p>
			<p>O entrevistador deverá selecionar <strong>Sim</strong> ou <strong>Não</strong>, de acordo com as seguintes orientações:</p>

			<h5>Auxiliar nos cuidados pessoais (alimentar, vestir, pentear, dar remédio, dar banho, colocar para dormir)?</h5>
			<p>O morador auxiliou nos cuidados pessoais (alimentou, vestiu, penteou, deu remédio, deu banho, colocou para dormir) de moradores do domicílio que eram crianças, idosos, enfermos ou pessoas com necessidades especiais. Além dos cuidados mencionados, podem ser considerados quaisquer outras atividades de apoio nos cuidados pessoais de outro(s) morador(es). Exemplo: trocar fralda; amamentar; levar ao banheiro; escovar os dentes; fazer a barba etc.</p>

			<h5>Auxiliar em atividades educacionais?</h5>
			<p>O morador auxiliou em atividades educacionais de moradores do domicílio que eram crianças ou adolescentes, idosos ou pessoas com necessidades especiais. São consideradas atividades educacionais: orientar ou ajudar nos deveres e nas atividades escolares em geral, realizar atividades que incentivem o desenvolvimento cognitivo, visando facilitar o processo de aprendizado de crianças ou pessoas portadoras de necessidades especiais.</p>

			<h5>Ler, jogar ou brincar?</h5>
			<p>O morador realizou atividades de leitura, jogos ou brincadeiras para moradores do domicílio que eram crianças, idosos, enfermos ou pessoas com necessidades especiais. São consideradas todas as atividades de recreação dentro ou fora do domicílio realizadas pela pessoa que cuida.</p>

			<h5>Monitorar ou fazer companhia dentro do domicílio?</h5>
			<p>O morador monitorou ou fez companhia dentro do domicílio a moradores do domicílio que eram crianças, idosos, enfermos ou pessoas com necessidades especiais. São consideradas atividades de monitoramento e companhia: ficar atento para situações em que é necessária a participação da pessoa que está cuidando, observar uma criança enquanto brinca para não se acidentar, acompanhar se o idoso tomou todos os remédios de forma correta, ficar atento e disponível às necessidades de um enfermo ou idoso ao longo do dia etc.</p>

			<h5>Transportar ou acompanhar para escola, médico, exames, parque, praça, atividades sociais, culturais, esportivas ou religiosas?</h5>
			<p>O morador transportou ou acompanhou para escola, médico, exame, parque, praça, atividades sociais, culturais, esportivas ou religiosas, moradores do domicílio que eram crianças, idosos, enfermos ou pessoas com necessidades especiais. Também são consideradas atividades de transporte ou acompanhamento levar o idoso a um baile, transportá-lo para a casa de amigos ou parentes, levar crianças para natação e outras atividades etc.</p>

			<h5>Outras tarefas de cuidados de moradores?</h5>
			<p>O morador realizou outras tarefas de cuidados de moradores do domicílio: crianças, idosos, enfermos ou pessoas com necessidades especiais.</p>

			<p>Cabe destacar que adulto só pode receber cuidado se estiver enfermo ou tiver necessidade especial que o incapacite. Por exemplo: o ato de uma esposa, por carinho, levar comida na cama para o marido, para a pesquisa, não se configura como cuidado, dado que ele pode fazer isso sozinho.</p>
		</div>
		<!-- Quesito 117a [fim] -->

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