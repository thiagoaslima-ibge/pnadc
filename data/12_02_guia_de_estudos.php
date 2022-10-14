<?php
	$moduleTitle = "Outras formas de trabalho"; //TITULO DA UNIDADE
	$topicTitle = "Abertura"; //TITULO DO TOPICO
	$pageTitle = "Guia de estudos"; //TITULO DA PAGINA	
	$pageSubtitle = "Seja bem-vindo à Unidade 12 do Treinamento da Pesquisa Nacional por Amostra de Domicílios Contínua – PNAD Contínua. Nesta unidade vamos estudar os quesitos sobre os rendimentos de outras fontes"; //SUBTITULO DA PAGINA	
	include "head.php";
?>

<main class="page-content okgo">

	<header class="page-header col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<?php				
			echo "<p class='page-header__topic-title'><span class='page-header__topic-tag-style'>$topicTitle</span></p>";
			echo "<h1 class='page-header__page-title'>$pageTitle</h1>";
			if ($pageSubtitle != '') {
				echo "<p class='lead'>$pageSubtitle</p>";
			}
		?>
	</header>

	<div class="row">
		<!-- <CONTEUDO -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="no-top-margin">Objetivos</h2>
			<p>Você vai precisar de aproximadamente <strong>2 horas</strong> para concluir o estudo da Unidade 12, atingindo os seguintes objetivos:</p>
      <ul class="bulleted-list">
        <li>Identificar os quesitos do questionário relativos às outras formas de trabalho; </li>
        <li>Refletir sobre o trabalho não remunerado e a sua importância para entender as relações sociais e a dinâmica de funcionamento da sociedade contemporânea.</li>
      </ul>
		</div>
		<!-- /CONTEUDO> -->
	</div>

</main>

<?php include "foot.php"; ?>

</body></html>