<?php

declare(strict_types=1);

namespace App\Test\Unit;

use App\App\Reverse;
use PHPUnit\Framework\TestCase;

/**
 * @uses Reverse 
 */

class ReverseTest extends TestCase 
{

    private Reverse $object;

    private $str;

    protected function setUp() :void 
    {
        $this->str = str_shuffle("gdsfh16 3fszaf");
        $this->object = new Reverse();
    }

    public function addDataProvider() 
    {

        return array(
            array("gdsfh fszaf","hfsdg fazsf"),
            array("1234515", "1234515"),
        );
    }

    /**
    * @dataProvider addDataProvider
    * @covers Reverse::reverse
    */

    public function testString($a, $b) :void 
    {
        $result = $this->object->reverse($a);
        $this->assertSame($result, $b);
    }
}