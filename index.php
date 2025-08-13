<?php
if (function_exists('opcache_reset')) {
    // Reset the entire OPcache
    opcache_reset();
    echo "OPcache cleared successfully.";
} else {
    echo "OPcache is not enabled.";
}
clearstatcache();

echo "Hello, World!".PHP_EOL;
echo "Hello, World! 2".PHP_EOL;
echo "Hello, World! 3".PHP_EOL;
echo "Hello, World! 4".PHP_EOL;
echo "Hello, World! 5".PHP_EOL;

$env_test = getenv($_GET['key'] ?? 'APP_KEY');
echo "env_test: ".$env_test;

echo '<pre>';
echo 'getenv():';
var_dump(getenv());
echo '$_ENV:';
var_dump($_ENV);
echo '$_SERVER:';
var_dump($_SERVER);

phpinfo();