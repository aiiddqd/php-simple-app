<?php

echo "Hello, World!" . PHP_EOL;

$env_test = getenv($_GET['key'] ?? 'APP_KEY');
echo "env_test: " . $env_test;

echo '<pre>';
echo '$_ENV:';
var_dump($_ENV);
echo '$_SERVER:';
var_dump($_SERVER);

phpinfo();