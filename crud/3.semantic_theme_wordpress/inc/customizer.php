<?php 

function meupersonalizador($wp_customize){


	// Seção Serviços
	$wp_customize->add_section( 'sec_servicos', array(
		'title'			=> 'Serviços',
		'description'	=> 'Seção para os serviços'
	));	
 
/////////////////////////// Serviço 1 - ICON ////////////////////////////
	$wp_customize->add_setting( 'set_servicos1_icon', array(
		'default'	=> 'chart line'
	));
	$wp_customize->add_control( 'ctrl_servicos1_icon', array(
		'label' 	=> 'ICONE para o serviço 1',
		'description'	=> 'Informe o ICON',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos1_icon',
		'type'			=> 'text'
	) );
    // Serviço 1 - Título 
	$wp_customize->add_setting( 'set_servicos1_titulo', array(
		'default'	=> 'Seção 1'
	));
	$wp_customize->add_control( 'ctrl_servicos1_titulo', array(
		'label' 	=> 'Título para o serviço 1',
		'description'	=> 'Informe o título',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos1_titulo',
		'type'			=> 'text'
	) );
    // Serviço 1 - botão nome 
	$wp_customize->add_setting( 'set_servicos1_nomebtn', array(
		'default'	=> 'Nome Botão 1'
	));
	$wp_customize->add_control( 'ctrl_servicos1_nomebtn', array(
		'label' 	=> 'Nome Botão 1',
		'description'	=> 'Informe o Nome do Botão 1',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos1_nomebtn',
		'type'			=> 'text'
	) );
    // Serviço 1 - botão link 
    $wp_customize->add_setting( 'set_servicos1_link', array(
		'default'	=> '#'
	));
	$wp_customize->add_control( 'ctrl_servicos1_link', array(
		'label' 	=> 'Link Botão 1',
		'description'	=> 'Informe o Link do Botão 1',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos1_link',
		'type'			=> 'text'
	) );
	// Serviço 1 - Descrição
	$wp_customize->add_setting( 'set_servicos1_descricao', array(
		'default'	=> 'Descrição 1'
	));
	$wp_customize->add_control( 'ctrl_servicos1_descricao', array(
		'label' 	=> 'Descrição para o serviço 1',
		'description'	=> 'Informe a descrição',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos1_descricao',
		'type'			=> 'textarea'
	) );
 
/////////////////////////// Serviço 1 - ICON ////////////////////////////
    
/////////////////////////// Serviço 2 - ICON ///////////////////////////
	$wp_customize->add_setting( 'set_servicos2_icon', array(
		'default'	=> 'chart line'
	));
	$wp_customize->add_control( 'ctrl_servicos2_icon', array(
		'label' 	=> 'ICONE para o serviço 2',
		'description'	=> 'Informe o ICON',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos2_icon',
		'type'			=> 'text'
	) );
    // Serviço 2 - Título 
	$wp_customize->add_setting( 'set_servicos2_titulo', array(
		'default'	=> 'Seção 2'
	));
	$wp_customize->add_control( 'ctrl_servicos2_titulo', array(
		'label' 	=> 'Título para o serviço 2',
		'description'	=> 'Informe o título',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos2_titulo',
		'type'			=> 'text'
    ) );
    // Serviço 2 - botão nome 
	$wp_customize->add_setting( 'set_servicos2_nomebtn', array(
		'default'	=> 'Nome Botão 2'
	));
	$wp_customize->add_control( 'ctrl_servicos2_nomebtn', array(
		'label' 	=> 'Nome Botão 2',
		'description'	=> 'Informe o Nome do Botão 2',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos2_nomebtn',
		'type'			=> 'text'
	) );
    // Serviço 2 - botão link 
    $wp_customize->add_setting( 'set_servicos2_link', array(
		'default'	=> '#'
	));
	$wp_customize->add_control( 'ctrl_servicos2_link', array(
		'label' 	=> 'Link Botão 2',
		'description'	=> 'Informe o Link do Botão 2',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos2_link',
		'type'			=> 'text'
	) );
	// Serviço 2 - Descrição
	$wp_customize->add_setting( 'set_servicos2_descricao', array(
		'default'	=> 'Descrição 2'
	));
	$wp_customize->add_control( 'ctrl_servicos2_descricao', array(
		'label' 	=> 'Descrição para o serviço 2',
		'description'	=> 'Informe a descrição',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos2_descricao',
		'type'			=> 'textarea'
	) );
/////////////////////////// Serviço 2 - ICON /////////////////////////// 
    
/////////////////////////// Serviço 3 - ICON ///////////////////////////
	$wp_customize->add_setting( 'set_servicos3_icon', array(
		'default'	=> 'chart line'
	));
	$wp_customize->add_control( 'ctrl_servicos3_icon', array(
		'label' 	=> 'ICONE para o serviço 3',
		'description'	=> 'Informe o ICON',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos3_icon',
		'type'			=> 'text'
	) );
    // Serviço 3 - Título 
	$wp_customize->add_setting( 'set_servicos3_titulo', array(
		'default'	=> 'Seção 3'
	));
	$wp_customize->add_control( 'ctrl_servicos3_titulo', array(
		'label' 	=> 'Título para o serviço 3',
		'description'	=> 'Informe o título',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos3_titulo',
		'type'			=> 'text'
	) );
    // Serviço 3 - botão nome 
	$wp_customize->add_setting( 'set_servicos3_nomebtn', array(
		'default'	=> 'Nome Botão 3'
	));
	$wp_customize->add_control( 'ctrl_servicos3_nomebtn', array(
		'label' 	=> 'Nome Botão 3',
		'description'	=> 'Informe o Nome do Botão 3',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos3_nomebtn',
		'type'			=> 'text'
	) );
    // Serviço 3 - botão link 
    $wp_customize->add_setting( 'set_servicos3_link', array(
		'default'	=> '#'
	));
	$wp_customize->add_control( 'ctrl_servicos3_link', array(
		'label' 	=> 'Link Botão 3',
		'description'	=> 'Informe o Link do Botão 3',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos3_link',
		'type'			=> 'text'
	) );
	// Serviço 3 - Descrição
	$wp_customize->add_setting( 'set_servicos3_descricao', array(
		'default'	=> 'Descrição 3'
	));
	$wp_customize->add_control( 'ctrl_servicos3_descricao', array(
		'label' 	=> 'Descrição para o serviço 3',
		'description'	=> 'Informe a descrição',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos3_descricao',
		'type'			=> 'textarea'
    ) );
/////////////////////////// Serviço 3 - ICON ///////////////////////////

}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////// Header ////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function perso_header($wp_customize){
   // Seção Header
	$wp_customize->add_section( 'sec_header', array(
		'title'			=> 'Info | Header',
		'description'	=> 'Seção para Info | Header'
    ));
    
    // Header 3 - botão nome 
	$wp_customize->add_setting( 'set_header_btn_nome', array(
		'default'	=> 'Nome Botão Header'
	));
	$wp_customize->add_control( 'ctrl_header_btn_nome', array(
		'label' 	=> 'Nome Botão',
		'description'	=> 'Informe o Nome do Botão',
		'section'		=> 'sec_header',
		'settings'		=> 'set_header_btn_nome',
		'type'			=> 'text'
	) );
    // Header 3 - botão link 
    $wp_customize->add_setting( 'set_header_btn_link', array(
		'default'	=> '#'
	));
	$wp_customize->add_control( 'ctrl_header_btn_link', array(
		'label' 	=> 'Link Botão Header',
		'description'	=> 'Informe o Link completo do Botão',
		'section'		=> 'sec_header',
		'settings'		=> 'set_header_btn_link',
		'type'			=> 'text'
    ) );
    // Header 3 - Imagem
	$wp_customize->add_setting( 'set_header_img', array(
		'default'	=> ''
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_header_img', array(
		'label'		=> 'Imagem Header',
		'width'		=> 730,
		'height'	=> 360,
		'section'	=> 'sec_header',
		'settings'	=> 'set_header_img'
	)));
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////// FIM Header ////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////



////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////// Clients ////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function perso_cliente($wp_customize){
    // Seção Cliente
	$wp_customize->add_section( 'sec_cli', array(
		'title'			=> 'Section Clients',
		'description'	=> 'Section Clients'
    ));

    // Cliente - Descrição
	$wp_customize->add_setting( 'set_cli_descricao', array(
		'default'	=> 'Descrição de Our Clients'
	));
	$wp_customize->add_control( 'ctrl_servicos3_descricao', array(
		'label' 	=> 'Descrição',
		'description'	=> 'Informe a descrição',
		'section'		=> 'sec_cli',
		'settings'		=> 'set_cli_descricao',
		'type'			=> 'textarea'
    ) );
    // Cliente - título
    $wp_customize->add_setting( 'set_cli_nome', array(
        'default'	=> 'Our Clients'
    ));
    $wp_customize->add_control( 'ctrl_cli_nome', array(
        'label' 	=> 'Nome',
        'description'	=> 'Informe o Nome',
        'section'		=> 'sec_cli',
        'settings'		=> 'set_cli_nome',
        'type'			=> 'text'
    ));
    // Cliente - ICON 1
    $wp_customize->add_setting( 'set_cli_icon1', array(
		'default'	=> 'twitter'
	));
	$wp_customize->add_control( 'ctrl_cli_icon1', array(
		'label' 	=> 'ICONE 1',
		'description'	=> 'Informe o ICONE 1',
		'section'		=> 'sec_cli',
		'settings'		=> 'set_cli_icon1',
		'type'			=> 'text'
	) );
    // Cliente - LINK 1
    $wp_customize->add_setting( 'set_cli_icon1_link', array(
		'default'	=> '#'
	));
	$wp_customize->add_control( 'ctrl_cli_icon1_link', array(
		'label' 	=> 'Link ICONE 1',
		'description'	=> 'Informe o Link para o ICON 1',
		'section'		=> 'sec_cli',
		'settings'		=> 'set_cli_icon1_link',
		'type'			=> 'text'
	));
    // Cliente - ICON 2
    $wp_customize->add_setting( 'set_cli_icon2', array(
		'default'	=> 'twitter'
	));
	$wp_customize->add_control( 'ctrl_cli_icon2', array(
		'label' 	=> 'ICONE 2',
		'description'	=> 'Informe o ICONE 2',
		'section'		=> 'sec_cli',
		'settings'		=> 'set_cli_icon2',
		'type'			=> 'text'
	) );
    // Cliente - LINK 2
    $wp_customize->add_setting( 'set_cli_icon2_link', array(
		'default'	=> '#'
	));
	$wp_customize->add_control( 'ctrl_cli_icon2_link', array(
		'label' 	=> 'Link ICONE 2',
		'description'	=> 'Informe o Link para o ICON 2',
		'section'		=> 'sec_cli',
		'settings'		=> 'set_cli_icon2_link',
		'type'			=> 'text'
	));
    // Cliente - ICON 3
    $wp_customize->add_setting( 'set_cli_icon3', array(
		'default'	=> 'twitter'
	));
	$wp_customize->add_control( 'ctrl_cli_icon3', array(
		'label' 	=> 'ICONE 3',
		'description'	=> 'Informe o ICONE 3',
		'section'		=> 'sec_cli',
		'settings'		=> 'set_cli_icon3',
		'type'			=> 'text'
	) );
    // Cliente - LINK 3
    $wp_customize->add_setting( 'set_cli_icon3_link', array(
		'default'	=> '#'
	));
	$wp_customize->add_control( 'ctrl_cli_icon3_link', array(
		'label' 	=> 'Link ICONE 3',
		'description'	=> 'Informe o Link para o ICON 3',
		'section'		=> 'sec_cli',
		'settings'		=> 'set_cli_icon3_link',
		'type'			=> 'text'
	));
    // Cliente - ICON 4
    $wp_customize->add_setting( 'set_cli_icon4', array(
		'default'	=> 'twitter'
	));
	$wp_customize->add_control( 'ctrl_cli_icon4', array(
		'label' 	=> 'ICONE 4',
		'description'	=> 'Informe o ICONE 4',
		'section'		=> 'sec_cli',
		'settings'		=> 'set_cli_icon4',
		'type'			=> 'text'
	) );
    // Cliente - LINK 4
    $wp_customize->add_setting( 'set_cli_icon4_link', array(
		'default'	=> '#'
	));
	$wp_customize->add_control( 'ctrl_cli_icon4_link', array(
		'label' 	=> 'Link ICONE 4',
		'description'	=> 'Informe o Link para o ICON 4',
		'section'		=> 'sec_cli',
		'settings'		=> 'set_cli_icon4_link',
		'type'			=> 'text'
	));
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////// Clients ////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////



////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////// Footer ////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function perso_footer($wp_customize){
    // Seção Footer
	$wp_customize->add_section( 'sec_footer', array(
		'title'			=> 'Footer menu 1',
		'description'	=> 'Section Footers'
    ));
    // Footer - título 1
    $wp_customize->add_setting( 'set_footer1_nome', array(
        'default'	=> 'Menu 1'
    ));
    $wp_customize->add_control( 'ctrl_footer1_nome', array(
        'label' 	=> 'Menu 1',
        'description'	=> 'Informe o título 1',
        'section'		=> 'sec_footer',
        'settings'		=> 'set_footer1_nome',
        'type'			=> 'text'
    ));
    // Footer - título 2
    $wp_customize->add_setting( 'set_footer2_nome', array(
        'default'	=> 'Menu 2'
    ));
    $wp_customize->add_control( 'ctrl_footer2_nome', array(
        'label' 	=> 'Menu 2',
        'description'	=> 'Informe o título 2',
        'section'		=> 'sec_footer',
        'settings'		=> 'set_footer2_nome',
        'type'			=> 'text'
    ));
    // Footer - título 3
    $wp_customize->add_setting( 'set_footer3_nome', array(
        'default'	=> 'Menu 3'
    ));
    $wp_customize->add_control( 'ctrl_footer3_nome', array(
        'label' 	=> 'Menu 3',
        'description'	=> 'Informe o título 3',
        'section'		=> 'sec_footer',
        'settings'		=> 'set_footer3_nome',
        'type'			=> 'text'
    ));
    // Footer - título 4
    $wp_customize->add_setting( 'set_footer4_nome', array(
        'default'	=> 'Menu 4'
    ));
    $wp_customize->add_control( 'ctrl_footer4_nome', array(
        'label' 	=> 'Menu 4',
        'description'	=> 'Informe o título 4',
        'section'		=> 'sec_footer',
        'settings'		=> 'set_footer4_nome',
        'type'			=> 'text'
    ));
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////// Footer ////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////


add_action( 'customize_register', 'meupersonalizador' );
add_action( 'customize_register', 'perso_header' );
add_action( 'customize_register', 'perso_cliente' );
add_action( 'customize_register', 'perso_footer' );