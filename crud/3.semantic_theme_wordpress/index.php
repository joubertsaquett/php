<?php get_header(); ?>

<div class="ui grid container stackable centered blog">
	<div class="four wide column">
		<?php get_sidebar('blog'); ?>
	</div>
	<div class=" ten wide column">
		
	<?php 
		// Se houver algum post
		if(have_posts()) :
			// Enquanto houver algum post, chame o post de determinada maneira
			while (have_posts()) : the_post(); 
	?>	
	<?php 
		//Pega o arquivo content.php
		get_template_part('content', get_post_format()); 
	?>
	<?php endwhile; ?>

	
	<?PHP if( get_next_posts_link() ) : ?>
		<button class="ui labeled icon button">
		<i class="arrow left icon"></i><?php next_posts_link("Mais antigos") ?>
		</button>
	<?PHP endif; ?>

	<?PHP if( get_previous_posts_link() ) : ?>
		<button class="ui right labeled icon button">
		<i class="arrow right icon"></i><?php previous_posts_link("Mais novos"); ?>
		</button>
	<?PHP endif; ?>

	<?php	else:	?>
		<p>Nao tem nada ainda pra mostrar</p>
	<?php 	endif;	?>
	</div>
</div>

<?php get_footer(); ?>
