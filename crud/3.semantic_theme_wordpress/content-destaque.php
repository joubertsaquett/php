 
<div class="card" id="post-<?php the_ID(); ?>" <?php post_class(array('post-format-padrao')); ?>>
    <div class="content">
        <div class="ui fluid image">
            <?php if(has_post_thumbnail()): the_post_thumbnail(array(175,175)); endif; ?>
        </div>
        <div class="header"><a title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
        <div class="description">
            <?php the_excerpt(); ?>
            <p>Categorias: <?php the_category(' '); ?></p>
	        <p><?php the_tags('Tags: ', ', '); ?></p>
        </div>
    </div>
    <div class="ui attached buttons">
        <a href="<?php the_permalink(); ?>" class="ui button ">Um</a>
        <a href="<?php the_permalink(); ?>" class="ui pink button">Dois</a>
    </div>
</div> 