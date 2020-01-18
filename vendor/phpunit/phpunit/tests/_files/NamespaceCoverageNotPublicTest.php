<?php
class NamespaceCoverageNotPublicTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers Foo\CoveredClass::<!global>
     */
    public function testSomething()
    {
        $o = new Foo\CoveredClass;
        $o->publicMethod();
    }
}
