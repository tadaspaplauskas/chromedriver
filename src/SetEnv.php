<?php

if (PHP_OS === 'WINNT' || strpos(php_uname(), 'Microsoft') !== false) {
    $driver = 'chromedriver-win';
}
else if (PHP_OS === 'Darwin') {
    $driver = 'chromedriver-mac';
}
else {
    $driver = 'chromedriver-linux';
}

putenv('webdriver.chrome.driver=' . realpath('../bin/' . $driver));
