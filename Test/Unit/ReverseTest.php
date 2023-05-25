<?php
declare(strict_types=1);
namespace App\Test\Unit;

use App\App\Reverse;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * @uses Reverse 
 */

class ReverseTest extends TestCase {

    private Reverse $object;

    private $str;

    protected function setUp() :void {
        $this->str = str_shuffle("gdsfh16 3fszaf");
        $this->object = new Reverse();
    }

    /**
    * @covers Reverse::reverse
    */

    public function testString() :void {
        $result = $this->object->reverse($this->str);
        $this->assertNotSame($this->object::class, $result);
    }

    /**
    * @covers Reverse::reverse
    */

    public function testNotString() :void {
        $result = $this->object->reverse(NULL);
        $this->assertNull($result);
    }
}
