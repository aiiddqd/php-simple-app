<?php

echo "Hello, World!" . PHP_EOL;

$env_test = getenv('COOLIFY_CONTAINER_NAME');
echo "env_test: " . $env_test;