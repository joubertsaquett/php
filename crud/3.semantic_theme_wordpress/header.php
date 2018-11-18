<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width">
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>


<header>
	
<div class="ui large top fixed menu transition hidden">
            <div class="ui container">
                <a class="active item">Status</a>
                <a class="item">Home</a>
                <a class="item">Messages</a>
                <a class="item">Friends</a>
                <div class="right menu">
                <div class="item">
                    <a class="ui button">Log in</a>
                </div>
                <div class="item">
                    <a class="ui primary button">Sign Up</a>
                </div>
                </div>
            </div>
        </div> 
        <div class="ui vertical inverted sidebar menu left" style="">
            <a class="active item">Status</a>
            <a class="item">Home</a>
            <a class="item">Messages</a>
            <a class="item">Friends</a>
            <a class="item">Login</a>
            <a class="item">Signup</a>
        </div>


        <div class="ui inverted vertical masthead center aligned segment">
            <div class="ui container">
                <div class="ui large secondary inverted pointing menu">
                    <a class="toc item">
                    <i class="sidebar icon"></i>
                    </a>
                    <?PHP 
                        sidebar_home();

                    ?>
                    <!--a class="active item">Status</a>
                    <a class="item">Home</a>
                    <a class="item">Messages</a>
                    <a class="item">Friends</a-->
                    <div class="right item">
                    <a class="ui inverted button">Log in</a>
                    <a class="ui inverted button">Sign Up</a>
                    </div>
                </div>
            </div>
            
            <?PHP if (is_front_page()):?>
                <div class="ui text container">
                    <h1 class="ui inverted header">
                        <?php bloginfo('name'); ?>
                    </h1>
                    <h2><?php bloginfo('description'); ?></h2>
                    <a href="<?php echo get_theme_mod('set_link_btn_link'); ?>" class="ui inverted basic button"><?php echo get_theme_mod('set_header_btn_nome'); ?>
                        <i class="right arrow icon"></i>
                    </a>
                    
                </div>
                
                <div class="ui two column centered grid">
                    <div class="column">
                        <?PHP function set_header_img() {
                            if ( get_theme_mod( 'set_header_img' ) > 0 ) {
                                return wp_get_attachment_url( get_theme_mod( 'set_header_img' ) );
                            } else {
                                return get_template_directory_uri() . '/img/tela.png';
                            }
                        }
                        ?>
                        <img src="<?php echo set_header_img(); ?>" class="ui image fluid" alt="">
                    </div>
                </div>
            <?PHP else:?>
                <div class="ui text container">
                    <h1 class="ui inverted header">
                    <?php wp_title(''); ?>
                    </h1>                    
                </div>
            <?PHP endif;?>
        </div>
</header>
