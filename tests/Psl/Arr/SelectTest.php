<?php declare(strict_types=1);

namespace Usox\Psl\Arr;

class SelectTest extends \PHPUnit\Framework\TestCase {

	public function testChunkReturnsThreeChunksWithNewKeys(): void {
		$list = ['one', 'two', 'three'];

		$chunks = chunk($list, 1);

		$this->assertSame(
			[['one'], ['two'], ['three']],
			$chunks
		);
	}

	public function testChunkReturnsTwoChunksWithPreservedKeys(): void {
		$list = ['one' => 'eno', 'two' => 'owt'];

		$chunks = chunk($list, 1, true);

		$this->assertSame(
			[['one' => 'eno'], ['two' => 'owt']],
			$chunks
		);
	}
}
