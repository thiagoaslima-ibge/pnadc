<?php
$moduleTitle = "Outras formas de trabalho"; //TITULO DA UNIDADE
$topicTitle = ""; //TITULO DO TOPICO
$pageTitle = "Exercício"; //TITULO DA PAGINA	
$pageSubtitle = ""; //SUBTITULO DA PAGINA	
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









		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p> A prática cotidiana prova que o <span class="ttorigin tooltip001" data-tooltip-content="#tooltip001_content">aumento do diálogo</span> entre os diferentes setores produtivos não pode mais se dissociar de todos os recursos funcionais envolvidos.</p>

			<!-- Lista de definicao [inicio] -->
			<dl class="definition-list">
				<dt>Agilidade decisória</dt>
				<dd>A certificação de metodologias que nos auxiliam a lidar com a valorização de fatores subjetivos talvez venha a ressaltar a relatividade das diversas correntes de pensamento. Todavia, a complexidade dos estudos efetuados deve passar por modificações independentemente do investimento em reciclagem técnica.</dd>
				<dt>Pontos críticos</dt>
				<dd>O cuidado em identificar pontos críticos no desenvolvimento contínuo de distintas formas de atuação estimula a padronização do impacto na agilidade decisória. Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a consulta aos diversos militantes oferece uma interessante oportunidade para verificação de todos os recursos funcionais envolvidos</dd>
				<dt>Formulação do fluxo de informações</dt>
				<dd>Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a estrutura atual da organização cumpre um papel essencial na formulação do fluxo de informações</dd>
			</dl>
			<!-- Lista de definicao [fim] -->

			<p>Todavia, a execução dos pontos do programa desafia a capacidade de equalização das condições financeiras e administrativas exigidas. A nível organizacional, o surgimento do comércio virtual deve passar por modificações independentemente das regras de conduta normativas. No entanto, não podemos esquecer que a expansão dos mercados mundiais é uma das consequências de alternativas às soluções ortodoxas. Percebemos, cada vez mais, que o aumento do diálogo entre os diferentes setores produtivos agrega valor ao estabelecimento das direções preferenciais no sentido do progresso:</p>

			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>O empenho em analisar o comprometimento entre as equipes prepara-nos para enfrentar situações atípicas decorrentes das formas de ação.
					<ul class="bulleted-list bulleted-list--sublist">
						<li>Empenho</li>
						<li>Informações</li>
						<li>Diálogo</li>
						<li>Progresso</li>
					</ul>
				</li>
				<li>O cuidado em identificar pontos críticos na consolidação das estruturas auxilia a preparação e a composição dos paradigmas corporativos. </li>
				<li>A nível organizacional, o aumento do diálogo entre os diferentes setores produtivos possibilita uma melhor visão global do remanejamento dos quadros funcionais.</li>
				<li>A certificação de metodologias que nos auxiliam a lidar com a execução dos pontos do programa estimula a padronização das condições financeiras e administrativas exigidas.</li>
				<li>É importante questionar o quanto a crescente influência da mídia faz parte de um processo de gerenciamento das posturas dos órgãos dirigentes com relação às suas atribuições.</li>
			</ul>
			<!-- Lista não ordenada [fim] -->

			<p>Por outro lado, a <span class="ttorigin tooltip001" data-tooltip-content="#tooltip001_content">contínua expansão</span> de nossa atividade faz parte de um processo de gerenciamento da gestão inovadora da qual fazemos parte. Ainda assim, existem dúvidas a respeito de como a consulta aos diversos militantes nos obriga à análise das direções preferenciais no sentido do progresso. Evidentemente, o <a href="javascript:void(0);" title="Selecione para abrir este link.">desenvolvimento contínuo de distintas</a> formas de atuação não pode mais se dissociar dos relacionamentos verticais entre as hierarquias. Neste sentido, a hegemonia do ambiente político desafia a capacidade de equalização dos conhecimentos estratégicos para atingir a excelência. </p>
			<button class="btn modal_call" id="faq001">Abrir modal</button>

			<h2>Valorização de fatores subjetivos e incentivo ao avanço tecnológico (h2)</h2>
			<h3>Valorização de fatores subjetivos e incentivo ao avanço tecnológico (h3)</h3>
			<h4>Valorização de fatores subjetivos e incentivo ao avanço tecnológico (h4)</h4>
			<h5>Valorização de fatores subjetivos e incentivo ao avanço tecnológico (h5)</h5>
			<p>Do mesmo modo, a <span class="ttorigin tooltip001" data-tooltip-content="#tooltip001_content">valorização de fatores subjetivos</span> causa impacto indireto na reavaliação de alternativas às soluções ortodoxas. O cuidado em identificar pontos críticos na constante divulgação das informações cumpre um papel essencial na formulação das novas proposições. Pensando mais a longo prazo, o início da atividade geral de formação de atitudes talvez venha a ressaltar a relatividade dos procedimentos normalmente adotados. </p>

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>O incentivo ao avanço tecnológico, assim como o novo modelo estrutural aqui preconizado promove a alavancagem dos relacionamentos verticais entre as hierarquias.</q>
			</aside>
			<!-- Realce [fim] -->

			<p>A certificação de metodologias que nos auxiliam a lidar com o desenvolvimento contínuo de distintas formas de atuação apresenta tendências no sentido de aprovar a manutenção da gestão inovadora da qual fazemos parte:</p>
		</div>

		<!-- Grafico de linha [inicio] -->
		<article class="col-xs-22 col-xs-offset-1 col-sm-20 col-sm-offset-2 col-md-16 col-md-offset-4 col-lg-12 col-lg-offset-6 chart-box">
			<header>
				<h5 class="no-top-margin">Gráfico de linha</h5>
				<p>Use preferencialmente para indicar a variação de valores ao longo do tempo (em milhões de unidades)</p>
			</header>
			<canvas id="grafico-linha"></canvas>
			<footer class="chart-box__notes">
				<h6 class="chart-box__notes-title">Notas</h6>
				<ol class="numeric-list numeric-list--sublist">
					<li>Este bloco deve ser alinhado a partir da última linha</li>
					<li>Comércio varejista de mercadorias em geral, com predominância de produtos alimentícios (minimercados, mercearias e armazéns)</li>
				</ol>
				<p>Fonte: Pesquisa anual de gráficos de linhas, crônicas, sparklines e similares. <abbr title="Instituto Brasileiro de Geografia e Estatística">IBGE</abbr>, <span class="old-style-figures">2020</span></p>
			</footer>
		</article>
		<!-- Grafico de linha [fim]  -->

		<!-- Grafico em barra [inicio] -->
		<article class="col-xs-22 col-xs-offset-1 col-sm-20 col-sm-offset-2 col-md-16 col-md-offset-4 col-lg-12 col-lg-offset-6 chart-box">
			<header>
				<h5 class="no-top-margin">Gráfico de barra</h5>
				<p>Use preferencialmente para indicar a variação de valores ao longo do tempo (em milhões de unidades)</p>
			</header>
			<canvas id="grafico-barra"></canvas>
			<footer class="chart-box__notes">
				<h6 class="chart-box__notes-title">Notas</h6>
				<ol class="numeric-list numeric-list--sublist">
					<li>Este bloco deve ser alinhado a partir da última linha</li>
					<li>Comércio varejista de mercadorias em geral, com predominância de produtos alimentícios (minimercados, mercearias e armazéns)</li>
				</ol>
				<p>Fonte: Pesquisa anual de gráficos de linhas, crônicas, sparklines e similares. <abbr title="Instituto Brasileiro de Geografia e Estatística">IBGE</abbr>, <span class="old-style-figures">2020</span></p>
			</footer>
		</article>
		<!-- Grafico em barra [fim]  -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<!-- Lista ordenada [inicio] -->
			<ul class="numeric-list">
				<li>O cuidado em identificar pontos críticos na consolidação das estruturas auxilia a preparação e a composição dos paradigmas corporativos. </li>
				<li>A nível organizacional, o aumento do diálogo entre os diferentes setores produtivos possibilita uma melhor visão global do remanejamento dos quadros funcionais.</li>
				<li>A certificação de metodologias que nos auxiliam a lidar com a execução dos pontos do programa estimula a padronização das condições financeiras e administrativas exigidas.</li>
				<li>É importante questionar o quanto a crescente influência da mídia faz parte de um processo de gerenciamento das posturas dos órgãos dirigentes com relação às suas atribuições.</li>
			</ul>
			<!-- Lista ordenada [fim] -->

			<!-- Citacao em bloco [inicio] -->
			<blockquote class="quote" cite="http://www.google.com.br/">
				<p>"A nível organizacional, o aumento do diálogo entre os diferentes setores produtivos possibilita uma melhor visão global do remanejamento dos quadros funcionais."</p>
				<footer>
					<p class="quote__author"><span class="small-caps">Muffumbo</span>, <span class="old-style-figures">1991</span></p>
				</footer>
			</blockquote>
			<!-- Citacao em bloco [fim] -->

			<h3>Consolidação das estruturas e consenso sobre a necessidade de qualificação</h3>
			<p>No mundo atual, o consenso sobre a necessidade de qualificação talvez venha a ressaltar a relatividade do sistema de participação geral. O cuidado em identificar pontos críticos na consolidação das estruturas causa impacto indireto na reavaliação das novas proposições. No mundo atual, o início da atividade geral de formação de atitudes deve passar por modificações independentemente das condições financeiras e administrativas exigidas. O empenho em analisar o acompanhamento das preferências de consumo apresenta tendências no sentido de aprovar a manutenção dos métodos utilizados na avaliação de resultados.</p>

			<!-- Bloco de codigo [inicio] -->
			<figure class="code-display">
				<figcaption></figcaption>
				<pre><code>$(function() {
  var cookieFontSize = getCookie("FontSize");
  if (cookieFontSize != "")
    $('body').css("font-size","" + parseInt(cookieFontSize) + "px");
  document.cookie = "Retry=0";
});</code></pre>
			</figure>
			<!-- Bloco de codigo [fim] -->

			<!-- Bloco de codigo com linhas numeradas [inicio] -->
			<figure class="code-display--numbered">
				<figcaption></figcaption>
				<pre><code><span>$(function() {</span>
<span>  var cookieFontSize = getCookie("FontSize");</span>
<span>  if (cookieFontSize != "")</span>
<span>    $('body').css("font-size","" + parseInt(cookieFontSize) + "px");</span>
<span>  document.cookie = "Retry=0";</span>
<span>});</code></pre>
			</figure>
			<!-- Bloco de codigo com linhas numeradas [fim] -->

			<!-- Video incorporado (YouTube) [inicio] -->
			<div class="video-wrapper">
				<div class="video-wrapper__iframe video-wrapper__iframe--focusable" id="youtube-video--example01"></div>
			</div>
			<!-- Video incorporado (YouTube) [fim] -->

			<!-- Video incorporado [inicio] -->
			<video class="video-content video-content--focusable" controls>
				<source src="src/video/video-sample.mp4" type="video/mp4" srclang="pt">
				<track src="http://10.200.0.78/pnadc2015/Acesso_a_Servicos_Basicos_Conceitos.vtt" kind="captions" label="Portugues" srclang="pt">
				<p>Seu navegador <strong>não é compatível</strong> com este recurso. Caso esteja usando o Internet Explorer, <strong>desabilite o Modo de exibição de Compatibilidade para este site</strong>.</p>
				<p>Você também pode <a href="http://10.200.0.78/pnadc2015/Acesso_a_Servicos_Basicos_Conceitos.flv" title="Selecione para fazer o download.">fazer o download do vídeo</a> e reproduzi-lo localmente (clique com o botão direito sobre o link e selecione a opção "Salvar Como...").</p>
			</video>
			<!-- Video incorporado [fim] -->

			<!-- Tabela [inicio] -->
			<div class="table-container">
				<table class="table">
					<caption class="table__title"><abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua: Temas e tópicos pesquisados ao longo do ano</caption>
					<thead>
						<tr>
							<th scope="col">Tema Pesquisado</th>
							<th scope="col">1ª visita</th>
							<th scope="col">2ª visita</th>
							<th scope="col">3ª visita</th>
							<th scope="col">4ª visita</th>
							<th scope="col">5ª visita</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">Fatores subjetivos</th>
							<td class="table__numeric-values">98%</td>
							<td class="table__numeric-values">36%</td>
							<td class="table__numeric-values">19%</td>
						</tr>
						<tr>
							<th scope="row">Nível organizacional</th>
							<td class="table__numeric-values">19%</td>
							<td class="table__numeric-values">98%</td>
							<td class="table__numeric-values">36%</td>
						</tr>
						<tr>
							<th scope="row">Certificação de metodologias</th>
							<td class="table__numeric-values">36%</td>
							<td class="table__numeric-values">19%</td>
							<td class="table__numeric-values">98%</td>
						</tr>
						<tr>
							<th scope="row">Visão global</th>
							<td class="table__numeric-values">21%</td>
							<td class="table__numeric-values">87%</td>
							<td class="table__numeric-values">42%</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- Tabela [fim] -->

			<p>A nível organizacional, o aumento do diálogo entre os diferentes setores produtivos possibilita uma melhor visão global do remanejamento dos quadros funcionais. Não obstante, o julgamento imparcial das eventualidades garante a contribuição de um grupo importante na determinação das condições inegavelmente apropriadas. É importante questionar o quanto a crescente influência da mídia facilita a criação do sistema de participação geral.</p>

			<p>A nível organizacional, o aumento do diálogo entre os diferentes setores produtivos possibilita uma melhor visão global do remanejamento dos quadros funcionais. Não obstante, o julgamento imparcial das eventualidades garante a contribuição de um grupo importante na determinação das condições inegavelmente apropriadas. É importante questionar o quanto a crescente influência da mídia facilita a criação do sistema de participação geral.</p>

			<!-- Acordeao [inicio] -->
			<dl class="accordion" role="presentation">
				<dt>
					<button class="accordion__trigger" id="accordion__trigger-1" type="button" aria-controls="accordion__panel-1" aria-expanded="false">
						Planejamento
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
							<path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z" />
							<path d="M0 0h24v24H0z" fill="none" />
						</svg>
					</button>
				</dt>
				<dd class="accordion__panel" id="accordion__panel-1" aria-labelledby="accordion__trigger-1">O cuidado em identificar pontos críticos na crescente influência da mídia desafia a capacidade de equalização dos métodos utilizados na avaliação de resultados.</dd>
				<dt>
					<button class="accordion__trigger" id="accordion__trigger-2" type="button" aria-controls="accordion__panel-2" aria-expanded="false">
						Organização
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
							<path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z" />
							<path d="M0 0h24v24H0z" fill="none" />
						</svg>
					</button>
				</dt>
				<dd class="accordion__panel" id="accordion__panel-2" aria-labelledby="accordion__trigger-2">A nível organizacional, o acompanhamento das preferências de consumo não pode mais se dissociar do retorno esperado a longo prazo.</dd>
				<dt>
					<button class="accordion__trigger" id="accordion__trigger-3" type="button" aria-controls="accordion__panel-3" aria-expanded="false">
						Direção / Liderança
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
							<path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z" />
							<path d="M0 0h24v24H0z" fill="none" />
						</svg>
					</button>
				</dt>
				<dd class="accordion__panel" id="accordion__panel-3" aria-labelledby="accordion__trigger-3">A prática cotidiana prova que a determinação clara de objetivos aponta para a melhoria das posturas dos órgãos dirigentes com relação às suas atribuições.</dd>
				<dt>
					<button class="accordion__trigger" id="accordion__trigger-4" type="button" aria-controls="accordion__panel-4" aria-expanded="false">
						Controle
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
							<path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z" />
							<path d="M0 0h24v24H0z" fill="none" />
						</svg>
					</button>
				</dt>
				<dd class="accordion__panel" id="accordion__panel-4" aria-labelledby="accordion__trigger-4">Podemos já vislumbrar o modo pelo qual o entendimento das metas propostas desafia a capacidade de equalização do processo de comunicação como um todo.</dd>
			</dl>
			<!-- Acordeao [fim] -->

			<p>A nível organizacional, o aumento do diálogo entre os diferentes setores produtivos possibilita uma melhor visão global do remanejamento dos quadros funcionais. Não obstante, o julgamento imparcial das eventualidades garante a contribuição de um grupo importante na determinação das condições inegavelmente apropriadas. É importante questionar o quanto a crescente influência da mídia facilita a criação do sistema de participação geral.</p>
		</div>

		<!-- Imagem pequena (com hostpot) [inicio] -->
		<figure class="hotspot-container img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/example-img001--lg.jpg" media="(min-width:1200px)">
					<source srcset="dist/img/example-img001--md.jpg" media="(min-width:600px)">
					<source srcset="dist/img/example-img001--sm.jpg" media="(min-width:1px)">
					<img class="hotspot-container__image" src="dist/img/example-img001--lg.jpg" alt="Descrição da imagem.">
				</picture>
				<div class="hotspot-container__map tooltip002" data-tooltip-content="#tooltip002_content" style="width: 30%;height: 30%;top: 30%;left: 35%;"></div>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Imagem tamanho P: O que temos que ter sempre em mente é que a mobilidade dos capitais internacionais exige a precisão.
				<small class="img-container__img-src">Fonte: Google.</small>
			</figcaption>
		</figure>
		<!-- Imagem pequena (com hostpot) [fim] -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Por conseguinte, a necessidade de renovação processual prepara-nos para enfrentar situações atípicas decorrentes do impacto na agilidade decisória. No entanto, não podemos esquecer que a valorização de fatores subjetivos afeta positivamente a correta previsão do fluxo de informações. A prática cotidiana prova que o acompanhamento das preferências de consumo talvez venha a ressaltar a relatividade do orçamento setorial. Todavia, o entendimento das metas propostas agrega valor ao estabelecimento das diversas correntes de pensamento.</p>
		</div>

		<!-- Imagem média (com zoom em imagem) [inicio] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right">
				<div class="img-zoom">
					<picture class="img-zoom__img">
						<source srcset="dist/img/example-img002--lg.jpg" media="(min-width:1200px)">
						<source srcset="dist/img/example-img002--md.jpg" media="(min-width:600px)">
						<source srcset="dist/img/example-img002--sm.jpg" media="(min-width:1px)">
						<img class="image" src="dist/img/example-img002--lg.jpg" alt="Descrição da imagem.">
					</picture>
					<div class="img-zoom__zoom-container img-zoom__zoom-container--example"></div>
				</div>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Imagem tamanho M: O que temos que ter sempre em mente é que a mobilidade dos capitais internacionais exige a precisão. <small class="img-container__img-src">Fonte: Google.</small>
			</figcaption>
		</figure>
		<!-- Imagem média (com zoom em imagem) [fim] -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>No entanto, não podemos esquecer que a execução dos pontos do programa maximiza as possibilidades por conta de todos os recursos funcionais envolvidos. Do mesmo modo, o novo modelo estrutural aqui preconizado garante a contribuição de um grupo importante na determinação das novas proposições. A prática cotidiana prova que a <span class="ttorigin tooltip001" data-tooltip-content="#tooltip001_content">mobilidade dos capitais internacionais</span> estimula a padronização das direções preferenciais no sentido do progresso. Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a consulta aos diversos militantes facilita a criação do retorno esperado a longo prazo.</p>
		</div>

		<!-- Imagem grande [inicio] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-17 col-sm-offset-2 col-md-13 col-md-offset-4 col-lg-10 col-lg-offset-6 gutter-sm-right">
				<picture>
					<img class="image" style="height: 100%;width: 100%;" src="dist/img/placeholder.svg" alt="Descrição da imagem.">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-3 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Imagem tamanho G: O que temos que ter sempre em mente é que a mobilidade dos capitais internacionais exige a precisão. <small class="img-container__img-src">Fonte: Google.</small>
			</figcaption>
		</figure>
		<!-- Imagem grande [fim] -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>A nível organizacional, o aumento do diálogo entre os diferentes setores produtivos possibilita uma melhor visão global do remanejamento dos quadros funcionais. Não obstante, o julgamento imparcial das eventualidades garante a contribuição de um grupo importante na determinação das condições inegavelmente apropriadas. É importante questionar o quanto a crescente influência da mídia facilita a criação do sistema de participação geral.</p>
			<h3>Consolidação das estruturas</h3>
		</div>



		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Nunca é demais lembrar o peso e o significado destes problemas, uma vez que o desafiador cenário globalizado oferece uma interessante oportunidade para verificação das condições financeiras e administrativas exigidas. Acima de tudo, é fundamental ressaltar que o acompanhamento das preferências de consumo cumpre um papel essencial na formulação das regras de conduta normativas. É claro que a <a href="https://pt.wikipedia.org/wiki/Competitividade" target="_blank" title="Selecione para visualizar" rel="noopener">competitividade</a> nas transações comerciais pode nos levar a considerar a reestruturação dos paradigmas corporativos. O incentivo ao avanço tecnológico, assim como o julgamento imparcial das eventualidades representa uma abertura para a melhoria dos procedimentos normalmente adotados.</p>
			<p>Evidentemente, o surgimento do comércio virtual auxilia a preparação e a composição das formas de ação. É importante questionar o quanto a crescente influência da mídia agrega valor ao estabelecimento dos modos de operação convencionais. O empenho em analisar o entendimento das metas propostas estende o alcance e a importância do impacto na agilidade decisória.</p>
		</div>

		<!-- Linha do tempo [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-20 col-sm-offset-2 col-md-16 col-md-offset-4 col-lg-12 col-lg-offset-6">
			<h2 class="timeline__caption">Linha do tempo do comércio virtual</h2>
			<ul class="timeline__container">
				<li class="timeline__baseline"></li>
				<li class="row timeline__entry">
					<p class="timeline__year">1871</p>
					<div class="col-xs-24 col-sm-12 timeline__content-box" data-aos="fade-up" data-aos-offset="200">
						<p>No entanto, não podemos esquecer que a constante divulgação das informações facilita a criação dos paradigmas corporativos. </p>
					</div>
				</li>
				<li class="row timeline__entry">
					<p class="timeline__year">1872</p>
					<div class="col-xs-24 col-sm-12 timeline__content-box" data-aos="fade-up" data-aos-offset="200">
						<p>Do mesmo modo, o novo modelo estrutural aqui preconizado garante a contribuição de um grupo importante na determinação do retorno esperado a longo prazo.</p>
					</div>
					<div class="col-xs-24 col-sm-12 timeline__content-box" data-aos="fade-up" data-aos-offset="200">
						<figure>
							<picture>
								<source srcset="dist/img/example-img001--lg.jpg" media="(min-width:1200px)">
								<source srcset="dist/img/example-img001--md.jpg" media="(min-width:600px)">
								<source srcset="dist/img/example-img001--sm.jpg" media="(min-width:1px)">
								<img class="image" src="dist/img/example-img001--lg.jpg" alt="Descrição da imagem.">
							</picture>
						</figure>
					</div>
				</li>
				<li class="row timeline__entry">
					<p class="timeline__year">1889</p>
					<div class="col-xs-24 col-sm-12 timeline__content-box" data-aos="fade-up" data-aos-offset="200">
						<p>Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a revolução dos costumes assume importantes posições no estabelecimento do remanejamento dos quadros funcionais.</p>
					</div>
				</li>
			</ul>
		</div>
		<!-- Linha do tempo [fim] -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Por conseguinte, a necessidade de renovação processual prepara-nos para enfrentar situações atípicas decorrentes do impacto na agilidade decisória. No entanto, não podemos esquecer que a valorização de fatores subjetivos afeta positivamente a correta previsão do fluxo de informações. A prática cotidiana prova que o acompanhamento das preferências de consumo talvez venha a ressaltar a relatividade do orçamento setorial. Todavia, o entendimento das metas propostas agrega valor ao estabelecimento das diversas correntes de pensamento.</p>
		</div>

		<!-- Mosaico [inicio] -->
		<ul class="row photo-mosaic">
			<li class="col-xs-12 col-md-8">
				<figure class="photo-mosaic__img-container">
					<picture>
						<source srcset="dist/img/example-img001--lg.jpg" media="(min-width:1200px)">
						<source srcset="dist/img/example-img001--md.jpg" media="(min-width:600px)">
						<source srcset="dist/img/example-img001--sm.jpg" media="(min-width:1px)">
						<img class="image" src="dist/img/example-img001--lg.jpg" alt="Descrição da imagem.">
					</picture>
					<figcaption class="photo-mosaic__img-caption">
						<p>Evidentemente, o surgimento do comércio virtual auxilia a preparação e a composição das formas de ação. É importante questionar o quanto a crescente influência da mídia agrega valor ao estabelecimento dos modos de operação convencionais. O empenho em analisar o entendimento das metas propostas estende o alcance e a importância do impacto na agilidade decisória.</p>
					</figcaption>
				</figure>
			</li>
			<li class="col-xs-12 col-md-8">
				<figure class="photo-mosaic__img-container">
					<picture>
						<source srcset="dist/img/example-img002--lg.jpg" media="(min-width:1200px)">
						<source srcset="dist/img/example-img002--md.jpg" media="(min-width:600px)">
						<source srcset="dist/img/example-img002--sm.jpg" media="(min-width:1px)">
						<img class="image" src="dist/img/example-img002--lg.jpg" alt="Descrição da imagem.">
					</picture>
					<figcaption class="photo-mosaic__img-caption">
						<p>Evidentemente, o surgimento do comércio virtual auxilia a preparação e a composição das formas de ação. É importante questionar o quanto a crescente influência da mídia agrega valor ao estabelecimento dos modos de operação convencionais. O empenho em analisar o entendimento das metas propostas estende o alcance e a importância do impacto na agilidade decisória.</p>
					</figcaption>
				</figure>
			</li>
			<li class="col-xs-12 col-md-8">
				<figure class="photo-mosaic__img-container">
					<picture>
						<source srcset="dist/img/example-img003--lg.jpg" media="(min-width:1200px)">
						<source srcset="dist/img/example-img003--md.jpg" media="(min-width:600px)">
						<source srcset="dist/img/example-img003--sm.jpg" media="(min-width:1px)">
						<img class="image" src="dist/img/example-img003--lg.jpg" alt="Descrição da imagem.">
					</picture>
					<figcaption class="photo-mosaic__img-caption">
						<p>Evidentemente, o surgimento do comércio virtual auxilia a preparação e a composição das formas de ação. É importante questionar o quanto a crescente influência da mídia agrega valor ao estabelecimento dos modos de operação convencionais. O empenho em analisar o entendimento das metas propostas estende o alcance e a importância do impacto na agilidade decisória.</p>
					</figcaption>
				</figure>
			</li>
			<li class="col-xs-12 col-md-8">
				<figure class="photo-mosaic__img-container">
					<picture>
						<source srcset="dist/img/example-img004--lg.jpg" media="(min-width:1200px)">
						<source srcset="dist/img/example-img004--md.jpg" media="(min-width:600px)">
						<source srcset="dist/img/example-img004--sm.jpg" media="(min-width:1px)">
						<img class="image" src="dist/img/example-img004--lg.jpg" alt="Descrição da imagem.">
					</picture>
					<figcaption class="photo-mosaic__img-caption">
						<p>Evidentemente, o surgimento do comércio virtual auxilia a preparação e a composição das formas de ação. É importante questionar o quanto a crescente influência da mídia agrega valor ao estabelecimento dos modos de operação convencionais. O empenho em analisar o entendimento das metas propostas estende o alcance e a importância do impacto na agilidade decisória.</p>
					</figcaption>
				</figure>
			</li>
			<li class="col-xs-12 col-md-8">
				<figure class="photo-mosaic__img-container">
					<picture>
						<source srcset="dist/img/example-img001--lg.jpg" media="(min-width:1200px)">
						<source srcset="dist/img/example-img001--md.jpg" media="(min-width:600px)">
						<source srcset="dist/img/example-img001--sm.jpg" media="(min-width:1px)">
						<img class="image" src="dist/img/example-img001--lg.jpg" alt="Descrição da imagem.">
					</picture>
					<figcaption class="photo-mosaic__img-caption">
						<p>Evidentemente, o surgimento do comércio virtual auxilia a preparação e a composição das formas de ação. É importante questionar o quanto a crescente influência da mídia agrega valor ao estabelecimento dos modos de operação convencionais. O empenho em analisar o entendimento das metas propostas estende o alcance e a importância do impacto na agilidade decisória.</p>
					</figcaption>
				</figure>
			</li>
			<li class="col-xs-12 col-md-8">
				<figure class="photo-mosaic__img-container">
					<picture>
						<source srcset="dist/img/example-img002--lg.jpg" media="(min-width:1200px)">
						<source srcset="dist/img/example-img002--md.jpg" media="(min-width:600px)">
						<source srcset="dist/img/example-img002--sm.jpg" media="(min-width:1px)">
						<img class="image" src="dist/img/example-img002--lg.jpg" alt="Descrição da imagem.">
					</picture>
					<figcaption class="photo-mosaic__img-caption">
						<p>Evidentemente, o surgimento do comércio virtual auxilia a preparação e a composição das formas de ação. É importante questionar o quanto a crescente influência da mídia agrega valor ao estabelecimento dos modos de operação convencionais. O empenho em analisar o entendimento das metas propostas estende o alcance e a importância do impacto na agilidade decisória.</p>
					</figcaption>
				</figure>
			</li>
			<li class="col-xs-12 col-md-8">
				<figure class="photo-mosaic__img-container">
					<picture>
						<source srcset="dist/img/example-img003--lg.jpg" media="(min-width:1200px)">
						<source srcset="dist/img/example-img003--md.jpg" media="(min-width:600px)">
						<source srcset="dist/img/example-img003--sm.jpg" media="(min-width:1px)">
						<img class="image" src="dist/img/example-img003--lg.jpg" alt="Descrição da imagem.">
					</picture>
					<figcaption class="photo-mosaic__img-caption">
						<p>Evidentemente, o surgimento do comércio virtual auxilia a preparação e a composição das formas de ação. É importante questionar o quanto a crescente influência da mídia agrega valor ao estabelecimento dos modos de operação convencionais. O empenho em analisar o entendimento das metas propostas estende o alcance e a importância do impacto na agilidade decisória.</p>
					</figcaption>
				</figure>
			</li>
			<li class="col-xs-12 col-md-8">
				<figure class="photo-mosaic__img-container">
					<picture>
						<source srcset="dist/img/example-img004--lg.jpg" media="(min-width:1200px)">
						<source srcset="dist/img/example-img004--md.jpg" media="(min-width:600px)">
						<source srcset="dist/img/example-img004--sm.jpg" media="(min-width:1px)">
						<img class="image" src="dist/img/example-img004--lg.jpg" alt="Descrição da imagem.">
					</picture>
					<figcaption class="photo-mosaic__img-caption">
						<p>Evidentemente, o surgimento do comércio virtual auxilia a preparação e a composição das formas de ação. É importante questionar o quanto a crescente influência da mídia agrega valor ao estabelecimento dos modos de operação convencionais. O empenho em analisar o entendimento das metas propostas estende o alcance e a importância do impacto na agilidade decisória.</p>
					</figcaption>
				</figure>
			</li>
			<li class="col-xs-12 col-md-8">
				<figure class="photo-mosaic__img-container">
					<picture>
						<source srcset="dist/img/example-img001--lg.jpg" media="(min-width:1200px)">
						<source srcset="dist/img/example-img001--md.jpg" media="(min-width:600px)">
						<source srcset="dist/img/example-img001--sm.jpg" media="(min-width:1px)">
						<img class="image" src="dist/img/example-img001--lg.jpg" alt="Descrição da imagem.">
					</picture>
					<figcaption class="photo-mosaic__img-caption">
						<p>Evidentemente, o surgimento do comércio virtual auxilia a preparação e a composição das formas de ação. É importante questionar o quanto a crescente influência da mídia agrega valor ao estabelecimento dos modos de operação convencionais. O empenho em analisar o entendimento das metas propostas estende o alcance e a importância do impacto na agilidade decisória.</p>
					</figcaption>
				</figure>
			</li>
		</ul>
		<!-- Mosaico [fim] -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Nunca é demais lembrar o peso e o significado destes problemas, uma vez que o desafiador cenário globalizado oferece uma interessante oportunidade para verificação das condições financeiras e administrativas exigidas. Acima de tudo, é fundamental ressaltar que o acompanhamento das preferências de consumo cumpre um papel essencial na formulação das regras de conduta normativas. É claro que a <a href="https://pt.wikipedia.org/wiki/Competitividade" target="_blank" title="Selecione para visualizar" rel="noopener">competitividade</a> nas transações comerciais pode nos levar a considerar a reestruturação dos paradigmas corporativos. O incentivo ao avanço tecnológico, assim como o julgamento imparcial das eventualidades representa uma abertura para a melhoria dos procedimentos normalmente adotados.</p>
			<p>Evidentemente, o surgimento do comércio virtual auxilia a preparação e a composição das formas de ação. É importante questionar o quanto a crescente influência da mídia agrega valor ao estabelecimento dos modos de operação convencionais. O empenho em analisar o entendimento das metas propostas estende o alcance e a importância do impacto na agilidade decisória.</p>
		</div>

		<!-- Lista ilustrada [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-20 col-sm-offset-2 col-md-16 col-md-offset-4 col-lg-12 col-lg-offset-6" style="margin-top:1rem;">
			<ul class="illustrated-list">
				<li class="row">
					<figure>
						<picture class="col-xs-6 gutter-xs-right">
							<source srcset="dist/img/example-img001--lg.jpg" media="(min-width:1200px)">
							<source srcset="dist/img/example-img001--md.jpg" media="(min-width:600px)">
							<source srcset="dist/img/example-img001--sm.jpg" media="(min-width:1px)">
							<img class="image" src="dist/img/example-img001--lg.jpg" alt="Descrição da imagem.">
						</picture>
						<figcaption class="col-xs-18">
							<h5 style="margin-top:0;">Consolidação das estruturas</h5>
							<p>Evidentemente, o surgimento do comércio virtual auxilia a preparação e a composição das formas de ação. É importante questionar o quanto a crescente influência da mídia agrega valor ao estabelecimento dos modos de operação convencionais. O empenho em analisar o entendimento das metas propostas estende o alcance e a importância do impacto na agilidade decisória.</p>
						</figcaption>
					</figure>
				</li>
				<li class="row">
					<figure>
						<picture class="col-xs-6 gutter-xs-right">
							<source srcset="dist/img/example-img002--lg.jpg" media="(min-width:1200px)">
							<source srcset="dist/img/example-img002--md.jpg" media="(min-width:600px)">
							<source srcset="dist/img/example-img002--sm.jpg" media="(min-width:1px)">
							<img class="image" src="dist/img/example-img002--lg.jpg" alt="Descrição da imagem.">
						</picture>
						<figcaption class="col-xs-18">
							<h5 style="margin-top:0;">Execução dos pontos</h5>
							<p>Podemos já vislumbrar o modo pelo qual a revolução dos costumes afeta positivamente a correta previsão das direções preferenciais no sentido do progresso. No mundo atual, a constante divulgação das informações facilita a criação das regras de conduta normativas. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a mobilidade dos capitais internacionais obstaculiza a apreciação da importância das condições financeiras e administrativas exigidas. </p>
						</figcaption>
					</figure>
				</li>
				<li class="row">
					<figure>
						<picture class="col-xs-6 gutter-xs-right">
							<source srcset="dist/img/example-img003--lg.jpg" media="(min-width:1200px)">
							<source srcset="dist/img/example-img003--md.jpg" media="(min-width:600px)">
							<source srcset="dist/img/example-img003--sm.jpg" media="(min-width:1px)">
							<img class="image" src="dist/img/example-img003--lg.jpg" alt="Descrição da imagem.">
						</picture>
						<figcaption class="col-xs-18">
							<h5 style="margin-top:0;">Aumento do diálogo</h5>
							<p> A nível organizacional, a crescente influência da mídia estimula a padronização do impacto na agilidade decisória. Neste sentido, a contínua expansão de nossa atividade cumpre um papel essencial na formulação dos níveis de motivação departamental. Todavia, a expansão dos mercados mundiais apresenta tendências no sentido de aprovar a manutenção do orçamento setorial. Desta maneira, a complexidade dos estudos efetuados estende o alcance e a importância do remanejamento dos quadros funcionais.</p>
						</figcaption>
					</figure>
				</li>
				<li class="row">
					<figure>
						<picture class="col-xs-6 gutter-xs-right">
							<source srcset="dist/img/example-img004--lg.jpg" media="(min-width:1200px)">
							<source srcset="dist/img/example-img004--md.jpg" media="(min-width:600px)">
							<source srcset="dist/img/example-img004--sm.jpg" media="(min-width:1px)">
							<img class="image" src="dist/img/example-img004--lg.jpg" alt="Descrição da imagem.">
						</picture>
						<figcaption class="col-xs-18">
							<h5 style="margin-top:0;">Certificação de metodologias</h5>
							<p> Acima de tudo, é fundamental ressaltar que o comprometimento entre as equipes possibilita uma melhor visão global dos relacionamentos verticais entre as hierarquias. É claro que a percepção das dificuldades auxilia a preparação e a composição das condições inegavelmente apropriadas. Evidentemente, o acompanhamento das preferências de consumo talvez venha a ressaltar a relatividade do processo de comunicação como um todo. </p>
						</figcaption>
					</figure>
				</li>
			</ul>
		</div>
		<!-- Lista ilustrada [fim] -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h4>Mapa do Brasil com pontos de interesse</h4>
			<div id="mapid" class="interactive-map"></div>
		</div>

		<!-- Conteudo da pagina [fim] -->
	</div>

	<!-- Conteudo dos tooltips [inicio] -->
	<div class="tooltip_templates">
		<span id="tooltip001_content">É importante questionar a expansão dos mercados mundiais.</span>
		<span id="tooltip002_content">A nível organizacional, a percepção das dificuldades não pode mais se dissociar das novas proposições.</span>
	</div>
	<!-- Conteudo dos tooltips [fim] -->

</main>

<!-- Janela modal [inicio] -->
<article class="modal" id="modal_faq001">
	<header class="modal__header">
		<h2 class="modal__heading-1">Perguntas frequentes</h2>
		<button class="btn modal__btn-close">Fechar</button>
	</header>
	<div class="row modal__content">
		<div class="col-xs-24">
			<p>A certificação de metodologias que nos auxiliam a lidar com a valorização de fatores subjetivos talvez venha a ressaltar a relatividade das diversas correntes de pensamento. Todavia, a complexidade dos estudos efetuados deve passar por modificações independentemente do investimento em reciclagem técnica. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a mobilidade dos capitais internacionais faz parte de um processo de gerenciamento das direções preferenciais no sentido do progresso. A prática cotidiana prova que o consenso sobre a necessidade de qualificação aponta para a melhoria dos relacionamentos verticais entre as hierarquias. A certificação de metodologias que nos auxiliam a lidar com o entendimento das metas propostas apresenta tendências no sentido de aprovar a manutenção do impacto na agilidade decisória.</p>
			<p>O cuidado em identificar pontos críticos no desenvolvimento contínuo de distintas formas de atuação estimula a padronização do impacto na agilidade decisória. Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a consulta aos diversos militantes oferece uma interessante oportunidade para verificação de todos os recursos funcionais envolvidos. O empenho em analisar o desafiador cenário globalizado deve passar por modificações independentemente do fluxo de informações. Caros amigos, a constante divulgação das informações causa impacto indireto na reavaliação dos conhecimentos estratégicos para atingir a excelência.</p>
			<p>Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a estrutura atual da organização cumpre um papel essencial na formulação do fluxo de informações. Por conseguinte, a execução dos pontos do programa pode nos levar a considerar a reestruturação dos métodos utilizados na avaliação de resultados. Neste sentido, a consolidação das estruturas estende o alcance e a importância do orçamento setorial. O que temos que ter sempre em mente é que a percepção das dificuldades facilita a criação do sistema de formação de quadros que corresponde às necessidades. É importante questionar o quanto o desenvolvimento contínuo de distintas formas de atuação ainda não demonstrou convincentemente que vai participar na mudança dos níveis de motivação departamental.</p>
			<p>A certificação de metodologias que nos auxiliam a lidar com a valorização de fatores subjetivos talvez venha a ressaltar a relatividade das diversas correntes de pensamento. Todavia, a complexidade dos estudos efetuados deve passar por modificações independentemente do investimento em reciclagem técnica. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a mobilidade dos capitais internacionais faz parte de um processo de gerenciamento das direções preferenciais no sentido do progresso. A prática cotidiana prova que o consenso sobre a necessidade de qualificação aponta para a melhoria dos relacionamentos verticais entre as hierarquias. A certificação de metodologias que nos auxiliam a lidar com o entendimento das metas propostas apresenta tendências no sentido de aprovar a manutenção do impacto na agilidade decisória.</p>
			<p>O cuidado em identificar pontos críticos no desenvolvimento contínuo de distintas formas de atuação estimula a padronização do impacto na agilidade decisória. Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a consulta aos diversos militantes oferece uma interessante oportunidade para verificação de todos os recursos funcionais envolvidos. O empenho em analisar o desafiador cenário globalizado deve passar por modificações independentemente do fluxo de informações. Caros amigos, a constante divulgação das informações causa impacto indireto na reavaliação dos conhecimentos estratégicos para atingir a excelência.</p>
			<p>Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a estrutura atual da organização cumpre um papel essencial na formulação do fluxo de informações. Por conseguinte, a execução dos pontos do programa pode nos levar a considerar a reestruturação dos métodos utilizados na avaliação de resultados. Neste sentido, a consolidação das estruturas estende o alcance e a importância do orçamento setorial. O que temos que ter sempre em mente é que a percepção das dificuldades facilita a criação do sistema de formação de quadros que corresponde às necessidades. É importante questionar o quanto o desenvolvimento contínuo de distintas formas de atuação ainda não demonstrou convincentemente que vai participar na mudança dos níveis de motivação departamental.</p>
		</div>
	</div>
</article>
<!-- Janela modal [fim] -->

<?php
include "foot.php";
?>

<!-- Inclua o script a seguir para utilizar o componente Tooltip -->
<script src="dist/js/vendor/tooltipster.bundle.min.js"></script>

<!-- Inclua o script a seguir para utilizar o componente Carrossel -->
<script src="dist/js/vendor/slick.min.js"></script>

<!-- Inclua o script a seguir para utilizar a biblioteca Animate on Scroll -->
<script src="dist/js/vendor/aos.min.js"></script>

<!-- Inclua os dois scripts a seguir para utilizar a biblioteca de gráficos Chart.js -->
<script src="dist/js/vendor/Chart.bundle.min.js"></script>
<script src="dist/js/vendor/chartjs-plugin-datalabels.js"></script>

<!-- Inclua o script a seguir para incorporar videos do YouTube -->
<script src="https://www.youtube.com/iframe_api"></script>

<!-- Inclua o script a seguir para utilizar a biblioteca Leaflet -->
<script src="dist/js/vendor/leaflet.js"></script>

<script>
	/* Ativacao do componente Carrossel */
	buildCarrossel(".panel-slider");

	AOS.init(); // Acionar Animate-On-Scroll
	$('.page-content').scroll(function() {
		AOS.refresh();
	}); // Rodar Animate-On-Scroll quando for acionada a barra de rolagem	

	/* Configuracao e ativacao da incorporacao de video do YouTube [inicio] */
	function onYouTubeIframeAPIReady() {
		//Funcao que cria o player do YouTube. O primeiro parametro e o elemento, o segundo a ID do video
		buildYouTubePlayer('youtube-video--example01', 'Xo7CgqhyhLc');
	};
	/* Configuracao e ativacao da incorporacao de video do YouTube [fim] */

	/* Configuracao e ativacao do grafico de linha [inicio] */
	// Cor das linhas (precisa ser definida aqui pois nao aceita a variavel SASS)
	var chartColor = 'rgba(19,133,0,1)';
	// ID do canvas do grafico
	var chartId1 = '#grafico-linha';
	// Labels do eixo X (o primeiro e último sao valores nulos para fazer o espacamento lateral)
	var chartLabels1 = ['', '1980', '1990', '2000', '2010', '2020', ''];
	// Unidade dos valores do eixo Y
	var chartDataLabels1 = 'Milhões de unidades';
	// Dados (o primeiro e último sao valores nulos para fazer o espacamento lateral)
	var chartData1 = [, 52.23, 61.24, 65.3, 61.5, 78.6, ];
	// Chamada da funcao de construcao do grafico com as variaveis
	buildLineChart(chartId1, chartLabels1, chartDataLabels1, chartData1);
	/* Configuracao e ativacao do grafico de linha [fim] */

	/* Configuracao e ativacao do grafico de barra [inicio] */
	// ID do canvas do grafico
	var chartId2 = '#grafico-barra';
	// Labels do eixo Y (os labels precisam ser 'quebrados' para não serem cortados)
	var chartLabels2 = [
		["Comércio varejista de artigos", "do vestuário e acessórios"],
		["Comércio varejista de mercadorias", "em geral, com…²"],
		["Lanchonetes, casas de chá,", "de sucos e similares"],
		["Atividades de associações de", "defesa dos direitos sociais"],
		"Cabelereiros",
		"Restaurantes e similares"
	];
	// Unidade dos valores do eixo X
	var chartDataLabels2 = 'Milhões de unidades';
	// Dados
	var chartData2 = [51.94, 42.15, 38.78, 23.04, 21.03, 10.92];
	// Chamada da funcao de construcao do grafico com as variaveis
	buildBarChart(chartId2, chartLabels2, chartDataLabels2, chartData2);
	/* Configuracao e ativacao do grafico de barra [fim] */

	var mymap = L.map('mapid') // Designacao do objeto mapa
		.setView([-22.912161949999998, -43.23117510590559], 4); // Designacao do ponto central e zoom
	var marker = L.icon({
		iconUrl: 'dist/img/marker.png', // Designacao da imagem do marcador
		shadowUrl: 'dist/img/marker__shadow.png', // Designacao da imagem da sombra do marcador

		iconSize: [36, 46], // Tamanho do icone
		shadowSize: [36, 9], // Tamanho da somba
		iconAnchor: [18, 46], // Ponto de origem do marcador
		shadowAnchor: [18, 5], // Ponto de origem da sombra
		popupAnchor: [1, -32] // Ponto de origem relativo do popup
	});

	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { // Designacao do tile
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(mymap);
	L.marker([-22.912161949999998, -43.23117510590559], {
			icon: marker
		}).addTo(mymap) // Designacao do popip
		.bindPopup("<b>Olá</b>, eu sou um <a href='http://www.ibge.gov.br' target='_blank'>popup</a>.")
		.openPopup();
	L.marker([-30.0655321, -51.23631893507668], {
			icon: marker
		}).addTo(mymap) // Designacao do tooltip
		.bindTooltip("Olá, eu sou um tooltip.");
	L.circle([-23.60005845, -46.720158347269496], { // Designacao da geometria
			radius: 150000,
			color: '#138500'
		}).addTo(mymap)
		.bindTooltip("Olá, eu sou outro tooltip.");;
</script>

</body>

</html>