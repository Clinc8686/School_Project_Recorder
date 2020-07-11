<html>
<head>
    <title>Aufzeichnungen</title> 
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
<center><br>
    Die letzten aufgenommenen Videos sind hier zu finden: <br><br>
    <?php
    $alledateien = scandir('Videos'); //Ordner "Videos" auslesen
    foreach ($alledateien as $datei) { // Ausgabeschleife
        if ($datei != "." && $datei != "..") {
            echo "<a href='Videos/$datei'>$datei</a><br>"; 
        }
    
    };
    ?>
<br></center>
</div>
<body>
</html>
