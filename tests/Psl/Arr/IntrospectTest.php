<?php declare(strict_types=1);

namespace Usox\Psl;

class IntrospectTTest extends \PHPUnit\Framework\TestCase {

	public function testContainsReturnsTrueIfContained(): void {
		$this->assertTrue(
			Arr\contains(['foo', 'bar'], 'bar')
		);
	}

	public function testContainsReturnsFalseIfNotContained(): void {
		$this->assertFalse(
			Arr\contains(['foo', 'bar'], 'foobar')
		);
	}

	public function testContainsKeyReturnsTrueIfContained(): void {
		$this->assertTrue(
			Arr\containsKey(['foo' => 'oof', 'bar' => 'rab'], 'foo')
		);
	}

	public function testContainsKeyReturnsFalseIfNotContained(): void {
		$this->assertFalse(
			Arr\containsKey(['foo' => 'oof', 'bar' => 'rab'], 'foobar')
		);
	}

	public function testIsEmptyReturnsTrueIfEmpty(): void {
		$this->assertTrue(
			Arr\isEmpty([])
		);
	}

	public function testIsEmptyReturnsFalseIfNotEmpty(): void {
		$this->assertFalse(
			Arr\isEmpty(['snoosnoo'])
		);
	}
}
