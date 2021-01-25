<?php 
/******************/
/* Calcul du PGCD */
/******************/

/* $a et $b sont 2 nombres. */
/* Ils peuvent par exemple être récupérés via un formulaire html */

$a = 120;
$b = 75;

a:
$r = $a % $b;
$a = $b;
$b = $r;
if ($r != 0)
    {
    goto a;
    }
echo $a;
















