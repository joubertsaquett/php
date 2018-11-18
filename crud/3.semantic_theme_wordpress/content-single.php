<div class="text" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
    <h1 class="ui head"><?php the_title(); ?></h1>
    
    <p>Publicado por <?php the_author_posts_link(); ?> em <?php echo get_the_date(); ?></p>
    
    <p><?php the_tags('Tags: ', ', '); ?><span> Categoria: </span><?php the_category(' '); ?></p>

	<div class="content">
        <p>
            <?php the_content(); ?>
        </p>
	</div>

</div>