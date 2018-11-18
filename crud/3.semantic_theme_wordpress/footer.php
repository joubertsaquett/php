<footer>
    <div class="ui inverted vertical footer segment footer">
        <div class="ui container">
            <div class="ui stackable inverted divided equal height stackable grid">
                <div class="four wide column">
                    <h4 class="ui inverted header"><?php echo get_theme_mod('set_footer1_nome'); ?></h4>
                    <div class="ui inverted link list">
				        <?php footer('menu_rodape1'); //wp_nav_menu( array('theme_location' => 'menu_rodape1') ); ?>
                    </div>
                </div>
                <div class="four wide column">
                    <h4 class="ui inverted header"><?php echo get_theme_mod('set_footer2_nome'); ?></h4>
                    <div class="ui inverted link list">
				        <?php footer('menu_rodape2'); //wp_nav_menu( array('theme_location' => 'menu_rodape2') ); ?>
                    </div>
                </div>
                <div class="four wide column">
                        <h4 class="ui inverted header"><?php echo get_theme_mod('set_footer3_nome'); ?></h4>
                        <div class="ui inverted link list">
				            <?php footer('menu_rodape3'); //wp_nav_menu( array('theme_location' => 'menu_rodape3') ); ?>
                        </div>
                </div>
                <div class="four wide column">
                        <h4 class="ui inverted header"><?php echo get_theme_mod('set_footer4_nome'); ?></h4>
                        <div class="ui inverted link list">
				            <?php footer('menu_rodape4'); //wp_nav_menu( array('theme_location' => 'menu_rodape4') ); ?>
                        </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
