<?php
use App\User;


class IntegrationTest extends PHPUnit\Framework\TestCase
{
    public function testIntegration()
    {
        // Test here the integration beetwen User and Database classes. This test should clearly 
        //state what is wrong with this app. Assert here that for example 'Adam' (pay attention 
        //that the first letter is upper-case) is equal to the result of the getUser function 
        //from the User class. You must not instantiate Database class - it is extended by User class.

        $user = new User();
        $name = $user->getUser(1);

        $this->assertEquals('Adam', $name);

        // $this->markTestIncomplete('TO DO: test here the integration beetwen User and Database classes');
    }

}   