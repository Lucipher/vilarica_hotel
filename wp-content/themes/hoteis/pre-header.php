<?php
query_posts(array("post_type" => "precabecalho", "posts_per_page" => 1, "post_status" => "publish", "orderby" => "﻿﻿title","order" => "ASC", 'paged' => 1));
if(have_posts()):
while (have_posts () ): the_post () ;
    $conheca_tambem = get_field('conheca_tambem');
 ?>

       <div class='preHeader'>
           <img src="<?php echo the_field('logomarca_hotel'); ?>">
           <div class='conhecaContainer'>
               <p class='pConheca'>CONHEÇA TAMBÉM:</p>

                <?php                  
                  for($w = 0; $w < count($conheca_tambem); $w++){
                    $logomarca = $conheca_tambem[$w]['logomarca'];
                    $link = $conheca_tambem[$w]['link'];
                    $title = $conheca_tambem[$w]['nome_da_marca'];
                ?>  


               <a href="<?php echo $link?>" target="_blank" alt='<?php echo $title?>' title="<?php echo $title?>" class='logoConheca'><img src="<?php echo $logomarca?>"></a>
               <?php
                }
                ?>
               <span></span>
               <i class="material-icons">phone</i>
               <p class='prefixoPais'>+55</p><h3 class='numeroPreHeader'><?php echo the_field('telefone_para_contato'); ?></h3>
               <span></span>
               <a href="#" title='Entre em Contato' alt='Entre em Contato botão'>ENTRE EM CONTATO</a>
           </div>
       </div>

 <?php endwhile; 
 endif; 
 wp_reset_query();?>