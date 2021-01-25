<?php 
/******************/
/* Calcul du PPCM */
/******************/

/* $a et $b sont 2 nombres. */
/* Ils peuvent par exemple être récupérés via un formulaire html */

$x = $a;
$y = $b;
a:
$r = $a % $b;
$a = $b;
$b = $r;
if ($r != 0)
    {
    goto a;
    }
echo $x * $y / $a;





















