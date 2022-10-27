<?php
$moduleTitle = "Outras formas de trabalho"; //TITULO DA UNIDADE
$topicTitle = ""; //TITULO DO TOPICO
$pageTitle = "Introdução"; //TITULO DA PAGINA	
$pageSubtitle = "Outras formas de trabalho é a expressão que o IBGE confere às atividades como a produção e construção para consumo próprio, o trabalho voluntário, o cuidado de pessoas e os afazeres domésticos, as quais, mesmo sem remuneração, são essenciais para retratar o país."; //SUBTITULO DA PAGINA	
include "head.php";
?>

<style>
	.table__cell-x {
		text-align: center;
		vertical-align: middle;
		font-size: 2rem;
		line-height: 1;
	}

	.table .table__header-multiline:hover th {
		background-color: #87dc00;
		border-bottom-color: #138500;
	}

	.photo-mosaic__img-caption {
		cursor: pointer;
		display: flex;
    place-items: center;
    justify-content: center;
	}
	.photo-mosaic__img-caption > p {
		max-width: 50ch;
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

	<div class="row">

		<!-- Conteudo da pagina [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Observe as reportagens a seguir:</p>
		</div>

		<!-- Mosaico [inicio] -->
		<ul class="row photo-mosaic">
			<li class="col-xs-12 col-md-12">
				<figure class="photo-mosaic__img-container">
					<picture>
						<img class="image" style="aspect-ratio: 720 / 415" src="dist/img/un12-agencia-brasil.png" alt="">
					</picture>
					<figcaption class="photo-mosaic__img-caption">
						<p>
							Mulheres dedicam a afazeres domésticos o dobro de horas dos homens.
							<a href="https://agenciabrasil.ebc.com.br/geral/noticia/2019-04/mulher-dedica-o-dobro-de-horas-para-afazeres-domesticos-que-o-homem">Agência Brasil</a>, 26/04/2019
						</p>
					</figcaption>
				</figure>
			</li>
			<li class="col-xs-12 col-md-12">
				<figure class="photo-mosaic__img-container">
					<picture>
						<a class="block" href="https://www.agazeta.com.br/es/economia/201-mil-profissionais-no-es-trabalham-para-o-consumo-proprio-0620">
							<img class="image" style="aspect-ratio: 720 / 415" src="dist/img/un12-gazeta.png" alt="">
						</a>
					</picture>
					<figcaption class="photo-mosaic__img-caption">
						<p>
							201 mil profissionais no ES trabalham para o consumo próprio.  
							<a href="https://www.agazeta.com.br/es/economia/201-mil-profissionais-no-es-trabalham-para-o-consumo-proprio-0620">Valor econômico</a>, 04/06/2020
						</p>
					</figcaption>
				</figure>
			</li>
			<li class="col-xs-12 col-md-12">
				<figure class="photo-mosaic__img-container">
					<picture>
						<img class="image" style="aspect-ratio: 720 / 415" src="dist/img/un12-agencia-ibge-noticias.png" alt="">
					</picture>
					<figcaption class="photo-mosaic__img-caption">
						<p>
							País tem 7,2 milhões de pessoas que fazem trabalho voluntário.
							<a href="https://agenciadenoticias.ibge.gov.br/agencia-noticias/2012-agencia-de-noticias/noticias/24268-pais-tem-7-2-milhoes-de-pessoas-que-fazem-trabalho-voluntario">Agência IBGE Notícias</a>, 26/04/2019
						</p>
					</figcaption>
				</figure>
			</li>
			<li class="col-xs-12 col-md-12">
				<figure class="photo-mosaic__img-container">
					<picture>
						<img class="image" style="aspect-ratio: 720 / 415" src="dist/img/un12-tudorondonia.png" alt="">
					</picture>
					<figcaption class="photo-mosaic__img-caption">
						<p>
							Segundo o IBGE, cresce número de familiares que cuidam de idosos no Brasil.
							<a href="https://www.tudorondonia.com/noticias/segundo-o-ibge-cresce-numero-de-familiares-que-cuidam-de-idosos-no-brasil,50473.shtml">Tudorondonia.com, 07/06/2020</a>
						</p>
					</figcaption>
				</figure>
			</li>
		</ul>
		<!-- Mosaico [fim] -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>O que estas reportagens possuem em comum, além de terem sido elaboradas com base em dados da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua, é o fato de abordarem o chamado “trabalho invisível”, aquele que não é remunerado, que não se precifica nem conta como ocupação, mas é de extrema importância para entender as relações sociais bem como o impacto da demografia, da economia e das políticas públicas na dinâmica de funcionamento da sociedade. É o que chamamos, no IBGE de <strong>Outras formas de trabalho</strong>.

				<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>As outras formas de trabalho abrangem os afazeres domésticos, cuidado de pessoas, trabalho voluntário e produção para consumo próprio.</q>
			</aside>
			<!-- Realce [fim] -->

			<p>A investigação do tema, na <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua, segue as diretrizes da 19ª Conferência Internacional de Estatísticas do Trabalho – CIET, incluindo essas novas formas de trabalho na pesquisa, bem como as definições de trabalho voluntário da Organização Internacional do Trabalho – OIT.</p>
			<p>Nas unidades anteriores destacamos que o entrevistador da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua realiza entrevistas em cinco ocasiões diferentes, no mesmo domicílio. O domicílio é pesquisado em um determinado mês e sai da amostra por dois meses seguidos, sendo esta sequência repetida cinco vezes. Assim, antes de adentrarmos no tema, reapresentamos o quadro a seguir, que sintetiza os temas pesquisados na <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua, durante as cinco visitas:</p>

			<!-- Quadro [inicio] -->
			<div class="table-container">
				<table class="table table--text-table">
					<caption class="table__title"><abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua: Temas e tópicos pesquisados ao longo do ano </caption>
					<thead class="table__header-multiline">
						<tr>
							<th scope="col" rowspan="2" style="vertical-align: middle;">Tema Pesquisado</th>
							<th scope="col" colspan="5" style="text-align: center">visitas</th>
						</tr>
						<tr>
							<th scope="col">1ª</th>
							<th scope="col">2ª</th>
							<th scope="col">3ª</th>
							<th scope="col">4ª</th>
							<th scope="col">5ª</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">Habitação (núcleo básico) </th>
							<td class="table__cell-x">&times;</td>
							<td class="table__cell-x">&times;</td>
							<td class="table__cell-x">&times;</td>
							<td class="table__cell-x">&times;</td>
							<td class="table__cell-x">&times;</td>
						</tr>
						<tr>
							<th scope="row">Habitação (perguntas adicionais)</th>
							<td class="table__cell-x">&times;</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Características gerais dos moradores (núcleo básico)</th>
							<td class="table__cell-x">&times;</td>
							<td class="table__cell-x">&times;</td>
							<td class="table__cell-x">&times;</td>
							<td class="table__cell-x">&times;</td>
							<td class="table__cell-x">&times;</td>
						</tr>
						<tr>
							<th scope="row">Educação (núcleo básico)</th>
							<td class="table__cell-x">&times;</td>
							<td class="table__cell-x">&times;</td>
							<td class="table__cell-x">&times;</td>
							<td class="table__cell-x">&times;</td>
							<td class="table__cell-x">&times;</td>
						</tr>
						<tr>
							<th scope="row">Trabalho (núcleo básico)</th>
							<td class="table__cell-x">&times;</td>
							<td class="table__cell-x">&times;</td>
							<td class="table__cell-x">&times;</td>
							<td class="table__cell-x">&times;</td>
							<td class="table__cell-x">&times;</td>
						</tr>
						<tr>
							<th scope="row">Trabalho (perguntas adicionais) </th>
							<td class="table__cell-x">&times;</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Rendimentos de programas sociais e de outras fontes.</th>
							<td class="table__cell-x">&times;</td>
							<td></td>
							<td></td>
							<td></td>
							<td class="table__cell-x">&times;</td>
						</tr>
						<tr>
							<th scope="row">Outras formas de trabalho</th>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="table__cell-x">&times;</td>
						</tr>
					</tbody>
				</table>
				<p><small><strong>Fonte:</strong> Coordenação de Trabalho e Rendimento, DPE, 2022.</small></p>
			</div>
			<!-- Quadro [fim] -->

			<p>Pelo exposto no quadro acima, observa-se que o tema tratado nesta unidade será alvo de investigação apenas na <strong>quinta entrevista</strong>.</p>
			<p>Destaca-se que o núcleo básico está presente em todas as entrevistas da <abbr title="Pesquisa Nacional por Amostra de Domicílios" class="small-caps">PNAD</abbr> Contínua. Já os demais temas, a partir de decisões estratégicas da Diretoria de Pesquisas do IBGE, podem ser suspensos em determinados períodos ou anos. Mas não se preocupe, o DMC vai sempre refletir essas mudanças, habilitando apenas as questões que devem ser efetuadas em cada uma das entrevistas.</p>
		</div>

	</div>

</main>

<?php
include "foot.php";
?>

</body>

</html>