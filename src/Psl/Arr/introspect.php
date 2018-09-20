<?php declare(strict_types=1);

namespace Usox\Psl\Arr;

function contains(array $array, $value): bool {
	return \in_array($value, $array);
}

function containsKey(array $array, $key): bool {
	return \array_key_exists($key, $array);
}

function isEmpty(array $array): bool {
	return $array === [];
}
