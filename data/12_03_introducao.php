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

			<ul>
				<li>
					Mulheres dedicam a afazeres domésticos o dobro de horas dos homens
					Agência Brasil, 26/04/2019
				</li>
				<li>
					IBGE: 10 milhões de brasileiros cultivam e pescam para próprio consumo
					Valor econômico, 04/06/2020
				</li>
				<li>
					País tem 7,2 milhões de pessoas que fazem trabalho voluntário
					Agência IBGE Notícias, 26/04/2019
				</li>
				<li>
					Segundo o IBGE, cresce número de familiares que cuidam de idosos no Brasil
					Tudorondonia.com, 07/06/2020
				</li>
			</ul>

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