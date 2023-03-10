<?php

namespace App\Http;

use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

class Request 
{
    public function __construct(
        public readonly array $get,
        public readonly array $post,
        public readonly array $cookies,
        public readonly array $files,
        public readonly array $server,
    ) {
    }

    public static function createFromGlobals(): static
    {
        return new static($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER);
    }
}
