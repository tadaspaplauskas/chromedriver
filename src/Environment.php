<?php

namespace ChromeDriverStandalone;

class Environment
{
    public static function setup()
    {
        if (PHP_OS === 'WINNT' || strpos(php_uname(), 'Microsoft') !== false) {
            $driver = 'chromedriver-win.exe';
        }
        else if (PHP_OS === 'Darwin') {
            $driver = 'chromedriver-mac';
        }
        else {
            $driver = 'chromedriver-linux';
        }

        $fullPath = realpath(__DIR__ . '/../bin/' . $driver);

        return putenv('webdriver.chrome.driver=' . $fullPath);
    }
}
