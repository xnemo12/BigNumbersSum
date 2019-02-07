<?php

function bigSum(string $x1, string $x2): string
{
    if (empty($x1) || empty($x2))
    {
        return $x1 . $x2;
    }

    $len1 = strlen($x1);
    $len2 = strlen($x2);
    $maxLen = max($len1, $len2);

    $carryBit = 0;
    $result = '';

    for ($i = 1; $i <= $maxLen; $i++)
    {
        $digit1 = $i > $len1 ? 0 : (int)$x1[$len1 - $i];
        $digit2 = $i > $len2 ? 0 : (int)$x2[$len2 - $i];

        $sum = (string)($digit1 + $digit2 + $carryBit);
        $result = $sum[strlen($sum) - 1] . $result;
        $carryBit = strlen($sum) > 1 ? 1 : 0;
    }

    return ($carryBit > 0) ? ('1' . $result) : ($result);
}