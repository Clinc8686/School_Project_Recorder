<html>
<head>
    <title>Video Optionen</title> 
    <link href="design.css" rel="stylesheet">
</head>
<body background="BG.jpg">
    
<div id="Title" align="center"> 
    <h1>Überwachungsportal</h1> 
</div><br>
<ul id="nav">
  <li><a href="index.php">Home</a></li>
  <li><a href="Aufzeichnungen.php">Aufzeichnungen</a></li>
  <li><a href="Options.php">Video aufnehmen</a></li>
  <li><a href="Livestream.php">Livestream</a></li>
  <li><a href="Personendetektion.php">Personendetektion</a></li>
</ul>
    
<div class="text">
<center>

<form action="Aufzeichnungstart.php" method="post">
    <br>Hier die Länge des Videos auswählen:<br><br>
    <select name="Minuten" id="form">
        <?php
        echo "<option>Minuten</option>";
        for ($i=0;$i<=60;$i++) {
            echo "<option value=$i>$i</option>";
        }
    echo "</select><select name='Sekunden' id='form'>";
        echo "<option>Sekunden</option>";
        for ($i=0;$i<=60;$i++) {
            echo "<option value=$i>$i</option>";
        }
        ?>
    </select>
    <input id="form" type="submit" name="Starten" value="Starten">
</form>
</center>
</div>
<body>
</html>
