<?php
$cars = [
    ['Volvo', 22, 18,40],
    ['BMW', 15, 13,28],
    ['Saab', 0, 5,5],
    ['Land Rover', 17, 15,32],
];
sort($cars);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oefening 13</title>
</head>
<body>
<table>
<tr>
  <th>Merk</th>
  <th>Stock</th>
  <th>Aantal verkocht</th>
  <th>Totaal aantal</th>
</tr>
<?php
for($i = 0; $i < count($cars); $i++) {
    echo('<tr>');
    for($j = 0; $j < count($cars[$i]); $j++) {
        echo("<td>{$cars[$i][$j]}</td>");
    }
    echo('</tr>');
}
?>

</body>
</html>