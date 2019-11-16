<?php
namespace chillerlan\TestLibTest;

use codemasher\TestLib\TestClass;
use PHPUnit\Framework\TestCase;

class Test extends TestCase{

	public function testStuff():void{
		$test = new TestClass;
		$this::assertTrue($test->test());
	}

}
