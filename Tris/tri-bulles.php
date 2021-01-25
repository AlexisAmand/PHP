<?php
/***********************/
/* Tri à Bulles en PHP */
/***********************/

/* Taille du tableau */

$n = 10;

/* Pour la demo, on met des valeurs aleatoires dans le tableau */

echo "Tableau avant le tri :<br />";
echo "<table border='1'><tr>";
for ($i = 0; $i < $n; $i++)
    {
    $tablo[$i] = rand(0,100);
    echo "<td>".$tablo[$i]."</td>";
    }
echo "</tr></table>";

/* on fait le tri */

for ($i = $n - 1; $i >= 0;$i--)
    {
    for ($j = 0; $j <= $i - 1; $j++)
        {
        if($tablo[$j] > $tablo[$j+1])
            {
            $temp = $tablo[$j + 1];  
            $tablo[$j + 1] = $tablo[$j];
            $tablo[$j] = $temp;
            }
        }
    }

/* On affiche le tableau final */

echo "Tableau avec le tri :<br />";
echo "<table border='1'><tr>";
for ($i = 0; $i < $n; $i++)
    {
    echo "<td>".$tablo[$i]."</td>";
    }
echo "</tr></table>";
