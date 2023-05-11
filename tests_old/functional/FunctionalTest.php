<?php


class FunctionalTest extends PHPUnit\Framework\TestCase
{
    public function testResponse()
    {
        /**
         * In functional tests typically we bootstrap entire application and call a specific route. Here for simplicity you can use built-in PHP function file_get_contents() with the url address of the app as the argument. Make two assertions here:
         * 
         * 1. The response contains 'This is an awesome App!' sentence  - it will pass
         * 2. The response matches the following regular expression pattern: /Good (morning|afternoon|evening|nigth) [A-Z]{1}[a-z]+/  - it will fail because the first letter of the user name (from db) is not upper-case which [A-Z]{1} part of regex is responsible for checking this
         * 
         * The second test that fails, will tell you what's wrong. But this will not be as clearly visible as in integration test that you should later write.
         * 
         */

        $this->markTestIncomplete('TO DO: write functional test');
    }

}   