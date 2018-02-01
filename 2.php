<?php
function getSum( $x,  $y)
{
    return $x + $y;
}

function getSumOfCos( $x,  $y)
{
    $cosX = cos($x);
    $cosY = cos($y);
    return getSum($cosX, $cosY);
}

echo getSumOfCos(1.44, 2);