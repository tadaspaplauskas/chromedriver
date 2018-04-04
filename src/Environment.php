<?php

namespace ChromeDriverStandalone;

class Environment
{
    public static function setup()
    {
        return putenv('webdriver.chrome.driver=' . self::getPath());
    }

    public static function getPath()
    {
        if (PHP_OS === 'WINNT' || strpos(php_uname(), 'Microsoft') !== false) {
            return self::getWinPath();
        }
        else if (PHP_OS === 'Darwin') {
            return self::getMacPath();
        }
        else {
            return self::getLinuxPath();
        }
    }

    public static function getWinPath()
    {
        return self::getBinPath('chromedriver-win.exe');
    }

    public static function getMacPath()
    {
        return self::getBinPath('chromedriver-mac');
    }

    public static function getLinuxPath()
    {
        return self::getBinPath('chromedriver-linux');
    }

    private static function getBinPath($driver)
    {
        return realpath(__DIR__ . '/../bin/' . $driver);
    }
}
