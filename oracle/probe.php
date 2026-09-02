<?php

declare(strict_types=1);

function isIsogram($string)
{
    $string = str_replace(['-', ' '], '', mb_strtolower($string));
    $letters = preg_split('//u', $string, -1, PREG_SPLIT_NO_EMPTY);
    return count($letters) === count(array_unique($letters));
}

$__in = json_decode('["", "isogram", "eleven", "zzyzx", "subdermatoglyphic", "Alphabet", "alphAbet", "thumbscrew-japingly", "thumbscrew-jappingly", "six-year-old", "Emily Jung Schwartzkopf", "accentor", "angola", "up-to-date"]', true);
$__out = [];
foreach ($__in as $x) {
  try { $__out[] = ["ok" => true, "v" => isIsogram($x)]; }
  catch (\Throwable $e) { $__out[] = ["ok" => false, "e" => get_class($e)]; }
}
echo json_encode(["out" => $__out]);
