<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Practice 4</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<main>
  <nav class="pages">
    <ul>
      <li><a href="index.html">Practice1</a></li>
      <li><a href="p2.php">Practice2</a></li>
      <li><a href="p3.php">Practice3</a></li>
      <li><a href="p4.php">Practice4</a></li>
    </ul>
  </nav>

<?php
if (isset($_GET['n'])) {
    $n = (int)$_GET['n'];

    $n = isset($_GET['n']) ? (int)$_GET['n'] : 10;

    echo "<table border=1>";

    echo "<tr>";
    echo "<td></td>";
    for ($col = 1; $col <= $n; $col++) {
        echo "<td>$col</td>";
    }
    echo "</tr>";

    for ($row = 1; $row <= $n; $row++) {
        echo "<tr>";
        echo "<td>$row</td>";
        
        for ($col = 1; $col <= $n; $col++) {
            $product = $row * $col;
            echo "<td>$product</td>";
        }
        
        echo "</tr>";
    }

    echo "</table>";

}
?>
