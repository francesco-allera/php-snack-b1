<?php
/*
Ex. 1:
Creare un array 'matches' contenente altri array rappresentanti delle partite di basket.
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatta dalla squadra di casa e punti fatti dalla squadra ospite.
Stampare a schermo tutte le partite con lo schema: Squadra Casa - Squadra Ospite | puntiSC - puntiSO
*/

$matches = [
    [
        "home name" => 'Banco di Sardegna Sassari',
        "guest name" => 'Virtus Segafredo Bologna',
        "home points" => rand(50, 100),
        "guest points" => rand(50, 100)
    ],
    [
        "home name" => 'UNAHTOLES Reggio Emilia',
        "guest name" => 'Bertram Yachts Derthona Tortona',
        "home points" => rand(50, 100),
        "guest points" => rand(50, 100)
    ],
    [
        "home name" => 'Carpegna Prosciutto Pesaro',
        "guest name" => 'Umana Reyer Venezia',
        "home points" => rand(50, 100),
        "guest points" => rand(50, 100)
    ],
    [
        "home name" => 'Tezenis Verona',
        "guest name" => 'Dolomiti Energia Trentino',
        "home points" => rand(50, 100),
        "guest points" => rand(50, 100)
    ],
    [
        "home name" => 'EA7 Emporio Armani Milano',
        "guest name" => 'Pallacanestro Trieste',
        "home points" => rand(50, 100),
        "guest points" => rand(50, 100)
    ],
    [
        "home name" => 'Germani Brescia',
        "guest name" => 'Openjobmetis Varese',
        "home points" => rand(50, 100),
        "guest points" => rand(50, 100)
    ],
    [
        "home name" => 'GeVi Napoli Basket',
        "guest name" => 'NutriBullet Treviso Basket',
        "home points" => rand(50, 100),
        "guest points" => rand(50, 100)
    ],
    [
        "home name" => 'Happy Casa Brindisi',
        "guest name" => 'Givova Scafati',
        "home points" => rand(50, 100),
        "guest points" => rand(50, 100)
    ]
];


/*
Ex. 2:
Passare come parametri GET name, mail e age, e verificare che:
- name sia più lungo di 3 caratteri
- mail contenga un punto e una chiocciola
- age sia un numero
Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
*/

$name = $_GET['name'] ? $_GET['name'] : '';
$mail = $_GET['mail'] ? $_GET['mail'] : '';
$age = $_GET['age'] ? $_GET['age'] : '';

$text = 'negato';

if (
    strlen($name) >= 3 &&
    strpos($mail, '@') !== false &&
    strpos($mail, '.', strpos($mail, '@')) !== false &&
    is_numeric($age) &&
    strpos($age, '.') === false
) {
    $text = 'riuscito';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks B1</title>
</head>
<body>

    <div id="app">
        <h2>Le partite sono state:</h2>

        <ul>
            <?php for ($i = 0; $i < count($matches); $i++) { ?>
                <li>
                    <?php echo $matches[$i]["home name"] . ' - ' . $matches[$i]["guest name"] . ' | ' . $matches[$i]["home points"] . ' - ' . $matches[$i]["guest points"]; ?>
                </li>
            <?php } ?>
        </ul>

        <br>

        <h1>
            Accesso <?php echo $text; ?>
        </h1>

        <small>
            Aggiungere all'url ?name= con un nome, poi &mail= con una mail, poi &age= con un numero, infine premi invio.
        </small>
    </div>

</body>
</html>