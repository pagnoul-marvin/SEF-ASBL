<?php
const BASE_PATH = __DIR__ . '/';

require_once BASE_PATH. '../../../vendor/autoload.php';

use Core\View;
use JetBrains\PhpStorm\NoReturn;


add_filter('use_block_editor_for_post', '__return_false');

register_nav_menu('main', 'Navigation principale, en-tête du site');
register_nav_menu('footer', 'Navigation de pied de page');
register_nav_menu('socials', 'Navigation de réseaux sociaux');
register_nav_menu('contact', 'Navigation de contacts');
register_nav_menu('partners', 'Navigation des partenaires');


function dw_asset(string $file): string
{
    return get_template_directory_uri() . '/public/' . $file;
}

function dw_get_navigation_links(string $location): array
{
    $locations = get_nav_menu_locations();
    $menuId = $locations[$location] ?? null;

    if(is_null($menuId)) {
        return [];
    }

    $items = wp_get_nav_menu_items($menuId);

    foreach ($items as $key => $item) {
        $items[$key] = new stdClass();
        $items[$key]->url = $item->url;
        $items[$key]->label = $item->title;
    }

    return $items;
}

function base_path(string $path = ''): string
{
    return BASE_PATH . "{$path}";
}

function component(string $path, array $data = []): void
{
    View::component($path, $data);
}

function get_page_description() :string
{
    $page_id = get_the_ID();

    $description = '';

    if ($page_id === 12) {
        $description .= 'La page d\'accueil du site de l\'ASBL SEF';
    }elseif ($page_id === 22) {
        $description .= 'La page de la F.A.Q. du site de l\'ASBL SEF';
    }elseif ($page_id === 24) {
        $description .= 'La page de la galerie photos du site de l\'ASBL SEF';
    }elseif ($page_id === 16) {
        $description .= 'La page de nos derniers projets du site de l\'ASBL SEF';
    }elseif ($page_id === 14) {
        $description .= 'La page de nos magasins du site de l\'ASBL SEF';
    }elseif ($page_id === 18) {
        $description .= 'La page pour nous contacter du site de l\'ASBL SEF';
    }elseif ($page_id === 20) {
        $description .= 'La page pour nous soutenir du site de l\'ASBL SEF';
    }elseif ($page_id === 10) {
        $description .= 'La page de qui nous sommes du site de l\'ASBL SEF';
    }elseif ($page_id === 28) {
        $description .= 'La page des mentions légales du site de l\'ASBL SEF';
    } else {
        $description .= 'Une page du site de l\'ASBL SEF';
    }

    return $description;
}


#[NoReturn] function dd(mixed ...$vars): void
{
    foreach ($vars as $var) {
        var_dump($var);
        echo '<hr>';
    }
    exit();
}
