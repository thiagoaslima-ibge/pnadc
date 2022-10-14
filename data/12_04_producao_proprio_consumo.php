<?php
$moduleTitle = "Outras formas de trabalho"; //TITULO DA UNIDADE
$topicTitle = ""; //TITULO DO TOPICO
$pageTitle = "Produção para o próprio consumo e construção para o próprio uso"; //TITULO DA PAGINA	
$pageSubtitle = "A produção para o próprio consumo é uma valiosa informação para o Sistema de Contas Nacionais e para as análises relativas a trabalho, gênero e uso do tempo."; //SUBTITULO DA PAGINA	
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
			<p>Veja a história a seguir, inspirada em situações reais retratadas pela <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua:</p>

			<!-- Citacao em bloco [inicio] -->
			<aside class="quote" style="padding: 0.5rem 1rem; font-style: italic">
				<p>Agenor, 75 anos, viúvo, mora em uma comunidade rural no Piauí com seu filho e seus dois netos. Embora aposentado, Seu Nonô, como é conhecido na vizinhança, costuma trabalhar para o consumo da própria família, por meio da plantação, da pesca e da criação de gado. No entanto, a produção para consumo próprio de carvão e a coleta de lenha são as atividades nas quais o Seu Nonô dedica a maior parte de suas horas.</p>
				<p>O filho de Agenor possui trabalho remunerado e geralmente não ajuda nesta produção para o consumo dos moradores do domicílio. No entanto, seus filhos de 14 e 16 anos trabalham diariamente na criação de gado, auxiliando o avô e garantindo o alimento para a família. Neste contexto, a plantação pode até ser considerada um <i>hobby</i>, mas a pesca e a criação de gado são cruciais para a subsistência do domicílio no qual Agenor é responsável.</p>
			</aside>
			<!-- Citacao em bloco [fim] -->

			<p>Para a <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua, no domicílio do Senhor Agenor existe a <strong>produção para o próprio consumo</strong>, que é executada tanto pelo Seu Nonô quanto pelos seus netos. Vejamos, então, como este item é investigado na pesquisa. </p>
			<p>Os quesitos 99 a 110 da seção “Outras formas de trabalho” têm por objetivo identificar as pessoas de 14 anos ou mais de idade que, na semana de referência: </p>

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>Realizaram atividades na produção de bens para consumo e/ou construção para uso exclusivo dos próprios moradores do domicílio ou de parentes que residiam em outro domicílio. </q>
			</aside>
			<!-- Realce [fim] -->

			<p>A produção de bens para o próprio consumo inclui:</p>

			<!-- Lista de definicao [inicio] -->
			<dl class="definition-list">
				<dt>Atividades agropecuárias</dt>
				<dd>Produção, coleta e/ou armazenamento de produtos agrícolas, de pesca, de caça e de criação de animais;</dd>
				<dt>Coleta e transformação de produtos minerais ou florestais</dt>
				<dd>Coleta e/ou transformação de produtos minerais e florestais, incluindo lenha e outros combustíveis, assim como coleta de água a partir de fontes naturais;</dd>
				<dt>Produção de bens de uso doméstico</dt>
				<dd>Fabricação de têxteis, artigos do vestuário, calçados, cerâmicas ou outros bens duráveis, incluindo barcos e canoas utilizados por moradores do domicílio ou por parentes que residiam em outro domicílio;</dd>
				<dt>Reparo e construção</dt>
				<dd>Construção, ampliação ou realização de grandes reparos na própria moradia ou em outras edificações no terreno, na fazenda etc.</dd>
			</dl>
			<!-- Lista de definicao [fim] -->

			<p>Considerando estas explicações, vejamos mais alguns exemplos de trabalho para o próprio consumo:</p>

			<!-- Carrossel [inicio] -->
			<ul class="panel-slider slider">
				<li>
					<p>Um morador informou que, além de estudar, trabalhou 21 horas na semana de referência cuidando da criação de galinhas e da plantação de legumes que se destinavam, <strong>apenas</strong>, à alimentação dos moradores de sua unidade domiciliar, e não exercia nenhuma outra atividade.</p>
				</li>
				<li>
					<p>Um morador informou que, após se aposentar, dedicou-se à pesca, apenas, para o consumo dos moradores de sua unidade domiciliar e eventuais visitas. O morador declarou ainda que, parte do produto das suas pescarias também era compartilhado com seu filho (que morava em outro domicílio), nas ocasiões em que vinha visitá-lo.</p>
				</li>
				<li>
					<p>Um morador informou que, além do seu trabalho remunerado, tem uma pequena horta no fundo de sua casa onde cultiva hortaliças para o consumo da família.</p>
				</li>
				<li>
					<p>Um morador informou que, além de trabalhar, empregou 16 horas, na semana de referência, construindo um novo cômodo em sua residência.</p>
				</li>
			</ul>
			<!-- Carrossel [fim] -->

			<p>Para que a informação sobre as outras formas de trabalho possa ser utilizada nas Contas Nacionais – assim como nas análises relativas a trabalho, gênero e uso do tempo –, é fundamental investigar também o <strong>volume de horas</strong> dedicadas efetivamente em todas as atividades declaradas e detalhar a <strong>principal atividade realizada na semana de referência</strong>, ou seja, aquela na qual o morador dedicou o maior número de horas. Estas duas informações serão sempre pesquisadas nos quesitos que veremos adiante.</p>
		</div>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Atividades de cultivo, pesca ou criação de animais</h2>
			<p>A primeira seção do questionário sobre produção para o próprio consumo é composta de três quesitos que visam identificar e qualificar as atividades em cultivo, pesca ou criação de animais. Vejamos, a seguir:</p>
		</div>

		<!-- Quesito 99 [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<?php echo getIcon('pnadc-survey') ?>
				</div>
				Quesito 99
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/modulo-outras-formas/md/outras--quesito99.jpg" media="(min-width:600px)">
					<source srcset="dist/img/modulo-outras-formas/sm/outras--quesito99.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/modulo-outras-formas/md/outras--quesito99.jpg" alt="Quesito 99 contendo a pergunta 'Na semana de 11/04/2021 a 17/04/2021, exerceu a atividade em cultivo, pesca, caça ou criação de animais destinadas somente à alimentação das pessoas moradoras do domicílio ou de parente?'">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">99</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Deverá ser selecionada a opção “Sim” para a pessoa de 14 anos ou mais de idade que trabalhou, na totalidade ou em parte da semana de referência em alguma tarefa do ramo que compreende as seguintes atividades:</p>

			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>agricultura (inclusive a horticultura, fruticultura, produção de sementes e mudas); </li>
				<li>criação e produção de animais, tais como aves, bovinos, porcos, carneiros, cabritos etc., incluindo a criação de abelhas para produção de mel; </li>
				<li>pesca e aquicultura de organismos aquáticos tais como peixes, camarões, ostras e de mexilhões, plantas aquáticas, jacarés, tartarugas e rãs; </li>
				<li>caça de animais silvestres (pacas, capivaras, tatus etc.).</li>
			</ul>
			<!-- Lista não ordenada [fim] -->

			<p>Para fins de preenchimento deste quesito, a produção deve ser somente para consumo de <strong>membro(s) do domicílio ou de parente(s)</strong> que residiam em outro domicílio. Além disso, o entrevistador deve se certificar de que a produção <strong>não era para venda ou troca</strong>.</p>
		</div>

		<!-- Destaque [inicio] -->
		<section class="feature feature--example">
			<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
				<p>Tratando-se de trabalhadores <span style="text-decoration: underline;">conta própria</span> e <span style="text-decoration: underline;">empregadores</span>, a atividade de produção para o próprio consumo não pode ser a mesma do seu trabalho remunerado.</p>
			</div>
		</section>
		<!-- Destaque [fim] -->
		<!-- Quesito 99 [fim] -->

		<!-- Quesito 100 [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<?php echo getIcon('pnadc-survey') ?>
				</div>
				Quesito 100
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/modulo-outras-formas/md/outras--quesito100.jpg" media="(min-width:600px)">
					<source srcset="dist/img/modulo-outras-formas/sm/outras--quesito100.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/modulo-outras-formas/md/outras--quesito100.jpg" alt="Quesito 100 contendo a pergunta 'Na semana de 11/04/2021 a 17/04/2021, quantas horas dedicou efetivamente a todas essas atividades?'">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">100</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Este quesito será habilitado apenas se, na pergunta anterior, o morador responder “Sim”. Ou seja, a partir do momento em que ele declara ter exercido atividades em cultivo, pesca, caça ou criação de animais destinados somente à alimentação das pessoas moradoras do domicílio ou de parente, será perguntada a quantidade de horas que dedicou <strong>de fato, na semana de referência</strong>, a estas atividades.</p>
			<p><strong>Entram no cálculo:</strong> horas dedicadas à limpeza, à reparação, à preparação ou à manutenção de ferramentas ou instrumentos necessários à realização desse trabalho.</p>
			<p><strong>Não entra no cálculo:</strong> o tempo de deslocamento para o início dessas atividades.</p>
		</div>
		<!-- Quesito 100 [fim] -->

		<!-- Quesito 101 [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<?php echo getIcon('pnadc-survey') ?>
				</div>
				Quesito 101
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/modulo-outras-formas/md/outras--quesito101.jpg" media="(min-width:600px)">
					<source srcset="dist/img/modulo-outras-formas/sm/outras--quesito101.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/modulo-outras-formas/md/outras--quesito101.jpg" alt="Quesito 101">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">101</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>A partir do momento em que o morador de 14 anos ou mais de idade declara ter exercido atividades em cultivo, pesca, caça ou criação de animais destinados somente à alimentação das pessoas moradoras do domicílio ou de parente, será perguntada qual foi a principal, ou seja, aquela na qual dedicou o maior número de horas.</p>
			<p>Ao clicar no campo, o entrevistador deverá escrever a atividade relativa ao cultivo, criação, caça ou pesca, acompanhada do nome do produto cultivado ou do animal criado. Veja os exemplos de descrição, a seguir, passíveis de serem especificadas:</p>
			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>criação de galinhas;</li>
				<li>horticultura;</li>
				<li>pesca;</li>
				<li>cultivo de feijão;</li>
				<li>criação de suínos;</li>
				<li>cultivo de mandioca;</li>
			</ul>
			<!-- Lista não ordenada [fim] -->
		</div>
		<!-- Quesito 101 [fim] -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Coleta e transformação de produtos minerais ou florestais</h2>
			<p>A segunda seção do questionário sobre produção para o próprio consumo é composta de três quesitos que visam identificar e qualificar as atividades na produção de carvão, corte ou coleta de lenha, coleta de água, extração de sementes, de ervas, de areia, argila ou outro material destinado somente ao próprio uso das pessoas moradoras do domicílio ou de parente. Vejamos, a seguir:</p>
		</div>

		<!-- Quesito 102 [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<?php echo getIcon('pnadc-survey') ?>
				</div>
				Quesito 102
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/modulo-outras-formas/md/outras--quesito102.jpg" media="(min-width:600px)">
					<source srcset="dist/img/modulo-outras-formas/sm/outras--quesito102.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/modulo-outras-formas/md/outras--quesito102.jpg" alt="Quesito 102 contendo a pergunta 'Na semana de 11/04/2021 a 17/04/2021, exerceu atividades na produção de carvão, corte ou coleta de lenha, coleta de água, extração de sementes, de ervas, de areia, argila ou outro material destinado somente ao próprio uso das pessoas moradoras do domicílio ou de parente?'">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">102</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Deverá ser selecionada a opção “Sim” para a pessoa de 14 anos ou mais de idade que trabalhou, na totalidade ou em parte da semana de referência, em alguma atividade de coleta e/ou de transformação de produtos minerais e/ou florestais, tais como:</p>
			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>produção de carvão;</li>
				<li>corte, coleta ou transporte de lenha ou de palha de fora da propriedade para dentro da propriedade; </li>
				<li>coleta ou transporte de água de fora da propriedade para dentro da propriedade;</li>
				<li>extração de sementes, de seiva, de frutos, de folhas, de flores, de ervas, de fibras ou de outra extração vegetal; </li>
				<li>extração de areia, de pedra, de sal, de argila ou de outro mineral.</li>
			</ul>
			<!-- Lista não ordenada [fim] -->
			<p>Destacamos que nas atividades de coleta ou extração de água da natureza (rio, lago ou açude) não está incluída a coleta de água de poço, bica ou de caminhão pipa/caminhão-tanque, pois enquadram-se em afazeres domésticos.</p>
			<p>Para fins de preenchimento deste quesito, a produção, a extração ou a coleta deve ser destinada somente para uso de membro(s) da unidade domiciliar ou de parente(s) que residiam em outro domicílio.</p>
			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>O entrevistador deve se certificar, junto ao morador, de que a produção, a extração ou a coleta <strong>não eram para venda ou troca</strong>.</q>
			</aside>
			<!-- Realce [fim] -->
		</div>
		<!-- Quesito 102 [fim] -->

		<!-- Quesito 103 [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<?php echo getIcon('pnadc-survey') ?>
				</div>
				Quesito 103
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/modulo-outras-formas/md/outras--quesito103.jpg" media="(min-width:600px)">
					<source srcset="dist/img/modulo-outras-formas/sm/outras--quesito103.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/modulo-outras-formas/md/outras--quesito103.jpg" alt="Quesito 103 contendo a pergunta 'Na semana de 11/04/2021 a 17/04/2021, quantas horas dedicou efetivamente a todas essas atividades?'">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">103</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Este quesito será habilitado apenas se, na pergunta anterior, o morador responder “Sim”. Ou seja, a partir do momento em que ele declara ter exercido atividades de coleta e/ou de transformação de produtos minerais e florestais, destinadas somente ao próprio uso das pessoas moradoras do domicílio ou de parentes que residiam em outro domicílio, será perguntada a quantidade de horas que dedicou <strong>de fato, na semana de referência</strong>, a estas atividades.</p>
			<p><strong>Entram no cálculo:</strong> horas dedicadas à limpeza, à reparação, à preparação ou à manutenção de ferramentas ou instrumentos necessários à realização desse trabalho.</p>
			<p><strong>Não entra no cálculo:</strong> o tempo de deslocamento para o início dessas atividades.</p>
		</div>
		<!-- Quesito 103 [fim] -->

		<!-- Quesito 104 [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<?php echo getIcon('pnadc-survey') ?>
				</div>
				Quesito 104
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/modulo-outras-formas/md/outras--quesito104.jpg" media="(min-width:600px)">
					<source srcset="dist/img/modulo-outras-formas/sm/outras--quesito104.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/modulo-outras-formas/md/outras--quesito104.jpg" alt="Quesito 104 contendo a pergunta 'Na semana de 11/04/2021 a 17/04/2021, quantas horas dedicou efetivamente a todas essas atividades?'">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">104</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>A partir do momento em que o morador de 14 anos ou mais de idade declara ter exercido atividades de coleta e/ou de transformação de produtos minerais e/ou florestais destinadas somente ao próprio uso das pessoas moradoras do domicílio ou de parentes que residiam em outro domicílio, será perguntada qual foi a principal, ou seja, aquela na qual dedicou o maior número de horas.</p>
			<p>No campo de texto livre, de acordo com a declaração do morador, o entrevistador irá escrever a atividade relativa à coleta ou transformação. Veja os exemplos de descrição, a seguir, passíveis de serem especificadas:</p>
			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>extração de babaçu;</li>
				<li>extração de sal;</li>
				<li>produção de carvão vegetal; </li>
				<li>coleta de lenha; </li>
				<li>extração de madeira;</li>
				<li>extração de areia;</li>
				<li>coleta de água.</li>
			</ul>
			<!-- Lista não ordenada [fim] -->
		</div>
		<!-- Quesito 104 [fim] -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Produção de bens de uso doméstico</h2>
			<p>A terceira seção do questionário sobre produção para o próprio consumo é composta de três quesitos que visam identificar e qualificar as atividades na fabricação de roupas, tricô, bordado, cerâmicas, rede de pesca, alimentos ou bebidas alcoólicas, produtos medicinais ou outros produtos destinados somente ao próprio uso das pessoas do domicílio ou de parente, na semana de referência. Vejamos, a seguir:</p>
		</div>

		<!-- Quesito 105 [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<?php echo getIcon('pnadc-survey') ?>
				</div>
				Quesito 105
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/modulo-outras-formas/md/outras--quesito105.jpg" media="(min-width:600px)">
					<source srcset="dist/img/modulo-outras-formas/sm/outras--quesito105.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/modulo-outras-formas/md/outras--quesito105.jpg" alt="Quesito 105 contendo a pergunta 'Na semana de 11/04/2021 a 17/04/2021, quantas horas dedicou efetivamente a todas essas atividades?'">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">105</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Deverá ser selecionada a opção “Sim” para a pessoa de 14 anos ou mais de idade que trabalhou, na totalidade ou em parte da semana de referência, em alguma atividade na fabricação de bens de uso doméstico, tais como:</p>
			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>alimentos ou bebidas alcoólicas;</li>
				<li>roupas, calçados, bolsas, bijuterias ou outros artigos pessoais;</li>
				<li>tricô, crochê, bordado ou outros artigos decorativos; </li>
				<li>panelas, potes;</li>
				<li>tarrafas, redes de pesca, redes de dormir, esteiras de palha; </li>
				<li>telhas, tijolos, móveis de madeira ou alvenaria; </li>
				<li>produtos medicinais ou sabonetes. </li>
			</ul>
			<!-- Lista não ordenada [fim] -->

			<p>Para fins de preenchimento deste quesito, a produção deve ser destinada somente para uso de membro(s) da unidade domiciliar ou de parente(s) que residiam em outro domicílio.</p>

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>A produção de bens de uso doméstico não pode ter sido para venda ou troca.</q>
			</aside>
			<!-- Realce [fim] -->

			<p>O entrevistador deverá observar as seguintes especificidades na marcação deste quesito:</p>

			<h3>Alimentos de grande durabilidade X pouca durabilidade</h3>
			<p>Tratando-se de atividade de produção de alimentos, deve ser considerada apenas aquela voltada para alimentos de <strong>grande durabilidade</strong> como a produção, o processamento e a conservação de carnes (abate de animais para produção de charque, de carne de sol, de peixe salgado, de linguiça defumada etc.) ou a produção de marmeladas, de goiabadas, de conservas, de queijos, de geleias, de farinha, de manteiga, de gordura animal, de massas caseiras, de torrefação e moagem de café etc. Para o presente quesito, diante de tal situação, o entrevistador deverá selecionar “Sim”.</p>
			<p>Em contrapartida, as atividades de preparo de alimentos de <strong>pouca durabilidade</strong>, para o consumo imediato ou a serem congelados, para consumo em período relativamente curto, devem ser consideradas como <strong>parte dos afazeres domésticos</strong>, cujos quesitos ainda serão apresentados. Como exemplo temos o ato de fazer feijão, arroz, legumes, carnes e tortas. Portanto, para o presente quesito, diante de tal situação, o entrevistador deverá selecionar “Não”.</p>

			<h3>Produção de bebidas</h3>
			<p>A atividade voltada para a produção de vinhos, de aguardentes e de outros tipos de bebidas desta natureza, quando produzidos para o consumo próprio das pessoas do domicílio ou de parentes que residiam em outro domicílio, deve ser considerada neste quesito, com base no critério da durabilidade dos produtos. Para o presente quesito, diante de tal situação, o entrevistador deverá selecionar “Sim”.</p>

			<h3>Produção de artigos medicinais</h3>
			<p>A produção de artigos medicinais que inclui: xarope, garrafada, tinturas de plantas medicinais (mistura de partes de plantas frescas ou secas em álcool de pureza absoluta, visando à conservação das plantas medicinais), unguento, pomadas etc., quando produzidos para o consumo próprio das pessoas do domicílio ou de parentes que residiam em outro domicílio, deve ser considerada nesta categoria do quesito. Para o presente quesito, diante de tal situação, o entrevistador deverá selecionar “Sim”.</p>

			<h3>Reparo não é confecção</h3>
			<p>As atividades de reparo de peças do vestuário, de calçados, de móveis e de outros objetos do domicílio, devem ser consideradas como parte dos afazeres domésticos, cujos quesitos ainda serão apresentados. Para o presente quesito, diante de tal situação, o entrevistador deverá selecionar “Não”.</p>
		</div>
		<!-- Quesito 105 [fim] -->

		<!-- Destaque [inicio] -->
		<section class="feature feature--example">
			<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
				<p>Não confunda produção de bens de uso doméstico com afazeres domésticos como cozinhar um arroz, ou reparar roupas. Existe um quesito específico para captar esses afazeres domésticos.</p>
			</div>
		</section>
		<!-- Destaque [fim] -->

		<!-- Quesito 106 [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<?php echo getIcon('pnadc-survey') ?>
				</div>
				Quesito 106
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/modulo-outras-formas/md/outras--quesito106.jpg" media="(min-width:600px)">
					<source srcset="dist/img/modulo-outras-formas/sm/outras--quesito106.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/modulo-outras-formas/md/outras--quesito106.jpg" alt="Quesito 106 contendo a pergunta 'Na semana de 11/04/2021 a 17/04/2021, quantas horas dedicou efetivamente a essas atividades?'">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">106</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Este quesito será habilitado apenas se, na pergunta anterior, o morador responder “Sim”. Ou seja, a partir do momento em que ele declara ter exercido atividades de fabricação de bens de uso doméstico, destinadas somente ao próprio uso das pessoas moradoras do domicílio ou de parentes que residiam em outro domicílio, será perguntada a quantidade de horas que dedicou <strong>de fato, na semana de referência</strong>, a estas atividades.</p>
			<p><strong>Entram no cálculo:</strong> horas dedicadas à limpeza, à reparação, à preparação ou à manutenção de ferramentas ou instrumentos necessários à realização desse trabalho.</p>
			<p><strong>Não entra no cálculo:</strong> o tempo de deslocamento para o início dessas atividades.</p>
		</div>
		<!-- Quesito 106 [fim] -->

		<!-- Quesito 107 [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<?php echo getIcon('pnadc-survey') ?>
				</div>
				Quesito 107
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/modulo-outras-formas/md/outras--quesito107.jpg" media="(min-width:600px)">
					<source srcset="dist/img/modulo-outras-formas/sm/outras--quesito107.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/modulo-outras-formas/md/outras--quesito107.jpg" alt="Quesito 107 contendo a pergunta 'Na semana de 11/04/2021 a 17/04/2021, quantas horas dedicou efetivamente a essas atividades?'">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">107</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>A partir do momento em que o morador de 14 anos ou mais de idade declara ter exercido atividades de fabricação de bens de uso doméstico destinadas somente ao próprio uso das pessoas moradoras do domicílio ou de parentes que residiam em outro domicílio, será perguntada qual foi a principal, ou seja, aquela na qual dedicou o maior número de horas.</p>
			<p>Ao clicar no campo, o entrevistador irá escrever a atividade principal. Veja os exemplos de descrição, a seguir, passíveis de serem especificadas:</p>
			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>confecção de roupas;</li>
				<li>fabricação de tapetes;</li>
				<li>fabricação de panela de barro;</li>
				<li>fabricação de móveis;</li>
				<li>produção de queijo;</li>
				<li>produção de geleias;</li>
				<li>produção de conservas.</li>
			</ul>
			<!-- Lista não ordenada [fim] -->
		</div>
		<!-- Quesito 107 [fim] -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Reparo e construção</h2>
			<p>A quarta seção do questionário sobre produção para o próprio consumo é composta de três quesitos que visam identificar e qualificar as atividades de construção de casa, cômodo, muro, telhado, forno ou churrasqueira, cerca, estrada, abrigo para animais ou outras obras destinadas somente ao próprio uso das pessoas moradoras do domicílio ou de parentes na semana de referência. Vejamos, a seguir:</p>
		</div>

		<!-- Quesito 108 [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<?php echo getIcon('pnadc-survey') ?>
				</div>
				Quesito 108
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/modulo-outras-formas/md/outras--quesito108.jpg" media="(min-width:600px)">
					<source srcset="dist/img/modulo-outras-formas/sm/outras--quesito108.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/modulo-outras-formas/md/outras--quesito108.jpg" alt="Quesito 108 contendo a pergunta 'Na semana de 11/04/2021 a 17/04/2021, exerceu atividades de construção de casa, cômodo, muro, telhado, forno ou churrasqueira, cerca, estrada, abrigo para animais ou outras obras destinadas somente ao próprio uso das pessoas moradoras do domicílio ou de parente?'">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">108</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Deverá ser selecionada a opção “Sim” para a pessoa de 14 anos ou mais de idade que trabalhou, na totalidade ou em parte da semana de referência, em alguma tarefa do ramo que compreende as atividades de construção, ampliação ou realização de grandes reparos na própria moradia ou em outras edificações no terreno, na fazenda etc., tais como:</p>
			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>construção de casa ou de cômodo, de muro, de telhado ou de laje; </li>
				<li>construção de chaminé, de lareira, de forno ou de fogão, de churrasqueira ou de piscina;</li>
				<li>construção de cerca, de ponte ou de estrada para uso particular; </li>
				<li>construção abrigo para animais domésticos ou para animais destinados à alimentação do domicílio;</li>
				<li>construção de poço, cacimba, cisterna.</li>
			</ul>
			<!-- Lista não ordenada [fim] -->
			<p>Para fins de preenchimento deste quesito, a construção deve ser destinada somente para uso de membro(s) da unidade domiciliar ou de parente(s) que residiam em outro domicílio. Além disso, <strong>a construção não pode ter sido para venda ou troca de serviços</strong>.</p>
			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>As atividades de decoração, os pequenos reparos, incluindo reparos em instalações elétricas e a manutenção da pintura destinadas unicamente à conservação do domicílio devem ser consideradas como parte dos <strong>afazeres domésticos</strong>, cujos quesitos ainda serão apresentados.</q>
			</aside>
			<!-- Realce [fim] -->
		</div>
		<!-- Quesito 108 [fim] -->
		
		<!-- Quesito 109 [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<?php echo getIcon('pnadc-survey') ?>
				</div>
				Quesito 109
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/modulo-outras-formas/md/outras--quesito109.jpg" media="(min-width:600px)">
					<source srcset="dist/img/modulo-outras-formas/sm/outras--quesito109.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/modulo-outras-formas/md/outras--quesito109.jpg" alt="Quesito 109 contendo a pergunta 'Na semana de 11/04/2021 a 17/04/2021, quantas horas dedicou efetivamente a todas essas atividades?'">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">109</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Este quesito será habilitado apenas se, na pergunta anterior, o morador responder “Sim”. Ou seja, a partir do momento em que ele declara ter exercido atividades de construção, destinadas somente ao próprio uso das pessoas moradoras do domicílio ou de parentes que residiam em outro domicílio, será perguntada a quantidade de horas que dedicou <strong>de fato, na semana de referência</strong>, a estas atividades.</p>
			<p><strong>Entram no cálculo:</strong> horas dedicadas à limpeza, à reparação, à preparação ou à manutenção de ferramentas ou instrumentos necessários à realização desse trabalho.</p>
			<p><strong>Não entra no cálculo:</strong> o tempo de deslocamento para o início dessas atividades.</p>
			<!-- Realce [fim] -->
		</div>
		<!-- Quesito 109 [fim] -->

		<!-- Quesito 110 [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="survey">
				<div class="survey-icon-container">
					<?php echo getIcon('pnadc-survey') ?>
				</div>
				Quesito 110
			</h2>
		</div>
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/modulo-outras-formas/md/outras--quesito110.jpg" media="(min-width:600px)">
					<source srcset="dist/img/modulo-outras-formas/sm/outras--quesito110.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/modulo-outras-formas/md/outras--quesito110.jpg" alt="Quesito 110 contendo a pergunta 'Na semana de 11/04/2021 a 17/04/2021, exerceu atividades de construção de casa, cômodo, muro, telhado, forno ou churrasqueira, cerca, estrada, abrigo para animais ou outras obras destinadas somente ao próprio uso das pessoas moradoras do domicílio ou de parente?'">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Quesito <span class="old-style-figures">110</span> do questionário da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua no <abbr title="Dispositivo Móvel de Coleta" class="small-caps">DMC</abbr>.
			</figcaption>
		</figure>
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>A partir do momento em que o morador de 14 anos ou mais de idade declara ter exercido atividades de construção, será perguntada qual foi a principal, ou seja, aquela na qual dedicou o maior número de horas.</p>
			<p>Ao clicar no campo, o entrevistador irá escrever a atividade principal. Veja os exemplos de descrição, a seguir, passíveis de serem especificadas:</p>

			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li> construção de cerca;</li>
				<li>construção de muros;</li>
				<li>reforma de casa;</li>
				<li>construção de abrigo para animais;</li>
				<li>ampliação de casa;</li>
				<li>construção de calçada;</li>
				<li>construção de galpão;</li>
				<li>construção de churrasqueira;</li>
				<li>colocação de piso;</li>
				<li>construção de piscina.</li>
			</ul>
			<!-- Lista não ordenada [fim] -->
			<p>Para fins de preenchimento deste quesito, a construção deve ser destinada somente para uso de membro(s) da unidade domiciliar ou de parente(s) que residiam em outro domicílio. Além disso, <strong>a construção não pode ter sido para venda ou troca de serviços</strong>.</p>
			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>As atividades de decoração, os pequenos reparos, incluindo reparos em instalações elétricas e a manutenção da pintura destinadas unicamente à conservação do domicílio devem ser consideradas como parte dos <strong>afazeres domésticos</strong>, cujos quesitos ainda serão apresentados.</q>
			</aside>
			<!-- Realce [fim] -->
		</div>
		<!-- Quesito 110 [fim] -->
	
	</div>
</main>

<?php include "foot.php"; ?>

<!-- Inclua o script a seguir para utilizar o componente Carrossel -->
<script src="dist/js/vendor/slick.min.js"></script>

<script>
	/* Ativacao do componente Carrossel */
	buildCarrossel(".panel-slider");
</script>

</body>

</html>