<?php

declare(strict_types=1);

require_once __DIR__ . '/../public/index.php';

if (!headers_sent()) {
    header("HTTP/1.1 404 Not found");

    http_response_code(404);
}
