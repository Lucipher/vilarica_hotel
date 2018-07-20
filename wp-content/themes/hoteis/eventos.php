<?php get_header();
/* Template Name: Template Eventos */
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

<section id='Eventos'>
	<div class='container'>
		<main>
			<h2>EVENTOS</h2>

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
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>

			<span>
				<h3>RESTAURANTE</h3>
				<p>O Restaurante Ganzá oferece pratos internacionais e regionais, além de delicosos sucos naturais e sobremesas para todos os gostos. Tudo num ambiente aconchegante e confortável</p>
			</span>
			<span>
				<h3>RESTAURANTE</h3>
				<p>O Restaurante Ganzá oferece pratos internacionais e regionais, além de delicosos sucos naturais e sobremesas para todos os gostos. Tudo num ambiente aconchegante e confortável</p>
			</span>

		</main>
	</div>
</section>

<section id='InfoSaloes'>
	<div class='container'>
		<main>
			<h2>INFORMAÇÕES DOS SALÕES</h2>
					<div id="contentTable">
						<table width="995" border="0" align="center" cellpadding="0" cellspacing="0">
							<tbody>
								<tr class="tabletop toporeal">
									<td id="salao-coluna"><p>Salões</p></td>
							<td><span id="localizacao">Localização</span></td>
									<td colspan="2"><span id="cadeira">Auditório</span></td>
									<td><span id="uicon">"U"</span></td>
									<td><span id="espinhicon">Espinha de<br>Peixe</span></td>
							<td><span id="escolar">Escolar</span></td>
									<td><span id="mesaicon">Mesa<br>Redonda</span></td>
									<td><span id="imperial">Imperial</span></td>
							<td colspan="3"><span id="dimensoes">Dimensões</span></td>
									<td><span id="foto">Fotos<span></span></span></td>
								</tr>
								<tr class="tabletop segdesc" bgcolor="#276b87">
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td >Com Apoio</td>
									<td>Sem Apoio</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Pé dir. <br/>(M)</td>
									<td>Largura <br/>(M)</td>
									<td>Comp. <br/>(M)</td>
							<td>&nbsp;</td>
								</tr>
							
								<tr  class="tableClara tabela-group" >
											<td style="border-left: solid 1px #d5d7db;">
												Maracatu</td>
											<td>
												Piso C</td>
											<td>
												100</td>
											<td>
												140</td>
											<td>
												45</td>
											<td>
												60</td>
							
											<td>
												66</td>
											<td>
												48</td>
											<td>
												38</td>
											<td class="sem-borda">
												<div class="sub-coluna-div">
														2,6</div>
												</td>
												
							        			<td class="sem-borda">
							        				<div class="sub-coluna-div">
														4,45</div>
												</td>
											<td>
												<div>
														18,74</div>
												</td>
											<td>
												
												<a class="group1 foto" href="../imagens/eventos/VRH---Salo-Maracatu-01.jpg"></a>
															<a class="group1 foto" href="../imagens/eventos/VRH---Salo-Maracatu2-01.jpg"></a>
															</td>
										</tr>
										<tr  class="tableEscura tabela-group" >
											<td style="border-left: solid 1px #d5d7db;">
												Ciranda</td>
											<td>
												Piso C</td>
											<td class="sub-coluna">
												70</td>
											<td>
												90</td>
											<td>
												35</td>
											<td>
												36</td>
							
											<td>
												42</td>
											<td>
												36</td>
											<td>
												34</td>
											<td class="sem-borda">
												<div class="sub-coluna-div">
														2,6</div>
												</td>
												
							        			<td class="sem-borda">
							        				<div class="sub-coluna-div">
														4,68</div>
												</td>
											<td>
												<div>
														 15,2</div>
												</td>
											<td>
												
												<a class="group2 foto" href="../imagens/eventos/VRH---Salo-Ciranda-01.jpg"></a>
															</td>
										</tr>
										<tr  class="tableClara tabela-group" >
											<td style="border-left: solid 1px #d5d7db;">
												Frevo</td>
											<td>
												Piso P </td>
											<td class="sub-coluna">
												40</td>
											<td>
												50</td>
											<td>
												27</td>
											<td>
												33</td>
							
											<td>
												33</td>
											<td>
												25</td>
											<td>
												27</td>
											<td class="sem-borda">
												<div class="sub-coluna-div">
														2,3</div>
												</td>
												
							        			<td class="sem-borda">
							        				<div class="sub-coluna-div">
														4,65</div>
												</td>
											<td>
												<div>
														12,48</div>
												</td>
											<td>
												
												<a class="group3 foto" href="../imagens/eventos/VRH---Salo-Frevo-01.jpg"></a>
															</td>
										</tr>
										<tr  class="tableEscura tabela-group" >
											<td style="border-left: solid 1px #d5d7db;">
												Mangue</td>
											<td>
												Piso P</td>
											<td class="sub-coluna">
												20</td>
											<td>
												25</td>
											<td>
												15</td>
											<td>
												18</td>
							
											<td>
												24</td>
											<td>
												15</td>
											<td>
												12 </td>
											<td class="sem-borda">
												<div class="sub-coluna-div">
														2,3</div>
												</td>
												
							        			<td class="sem-borda">
							        				<div class="sub-coluna-div">
														5,2</div>
												</td>
											<td>
												<div>
														 6,5</div>
												</td>
											<td>
												
												<a class="group4 foto" href="../imagens/eventos/VRH---Salo-Mangue-01.jpg"></a>
															</td>
										</tr>
										<tr  class="tableClara tabela-group" >
											<td style="border-left: solid 1px #d5d7db;">
												Papangu</td>
											<td>
												Piso C</td>
											<td class="sub-coluna">
												20</td>
											<td>
												 25</td>
											<td>
												15 </td>
											<td>
												21</td>
							
											<td>
												21</td>
											<td>
												15</td>
											<td>
												12</td>
											<td class="sem-borda">
												<div class="sub-coluna-div">
														2,6</div>
												</td>
												
							        			<td class="sem-borda">
							        				<div class="sub-coluna-div">
														8,12</div>
												</td>
											<td>
												<div>
														6,28</div>
												</td>
											<td>
												
												<a class="group5 foto" href="../imagens/eventos/VRH---Salo-Papangu-01.jpg"></a>
															</td>
										</tr>
										<tr  class="tableEscura tabela-group" >
											<td style="border-left: solid 1px #d5d7db;">
												Capoeira</td>
											<td>
												Piso C</td>
											<td class="sub-coluna">
												20</td>
											<td>
												25</td>
											<td>
												15</td>
											<td>
												18</td>
							
											<td>
												18</td>
											<td>
												15</td>
											<td>
												12</td>
											<td class="sem-borda">
												<div class="sub-coluna-div">
														2,55</div>
												</td>
												
							        			<td class="sem-borda">
							        				<div class="sub-coluna-div">
														4,8</div>
												</td>
											<td>
												<div>
														7,45</div>
												</td>
											<td>
												
												<a class="group6 foto" href="../imagens/eventos/VRH---Salo-Capoeira-01.jpg"></a>
															</td>
										</tr>
										<tr  class="tableClara tabela-group" >
											<td style="border-left: solid 1px #d5d7db;">
												Caboclinho</td>
											<td>
												Piso C</td>
											<td class="sub-coluna">
												20</td>
											<td>
												25</td>
											<td>
												15</td>
											<td>
												18</td>
							
											<td>
												18</td>
											<td>
												15</td>
											<td>
												12 </td>
											<td class="sem-borda">
												<div class="sub-coluna-div">
														2,64</div>
												</td>
												
							        			<td class="sem-borda">
							        				<div class="sub-coluna-div">
														4,25</div>
												</td>
											<td>
												<div>
														7,4</div>
												</td>
											<td>
												
												<a class="group7 foto" href="../imagens/eventos/VRH---Salo-Caboclinho-01.jpg"></a>
															</td>
										</tr>
										<tr  class="tableEscura tabela-group" >
											<td style="border-left: solid 1px #d5d7db;">
												Reisado</td>
											<td>
												Piso P</td>
											<td class="sub-coluna">
												10</td>
											<td>
												15</td>
											<td>
												9</td>
											<td>
												---</td>
							
											<td>
												9</td>
											<td>
												6</td>
											<td>
												12</td>
											<td class="sem-borda">
												<div class="sub-coluna-div">
														2,32</div>
												</td>
												
							        			<td class="sem-borda">
							        				<div class="sub-coluna-div">
														4,1</div>
												</td>
											<td>
												<div>
														6,6 </div>
												</td>
											<td>
												
												<a class="group8 foto" href="../imagens/eventos/VRH---Salo-Reisado-01.jpg"></a>
															</td>
										</tr>
										<tr  class="tableClara tabela-group" >
											<td style="border-left: solid 1px #d5d7db;">
												Forró</td>
											<td>
												Piso C</td>
											<td class="sub-coluna">
												10</td>
											<td>
												15</td>
											<td>
												 9</td>
											<td>
												---</td>
							
											<td>
												9</td>
											<td>
												6</td>
											<td>
												12</td>
											<td class="sem-borda">
												<div class="sub-coluna-div">
														2,3</div>
												</td>
												
							        			<td class="sem-borda">
							        				<div class="sub-coluna-div">
														3,92</div>
												</td>
											<td>
												<div>
														5,83</div>
												</td>
											<td>
												
												</td>
										</tr>
										<tr  class="tableEscura tabela-group" >
											<td style="border-left: solid 1px #d5d7db;">
												Côco de Roda</td>
											<td>
												1º andar </td>
											<td class="sub-coluna">
												---</td>
											<td>
												---</td>
											<td>
												---</td>
											<td>
												---</td>
							
											<td>
												---</td>
											<td>
												6</td>
											<td>
												6</td>
											<td class="sem-borda">
												<div class="sub-coluna-div">
														2,03</div>
												</td>
												
							        			<td class="sem-borda">
							        				<div class="sub-coluna-div">
														2,45</div>
												</td>
											<td>
												<div>
														 5,6</div>
												</td>
											<td>
												
												<a class="group10 foto" href="../imagens/eventos/VRH---Salo-Coco-de-Roda-01.jpg"></a>
															</td>
										</tr>
										<tr  class="tableClara tabela-group" >
											<td style="border-left: solid 1px #d5d7db;">
												Afoxé</td>
											<td>
												1º andar </td>
											<td class="sub-coluna">
												---</td>
											<td>
												---</td>
											<td>
												---</td>
											<td>
												---</td>
							
											<td>
												---</td>
											<td>
												---</td>
											<td>
												4</td>
											<td class="sem-borda">
												<div class="sub-coluna-div">
														2,03</div>
												</td>
												
							        			<td class="sem-borda">
							        				<div class="sub-coluna-div">
														2,02</div>
												</td>
											<td>
												<div>
														 5,97</div>
												</td>
											<td>
												
												</td>
										</tr>
										<tr  class="tableEscura tabela-group" >
											<td style="border-left: solid 1px #d5d7db;">
												Xaxado</td>
											<td>
												1º andar</td>
											<td class="sub-coluna">
												---</td>
											<td>
												---</td>
											<td>
												---</td>
											<td>
												---</td>
							
											<td>
												---</td>
											<td>
												4</td>
											<td>
												4</td>
											<td class="sem-borda">
												<div class="sub-coluna-div">
														2,03</div>
												</td>
												
							        			<td class="sem-borda">
							        				<div class="sub-coluna-div">
														2,21</div>
												</td>
											<td>
												<div>
														5,57</div>
												</td>
											<td>
												
												</td>
										</tr>
										</tbody>
						</table>
					</div>
		</main>
	</div>
</section>



<?php get_footer(); ?>


