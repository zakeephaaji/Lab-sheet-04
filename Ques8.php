<!DOCTYPE html>
<html>
<head>
<title>Chessboard</title>
<style>
table { border-collapse: collapse; }
td {
    width: 50px;
    height: 50px;
}
.black {
    background-color: black;
}
.white {
    background-color: white;
}
</style>
</head>
<body>

<table border="1">
<?php
for ($row = 1; $row <= 8; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 8; $col++) {
        $total = $row + $col;
        if ($total % 2 == 0)
            echo "<td class='white'></td>";
        else
            echo "<td class='black'></td>";
    }
    echo "</tr>";
}
?>
</table>

</body>
</html>

