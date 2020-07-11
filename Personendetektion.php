<html>
<head>
    <title>Livestream</title> 
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
<?php
if (!isset($_POST['Status'])) {
    echo "<div class='text'><center><br>Hier den Personendetektor starten oder stoppen";
    echo "<form action='Personendetektion.php' method='POST'>";
        echo "<button class='GButton' type='submit' name='Status' value='an'>Personendetektor starten</button>";
        echo "<button class='RButton' type='submit' name='Status' value='aus'>Personendetektor stoppen</button></form>";
    echo "</center></div>";
} else {

  if ($_POST['Status'] == "an" ) {
    shell_exec(sprintf('%s > /dev/null 2>&1 &', "sudo ./Bewegung"));
      echo "<div class='text'><center><br>";
        echo "Personendetektor wurde gestartet!<br><br>";
      echo "</center></div>";
  } else {
  $pid=file_get_contents('PID.txt');
  exec("sudo kill -9 $pid");
      echo "<div class='text'><center><br>";
        echo "Personendetektor wurde gestoppt!<br><br>";
      echo "</center></div>";
  }
}
?>

<body>

</html>
