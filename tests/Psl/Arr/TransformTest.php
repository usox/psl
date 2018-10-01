<?php declare(strict_types=1);

namespace Usox\Psl\Arr;

class TransformTest extends \PHPUnit\Framework\TestCase {

	public function testCombineReturnsCombineedArray(): void {
		$keys = ['one', 'two'];
		$values = ['eno', 'owt'];

		$this->assertSame(
			['one' => 'eno', 'two' => 'owt'],
			combine($keys, $values)
		);
	}

	public function testKeysToLowercaseTransformsKeys(): void {
		$dict = ['AB' => 'CD', 'eF' => 'GH'];

		$this->assertSame(
			['ab' => 'CD', 'ef' => 'GH'],
			keysToLowercase($dict)
		);
	}

	public function testKeysToUpercaseTransformsKeys(): void {
		$dict = ['ab' => 'cd', 'Ef' => 'gh'];

		$this->assertSame(
			['AB' => 'cd', 'EF' => 'gh'],
			keysToUppercase($dict)
		);
	}
}
