<?php
/**
 * Guilherme Cota Portfolio Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Enqueue Tailwind CSS and theme assets
function guilherme_cota_enqueue_scripts() {
    // Enqueue Tailwind CSS via CDN
    wp_enqueue_style('tailwind-css', 'https://cdn.tailwindcss.com', array(), '3.4.0');
    
    // Enqueue custom styles after Tailwind
    wp_enqueue_style('guilherme-cota-style', get_stylesheet_uri(), array('tailwind-css'), '1.0.0');
    
    // Enqueue JavaScript
    wp_enqueue_script('guilherme-cota-main', get_template_directory_uri() . '/assets/main.js', array(), '1.0.0', true);
    
    // Configure Tailwind for WordPress
    wp_add_inline_script('tailwind-css', '
        tailwind.config = {
            darkMode: "class",
            content: [".//*.php", "./patterns/*.php"],
            theme: {
                extend: {
                    colors: {
                        primary: "hsl(var(--primary))",
                        secondary: "hsl(var(--secondary))",
                        accent: "hsl(var(--accent))",
                        background: "hsl(var(--background))",
                        foreground: "hsl(var(--foreground))"
                    }
                }
            }
        }
    ');
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
    add_theme_support('editor-styles');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'guilherme-cota'),
        'footer' => __('Footer Menu', 'guilherme-cota'),
    ));
    
    // Add editor styles
    add_editor_style('assets/editor-style.css');
}
add_action('after_setup_theme', 'guilherme_cota_setup');

// Enqueue scripts and styles
function guilherme_cota_scripts() {
    // Main stylesheet
    wp_enqueue_style('guilherme-cota-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Main JavaScript
    wp_enqueue_script('guilherme-cota-main', get_template_directory_uri() . '/assets/main.js', array(), '1.0.0', true);
    
    // Localize script for AJAX
    wp_localize_script('guilherme-cota-main', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('guilherme_cota_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'guilherme_cota_scripts');

// Register block patterns
function guilherme_cota_register_patterns() {
    if (function_exists('register_block_pattern_category')) {
        register_block_pattern_category('guilherme-cota', array(
            'label' => __('Guilherme Cota Portfolio', 'guilherme-cota')
        ));
    }
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
        update_post_meta($post_id, '_project_year', sanitize_text_field($_POST['project_year']));
    }
}
add_action('save_post', 'guilherme_cota_save_project_meta');

// Contact form handling
function guilherme_cota_handle_contact_form() {
    if (!wp_verify_nonce($_POST['nonce'], 'guilherme_cota_nonce')) {
        wp_die('Security check failed');
    }
    
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);
    $company = sanitize_text_field($_POST['company']);
    $budget = sanitize_text_field($_POST['budget']);
    
    // Send email
    $to = get_option('admin_email');
    $subject = 'Nova mensagem de contato - ' . get_bloginfo('name');
    $body = "Nome: {$name}\n";
    $body .= "Email: {$email}\n";
    $body .= "Empresa: {$company}\n";
    $body .= "Orçamento: {$budget}\n";
    $body .= "Mensagem: {$message}\n";
    
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    if (wp_mail($to, $subject, $body, $headers)) {
        wp_send_json_success('Mensagem enviada com sucesso!');
    } else {
        wp_send_json_error('Erro ao enviar mensagem. Tente novamente.');
    }
}
add_action('wp_ajax_contact_form', 'guilherme_cota_handle_contact_form');
add_action('wp_ajax_nopriv_contact_form', 'guilherme_cota_handle_contact_form');

// Customizer options
function guilherme_cota_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('hero_section', array(
        'title' => __('Seção Hero', 'guilherme-cota'),
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('hero_title', array(
        'default' => 'Consultor técnico e desenvolvedor full stack',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label' => __('Título Principal', 'guilherme-cota'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('hero_subtitle', array(
        'default' => 'Ajudando pessoas e empresas a criarem soluções digitais robustas e escaláveis',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('hero_subtitle', array(
        'label' => __('Subtítulo', 'guilherme-cota'),
        'section' => 'hero_section',
        'type' => 'textarea',
    ));
    
    // Contact Info
    $wp_customize->add_section('contact_info', array(
        'title' => __('Informações de Contato', 'guilherme-cota'),
        'priority' => 40,
    ));
    
    $wp_customize->add_setting('contact_email', array(
        'default' => 'contato@guilhermecota.dev',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('contact_email', array(
        'label' => __('Email', 'guilherme-cota'),
        'section' => 'contact_info',
        'type' => 'email',
    ));
    
    $wp_customize->add_setting('contact_phone', array(
        'default' => '+55 (31) 99999-9999',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('contact_phone', array(
        'label' => __('Telefone', 'guilherme-cota'),
        'section' => 'contact_info',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('contact_location', array(
        'default' => 'Ouro Preto, MG • Atendo todo o Brasil',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('contact_location', array(
        'label' => __('Localização', 'guilherme-cota'),
        'section' => 'contact_info',
        'type' => 'text',
    ));
}
add_action('customize_register', 'guilherme_cota_customize_register');

// Helper functions
function guilherme_cota_get_projects($limit = -1) {
    return get_posts(array(
        'post_type' => 'projeto',
        'posts_per_page' => $limit,
        'post_status' => 'publish'
    ));
}

function guilherme_cota_get_services($limit = -1) {
    return get_posts(array(
        'post_type' => 'servico',
        'posts_per_page' => $limit,
        'post_status' => 'publish'
    ));
}

// Block editor assets
function guilherme_cota_block_editor_assets() {
    wp_enqueue_script(
        'guilherme-cota-block-editor',
        get_template_directory_uri() . '/assets/block-editor.js',
        array('wp-blocks', 'wp-dom-ready', 'wp-edit-post'),
        '1.0.0'
    );
}
add_action('enqueue_block_editor_assets', 'guilherme_cota_block_editor_assets');