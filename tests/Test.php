<?php
namespace chillerlan\TestLibTest;

use codemasher\TestLib\TestClass;
use PHPUnit\Framework\TestCase;

class Test extends TestCase{

	public function testStuff(){
		$test = new TestClass;
		$this->assertTrue($test->test());
	}

}
