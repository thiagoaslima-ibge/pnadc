<?php
$moduleTitle = "Outras formas de trabalho"; //TITULO DA UNIDADE
$topicTitle = ""; //TITULO DO TOPICO
$pageTitle = "Trabalho voluntário"; //TITULO DA PAGINA	
$pageSubtitle = "Trabalho voluntário é aquele não compulsório, sem recebimento de remuneração em dinheiro ou benefícios, realizado por pelo menos uma hora por semana."; //SUBTITULO DA PAGINA	
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
			<p>O trabalho voluntário, embora não remunerado, produz bens ou serviços para terceiros, isto é, pessoas que não moram na mesma casa que o voluntário e não são seus parentes.</p>
			<p>Antes de apresentarmos os quesitos e os conceitos, veja as histórias a seguir, extraídas da <a href="https://agenciadenoticias.ibge.gov.br/agencia-noticias/2012-agencia-de-noticias/noticias/20618-cerca-de-6-5-milhoes-de-pessoas-fazem-trabalho-voluntario-no-pais">Agência IBGE Notícias</a></p>

			<h5>José</h5>
			<p>Aos 49 anos de idade, José de Ribamar Goes desenvolve trabalhos voluntários na comunidade da Alemanha, bairro da cidade de São Luís - MA, marcado pela carência de serviços que deveriam ser oferecidos pelo poder público. Para suprir essa necessidade, o morador distribui frequentemente cestas básicas para as famílias humildes e ainda promove, com a ajuda de parceiros e amigos, atividades esportivas para as crianças.</p>
			<p>“Há 25 anos venho realizando essas atividades. Eu via outras pessoas ajudando e isso me inspirou a fazer o mesmo”, destacou o morador, que também organiza outras atividades para arrecadar fundos e direcioná-los às famílias carentes da região, onde é grande a quantidade de famílias de baixa renda que habitam em palafitas.</p>

			<h5>Mariana</h5>
			<p>Mariana Moura é formada em Psicologia e se dedicou, até o início do ano (2018), ao trabalho voluntário no Centro Humanitário de Amparo à Maternidade – CHAMA, no Ceará, grupo que presta apoio a mulheres grávidas em situação vulnerável.</p>
			<p>No projeto CHAMA, Mariana acolhia mulheres que estavam em situação de rua ou que haviam sofrido violência do marido ou foram expulsas pela família e não tinham para onde ir. “Nós fazemos o apoio ao pós-parto imediato e ao processo de amamentação, que é um momento em que as mulheres estão bem vulneráveis por conta da ansiedade e de aspectos psíquicos e elas precisam do acompanhamento de um profissional de psicologia”, explicou.</p>

			<h5>Agláia</h5>
			<p>Agláia Tavares é servidora do IBGE há 17 anos e trabalha com tecelagem manual de gorros de lã para o projeto <a href="http://www.projetooctobrasil.com.br/">Octo</a>, que doa polvos de crochê, além dos gorros, para nascidos prematuros em unidades neonatais. A servidora gasta pelo menos duas horas por semana na confecção dos gorrinhos.</p>
			<p>O objetivo da doação é deixar os bebês mais calmos e acolhidos, além de os tentáculos do polvo servirem de substitutos para a criança que tende a puxar os fios e sondas da incubadora. Como a servidora do IBGE não trabalha com crochê, mas com tricô, em vez de fazer os polvos, começou a confeccionar gorros para ser mais um elemento que agasalhe o prematuro no ambiente frio da internação.</p>

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<p>Para a <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua, José de Ribamar, Mariana e Aglaia são exemplos de pessoas que exercem o trabalho voluntário. Eles geram produtos e serviços para pessoas que não moram em suas residências e não são seus parentes.</p>
			</aside>
			<!-- Realce [fim] -->

			<p>Veja, seguir, alguns exemplos de trabalho voluntário. Considere todos os exemplos sem recebimento de remuneração em dinheiro ou benefícios:</p>

			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>Limpar a praça;</li>
				<li>Organizar um evento cultural, um comício político ou uma celebração religiosa;</li>
				<li>Trabalhar em festa da igreja (exercer alguma função: como ajudar a limpar, cozinhar, organizar ou arrecadar fundos);</li>
				<li>Ministrar aulas de catequese na igreja;</li>
				<li>Escrever para o jornal do sindicato;</li>
				<li>Divulgar gratuitamente candidatura de político;</li>
				<li>Visitar crianças internadas em orfanato (cuidar de crianças ou idosos em orfanatos, asilos ou semelhantes);</li>
				<li>Oferecer aconselhamento telefônico a pessoas;</li>
				<li>Levantar fundos para apoiar uma causa;</li>
				<li>Ministrar aula em escola comunitária;</li>
				<li>Participar de mutirão para construir casa de vizinho não parente;</li>
				<li>Participar de mutirão para limpeza de rios ou praias;</li>
				<li>Organizar campanhas para coleta seletiva de lixo; </li>
				<li>Cuidar de um idoso, não parente, durante um final de semana;</li>
				<li>Limpar a casa de um vizinho idoso;</li>
				<li>Conceder palestra em escola, sem cobrar para fazê-lo;</li>
				<li>Administrar o condomínio sem qualquer tipo de rendimento ou isenção de pagamento;</li>
				<li>Visitar hospital infantil vestido de palhaço, princesa.</li>
			</ul>
			<!-- Lista não ordenada [fim] -->
		</div>

		<!-- Destaque [inicio] -->
		<section class="feature feature--example">
			<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
				<p>A atividade feita em benefício de si mesmo ou de outra pessoa do domicílio ou da família não é trabalho voluntário</p>
			</div>
		</section>
		<!-- Destaque [fim] -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Vejamos explicações mais detalhadas acerca do que é e do que não é trabalho voluntário, para a pesquisa:</p>

			<h2>O trabalho voluntário não é obrigatório</h2>
			<p>Este título parece algo um tanto óbvio e até desnecessário. No entanto, cabe destacar que as pessoas podem se envolver em atividades voluntárias por vontade própria ou porque foram legalmente obrigadas ou coagidas a fazê-lo. Portanto, o <strong>trabalho voluntário realizado compulsoriamente</strong>, como cumprimento de sentença judicial, por exemplo, não deve ser considerado na pesquisa.</p>
			<p>Todavia, o requisito da não obrigatoriedade é mantido nas situações em que o trabalho voluntário for realizado por “<strong>obrigação social</strong>”, explícita na pressão de amigos ou dos pais, nas expectativas de grupos sociais etc.</p>
			<p>Já o <strong>estágio não remunerado</strong>, necessário para a entrada em um emprego ou requisito para a conclusão de um curso, não é trabalho voluntário, pois viola o requisito de não obrigatoriedade.</p>

			<h2>O trabalho voluntário não é remunerado em dinheiro ou em benefícios</h2>
			<p>A remuneração em produtos e serviços é fator importante para determinar se o trabalho é voluntário ou não. No entanto, trabalhadores voluntários podem receber ajuda de custo, sem descaracterizar a atividade como trabalho voluntário, como por exemplo:</p>

			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>o reembolso e o pagamento de despesas de alimentação e transporte, ou reembolso por qualquer item necessário à realização do trabalho ;</li>
				<li>o oferecimento de brindes e presentes simbólicos em gratidão ao trabalho realizado;</li>
				<li>benefícios não monetários na forma de desenvolvimento de habilidades, conexões sociais, contatos de trabalho, posição social e sentimento de autoestima.</li>
			</ul>
			<!-- Lista não ordenada [fim] -->

			<p>Destaca-se que a participação do morador em <strong>programas de voluntariado empresarial</strong>, nos quais a empresa oferece incentivos (remuneração ou benefícios) para a participação dos trabalhadores, não é considerado trabalho voluntário na pesquisa. Imagine uma empresa que mensalmente libera um dia de trabalho, com manutenção de pagamento, caso seu funcionário realize uma atividade voluntária organizada por ela. Neste caso, não se trata de trabalho voluntário, pois a atividade resultante viola a condição de “não remunerado”.</p>

			<h2>A abrangência do trabalho voluntário</h2>
			<p>É considerado trabalho voluntário, tanto aquele desenvolvido diretamente para outros domicílios, como aquele feito para ou através de organizações, como por exemplo: instituições sem fins lucrativos, governamentais, empresas privadas e outros.</p>

			<h2>O trabalho voluntário não é limitado a um beneficiário específico</h2>
			<p>As atividades de voluntariado podem ser realizadas para beneficiar uma variedade de organizações e causas, incluindo pessoas, meio ambiente, animais, comunidade em geral etc.</p>

			<h2>Não é trabalho voluntário</h2>
			<p>Já vimos o que é trabalho voluntário, bem como os elementos que ajudam a defini-lo, como a não remuneração em dinheiro ou benefícios e a não obrigatoriedade. Desta forma, apresentamos um rol exemplificativo do que não é trabalho voluntário, de forma que você possa estar mais preparado para o preenchimento do questionário. Eis a lista:</p>

			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>Executar atividade de produção de bens e serviços para o próprio domicílio, bem como o trabalho sem remuneração em ajuda a membros do domicílio ou parentes, ou qualquer tipo de trabalho para o próprio domicílio;</li>
				<li>Realizar trabalho para um negócio/empresa de pessoa do domicílio;</li>
				<li>Efetuar doações de qualquer natureza, em dinheiro, em bens ou sangue, visto que doação não é uma forma de trabalho;</li>
				<li>Realizar atividade voluntária em concomitância com o trabalho pago. Por exemplo, não realiza trabalho voluntário o motorista de caminhão que dá uma carona durante as horas de trabalho pagas;</li>
				<li>Trabalhar com o objetivo de receber remuneração, mesmo que pequena, em dinheiro ou benefício;</li>
				<li>Realizar atividade em sistema de troca/escambo;</li>
				<li>Pertencer a uma organização que realiza trabalho voluntário, mas não atuar na(s) atividade(s) voluntária(s) por ela realizada(s);</li>
				<li>Frequentar igreja, assistir ou participar de um evento religioso (missa, culto, festa, quermesse etc.);</li>
				<li>Realizar atividades para o próprio empregador, como levar trabalho para casa ou fazer horas extras não pagas;</li>
				<li>Realizar serviço comunitário obrigatório como sentença por infração cometida ou alternativa de pena;</li>
				<li>Executar um trabalho relativo ao mandato sindical no tempo de exercício de trabalho da empresa;</li>
				<li>Participar de atividades sociais na internet;</li>
				<li>Votar;</li>
				<li>Ofertar conselhos a vizinhos durante uma conversa de amizade;</li>
				<li>Compartilhar o veículo com um vizinho para ir ao trabalho; </li>
				<li>Dirigir ou administrar uma organização ou associação sem fins lucrativos, um sindicato ou organizações similares de forma remunerada.</li>
			</ul>
			<!-- Lista não ordenada [fim] -->

			<p>É com base em todos esses conceitos e orientações que o entrevistador, mediante análise de contexto e conversa com o morador, vai aplicar o questionário. Vejamos os quesitos sobre trabalho voluntário:</p>
		</div>

		<!-- Quesito 111 [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<?php echo getIcon('pnadc-survey') ?>
				</div>
				Quesito 111
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/modulo-outras-formas/md/outras--quesito111.jpg" media="(min-width:600px)">
					<source srcset="dist/img/modulo-outras-formas/sm/outras--quesito111.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/modulo-outras-formas/md/outras--quesito111.jpg" alt="Quesito 111 contendo a pergunta 'Na semana de 11/04/2021 a 17/04/2021, trabalhou, durante pelo menos um hora, voluntariamente e sem remuneração'">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">111</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Este quesito tem por objetivo identificar os moradores de 14 anos ou mais de idade que exerceram, espontaneamente e sem receber pagamento, atividades em ajuda a pessoa, empresa, organização, instituição ou comunidade, produzindo bens e/ou serviços, na semana de referência. Deverá ser selecionado <strong>Sim</strong> ou <strong>Não</strong>, de acordo com as seguintes orientações:</p>

			<h5>Congregação religiosa, sindicato, condomínio, partido político, escola, hospital, asilo?</h5>
			<p>Trabalho realizado para ou por meio de congregação religiosa, sindicato, condomínio, partido político, escola, hospital, asilo, orfanato, por exemplo: organizar comício político ou uma celebração religiosa; escrever para o jornal do sindicato; divulgar gratuitamente candidatura de político; brincar com crianças internadas em orfanato; fazer companhia, ler ou dar apoio emocional a pessoas internadas em hospital ou asilo (que não eram moradores do domicílio e não eram parentes); trabalhar como conselheiro em hospital ou escola ou como conselheiro fiscal de condomínio, palestras sobre prevenção ao uso de álcool e drogas em escolas.</p>

			<h5>Associação de moradores, associação esportiva, ONG, grupo de apoio ou outra organização?</h5>
			<p>Trabalho realizado para ou por meio de associação de moradores, associação esportiva, ONG, grupo de apoio ou outra organização, por exemplo: dar palestra promovida por uma ONG; trabalhar como monitor de grupo de escoteiros; participar de mutirão de limpeza organizado por empresas diversas; trabalhar como conciliador em Tribunal de Justiça (caso não seja realizado como estágio não remunerado para conclusão de curso).</p>

			<h5>Moradores de uma comunidade ou localidade (limpando, dando aulas, participando de mutirão, organizando festas ou outros eventos etc.)?</h5>
			<p>Trabalho realizado de forma independente (sem o envolvimento de uma empresa, organização ou associação) para moradores de uma comunidade ou localidade, por exemplo: preparar e/ou distribuir sopa para moradores de rua; dar aulas de reforço para crianças.</p>

			<h5>Conservação do meio ambiente ou de proteção aos animais?</h5>
			<p>Trabalho realizado de forma independente (sem o envolvimento de uma empresa, organização ou associação) em prol da conservação do meio ambiente ou de proteção aos animais, por exemplo: participar de atividades de reflorestamento ou de limpeza de parques, ruas ou praias; conceder palestra sobre preservação do meio ambiente.</p>

			<h5>Pessoas que não eram parentes e não moravam neste domicílio, realizando tarefas domésticas ou de cuidados de crianças, idosos, enfermos ou pessoas com necessidades especiais?</h5>
			<p>Trabalho realizado de forma independente (sem o envolvimento de uma empresa, organização ou associação) para pessoas que não eram parentes e não moravam no domicílio entrevistado, realizando tarefas domésticas ou de cuidados de crianças, idosos, enfermos ou pessoas com necessidades especiais, por exemplo: fazer compras para um vizinho idoso; ajudar na mudança de amigos; transportar ou fazer companhia a um vizinho ou amigo em consultório médico, hospital.</p>

			<h5>Pessoas que não eram parentes e não moravam neste domicílio, realizando serviços profissionais (de eletricista, pedreiro, advogado, contador, professor etc.)?</h5>
			<p>Trabalho realizado de forma independente (sem o envolvimento de uma empresa, organização ou associação) para pessoas que não eram parentes e não moravam no domicílio entrevistado, realizando serviços profissionais, por exemplo: fazer a declaração de imposto de renda de amigos; efetuar reparos elétricos em apartamento de vizinho; participar de mutirão para bater laje em casa de um vizinho.</p>

			<h5>Outro tipo de trabalho voluntário?</h5>
			<p>Quando a atividade de trabalho voluntário que não se enquadrar nas opções anteriores.</p>
		</div>
		<!-- Quesito 111 [fim] -->

		<!-- Quesito 111a [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<?php echo getIcon('pnadc-survey') ?>
				</div>
				Quesito 111a
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/modulo-outras-formas/md/outras--quesito111a.jpg" media="(min-width:600px)">
					<source srcset="dist/img/modulo-outras-formas/sm/outras--quesito111a.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/modulo-outras-formas/md/outras--quesito111a.jpg" alt="Quesito 111a contendo a pergunta 'Com que frequência costuma trabalhar voluntariamente sem remuneração?'">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">111a</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Este quesito será habilitado apenas nos casos em que for selecionado “Sim” para qualquer um dos itens do quesito anterior. Tem por objetivo diferenciar os trabalhadores voluntários habituais daqueles que realizam esse tipo de atividade esporadicamente.</p>
		</div>
		<!-- Quesito 111a [fim] -->

		<!-- Quesito 112 [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<?php echo getIcon('pnadc-survey') ?>
				</div>
				Quesito 112
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/modulo-outras-formas/md/outras--quesito112.jpg" media="(min-width:600px)">
					<source srcset="dist/img/modulo-outras-formas/sm/outras--quesito112.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/modulo-outras-formas/md/outras--quesito112.jpg" alt="Quesito 112 contendo a pergunta 'Na semana de 11/04/2021 a 17/04/2021, quantas horas trabalhou voluntariamente e sem remuneração'">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">112</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Campo de texto livre que visa captar o volume de horas efetivamente dedicadas ao trabalho voluntário na semana de referência. Devem ser somadas as horas relativas a todos os trabalhos voluntários exercidos na semana de referência.</p>
		</div>
		<!-- Quesito 112 [fim] -->

		<!-- Quesito 113 [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<?php echo getIcon('pnadc-survey') ?>
				</div>
				Quesito 113
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<!-- TODO: Solicitar imagem final do quesito 113 -->
				<picture>
					<img class="image" src="dist/img/modulo-outras-formas/sm/outras--quesito113.jpg" alt="Quesito 113 contendo a pergunta 'Na semana de 11/04/2021 a 17/04/2021, quantas horas trabalhou voluntariamente e sem remuneração'">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">113</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Este quesito busca identificar a ocupação que o morador tinha no trabalho voluntário, com base na principal tarefa realizada na semana de referência.</p>

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>Caso o morador exerça mais de um trabalho voluntário, deverá ser considerado como principal aquele para o qual dedicou o maior número de horas.</q>
			</aside>
			<!-- Realce [fim] -->

			<p>Essa informação permitirá estudos sobre as ocupações mais frequentes no trabalho voluntário. Além disso, poderá ser analisada com outras variáveis, permitindo observar, por exemplo, quais são as ocupações que estão relacionadas às tarefas realizadas de forma individual e quais estão relacionadas às tarefas realizadas para ou por meio de empresas ou organizações.</p>
			<p>Veja, a seguir, um quadro que auxilia e dá algumas orientações para o preenchimento do quesito.</p>

			<!-- Quadro [inicio] -->
			<div class="table-container">
				<table class="table table--text-table">
					<caption class="table__title">Registro de trabalho voluntário principal</caption>
					<thead>
						<tr>
							<th scope="col">Não registre no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr></th>
							<th scope="col">Por quê?</th>
							<th scope="col">Ao invés, registre no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Ajudar na igreja, na escola etc.</td>
							<td>É necessário definir qual foi a principal tarefa realizada e não um conjunto de tarefas.</td>
							<td>Arrecadação de donativos para a igreja.</td>
						</tr>
						<tr>
							<td>Fazer visita</td>
							<td>É necessário definir para quem foi a visita (doentes, crianças etc.) e qual foi o objetivo dela (pregação religiosa, assistência social, apoio emocional).</td>
							<td>Visita a idosos em asilos para apoio emocional.</td>
						</tr>
						<tr>
							<td>Conceder palestra ou consultoria</td>
							<td>É necessário definir a área profissional, quando for palestra ou consultoria, pois estas tarefas podem ser desempenhadas por várias ocupações.</td>
							<td>Concessão de palestra sobre economia em universidade.</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- Quadro [fim] -->

		</div>
		<!-- Quesito 113 [fim] -->

		<!-- Quesito 114 [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<?php echo getIcon('pnadc-survey') ?>
				</div>
				Quesito 114
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/modulo-outras-formas/md/outras--quesito114.jpg" media="(min-width:600px)">
					<source srcset="dist/img/modulo-outras-formas/sm/outras--quesito114.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/modulo-outras-formas/md/outras--quesito114.jpg" alt="Quesito 114 contendo a pergunta 'Exerceu esse trabalho para alguma empresa, organização ou instituição?'">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">114</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>O objetivo deste quesito é servir como pergunta de cobertura, uma vez que o informante pode não identificar, de imediato, que a atividade voluntária realizada foi feita para (ou por meio de) uma empresa, organização ou instituição.</p>
			<p>Caso o informante declare <strong>Sim</strong> em um dos dois primeiros itens do quesito 111 (o que denota exercício de atividade para ou por meio de alguma empresa, organização ou instituição), será imputado <strong>Sim</strong> para o presente quesito, que não será exibido no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.</p>
		</div>
		<!-- Quesito 114 [fim] -->

		<!-- Quesito 115 [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<?php echo getIcon('pnadc-survey') ?>
				</div>
				Quesito 115
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<img class="image" src="dist/img/modulo-outras-formas/sm/outras--quesito115.jpg" alt="Quesito 115 contendo a pergunta 'Na semana de 11/04/2021 a 17/04/2021, quantas horas trabalhou voluntariamente e sem remuneração'">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">115</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Este quesito será habilitado apenas nos casos em que for selecionado “Sim” no quesito anterior. Tem por objetivo identificar a atividade principal da empresa na qual (ou através da qual) a pessoa fez trabalho voluntário.</p>
			<p>O entrevistador deverá escrever a principal atividade dessa empresa, organização ou instituição com a qual (ou através da qual) o morador contribuiu como trabalhador voluntário. Deverá ser registrada a atividade dessas organizações e não o local ou o nome da empresa na qual o trabalho voluntário é realizado.</p>
			<p>Veja os exemplos de atividade, a seguir, passíveis de serem especificadas:</p>

			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>Igreja;</li>
				<li>Centro espírita;</li>
				<li>Associação de moradores;</li>
				<li>Hospital;</li>
				<li>Asilo;</li>
				<li>Creche;</li>
				<li>ONG de animais;</li>
				<li>Partido político;</li>
				<li>APAE (Associação de Pais e Amigos dos Excepcionais).</li>
			</ul>
			<!-- Lista não ordenada [fim] -->

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>Quando o trabalho voluntário envolver duas ou mais empresas, organizações ou instituições, deverá ser registrada a atividade daquela que for <strong>a responsável pela organização do trabalho voluntário</strong> desenvolvido.</q>
			</aside>
			<!-- Realce [fim] -->

			<p>Devem ser observadas as mesmas orientações para o preenchimento da atividade, explicadas por meio de vídeos e tabelas na unidade 10, “Trabalho: Pessoas ocupadas”. Retorne a esta unidade para rever os exemplos e explicações.</p>
			<p>Para encerrar o item sobre trabalho voluntário, convidamos você a ver o fruto deste tipo de investigação: a revista <strong>Retratos</strong> de março de 2018, nas páginas 24 e 25, abordou o trabalho voluntário, destacando os locais de realização mais frequentes no Brasil. <a href="https://agenciadenoticias.ibge.gov.br/media/com_mediaibge/arquivos/abe879dc22f055d87ea8364cd822ab00.pdf#page=24" title="Acesse a edição 9 da revista Retratos">Confira aqui.</a></p>
		</div>
		<!-- Quesito 115 [fim] -->

	</div>
</main>

<?php include "foot.php"; ?>

</body>

</html>