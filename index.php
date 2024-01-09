<!-- ARRAY HOTEL -->
<?php
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];
?>
<!-- / ARRAY HOTEL -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- / BOOTSTRAP -->
    <title>PHP HOTEL</title>
</head>

<body class="bg-black text-light">
    <div class="container-fluid ">
        <h2 class="text-center text-uppercase p-4">Scegli il tuo hotel</h2>
        <table class=" table table-dark text-center">
            <thead>
                <tr class="text-uppercase">
                    <th scope="col">#</th>
                    <?php
                    // ciclo per trovare le chiavi per la colonna
                    foreach (array_keys($hotels[0]) as $key) {
                        echo "<th scope='col'>$key</th>";
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                // cicli per trovare l indice e i valori delle righe
                foreach ($hotels as $index => $hotel) {
                    echo " <tr><th scope='row'>$index</th>";
                    foreach ($hotel as $value) {
                        echo "<td>$value</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>