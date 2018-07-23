<?php get_header();
/* Template Name: Template Acomodações */
?>
<?php while (have_posts () ): the_post () ;   

$acomodacoes = get_field('acomodacoes');
$informacos_adicionais = get_field('informacos_adicionais');
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

<section id='Acomodacoes'>
	<div class='container'>
		<main>
			<h2>Acomodações</h2>

			<div class='acomodacoesContainer'>

				<?php                  
				for($w = 0; $w < count($acomodacoes); $w++){
					$titulo = $acomodacoes[$w]['titulo'];
					$descricao = $acomodacoes[$w]['descricao'];
					$preco = $acomodacoes[$w]['preco'];
					$referente = $acomodacoes[$w]['referente'];
					$imagens = $acomodacoes[$w]['imagens'];
					$imagemDestaque = $imagens[0]['imagens_dentro'];
					$adicionais = $acomodacoes[$w]['adicionais'];
					?>
					<div class='acomodacoesBox'>
						<div class='acomodacoesIMG acomodacoesIMGList'>

								<?php for($i = 0; $i < count($imagens); $i++){

									$imagem = $imagens[$i]['imagens_dentro'];

									?>
										<img src="<?php echo $imagem ?>">
									<?php
								}
								?>

						</div>
						<div class='acomodacoesDesc'>
							<h2><?php echo $titulo;?></h2>
							<h4><?php echo $descricao;?></h4>

							<div class='acomodacoesSkills'>
								<?php for($a = 0; $a < count($adicionais); $a++){

									$icone = $adicionais[$a]['icone'];
									$nome = $adicionais[$a]['nome'];

									?>


									<div>
										<span>
											<img src="<?php echo $icone ?>">
										</span>
										<p><?php echo $nome ?></p>
									</div>


									<?php
								}?>
							</div>  


							<div class='PrecoAcomodacoes'>
								<div>
									<p>A partir de</p>
									<span><h3>R$<?php echo $preco ?></h3><p> /<?php echo $referente ?></p></span>
								</div>
								<a href="#">RESERVE AGORA</a>
							</div>
						</div>
					</div>
					<?php
				}
				?>
			</div>

		</main>
	</div>
</section>

<section id='Info'>
	<div class='container'>
		<main>
			<h2>INFORMAÇÕES ADICIONAIS</h2>

			<p><?php echo $informacos_adicionais ?></p>
		</main>
	</div>
</section>
<?php endwhile;  wp_reset_query();?>
<?php get_footer(); ?>
