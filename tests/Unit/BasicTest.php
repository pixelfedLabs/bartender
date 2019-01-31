<?php

namespace Pixelfed\Bartender\Tests\Unit;

use Pixelfed\Bartender\Tests\TestCase;

class BasicTest extends TestCase {

	/** @test */
	public function sound_check()
	{
		$this->assertTrue(class_exists('Pixelfed\Bartender\BartenderClass'));
	}

}