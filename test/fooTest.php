<?php

require_once 'PHPUnit/Framework/TestCase.php';

class FooTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        /* Setup Routine */
    }

    public function tearDown()
    {
        /* Tear Down Routine */
    }

    public function testFoo()
    {
        $foo = new Foo;
        $this->assertEquals($foo->bar(), 'baz');
    }

}

