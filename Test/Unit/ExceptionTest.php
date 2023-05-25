<?php
declare(strict_types=1);
namespace App\Test\Unit;

use App\App\Reverse;
use PHPUnit\Framework\TestCase;

class ExceptionTest extends TestCase {
    private Reverse $object;
    private $anInvalidArgument;

    protected function setUp() :void {
        $this->object = new Reverse();
        $this->anInvalidArgument = NULL;
    }

    /**
    * @covers Reverse::reverse
    */

    public function testException() :void {
        $this->expectException(\TypeError::class);
        $this->object->reverse($anInvalidArgument);
    }
}