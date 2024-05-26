<?php

namespace Core;

use JetBrains\PhpStorm\NoReturn;

class Response
{

    public const SEE_OTHER = 303;

    #[NoReturn] public static function redirect(): void
    {
        http_response_code(self::SEE_OTHER);
        wp_redirect(home_url().'/une-erreur-est-survenue/');
        exit();
    }

}