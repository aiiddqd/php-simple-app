<?php

echo "Hello, World!" . PHP_EOL;

$env_test = getenv($_GET['key'] ?? 'APP_KEY');
echo "env_test: " . $env_test;

