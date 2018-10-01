<?php declare(strict_types=1);

namespace Usox\Psl\Arr;

function chunk(array $array, int $size, bool $preserve_keys = false): array {
	return \array_chunk($array, $size, $preserve_keys);
}
