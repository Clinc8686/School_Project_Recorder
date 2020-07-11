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
$Host=$_SERVER["HTTP_HOST"]; //Host-Adresse
if (isset($_POST['Status'])) {
    if ($_POST['Status'] == 'an') {
    system("sudo service motion start");
    system("sudo modprobe bcm2835-v4l2"); 
    echo "<div class='text'><center><br>Livestream gestartet";
        echo "<br><a href='http://$Host:8081'><button class='Button' type='submit' name='Status' value='aus'>Livestream anschauen</button></a>";
    echo "</center></div>";
    } else {
    system("sudo service motion stop"); 
    echo "<div class='text'><center><br>Livestream gestoppt";
    echo "<br><br></center></div>";
    }
}  else {
    echo "<div class='text'><center><br>Hier den Livestream starten, stoppen oder anschauen";
    echo "<form action='Livestream.php' method='POST'>";
        echo "<button class='GButton' type='submit' name='Status' value='an'>Livestream starten</button>";
        echo "<button class='RButton' type='submit' name='Status' value='aus'>Livestream stoppen</button></form>";
        echo "<a href='http://$Host:8081'><button class='Button' type='submit' name='Status' value='aus'>Livestream anschauen</button></a>";
    echo "</center></div>";
}  
?>

<body>

</html>
