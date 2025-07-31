<?php
/**
 * Guilherme Cota Portfolio Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Enqueue theme assets
function guilherme_cota_enqueue_scripts() {
    // Enqueue main theme styles
    wp_enqueue_style('guilherme-cota-style', get_stylesheet_uri(), array(), '2.0.0');
    
    // Enqueue JavaScript
    wp_enqueue_script('guilherme-cota-main', get_template_directory_uri() . '/assets/main.js', array(), '2.0.0', true);
    
    // Localize script for AJAX
    wp_localize_script('guilherme-cota-main', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('guilherme_cota_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'guilherme_cota_enqueue_scripts');

// Theme setup
function guilherme_cota_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    
    // Add custom image sizes
    add_image_size('project-thumbnail', 400, 300, true);
    add_image_size('hero-image', 1200, 600, true);
    
    // Register navigation menus
    register_nav_menus(array(
        'header' => esc_html__('Header Menu', 'guilherme-cota'),
        'footer' => esc_html__('Footer Menu', 'guilherme-cota'),
    ));
}
add_action('after_setup_theme', 'guilherme_cota_setup');

// Register block patterns
function guilherme_cota_register_patterns() {
    // Register pattern categories
    register_block_pattern_category('guilherme-cota', array(
        'label' => __('Guilherme Cota', 'guilherme-cota'),
    ));
}
add_action('init', 'guilherme_cota_register_patterns');

// Custom post types
function guilherme_cota_custom_post_types() {
    // Projects post type
    register_post_type('projeto', array(
        'labels' => array(
            'name' => __('Projetos', 'guilherme-cota'),
            'singular_name' => __('Projeto', 'guilherme-cota'),
            'add_new' => __('Adicionar Projeto', 'guilherme-cota'),
            'add_new_item' => __('Adicionar Novo Projeto', 'guilherme-cota'),
            'edit_item' => __('Editar Projeto', 'guilherme-cota'),
            'new_item' => __('Novo Projeto', 'guilherme-cota'),
            'view_item' => __('Ver Projeto', 'guilherme-cota'),
            'search_items' => __('Buscar Projetos', 'guilherme-cota'),
            'not_found' => __('Nenhum projeto encontrado', 'guilherme-cota'),
            'not_found_in_trash' => __('Nenhum projeto encontrado na lixeira', 'guilherme-cota'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest' => true,
    ));
    
    // Services post type
    register_post_type('servico', array(
        'labels' => array(
            'name' => __('Serviços', 'guilherme-cota'),
            'singular_name' => __('Serviço', 'guilherme-cota'),
            'add_new' => __('Adicionar Serviço', 'guilherme-cota'),
            'add_new_item' => __('Adicionar Novo Serviço', 'guilherme-cota'),
            'edit_item' => __('Editar Serviço', 'guilherme-cota'),
            'new_item' => __('Novo Serviço', 'guilherme-cota'),
            'view_item' => __('Ver Serviço', 'guilherme-cota'),
            'search_items' => __('Buscar Serviços', 'guilherme-cota'),
            'not_found' => __('Nenhum serviço encontrado', 'guilherme-cota'),
            'not_found_in_trash' => __('Nenhum serviço encontrado na lixeira', 'guilherme-cota'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-tools',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'guilherme_cota_custom_post_types');

// Custom fields for projects
function guilherme_cota_project_meta_boxes() {
    add_meta_box(
        'project_details',
        __('Detalhes do Projeto', 'guilherme-cota'),
        'guilherme_cota_project_details_callback',
        'projeto',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'guilherme_cota_project_meta_boxes');

function guilherme_cota_project_details_callback($post) {
    wp_nonce_field('guilherme_cota_project_nonce', 'guilherme_cota_project_nonce_field');
    
    $technologies = get_post_meta($post->ID, '_project_technologies', true);
    $demo_url = get_post_meta($post->ID, '_project_demo_url', true);
    $github_url = get_post_meta($post->ID, '_project_github_url', true);
    $client = get_post_meta($post->ID, '_project_client', true);
    $year = get_post_meta($post->ID, '_project_year', true);
    
    echo '<table class="form-table">';
    echo '<tr><th scope="row"><label for="project_technologies">Tecnologias</label></th>';
    echo '<td><input type="text" id="project_technologies" name="project_technologies" value="' . esc_attr($technologies) . '" class="regular-text" /></td></tr>';
    
    echo '<tr><th scope="row"><label for="project_demo_url">URL da Demo</label></th>';
    echo '<td><input type="url" id="project_demo_url" name="project_demo_url" value="' . esc_attr($demo_url) . '" class="regular-text" /></td></tr>';
    
    echo '<tr><th scope="row"><label for="project_github_url">URL do GitHub</label></th>';
    echo '<td><input type="url" id="project_github_url" name="project_github_url" value="' . esc_attr($github_url) . '" class="regular-text" /></td></tr>';
    
    echo '<tr><th scope="row"><label for="project_client">Cliente</label></th>';
    echo '<td><input type="text" id="project_client" name="project_client" value="' . esc_attr($client) . '" class="regular-text" /></td></tr>';
    
    echo '<tr><th scope="row"><label for="project_year">Ano</label></th>';
    echo '<td><input type="number" id="project_year" name="project_year" value="' . esc_attr($year) . '" min="2000" max="2030" /></td></tr>';
    echo '</table>';
}

function guilherme_cota_save_project_meta($post_id) {
    if (!isset($_POST['guilherme_cota_project_nonce_field'])) return;
    if (!wp_verify_nonce($_POST['guilherme_cota_project_nonce_field'], 'guilherme_cota_project_nonce')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['project_technologies'])) {
        update_post_meta($post_id, '_project_technologies', sanitize_text_field($_POST['project_technologies']));
    }
    if (isset($_POST['project_demo_url'])) {
        update_post_meta($post_id, '_project_demo_url', esc_url_raw($_POST['project_demo_url']));
    }
    if (isset($_POST['project_github_url'])) {
        update_post_meta($post_id, '_project_github_url', esc_url_raw($_POST['project_github_url']));
    }
    if (isset($_POST['project_client'])) {
        update_post_meta($post_id, '_project_client', sanitize_text_field($_POST['project_client']));
    }
    if (isset($_POST['project_year'])) {
        update_post_meta($post_id, '_project_year', absint($_POST['project_year']));
    }
}
add_action('save_post', 'guilherme_cota_save_project_meta');

// Contact form handling
function guilherme_cota_handle_contact_form() {
    check_ajax_referer('guilherme_cota_nonce', 'nonce');
    
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json_error('Todos os campos obrigatórios devem ser preenchidos.');
        return;
    }
    
    if (!is_email($email)) {
        wp_send_json_error('Por favor, insira um e-mail válido.');
        return;
    }
    
    // Prepare email
    $to = get_option('admin_email');
    $email_subject = 'Novo contato do site: ' . $subject;
    $email_message = "Nome: $name\n";
    $email_message .= "E-mail: $email\n";
    $email_message .= "Assunto: $subject\n\n";
    $email_message .= "Mensagem:\n$message";
    
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . $name . ' <' . $email . '>',
        'Reply-To: ' . $email
    );
    
    // Send email
    $sent = wp_mail($to, $email_subject, $email_message, $headers);
    
    if ($sent) {
        wp_send_json_success('Mensagem enviada com sucesso! Retornarei em breve.');
    } else {
        wp_send_json_error('Erro ao enviar mensagem. Tente novamente.');
    }
}
add_action('wp_ajax_contact_form', 'guilherme_cota_handle_contact_form');
add_action('wp_ajax_nopriv_contact_form', 'guilherme_cota_handle_contact_form');

// Custom widgets area
function guilherme_cota_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget Area', 'guilherme-cota'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add widgets here to appear in your footer.', 'guilherme-cota'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'guilherme_cota_widgets_init');

// Custom excerpt length
function guilherme_cota_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'guilherme_cota_excerpt_length');

// SEO and Performance optimizations
function guilherme_cota_head_optimizations() {
    // Remove unnecessary WordPress features
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    
    // Add preconnect for performance
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
    
    // Add structured data for SEO
    if (is_front_page()) {
        echo '<script type="application/ld+json">';
        echo json_encode(array(
            '@context' => 'https://schema.org',
            '@type' => 'Person',
            'name' => 'Guilherme Cota',
            'jobTitle' => 'Consultor Técnico e Desenvolvedor Full Stack',
            'url' => home_url(),
            'sameAs' => array(
                'https://github.com/guilhermecota',
                'https://linkedin.com/in/guilhermecota'
            ),
            'address' => array(
                '@type' => 'PostalAddress',
                'addressLocality' => 'Ouro Preto',
                'addressRegion' => 'MG',
                'addressCountry' => 'BR'
            )
        ));
        echo '</script>';
    }
}
add_action('wp_head', 'guilherme_cota_head_optimizations');

// Security enhancements
function guilherme_cota_security() {
    // Hide WordPress version
    remove_action('wp_head', 'wp_generator');
    
    // Disable XML-RPC
    add_filter('xmlrpc_enabled', '__return_false');
    
    // Remove WordPress version from RSS
    add_filter('the_generator', '__return_empty_string');
}
add_action('init', 'guilherme_cota_security');

// Custom logo support
function guilherme_cota_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true, 
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'guilherme_cota_custom_logo_setup');

// Customizer options
function guilherme_cota_customize_register($wp_customize) {
    // Contact section
    $wp_customize->add_section('contact_section', array(
        'title'    => __('Configurações de Contato', 'guilherme-cota'),
        'priority' => 30,
    ));
    
    // Phone number
    $wp_customize->add_setting('contact_phone', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('contact_phone', array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'contact_section',
        'label'       => 'Telefone',
        'description' => 'Número de telefone para contato',
    ));
    
    // Email
    $wp_customize->add_setting('contact_email', array(
        'default'           => get_option('admin_email'),
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('contact_email', array(
        'type'        => 'email',
        'priority'    => 20,
        'section'     => 'contact_section',
        'label'       => 'E-mail',
        'description' => 'E-mail para contato',
    ));
    
    // Social links
    $wp_customize->add_setting('social_github', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('social_github', array(
        'type'        => 'url',
        'priority'    => 30,
        'section'     => 'contact_section',
        'label'       => 'GitHub URL',
    ));
    
    $wp_customize->add_setting('social_linkedin', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('social_linkedin', array(
        'type'        => 'url',
        'priority'    => 40,
        'section'     => 'contact_section',
        'label'       => 'LinkedIn URL',
    ));
}
add_action('customize_register', 'guilherme_cota_customize_register');