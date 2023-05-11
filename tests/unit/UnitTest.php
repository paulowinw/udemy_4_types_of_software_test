<?php
use App\Greeting;


class UnitTest extends PHPUnit\Framework\TestCase
{
    public function testGreetings()
    {
        $greeting5 = new Greeting(5);
        $greeting12 = new Greeting(12);
        $greeting17 = new Greeting(17);
        $greeting24 = new Greeting(24);

        $daytime5 = $greeting5->getGreeting();
        $daytime12 = $greeting12->getGreeting();
        $daytime17 = $greeting17->getGreeting();
        $daytime24 = $greeting24->getGreeting();

        $this->assertEquals('Good morning', $daytime5);
        $this->assertEquals('Good afternoon', $daytime12);
        $this->assertEquals('Good evening', $daytime17);
        $this->assertEquals('Good night', $daytime24);

        // Test all four cases here from Greeting class
        // $this->markTestIncomplete('TO DO: test all four cases here from Greeting class');
    }

}   