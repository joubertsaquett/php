<?php get_header(); ?>

<div class="ui grid container stackable centered blog">
	<div class="four wide column">
		<?php get_sidebar('blog'); ?>
	</div>
	<div class=" ten wide column">
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php 
            // Se houver algum post
            if(have_posts()) :
                // Enquanto houver algum post, chame o post de determinada maneira
                while (have_posts()) : the_post();
        ?>
            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
        <?php 
        endwhile;
        else:
            ?>
            <p>Nao tem nada ainda pra mostrar</p>
        <?php 
        endif;
        ?>	
    </div>	
	</div>
</div>
<?php get_footer(); ?>