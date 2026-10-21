<?php
function getGreeting(): string {
    return "Hello from PHP in Docker! ";
}

if (php_sapi_name() === 'cli') {
    echo getGreeting() . PHP_EOL;
}