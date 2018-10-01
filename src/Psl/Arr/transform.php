<?php declare(strict_types=1);

namespace Usox\Psl\Arr;

function combine(array $keys, array $values): array {
	return \array_combine($keys, $values);
}

function keysToLowercase(array $array): array {
	return \array_change_key_case($array, CASE_LOWER);
}

function keysToUppercase(array $array): array {
	return \array_change_key_case($array, CASE_UPPER);
}
