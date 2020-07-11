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
    <?php
    $Minuten=$_POST['Minuten'];
    $Sekunden=$_POST['Sekunden'];
    if ($Minuten != "Minuten" and $Sekunden != "Sekunden") {
	$MillSek=$Minuten*60000;
	$MillSek=$MillSek+($Sekunden*1000);
	$time = fopen("Zeit.txt", "w");
	fwrite($time, $MillSek);
	fclose($time);
	shell_exec(sprintf('%s > /dev/null 2>&1 &', "./record.sh"));
        echo "<div class='text'><center><br>";
            echo "Aufnahme wurde gestartet!<br><br>";
            echo "</center></div>";
    } else {
        echo "<div class='text'><center><br>";
            echo "Aufnahme wurde nicht gestartet!<br><br>Bitte wählen Sie gültige Ziffern aus<br><br>";
        echo "<center></div>";
    }
    ?>
<body>
</html>
