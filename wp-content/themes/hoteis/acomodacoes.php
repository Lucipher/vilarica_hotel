<?php get_header();
/* Template Name: Template Acomodações */
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
				<div class='acomodacoesBox'>
					<div class='acomodacoesIMG'>
						<img src="<?php echo get_bloginfo('template_url') ?>/imagens/home/fotohotel.png">
					</div>
					<div class='acomodacoesDesc'>
						<h2>STANDARD</h2>
						<h4>Sua hospedagem com um jeito charmoso e acolhedor, o apartamento stadard acomoda até duas pessoas confortavelemente.</h4>
						<h4>Equipado com duas camas de solteiro ou uma cama casal</h4>

						<div class='acomodacoesSkills'>
							<div>
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/snowflake.png">
								</span>
								<p>Ar Condicionado</p>
							</div>
							<div>
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/wifi.png">
								</span>
								<p>Internet</p>
							</div>
							<div>
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/safe-box.png">
								</span>
								<p>Cofre</p>
							</div>
							<div>
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/kids-couple.png">
								</span>
								<p>Crianças</p>
							</div>
							<div>
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/office-telephone.png">
								</span>
								<p>Telefone</p>
							</div>
							<div>
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/minibar.png">
								</span>
								<p>Frigobar</p>
							</div>
							<div>
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/monitor.png">
								</span>
								<p>Tv à cabo</p>
							</div>
						</div>

						<div class='PrecoAcomodacoes'>
							<div>
								<p>A partir de</p>
								<span><h3>R$212</h3><p> /diária + taxas</p></span>
							</div>
							<a href="#">RESERVE AGORA</a>
						</div>
					</div>
				</div>
								<div class='acomodacoesBox'>
					<div class='acomodacoesIMG'>
						<img src="<?php echo get_bloginfo('template_url') ?>/imagens/home/fotohotel.png">
					</div>
					<div class='acomodacoesDesc'>
						<h2>STANDARD</h2>
						<h4>Sua hospedagem com um jeito charmoso e acolhedor, o apartamento stadard acomoda até duas pessoas confortavelemente.</h4>
						<h4>Equipado com duas camas de solteiro ou uma cama casal</h4>

						<div class='acomodacoesSkills'>
							<div>
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/snowflake.png">
								</span>
								<p>Ar Condicionado</p>
							</div>
							<div>
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/wifi.png">
								</span>
								<p>Internet</p>
							</div>
							<div>
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/safe-box.png">
								</span>
								<p>Cofre</p>
							</div>
							<div>
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/kids-couple.png">
								</span>
								<p>Crianças</p>
							</div>
							<div>
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/office-telephone.png">
								</span>
								<p>Telefone</p>
							</div>
							<div>
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/minibar.png">
								</span>
								<p>Frigobar</p>
							</div>
							<div>
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/monitor.png">
								</span>
								<p>Tv à cabo</p>
							</div>
						</div>

						<div class='PrecoAcomodacoes'>
							<div>
								<p>A partir de</p>
								<span><h3>R$212</h3><p> /diária + taxas</p></span>
							</div>
							<a href="#">RESERVE AGORA</a>
						</div>
					</div>
				</div>	
								<div class='acomodacoesBox'>
					<div class='acomodacoesIMG'>
						<img src="<?php echo get_bloginfo('template_url') ?>/imagens/home/fotohotel.png">
					</div>
					<div class='acomodacoesDesc'>
						<h2>STANDARD</h2>
						<h4>Sua hospedagem com um jeito charmoso e acolhedor, o apartamento stadard acomoda até duas pessoas confortavelemente.</h4>
						<h4>Equipado com duas camas de solteiro ou uma cama casal</h4>

						<div class='acomodacoesSkills'>
							<div>
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/snowflake.png">
								</span>
								<p>Ar Condicionado</p>
							</div>
							<div>
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/wifi.png">
								</span>
								<p>Internet</p>
							</div>
							<div>
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/safe-box.png">
								</span>
								<p>Cofre</p>
							</div>
							<div>
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/kids-couple.png">
								</span>
								<p>Crianças</p>
							</div>
							<div>
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/office-telephone.png">
								</span>
								<p>Telefone</p>
							</div>
							<div>
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/minibar.png">
								</span>
								<p>Frigobar</p>
							</div>
							<div>
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/monitor.png">
								</span>
								<p>Tv à cabo</p>
							</div>
						</div>

						<div class='PrecoAcomodacoes'>
							<div>
								<p>A partir de</p>
								<span><h3>R$212</h3><p> /diária + taxas</p></span>
							</div>
							<a href="#">RESERVE AGORA</a>
						</div>
					</div>
				</div>		
			</div>

		</main>
	</div>
</section>

<section id='Info'>
	<div class='container'>
		<main>
			<h2>INFORMAÇÕES ADICIONAIS</h2>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</main>
	</div>
</section>

<?php get_footer(); ?>


