<div class="ui items" id="post-<?php the_ID(); ?>" <?php post_class(array('post-format-padrao')); ?>>
    <div class="item">
        <div class="image">
            <a class="header" title="<?php the_title_attribute();?>" href="<?php the_permalink(); ?>">
                <?php if(has_post_thumbnail()): the_post_thumbnail(array(175,175)); endif; ?>
            </a>
        </div>
        <div class="content">
            <a class="header" title="<?php the_title_attribute();?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <div class="description">
                <p>
                    <?php the_excerpt(); ?>
                    <p>Categorias: <?php the_category(' '); ?></p>
                    <p><?php the_tags('Tags: ', ', '); ?></p>
                </p>
            </div>
        </div>
    </div>
</div>