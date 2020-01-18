<?php

/**
 * @coversDefaultClass \NamespaceOne
 * @coversDefaultClass \AnotherDefault\Name\Space\Does\Not\Work
 */
class CoverageTwoDefaultClassAnnotations
{
    /**
     * @covers Foo\CoveredClass::<global>
     */
    public function testSomething()
    {
        $o = new Foo\CoveredClass;
        $o->publicMethod();
    }
}
