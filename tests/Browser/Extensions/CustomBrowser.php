<?php

namespace Tests\Browser\Extensions;

use Laravel\Dusk\Browser;
use Facebook\WebDriver\WebDriverBy;
class CustomBrowser extends Browser
{
    /**
     * Take a full-page screenshot.
     *
     * @param string $path
     * @return void
     */
    public function screenshotFullPage($path)
    {
        $driver = $this->driver;

        // Get the dimensions of the page
        $totalWidth = $driver->executeScript('return document.body.scrollWidth');
        $totalHeight = $driver->executeScript('return document.body.scrollHeight');

        // Set window size to match page dimensions
        $driver->manage()->window()->setSize(new \Facebook\WebDriver\WebDriverDimension($totalWidth, $totalHeight));

        // Take the screenshot
        $driver->takeScreenshot($path);
    }
}
