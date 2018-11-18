<?php 
/*
Template Name: Template Página Home
*/
 ?>
 <?php get_header(); ?>

<div class="ui three column grid container stackable centered">
    <div class="ui column">
        <div class="ui card">
            <div class="image">
                <i class="circular teal <?php echo get_theme_mod('set_servicos1_icon') ?> icon"></i>
            </div>
            <div class="content">
                <a class="header"><?php echo get_theme_mod('set_servicos1_titulo') ?></a>
                <div class="description"><?php echo get_theme_mod('set_servicos1_descricao') ?></div>
            </div>
            <div class="extra content">
                <a href="<?php echo get_theme_mod('set_servicos1_link'); ?>" class="ui button primary"> <?php echo get_theme_mod('set_servicos3_nomebtn'); ?> </a>
            </div>
        </div>
    </div>
    <div class="ui column">
        <div class="ui card">
            <div class="image">
                <i class="circular teal <?php echo get_theme_mod('set_servicos2_icon') ?> icon"></i>
            </div>
            <div class="content">
                <a class="header"><?php echo get_theme_mod('set_servicos2_titulo') ?></a>
                <div class="description"><?php echo get_theme_mod('set_servicos2_descricao') ?></div>
            </div>
            <div class="extra content">
                <a href="<?php echo get_theme_mod('set_servicos2_link'); ?>" class="ui button primary"><?php echo get_theme_mod('set_servicos3_nomebtn'); ?></a>
            </div>
        </div>
    </div>
    <div class="ui column">
        <div class="ui card">
            <div class="image">
                <i class="circular teal <?php echo get_theme_mod('set_servicos3_icon') ?> icon"></i>
            </div>
            <div class="content">
                <a class="header"><?php echo get_theme_mod('set_servicos3_titulo') ?></a>
                <div class="description"><?php echo get_theme_mod('set_servicos3_descricao') ?></div>
            </div>
            <div class="extra content">
                <a href="<?php echo get_theme_mod('set_servicos3_link'); ?>" class="ui button primary"> <?php echo get_theme_mod('set_servicos3_nomebtn'); ?> </a>
            </div>
        </div>
    </div>
    
</div>



<div class="ui text container stackable center aligned">
    <?php if( is_active_sidebar('sidebar-1')){ dynamic_sidebar('sidebar-1'); } ?>
    <!--h2 class="ui header">Subscribe to Mailing List</h2>
    <p>At least he won't reach his highest potential unless you enroll him in Cat University's 2013 class.</p>    

    <div class="ui fluid action input">
        <input type="text" placeholder="Procurar">
        <div class="ui button">Pesquisa</div>
    </div-->
</div>



<div class="ui inverted vertical masthead center aligned segment recents">
    <div class="ui center container aligned basic segment">
        <h1>Recent Works</h1>
        <div class="ui horizontal divider"><i class="camera icon"></i></div>
        <p>Checkout Our Recently Completed Works you will be amazed!</p>        
    </div>
    <div class="ui fluids cards stackable centered">
        <?php 
        /**
         * Variáveis para divs das notícias e arquivo de conteúdo
         *
         * Sugestão Gilberto Medeiros
         * @see https://www.udemy.com/criando-temas-customizados-com-wordpress/learn/v4/questions/1968272
         *
         */
        $op_content = 'destaque';
        // Quais categorias serão inclusas na nossa listagem?
        $itens = get_categories(array('include' => '3,8,11'));
        // echo '<pre>';
        // print_r($itens);
        // echo '</pre>';
        // Para cada categoria encontrada, buscamos um só item dessa categoria
        foreach($itens as $item):
            // Pegamos cada item dentro do loop para compor nossa consulta
            $args = array(
                'category__in' => $item->cat_ID,
                'posts_per_page' => 1
            );
            // Criação do objeto da classe WP_Query
            $consulta = new WP_Query($args);
            // O loop WordPress (consulta padrão modificada)
            if($consulta->have_posts()):
                while($consulta->have_posts()):
                    $consulta->the_post();
            // Abaixo, usamos as variáveis $tamanho e $op_content
            // Na primeira repetição do loop, elas têm o valor indicado acima. Na segunda e terceira, mudam de valor
            ?>
            <?php get_template_part('content', $op_content); ?>				
            <?php
                // Reiniciamos o valor das variáveis $tamanho e $op_content com novos valores
                // Esses novos valores só valerão do segundo loop em diante
                $op_content = 'secundaria';
                endwhile;
                // Reseta a consulta a cada passo do loop
                wp_reset_postdata();

            endif;
        // Fim do loop foreach
        endforeach;
        ?>
    </div>						
</div>



<div class="ui text container stackable center aligned">
    <h1 class="ui header"><?php echo get_theme_mod('set_cli_nome'); ?></h1>                
    <div class="ui horizontal divider"><i class="camera icon"></i></div> 
    <p><?php echo get_theme_mod('set_cli_descricao'); ?></p>  
</div>
<div class="ui container four column grid stackable center aligned">
    <a href="<?php echo get_theme_mod('set_cli_icon1_link'); ?>" class="ui column">
        <i class="circular teal <?php echo get_theme_mod('set_cli_icon1'); ?> icon"></i>
    </a>
    <a href="<?php echo get_theme_mod('set_cli_icon2_link'); ?>" class="ui column">
        <i class="circular teal <?php echo get_theme_mod('set_cli_icon2'); ?> icon"></i>
    </a>
    <a href="<?php echo get_theme_mod('set_cli_icon3_link'); ?>" class="ui column">
        <i class="circular teal <?php echo get_theme_mod('set_cli_icon3'); ?> icon"></i>
    </a>
    <a href="<?php echo get_theme_mod('set_cli_icon4_link'); ?>" class="ui column">
        <i class="circular teal <?php echo get_theme_mod('set_cli_icon4'); ?> icon"></i>
    </a>
</div>



<?php get_footer(); ?>