<?php
query_posts(array("post_type" => "rodape", "posts_per_page" => 1, "post_status" => "publish", "orderby" => "﻿﻿title","order" => "ASC", 'paged' => 1));
if(have_posts()):
while (have_posts () ): the_post () ;
    $logomarca = get_field('logomarca');
    $endereco = get_field('endereco');
    $numero = get_field('numero_para_contato');
    $email = get_field('email');
    $cadastre = get_field('cadastrese_titulo');
    $legenda = get_field('legenda');

    $redes_sociais = get_field('redes_sociais');
    $marcas = get_field('marcas');
    $links_do_rodape1 = get_field('links_rodape1');
    $links_do_rodape2 = get_field('links_do_rodape2');
    $marcas_dos_hoteis = get_field('marcas_dos_hoteis');
?>


<footer>
	<div class='faixaMarcas'>
		<?php 				

		for($w = 0; $w < count($redes_sociais); $w++){
			$icone_da_rede_social = $redes_sociais[$w]['icone_da_rede_social'];
			$nome_do_usuario = $redes_sociais[$w]['nome_do_usuario'];
			$link_da_rede_social = $redes_sociais[$w]['link_da_rede_social'];

		?>  
		<a href="<?php echo $link_da_rede_social ?>" target="_blank">
			<span><img src="<?php echo $icone_da_rede_social ?>"></span>
			<legend>/<?php echo $nome_do_usuario?></legend>
		</a>
		<?php
		}

		for($w = 0; $w < count($marcas); $w++){
			$logomarca_da_empresa = $marcas[$w]['logomarca_da_empresa'];
			$link_da_empresa = $marcas[$w]['link_da_empresa'];

		?>  
		<a href="<?php echo $link_da_empresa?>" target="_blank" class='tripBox'>
			<img src="<?php echo $logomarca_da_empresa?>">
		</a>

		<?php
		}
		?>
	</div>
	<div class='rodape'>
		<div class='container'>
			<main>
				<div class='rodapeBox primeiroRodapeBox'>
					<img src="<?php echo $logomarca?>" class='vilalogoBranca'>
					<span><i class="material-icons">location_on</i><p><?php echo $endereco?></p></span>
					<span><i class="material-icons">phone</i><p>+55 <?php echo $numero?></p></span>
					<span><i class="material-icons">mail_outline</i><p><?php echo $email?></p></span>
				</div>
				<div class='rodapeBox segundoRodapeBox'>
					<ul class='listaRodape'>
					<?php 		
						for($w = 0; $w < count($links_do_rodape1); $w++){
							$nome_do_link = $links_do_rodape1[$w]['nome_do_link'];
							$link = $links_do_rodape1[$w]['link'];
					?>  
						<a href="<?php echo $link ?>"><?php echo $nome_do_link?> </a>
					<?php
					}
					?>
					</ul>
					<ul class='listaRodape'>
					<?php 		
						for($w = 0; $w < count($links_do_rodape2); $w++){
							$nome_do_link = $links_do_rodape2[$w]['nome_do_link'];
							$link = $links_do_rodape2[$w]['link'];
					?>  
						<a href="<?php echo $link ?>"><?php echo $nome_do_link?> </a>
					<?php
					}
					?>
					</ul>
				</div>
				<div class='rodapeBox'>
					<h2><?php echo $cadastre?></h2>
					<p><?php echo $legenda?></p>
					<form>
						<input type="text" name="nome" placeholder="Nome">
						<input type="email" name="email" placeholder="E-mail">
						<button type="submit">CADASTRAR</button>
					</form>
				</div>
			</main>
		</div>
	</div>
	<div class='rodapeMarcas'>
		<div class='container'>
			<main>
				<span class='marcasRodape'>
				<?php for($w = 0; $w < count($marcas_dos_hoteis); $w++){
					$logomarca_dos_hoteis = $marcas_dos_hoteis[$w]['logomarca_dos_hoteis'];
					$link_do_hotel = $marcas_dos_hoteis[$w]['link_do_hotel'];
				?> 
					<a href="<?php echo $link_do_hotel ?>" target="_blank"><img src="<?php echo $logomarca_dos_hoteis ?>"></a>
				<?php
				}
				?>
				</span>
				<span>
					<img src="<?php echo get_bloginfo('template_url') ?>/imagens/logos/dev.png">
				</span>
			</main>
		</div>
	</div>
</footer>
<?php endwhile;
endif;
wp_reset_query();
?>
<script src='<?php echo get_bloginfo('template_url') ?>/js/bootstrap.min.js'></script>
<script src='<?php echo get_bloginfo('template_url') ?>/js/jquery-3.3.1.min.js'></script>
<script src="<?php echo get_bloginfo('template_url') ?>/js/jquery-ui.min.js"></script>
<script src='<?php echo get_bloginfo('template_url') ?>/js/app.js'></script>

<?php wp_footer(); ?>


</body>
</html>

