<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Practice 2</title>
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
<style>
#paragraph {
        border-style: solid;
        border-width: 5px;
}
</style>
<body>
    <div id="paragraph">Paragraph to be changed.</div>
</body>
    <script type="text/javascript" src="functions.js"></script>
      Border R(0-255): <input type="text" id="border_R" value=""> <br>
      Border G(0-255): <input type="text" id="border_G" value=""> <br>
      Border B(0-255): <input type="text" id="border_B" value=""> <br>
      Border Width: <input type="text" id="border_width" value=""> <br>
      Background R(0-255): <input type="text" id="bg_R" value=""> <br>
      Background G(0-255): <input type="text" id="bg_G" value=""> <br>
      Background B(0-255): <input type="text" id="bg_B" value=""> <br>
    <button onclick="alert_paragraph_color()">Make it so!</button> <br>

</main>