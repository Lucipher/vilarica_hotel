<?php get_header();
/* Template Name: Template Localização */
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


<section id='Localizacao'>
	<div class='container'>
		<main>
			<h2>Localização</h2>

			<p>Com uma localização privilegiada na Praia de Boa viagem, o Vila Rica Hotel está próxima dos principais pontos de visitação em Recife:</p>

			<div class='LocalizacaoIcons'>
				<div>
					<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/doctor.png">
					<p>Pólo médico</p>
				</div>
				<div>
					<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/weight-balance.png">
					<p>Pólo Judiciário</p>
				</div>
				<div>
					<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/plate-fork-and-knife.png">
					<p>Pólo<br>gastronômico</p>
				</div>
				<div>
					<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/airplane-shape.png">
					<p>Aeroporto<br>3,8 km</p>
				</div>
				<div>
					<img src="<?php echo get_bloginfo('template_url') ?>/imagens/marca.svg" id='shoppingRecifeMarca'>
					<p>Shopping<br>Recife<br>3,3 km</p>
				</div>
				<div>
					<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/riomar.png" id='RioMar'>
					<p>Shopping<br>Rio Mar<br>6,8 km</p>
				</div>
				<div>
					<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/tent.png">
					<p>Centro de <br> convenções<br> 15,5 km</p>
				</div>
				<div>
					<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/japanese-bridge.png">
					<p>Recife Antigo <br> 11,1 km</p>
				</div>
				<div>
					<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/church.png">
					<p>Olinda <br> 20,7 km</p>
				</div>
				<div>
					<img src="<?php echo get_bloginfo('template_url') ?>/imagens/icons/sun-umbrella.png">
					<p>Praias litroal<br> sul e norte<br> 50/55 km </p>
				</div>


			</div>
		</main>
	</div>	
</section>

<section>
	<div class='FiltroEndereco'>
		<input type="text" name="" placeholder="Digite o endereço"> <button>TRAÇAR ROTA</button>
	</div>
	<div class='MapaContainer'>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52922.95244648698!2d-117.85048513926431!3d34.00063603854257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c32c8e42f729a9%3A0xea88c028d17dd7a9!2sDiamond+Bar%2C+CA%2C+EUA!5e0!3m2!1spt-BR!2sbr!4v1532105842212" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</section>


<?php get_footer(); ?>


