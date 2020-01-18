<?php
class CoveragePublicTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers CoveredClass::<global>
     */
    public function testSomething()
    {
        $o = new CoveredClass;
        $o->publicMethod();
    }
}
