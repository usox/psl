<?php declare(strict_types=1);

namespace Usox\Psl;

class TransformTest extends \PHPUnit\Framework\TestCase {

	public function testCapitalizeWorks(): void {
		$this->assertSame(
			Str\capitalize('foobar'),
			'Foobar'
		);
	}

	public function testCapitalizeWordsWorks(): void {
		$this->assertSame(
			Str\capitalize_words('im a lumberjack and im allright'),
			'Im A Lumberjack And Im Allright'
		);
	}
}
