<?php
function linha($semana)
{
    echo "<tr>";
    for ($i = 0; $i <= 6; $i++) {
        if (isset($semana[$i])) {
            echo "<td>{$semana[$i]}</td>";
        } else {
            echo "<td></td>";
        }
    }
    echo "</tr>";
}

function calendario()
{
    $dia = 1;
    $semana = array();
    while ($dia <= 31) {
        array_push($semana, $dia);
        if (count($semana) == 7) {
            linha($semana);
            $semana = array();
        }
        $dia++;
    }
    linha($semana);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário</title>
    <style>
        body {
            background-color: #e0e0b5; 
        }

        .calendario-container {
            margin: 100px auto 0;
            width: 70%;
            background-color: #ffffe0;
            padding: 20px;
            border-radius: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <div class="calendario-container">
        <table>
            <tr>
                <th>Dom</th>
                <th>Seg</th>
                <th>Ter</th>
                <th>Qua</th>
                <th>Qui</th>
                <th>Sex</th>
                <th>Sáb</th>
            </tr>
            <?php calendario(); ?>
        </table>
    </div>
</body>
</html>
