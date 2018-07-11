<?php get_header();
/* Template Name: Template Home */
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
		<div class="dropp">
			<div class="dropp-header">
				<span class="dropp-header__title js-value">QUARTOS</span>
				<a href="#" class="dropp-header__btn js-dropp-action"><i class="icon"></i></a>
			</div>

			<div class="dropp-body">
				<label for="1Quarto">1 QUARTO<input type="radio" id="1Quarto" name="qtdquartos" value="1 Quarto"/></label>
				<label for="2Quarto">2 QUARTO<input type="radio" id="2Quarto" name="qtdquartos" value="2 Quartos"/></label>
				<label for="3Quarto">3 QUARTO<input type="radio" id="3Quarto" name="qtdquartos" value="3  Quartos"/></label>
				<label for="4Quarto">4 QUARTO<input type="radio" id="4Quarto" name="qtdquartos" value="4 Quartos"/></label>
			</div>
		</div>	
	</form>
</div>



<?php get_footer(); ?>



</script>
