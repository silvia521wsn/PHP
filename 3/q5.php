<?php
$x = 3;
$y = 7;
$z = 24;

$r = $x + $y;
$s = $x - $y;
$t = $x * $y;
$u = $z / $x;
$v = $t % $u;

echo <<<EOD
{$x} + {$y} = {$r}<br>
{$x} - {$y} = {$s}<br>
{$x} * {$y} = {$t}<br>
{$z} / {$x} = {$u}<br>
{$x} x {$y} と {$z} ÷ {$x} の余りは、{$v}
EOD;