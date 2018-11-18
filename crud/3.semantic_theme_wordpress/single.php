<?php get_header(); ?>

<div class="ui grid container stackable centered blog">
	<div class="four wide column">
		<?php get_sidebar('blog'); ?>
		

<?php 
/*do_action( 'before_sidebar' );
get_search_form(); 
wp_register(); 
 wp_loginout(); 
 wp_meta(); */


wp_list_categories( array(
		 //'style' 		=> 'none',
		 //'class' 		=> true,		 
		 'order'		=> 'ASC',
		 'orderby'		=> 'name',
	 ));


 ?>
          

	</div>
	<div class=" ten wide column">
		<?php 
		while(have_posts()): the_post();
			// O conteúdo do template em si estará em content-single.php
			get_template_part('content', 'single');
		?>
	
	


		<?php	
			// Verificando se os comentários estão abertos no post e se há algum comentário publicado
			// Se houver um ou outro, chamamos o nosso template de comentários padrão 
			if( comments_open() || get_comments_number()):
				//comments_template();
			endif;

		endwhile;

		?>
	</div>
</div>
<?php get_footer(); ?>