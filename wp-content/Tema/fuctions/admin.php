<?php
/**
 * --------------------------------------------------------------
 * ADMIN PANEL CONFIGURATION 
 * --------------------------------------------------------------
 *
 * @package Inédita
 * 
 * Change the footer text
 */

/* CONFIG */

function admin_agency() {
    return 'Filhas do Vento';
} 
function admin_website_url() { 
    return 'http://zpixel.com.br';
}
function admin_year() { 
    return '2021';
}
function admin_site_name() { 
    return 'Okay';
}
function admin_contact_email() { 
    return 'eloisa@zpxiel.com.br';
}

/**************/


function remove_footer_admin () {
    echo "&copy;". date( 'Y' ) . ' - ' . get_bloginfo( 'name' ) . " - Todos os Direitos Reservados.";
}
add_filter('admin_footer_text', 'remove_footer_admin');

/*
 * Remove widgets dashboard.
 */
function admin_remove_dashboard_widgets() {
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
}
add_action( 'wp_dashboard_setup', 'admin_remove_dashboard_widgets' );

/*
 * Adicionar box no dashboard
 */

add_action('wp_dashboard_setup', 'mycustom_dashboard_widgets');
function mycustom_dashboard_widgets() {
    global $wp_meta_boxes;
    wp_add_dashboard_widget('custom_help_widget', 'Bem vindo ao painel do site '.admin_agency().'', 'custom_dashboard_help');
}
function custom_dashboard_help() {
    echo '<p>Aqui você poderá gerenciar todo o conteúdo do site.</p><p>Qualquer dúvida, entre em contato através do email '.admin_contact_email().'</p><p>Este site é mantido com a tecnologia do sistema WordPress e foi desenvolvido para <a href="'.admin_website_url().'" target="_blank">'.admin_agency().'</a></p>';
}
/*
 * Remove version from footer.
 */
function change_footer_version() {
    return 'Desenvolvido com ❤  por Zpixel';
}
add_filter( 'update_footer', 'change_footer_version', 9999 );


/**
 * Disable auto update of plugins.
 */
remove_action( 'load-update-core.php', 'wp_update_plugins' );
add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );

/*
 * Remove Welcome Panel.
 */
remove_action( 'welcome_panel', 'wp_welcome_panel' );


/*
 * Rename admin menu labels
 */
function change_admin_label_names( $translated ) {
    $translated = str_replace( 'Mídia', 'Arquivos', $translated );
    $translated = str_replace( 'midia', 'arquivos', $translated );
    return $translated;
}
add_filter( 'gettext', 'change_admin_label_names' );
add_filter( 'ngettext', 'change_admin_label_names' );

?>