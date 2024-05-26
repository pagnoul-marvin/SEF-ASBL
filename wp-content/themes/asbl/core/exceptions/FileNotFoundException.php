<?php

namespace Core\Exceptions;

use Exception;
use JetBrains\PhpStorm\NoReturn;

class FileNotFoundException extends Exception
{
    public function __construct()
    {
        parent::__construct();
    }

    #[NoReturn] public static function redirect(): void
    {
        wp_redirect(home_url().'/une-erreur-est-survenue/');
        exit();
    }
}