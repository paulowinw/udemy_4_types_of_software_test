<?php

class AcceptanceTest extends PHPUnit_Extensions_Selenium2TestCase
{
    public function setUp()
    {
        $this->setBrowserUrl('http://localhost:8000/');
        $this->setBrowser('chrome');
        $this->setDesiredCapabilities(['chromeOptions' => ['w3c' => false]]); // phpunit-selenium does not support W3C mode yet
    }

    public function testContent()
    {
        $this->url('');
        $elem = $this->byClassName('blue');
        $this->assertContains('This is an awesome App!', $this->source());
        $this->assertRegExp('/^Good (morning|afternoon|evening|nigth) [A-Z]{1}[a-z]+$/', $elem->text()); // this test will fail but it will not tell you what's wrong, only an integration test will tell you clearly what's wrong with the app. If you fix that this assertion should pass.
    }
}