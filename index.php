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
        echo ("<p>" . $in . " - "  . $out . "  |  " .  $array[$i][$in] . " - " .  $array[$i][$out] . "</p>");
    };
};

//snack 2
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

function validateAccess($name, $mail, $age)
{

    if (strlen($name) < 3) {
        echo ("<h2> Access Denied </h2>");
    } elseif (strpos($mail, "@") == false || strpos($mail, ".") == false) {
        echo ("<h2> Access Denied </h2>");
    } elseif (!is_numeric($age)) {
        echo ("<h2> Access Denied </h2>");
    } else {
        echo ("<h2> Access done </h2>");
    }
};



// snack 3
$randomArray = [];
while (count($randomArray) < 15) {
    $randomNr = rand(0, 100);
    if (!in_array($randomNr, $randomArray)) {
        $randomArray[] = $randomNr;
    };
};

function printRandomArray($array)
{
    for ($k = 0; $k < count($array); $k++) {
        echo (" " . $array[$k]);
    }
}


// snack 4
$paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit iste iure nostrum perferendis magnam natus veniam enim nihil, commodi a, qui molestias voluptatem. Corporis veritatis vero distinctio sit nihil quam.
Non asperiores repudiandae sunt minima quisquam, blanditiis consequatur inventore aut aperiam neque magni doloremque id. Quaerat ducimus iste optio suscipit cum enim quidem eius consequuntur, fugiat facilis minus dolore repellat!
Odio itaque eaque unde accusantium possimus totam autem neque dolor rem quis, ipsum architecto vero, voluptatem officia iste sed quae nemo, quam culpa assumenda? Quod labore velit dolorem assumenda pariatur!
Numquam ipsa nobis porro rerum vero dolor tenetur quibusdam earum quis sed, eligendi sequi, eos eveniet velit accusantium. Molestiae ad perspiciatis magni vero corporis suscipit, error pariatur sunt. Hic, quasi?
Labore illo reiciendis, accusamus nihil necessitatibus laudantium. Tenetur distinctio laboriosam nulla, dolor quidem sequi iste non maxime cumque in a voluptate quos. Minus repellat rem praesentium harum tempora, perferendis atque!
Quidem autem velit voluptatem libero deserunt voluptate tenetur asperiores magnam quibusdam natus illum error voluptatum, quisquam quis iste sapiente blanditiis aperiam, doloribus adipisci laborum explicabo rem ex inventore corporis. Odit!
Earum sit qui eius, natus delectus, consequuntur quibusdam libero ratione commodi, consequatur nam aperiam dolores quasi porro! Voluptatum eos eaque inventore nihil ad veritatis possimus quibusdam, modi illo cupiditate itaque.
Quos voluptas tempore cum optio ullam sapiente velit commodi iste harum quidem, nisi tempora facere quis vitae maiores officia exercitationem fuga deleniti rem quae inventore saepe ad obcaecati illo? Voluptatum.
Expedita debitis consequatur exercitationem suscipit quisquam, ipsa aliquam at temporibus a modi. Cum voluptatem mollitia obcaecati quis assumenda, aliquid velit magni ea fugiat, totam similique voluptatibus beatae, delectus non modi.
Numquam animi amet itaque. Sequi eveniet dignissimos nostrum beatae dolorem non? Unde, enim! Totam corporis et dolore repellendus aspernatur velit quisquam delectus, voluptas incidunt maxime nobis dolorem voluptatum accusantium repudiandae? ";

$newParagraphs = explode(".", $paragraph);
function printParagraphs($array)
{
    for ($i = 0; $i < count($array); $i++) {
        echo ("<h3> Questo è il paragrafo numero $i </h3>");
        echo ("<p> $array[$i]");
    };
}


// SNACK BONUS
$class = [
    [
        "name" => "Paolo",
        "surname" => "Brosio",
        "marks" => [10, 5, 8, 7, 1, 6, 9, 9, 8]
    ],
    [
        "name" => "Giuseppe",
        "surname" => "Conte",
        "marks" => [10, 4, 2, 1, 8, 10, 10, 2]
    ],
    [
        "name" => "Carlo",
        "surname" => "Cracco",
        "marks" => [10, 5, 7, 8, 6, 9, 8, 4]
    ],
    [
        "name" => "Roberto",
        "surname" => "Baggio",
        "marks" => [7, 5, 8, 9, 8, 7, 5, 4, 8, 9]

    ],
    [
        "name" => "Sergio",
        "surname" => "Mattarella ",
        "marks" => [10, 9, 8, 9, 8, 9, 8, 10, 10, 10, 5, 5, 5, 4, 7]
    ]

];

function printClass($class)
{
    for ($i = 0; $i < count($class); $i++) {
        $sum = 0;
        for ($j = 0; $j < count($class[$i]['marks']); $j++) {
            $sum = $sum + $class[$i]['marks'][$j];
        };
        $average = $sum / count($class[$i]['marks']);
        echo ("<p> <span> <b> Student: </b>" . $class[$i]["name"] . " " . $class[$i]["surname"] . "</span>" . "<span> <b> Average </b>" . $average . "</span> </p>");
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

    <h1>Snack 2</h1>
    <?php validateAccess($name, $mail, $age) ?>

    <h1>Snack 3</h1>
    <p>I 15 numeri casuali dell'array sono: <?php printRandomArray($randomArray) ?></p>

    <h1>Snack 4</h1>
    <?php printParagraphs($newParagraphs) ?>

    <h1>Snack Bonus</h1>
    <?php printClass($class) ?>

</body>

</html>