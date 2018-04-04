# ChromeDriverStandalone

This PHP package comes with ChromeDriver standalone executables for every major OS (MacOS, Windows, Linux). It can also detect which OS you're using and inject the correct `webdriver.chrome.driver` environment variable value.

Executables are published to vendor/bin in case you need them.

## Install

```
composer require tadaspaplauskas/chromedriver-standalone

composer require facebook/webdriver
```

## Use

```php
<?php
use ChromeDriverStandalone\Environment;
use Facebook\WebDriver\Chrome\ChromeDriver;

Environment::setup();

$driver = ChromeDriver::start();

echo $driver->get('https://raw.githubusercontent.com/tadaspaplauskas/chromedriver-standalone/master/README.md')
    ->getPageSource();

$driver->quit();

```

Other available methods:
```
// returns full path to the detected executable
Environment::getPath();

// returns full path to MacOS executable
Environment::getMacPath();

// returns full path to windows executable
Environment::getWinPath();

// returns full path to Linux executable
Environment::getLinuxPath();
```

## TODO
Test if this works on windows

## Contribute

I will try my best to update executables every once in a while, but you can submit a pull request if I miss a release.
