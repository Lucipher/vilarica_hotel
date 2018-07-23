<?php get_header(); 
/*
Template Name: Template Home
*/  
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

<section id='SingleNoticia'>
	<div class='container'>
		<main>
			
			<?php

			

			if(have_posts()):
				while(have_posts()):
					the_post();
					$titulo_da_noticia = get_field('titulo_da_noticia');
					$corpo_da_noticia = get_field('corpo_da_noticia');
					$imagem_da_noticia = get_field('imagem_da_noticia');
					$data_de_publicacao = get_field('data_de_publicacao');


					?>




					<span><h2>NOTÍCIAS / </h2><h1><?php echo $titulo_da_noticia ?></h1></span>

					<div class='NoticiaSingleContainer'>
						<div class='NoticiaSingleDesc'>
							<p><?php echo $corpo_da_noticia ?></p>
						</div>
						<div class='NoticiaSingleFoto'>
							<p class='dateSingle'><?php echo $data_de_publicacao ?></p>
							<div>
								<img src="<?php echo $imagem_da_noticia ?>">
							</div>

							<p>Compartilhe:</p>




						</div>
					</div>



				<?php endwhile;
			endif;
			wp_reset_query();
			?>
		</main>
	</div>
</section>





<section id='Ofertas' class='vejaTbm'>
	<div class='container'>
		<main>
			<h2>VEJA TAMBÉM</h2><br>

			<div class='noticiasContainer'>
				<?php
				$categoria = get_the_category($post_object->ID);
				$nomeCategoria = $categoria[0]->cat_name;
				

				$post_objects = get_field('veja_tambem');
				if( $post_objects ): ?>
				<?php foreach( $post_objects as $post_object):

				$thumb_id = get_post_thumbnail_id($post_object->ID);
				$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);

				?>

				<div class='noticiasBox'><i><?php echo $post_object->post_date; ?></i>
					<div class='noticiasIMG'>
						<img src="<?php echo $thumb_url[0] ?>">
					</div>
					<div class='noticiasDESC'>
						<h4>#<?php echo $nomeCategoria;  ?></h4>
						<h3><?php echo $post_object->post_title; ?></h3>
						<p><?php echo $post_object->post_excerpt; ?>...</p>
						<a href="<?php echo $post_object->guid; ?>">Continuar lendo</a>
					</div>
				</div>

<!-- 					<li>
						<a href=""><?php echo get_the_title($post_object->ID); ?></a>
						<span><?php the_field('field_name', $post_object->ID); ?></span>
					</li> -->



				<?php endforeach; ?>
			<?php endif;

			?>




		</div>
	</main>
</div>
</section>


<?php get_footer(); ?>
