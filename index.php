<?php
$partite_di_basket = [
    [
        "squadra_casa" => "Avellino",
        "squadra_ospite" => "Bari",
        "punti_casa" => 78,
        "punti_ospite" => 82
    ],
    [
        "squadra_casa" => "Firenze",
        "squadra_ospite" => "Modena",
        "punti_casa" => 92,
        "punti_ospite" => 87
    ],
    [
        "squadra_casa" => "Milano",
        "squadra_ospite" => "Latina",
        "punti_casa" => 105,
        "punti_ospite" => 98
    ],
    [
        "squadra_casa" => "Roma",
        "squadra_ospite" => "Napoli",
        "punti_casa" => 70,
        "punti_ospite" => 65
    ],
    [
        "squadra_casa" => "Barcellona",
        "squadra_ospite" => "Real Madrid",
        "punti_casa" => 85,
        "punti_ospite" => 80
    ],
    [
        "squadra_casa" => "Los Angeles Lakers",
        "squadra_ospite" => "Boston Celtics",
        "punti_casa" => 98,
        "punti_ospite" => 95
    ]
];

foreach ($partite_di_basket as $partita) {
    echo $partita["squadra_casa"] . " - " . $partita["squadra_ospite"] . " | " . $partita["punti_casa"] . "-" . $partita["punti_ospite"] . "<br>";
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Casa</th>
                <th scope="col">Fuori Casa</th>
                <th scope="col">Punteggio</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($partite_di_basket as $index => $partita) : ?>
                <tr>
                    <th scope="row"><?php echo $index + 1; ?></th>
                    <td><?php echo $partita['squadra_casa']; ?></td>
                    <td><?php echo $partita['squadra_ospite']; ?></td>
                    <td><?php echo $partita["punti_casa"] . "-" . $partita["punti_ospite"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
</div>

<body>

</body>

</html>