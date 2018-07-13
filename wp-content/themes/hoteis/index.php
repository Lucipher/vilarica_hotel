<?php get_header();
/* Template Name: Template Home */
?>



<?php while (have_posts () ): the_post () ;   

$acomodacoes_inicial = get_field('acomodacoes_inicial');

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
	<span>
		<p>Faça sua</p>
		<h3>Reserva</h3>
	</span>
	<form class='filtroForm'>
		<div class='containerDate'>
			<input class="ui-datepicker-input" placeholder="ENTRADA">
		</div>
		<div class='containerDate container2'>
			<input class="ui-datepicker-input" placeholder="SAIDA">
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
	</form>
</div>


<section id='AcomodacoesHome'>
	<div class='container'>
		<main>
			<h2>ACOMODAÇÕES</h2>
			<h5>HOSPEGADEM COM PREÇOS PROMOCIONAIS</h5>
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
			<h2>OFERTAS E PACOTES</h2>
			<h5>OFERTAS EM DESTAQUE</h5>

			<div class='OfertasHomeContainer'>
				<a href="#" class='OfertasBox'>
					<div class="OfertasIMG">
						
					</div>
					<div class="OfertasDesc">
						<h4>Evento em recife</h4>
						<p>3 dias e 2 noites</p>
						<span><i>R$</i><h3>145</h3><i>/diária</i></span>
					</div>
				</a>
				<a href="#" class='OfertasBox'>
					<div class="OfertasIMG">
						
					</div>
					<div class="OfertasDesc">
						<h4>Evento em recife</h4>
						<p>3 dias e 2 noites</p>
						<span><i>R$</i><h3>145</h3><i>/diária</i></span>
					</div>
				</a>
				<a href="#" class='OfertasBox'>
					<div class="OfertasIMG">
						
					</div>
					<div class="OfertasDesc">
						<h4>Evento em recife</h4>
						<p>3 dias e 2 noites</p>
						<span><i>R$</i><h3>145</h3><i>/diária</i></span>
					</div>
				</a>
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
				<div class='noticiasBox'><i>29/10/2018</i>
					<div class='noticiasIMG'>
						
					</div>
					<div class='noticiasDESC'>
						<h>#ConheçaRecife</h>
						<h3>Parque 13 de Maio</h3>
						<p>Assim como os primeiros parques públicos do Brasil, o Parque 13 de Maio também possui inflências europeias, que têm como modelos parques...</p>
						<a href="#">Continuar lendo</a>
					</div>
				</div>
				<div class='noticiasBox'>
					<i>29/10/2018</i>
					<div class='noticiasIMG'>
						
					</div>
					<div class='noticiasDESC'>
						<h>#ConheçaRecife</h>
						<h3>Parque 13 de Maio</h3>
						<p>Assim como os primeiros parques públicos do Brasil, o Parque 13 de Maio também possui inflências europeias, que têm como modelos parques...</p>
						<a href="#">Continuar lendo</a>
					</div>
				</div>
				<div class='noticiasBox'>
					<i>29/10/2018</i>
					<div class='noticiasIMG'>
						
					</div>
					<div class='noticiasDESC'>
						<h>#ConheçaRecife</h>
						<h3>Parque 13 de Maio</h3>
						<p>Assim como os primeiros parques públicos do Brasil, o Parque 13 de Maio também possui inflências europeias, que têm como modelos parques...</p>
						<a href="#">Continuar lendo</a>
					</div>
				</div>
			</div>
			<a href="#" class='btnVerMaisNoticias'>VER MAIS NOTÍCIAS</a>
		</main>
	</div>
</section>

<?php endwhile;  wp_reset_query();?>
<?php get_footer(); ?>



</script>
