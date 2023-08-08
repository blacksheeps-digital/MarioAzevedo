<?php
/*
Plugin Name: Custom Page Creator
Plugin URI: https://seusite.com
Description: Plugin para criar páginas personalizadas com novos templates.
Version: 1.0
Author: Seu Nome
Author URI: https://seusite.com
License: GPL2
*/

// Função para criar a página com o novo template
function custom_create_page_with_template($page_name, $template_name) {
    $new_page_data = array(
        'post_title' => $page_name,
        'post_content' => '',
        'post_status' => 'publish',
        'post_type' => 'page',
    );

    $new_page_id = wp_insert_post($new_page_data);

    if ($new_page_id) {
        $new_page_template = 'page-' . $template_name . '.php';
        update_post_meta($new_page_id, '_wp_page_template', $new_page_template);

        // Criar o arquivo PHP dentro da pasta do tema
        $theme_dir = get_stylesheet_directory();
        $file_content = '<?php' . PHP_EOL . '/*' . PHP_EOL . 'Template Name: ' . $page_name . PHP_EOL . '*/' . PHP_EOL . 'get_header();' . PHP_EOL . '?>' . PHP_EOL . PHP_EOL . '<!-- Conteúdo da página ' . $page_name . ' -->' . PHP_EOL . PHP_EOL . '<?php' . PHP_EOL . 'get_footer();' . PHP_EOL . '?>';
        $file_path = $theme_dir . '/templates/page-' . $template_name . '.php';
        file_put_contents($file_path, $file_content);
    }
}

// Função para exibir um formulário na página de administração para criar páginas personalizadas
function custom_page_creator_menu() {
    add_menu_page(
        'Custom Page Creator',
        'Custom Page Creator',
        'manage_options',
        'custom-page-creator',
        'custom_page_creator_form',
        'dashicons-plus'
    );
}

// Função para exibir o formulário
function custom_page_creator_form() {
    if (isset($_POST['create_page'])) {
        $page_name = sanitize_text_field($_POST['page_name']);
        $template_name = sanitize_text_field($_POST['template_name']);

        custom_create_page_with_template($page_name, $template_name);
    }
    ?>
    <div class="wrap">
        <h1>Custom Page Creator</h1>
        <form method="post">
            <label for="page_name">Nome da Página:</label>
            <input type="text" name="page_name" id="page_name" required>
            <label for="template_name">Nome do Template:</label>
            <input type="text" name="template_name" id="template_name" required>
            <input type="submit" name="create_page" value="Criar Página" class="button button-primary">
        </form>
    </div>
    <?php
}

// Hook para adicionar o menu do plugin ao painel de administração
add_action('admin_menu', 'custom_page_creator_menu');
