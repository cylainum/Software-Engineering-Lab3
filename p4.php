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

    <h2>Enter the size of the table:</h2>

    <form action="p4-result.php" method="GET" target="_blank">
      <label for="n">Size (n):</label>
      <input type="number" name="n" id="n" min="1" max="100" required>
      <button type="submit">Make it so!</button>
  </nav>