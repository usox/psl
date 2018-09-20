<?php declare(strict_types=1);

namespace Usox\Psl\Str;

function capitalize(string $string): string {
	return \ucfirst($string);
}

function capitalize_words(
	string $string,
	string $delimiters = " \t\r\n\f\v"
): string {
	return \ucwords($string, $delimiters);
}
