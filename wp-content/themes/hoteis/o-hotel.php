<?php get_header();
/* Template Name: Template O Hotel */
?>
<?php while (have_posts () ): the_post () ;   

$bannesr_carrossel = get_field('bannesr_carrossel');
$titulo_da_pagina = get_field('titulo_da_pagina');
$texto_de_descricao = get_field('texto_de_descricao');
$servicos_oferecidos = get_field('servicos_oferecidos');
$banner_destaque = get_field('banner_destaque');

?>

<div class='FiltroReserva FiltroReserva-Interna'>
	<span class='ReservaTitulo'>
		<p>Faça sua</p>
		<h3>Reserva</h3>
	</span>
	<form class='filtroForm'>

		<div class='CalendarioBox'>
			<input type="text" name="entrada" id='Entrada' placeholder="ENTRADA">
			<i class="material-icons">calendar_today</i>
		</div>
		<div class='CalendarioBox'>
			<input type="text" name="saida" id='Saida' placeholder="SAÍDA">
			<i class="material-icons">calendar_today</i>
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
		<a href="#" class='btnChat'><i class="material-icons">chat</i>CHAT ONLINE</a>
	</form>
</div>

<section id='OHotel'>
	<div class='container'>
		<main>
			<h2><?php echo $titulo_da_pagina ?></h2>

			<div id="myCarousel" class="carousel slide carouselHotel" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="<?php echo $banner_destaque ?>" title="" alt="">
					</div>
					<?php                  
					for($w = 0; $w < count($bannesr_carrossel); $w++){
						$imagem = $bannesr_carrossel[$w]['imagem'];
						$titulo_da_imagem = $bannesr_carrossel[$w]['titulo_da_imagem'];
						?>  
						<div class="item">
							<img src="<?php echo $imagem ?>" title="<?php echo $titulo_da_imagem ?>" alt="<?php echo $titulo_da_imagem ?>">
						</div>
						<?php
					}
					?>
				</div>
			</div>

			<div class='OHotel-Contexto'>
				<p><?php echo $texto_de_descricao ?></p>
			</div>

		</main>
	</div>
</section>

<section id='NossosServicos'>
	<div class='container'>
		<main>
			<h2>NOSSOS SERVIÇOS</h2>

			<span>
				<h3>RESTAURANTE</h3>
				<p>O Restaurante Ganzá oferece pratos internacionais e regionais, além de delicosos sucos naturais e sobremesas para todos os gostos. Tudo num ambiente aconchegante e confortável</p>
			</span>
			<span>
				<h3>RESTAURANTE</h3>
				<p>O Restaurante Ganzá oferece pratos internacionais e regionais, além de delicosos sucos naturais e sobremesas para todos os gostos. Tudo num ambiente aconchegante e confortável</p>
			</span>

			<a href="#">VER FICHA TÉCNICA DO HOTEL</a>
		</main>
	</div>
</section>
<?php endwhile;  wp_reset_query();?>


<?php get_footer(); ?>


