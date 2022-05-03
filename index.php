<?php
// Snack 1
$matches = [
    [
        "Universo Treviso" => "76",
        "Virstus Bologna" => "113"
    ],
    [
        "Dinamo Sassari" => "98",
        "Cremona" => "82"
    ],
    [
        "Brescia" => "102",
        "Varese" => "71"
    ],
    [
        "Trento" => "69",
        "Reggiana" => "71"
    ],
    [
        "Olimpia Milano" => "92",
        "Brindisi" => "87"
    ],
    [
        "Derthona" => "80",
        "Trieste" => "74"
    ],
    [
        "VL Pesaro" => "75",
        "Venezia" => "85"
    ],
    [
        "Fortitudo Bologna" => "56",
        "Napoli" => "64"
    ]

];

function printM($array)
{
    for ($i = 0; $i < count($array); $i++) {
        $in = array_keys($array[$i])[0];
        $out = array_keys($array[$i])[1];
        echo ("<p>" . $in . " - "  . $out . "  |  " .  $array[$i][$in] . " - " .  $array[$i][$out]);
    };
};


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Snack 1</h1>
    <?php printM($matches) ?>

</body>

</html>