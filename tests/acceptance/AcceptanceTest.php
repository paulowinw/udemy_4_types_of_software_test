<?php

use PHPUnit\Framework\TestCase;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;

class AcceptanceTest extends TestCase
{
    /**
     * @var RemoteWebDriver
     */
    protected $webDriver;

    public function setUp(): void
    {
        $host = 'http://localhost:4444/wd/hub'; // Selenium WebDriver server host

        $capabilities = DesiredCapabilities::chrome();
        $capabilities->setCapability('chromeOptions', ['w3c' => false]);

        $this->webDriver = RemoteWebDriver::create($host, $capabilities);
        $this->webDriver->get('http://localhost:8000/');
    }

    public function tearDown(): void
    {
        $this->webDriver->quit();
    }

    public function testContent()
    {
        $this->webDriver->get('http://localhost:8000/');
        $elem = $this->webDriver->findElement(WebDriverBy::className('blue'));
        $this->assertStringContainsString('This is an awesome App!', $this->webDriver->getPageSource());
        $this->assertMatchesRegularExpression ('/^Good (morning|afternoon|evening|night) [A-Z]{1}[a-z]+$/', $elem->getText());
        // Note: The regular expression in the assertRegExp function may need to be adjusted according to your specific needs.
    }
}
