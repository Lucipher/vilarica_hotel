<?php get_header();
/* Template Name: Template Home */
?>



<?php while (have_posts () ): the_post () ;   

$acomodacoes_inicial = get_field('acomodacoes_inicial');
$ofertas_e_pacotes = get_field('ofertas_e_pacotes');
$noticias_inicial = get_field('noticias_inicial');

?>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="<?php the_field('primeiro_banner'); ?>">

		</div>

		<div class="item">
			<img src="<?php the_field('segundo_banner'); ?>">
		</div>

		<div class="item">
			<img src="<?php the_field('terceiro_banner'); ?>">
		</div>
	</div>

	<!-- Left and right controls -->
	<a class="left carousel-control backControl" href="#myCarousel" data-slide="prev">
		<img src="<?php echo get_bloginfo('template_url') ?>/imagens/back.svg">
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<img src="<?php echo get_bloginfo('template_url') ?>/imagens/next.svg">
	</a>
</div>

<div class='FiltroReserva'>
	<span class='ReservaTitulo'>
		<p>Faça sua</p>
		<h3>Reserva</h3>
	</span>
	<form class='filtroForm'>
<!-- 		<div class='containerDate'>
			<input class="ui-datepicker-input" placeholder="ENTRADA">
		</div> -->
<!-- 		<div class='containerDate container2'>
			<input class="ui-datepicker-input" placeholder="SAIDA">
		</div> -->

		<div class='CalendarioBox'>
			<input type="text" name="entrada" id='Entrada' placeholder="ENTRADA">
			<i class="material-icons">
calendar_today
</i>
		</div>
		<div class='CalendarioBox'>
			<input type="text" name="saida" id='Saida' placeholder="SAÍDA">
			<i class="material-icons">
calendar_today
</i>
		</div>
		<div class="dropp ">
			<div class="dropp-header">
				<span class="dropp-header__title js-value-quartos">QUARTOS</span>
				<a href="#" class="dropp-header__btn js-dropp-action"><i class="icon"></i></a>
			</div>

			<div class="dropp-body">
				<label for="1Quarto">1 QUARTO<input type="radio" id="1Quarto" name="qtdquartos" value="1 QUARTO"/></label>
				<label for="2Quarto">2 QUARTO<input type="radio" id="2Quarto" name="qtdquartos" value="2 QUARTOS"/></label>
				<label for="3Quarto">3 QUARTO<input type="radio" id="3Quarto" name="qtdquartos" value="3  QUARTOS"/></label>
				<label for="4Quarto">4 QUARTO<input type="radio" id="4Quarto" name="qtdquartos" value="4 QUARTOS"/></label>
			</div>
		</div>	
		<div class="dropp droppAdulto">
			<div class="dropp-header">
				<span class="dropp-header__title js-value-adultos">ADULTOS</span>
				<a href="#" class="dropp-header__btn js-dropp-action"><i class="icon"></i></a>
			</div>

			<div class="dropp-body">
				<label for="1Adulto">1 ADULTO<input type="radio" id="1Adulto" name="qtdadultos" value="1 ADULTO"/></label>
				<label for="2Adultos">2 ADULTOS<input type="radio" id="2Adultos" name="qtdadultos" value="2 ADULTOS"/></label>
				<label for="3Adultos">3 ADULTOS<input type="radio" id="3Adultos" name="qtdadultos" value="3 ADULTOS"/></label>
				<label for="4Adultos">4 ADULTOS<input type="radio" id="4Adultos" name="qtdadultos" value="4 ADULTOS"/></label>
			</div>
		</div>	
		<div class="dropp dropCriancas">
			<div class="dropp-header">
				<span class="dropp-header__title js-value-criancas">CRIANÇAS</span>
				<a href="#" class="dropp-header__btn js-dropp-action"><i class="icon"></i></a>
			</div>

			<div class="dropp-body">
				<label for="1Crianca">1 CRIANÇA<input type="radio" id="1Crianca" name="qtdCriancas" value="1 CRIANÇA"/></label>
				<label for="2Criancas">2 CRIANÇAS<input type="radio" id="2Criancas" name="qtdCriancas" value="2 CRIANÇAS"/></label>
				<label for="3Criancas">3 CRIANÇAS<input type="radio" id="3Criancas" name="qtdCriancas" value="3 CRIANÇAS"/></label>
				<label for="4Criancas">4 CRIANÇAS<input type="radio" id="4Criancas" name="qtdCriancas" value="4 CRIANÇAS"/></label>
			</div>
		</div>	
		<button type="Submit" class='btnReservar'>RESERVAR</button>
		<a href="#" class='btnChat'><i class="material-icons">
chat
</i>CHAT ONLINE</a>
	</form>
</div>


<section id='AcomodacoesHome'>
	<div class='container'>
		<main>
			<h2><?php echo the_field('titulo_da_sessao_acomodacoes'); ?></h2>
			<h5><?php echo the_field('descricao_da_sessao_acomodacoes'); ?></h5>
			<div class='AcomodacoesContainer'>
				
				<?php                  
				for($w = 0; $w < count($acomodacoes_inicial); $w++){
					$titulo_acomodacao = $acomodacoes_inicial[$w]['titulo_da_acomodacao'];
					$link_acomodacao = $acomodacoes_inicial[$w]['link_acomodacoes'];
					$imagem_acomodacao = $acomodacoes_inicial[$w]['imagem_da_acomodacao'];
					$valor_acomodacao = $acomodacoes_inicial[$w]['valor_da_acomodacao'];

					?>  
					<a href="<?php echo $link_acomodacao?>" class='AcomodacoesBox'>
						<div class='AcomodacoesIMG'>
							<img src="<?php echo $imagem_acomodacao?>">
						</div>
						<div class='AcomodacoesDesc'>
							<h4><?php echo $titulo_acomodacao?></h4>
							<p>Apartir de</p>
							<span><h3><?php echo'R$'.$valor_acomodacao?></h3><p> /diária + taxa</p></span>
							<i>VER DETALHES</i>
						</div>
					</a>

					<?php
				} ?>


			</div>
		</main>
	</div>
</section>

<section id='Ofertas'>
	<div class='container'>
		<main>
			<h2><?php echo the_field('titulo_da_sessao_de_ofertas'); ?></h2>
			<h5><?php echo the_field('descricao_da_sessao_de_ofertas'); ?></h5>

			<div class='OfertasHomeContainer'>
				<?php                  
				for($w = 0; $w < count($ofertas_e_pacotes); $w++){
					$oferta_imagem = $ofertas_e_pacotes[$w]['oferta_imagem'];
					$oferta_titulo = $ofertas_e_pacotes[$w]['oferta_titulo'];
					$oferta_descricao = $ofertas_e_pacotes[$w]['oferta_descricao'];
					$oferta_valor = $ofertas_e_pacotes[$w]['oferta_valor'];
					$sufixo_oferta = $ofertas_e_pacotes[$w]['sufixo_oferta'];
					$link_da_oferta = $ofertas_e_pacotes[$w]['link_da_oferta'];

				?>  

				<a href="<?php echo $link_da_oferta?>" class='OfertasBox'>
					<div class="OfertasIMG">
						<img src="<?php echo $oferta_imagem?>">
					</div>
					<div class="OfertasDesc">
						<h4><?php echo $oferta_titulo?></h4>
						<p><?php echo $oferta_descricao?></p>
						<span><i>R$</i><h3><?php echo $oferta_valor?></h3><i>/<?php echo $sufixo_oferta?></i></span>
					</div>
				</a>
				<?php

			}
				?>				
				<a href="#" class='btnVerMais'>VER MAIS PACOTES E PROMOÇÕES</a>
			</div>
		</main>
	</div>
</section>

<section id='NoticiasHome'>
	<div class='container'>
		<main>
			<h2>NOTÍCIAS</h2>
			<h5>FIQUE POR DENTRO DAS NOVIDADES</h5>

			<div class='noticiasContainer'>
				<?php                  
				for($w = 0; $w < count($noticias_inicial); $w++){
					$imagem_da_noticia = $noticias_inicial[$w]['imagem_da_noticia'];
					$hashtag = $noticias_inicial[$w]['hashtag'];
					$titulo_da_noticia = $noticias_inicial[$w]['titulo_da_noticia'];
					$descricao_da_noticia = $noticias_inicial[$w]['descricao_da_noticia'];
					$link_da_noticia = $noticias_inicial[$w]['link_da_noticia'];
					$data_de_publicacao = $noticias_inicial[$w]['data_de_publicacao'];

				?>  

				<div class='noticiasBox'><i><?php echo $data_de_publicacao?></i>
					<div class='noticiasIMG'>
						<img src="<?php echo $imagem_da_noticia?>">
					</div>
					<div class='noticiasDESC'>
						<h4>#<?php echo $hashtag?></h4>
						<h3><?php echo $titulo_da_noticia?></h3>
						<p><?php echo $descricao_da_noticia?>...</p>
						<a href="<?php echo $link_da_noticia?>">Continuar lendo</a>
					</div>
				</div>

				<?php
				}
				?>
			</div>
			<a href="#" class='btnVerMaisNoticias'>VER MAIS NOTÍCIAS</a>
		</main>
	</div>
</section>

<?php endwhile;  wp_reset_query();?>
<?php get_footer(); ?>



</script>
