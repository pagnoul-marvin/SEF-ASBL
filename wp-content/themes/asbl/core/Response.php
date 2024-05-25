<?php

namespace Core;

use JetBrains\PhpStorm\NoReturn;

class Response
{

    #[NoReturn] public static function redirect(): void
    {
        wp_redirect(home_url().'/une-erreur-est-survenue');
    }

}