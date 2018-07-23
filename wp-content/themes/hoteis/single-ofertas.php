<?php get_header(); 
/*

Template Name: Ofertas Internas

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

<section id='SingleOferta'>
	<div class='container'>
		<main>
			<?php while ( have_posts() ) : the_post();
			$titulo = get_field('titulo');
			$imagem = get_field('imagem');
			$resumo = get_field('resumo');
			$preco = get_field('preco');
			$detalhes = get_field('detalhes');
			$descricao = get_field('descricao');
			$referete = get_field('referente_ao_preco');
			?>

			<span class='spanTitulo'><h2>OFERTAS E PACOTES / </h2><h1><?php echo $titulo ?></h1></span>

			<div class='SingleOferta-Content1'>
				<div class='singleOfertaImg'>
					<img src="<?php echo $imagem ?>">
				</div>
				<div class='singleOfertaDesc'>
					<?php echo $descricao ?>
					<div class='PrecoAcomodacoes'>
						<div>
							<p>Valor:</p>
							<span><h3>R$<?php echo $preco ?></h3><p> /<?php echo $referete ?></p></span>
						</div>
						<a href="#">RESERVE AGORA</a>
					</div>
				</div>
			</div>

			<div class='maisDetalhes'>
				<h2>MAIS DETALHES</h2>
				<?php echo $detalhes ?>
			</div>

		<?php endwhile;?>
	</main>
</div>
</section>


<section id='Ofertas' class='vejaTbm'>
	<div class='container'>
		<main>
			<h2>VEJA TAMBÉM</h2>
					<div class='OfertasHomeContainer'>

			<?php 
			query_posts(array("post_type" => "ofertas",'showposts' => 6, "posts_per_page" => -1, "post_status" => "publish", "orderby" => "relevance","DESC" => "asc", 'paged' => 1));
			if(have_posts()):
				while(have_posts()):
					the_post();
			$titulo = get_field('titulo');
			$imagem = get_field('imagem');
			$resumo = get_field('resumo');
			$preco = get_field('preco');
			$detalhes = get_field('detalhes');
			$descricao = get_field('descricao');
			$referete = get_field('referente_ao_preco');
					?>



						<a href="<?php echo $titulo?>" class='OfertasBox'>
							<div class="OfertasIMG">
								<img src="<?php echo $imagem?>">
							</div>
							<div class="OfertasDesc">
								<h4><?php echo $titulo?></h4>
								<p><?php echo $resumo?></p>
								<span><i>R$</i><h3><?php echo $preco?></h3><i>/<?php echo $referete?></i></span>
							</div>
						</a>


					<?php endwhile; endif; wp_reset_query();?>		
				</div>


			</main>
		</div>
	</section>


	<?php
	get_footer(); ?>
