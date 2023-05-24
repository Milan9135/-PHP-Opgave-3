<?php

// deel 1

$voertuigen = ['auto','fiets','brommer','bus','vliegtuig','trein'];

$voertuigen[] = "test";

foreach ($voertuigen as $voertuig) {
    echo($voertuig . " ");
}

//

// deel 2

$voertuigen = ['auto','fiets','brommer','bus','vliegtuig','trein'];

echo count($voertuigen);
echo " ";

$voertuigen[] = "test";

echo count($voertuigen) . " ";

//

/*/ deel 3

r2: bar

r5: 4

r8: Toyota

r9: 3

r12: 5

r19: five

/*/

// deel 4

$cijfers = [4.4, 4.6, 5.6, 6.1, 7.6, 7.2];

$gemiddelde = array_sum($cijfers) / count($cijfers);

echo "het gemiddelde is: " . round($gemiddelde, 1);

// 4b = Ik denk dat het beter is om de regels niet samen te voegen, omdat het er overzichtelijker uitziet en is weinig extra werk, maar het maakt niet echt uit

?>