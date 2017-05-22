<?php
$today = date('Y-m-d');
$id = 5412; // $id['i']
$parameter = array(":date"=>$today,
				   ":id"=>$id);
$sth = $pdo->prepare("SELECT KRITISCHE_DATUM, OPDRACHTID, medewerkerID_uitvoerder FROM opdrachten WHERE PLANNINGS_DATUM = :date AND medewerkerID_uitvoerder = :id");
$sth->execute($parameter);

while ($row = $sth->fetch()) 
{
	echo "<div id='border'>";
	echo "kritische datum: <b>" . $row['KRITISCHE_DATUM'] . "</b><br>";
	echo "Opdracht id: " . $row['OPDRACHTID'] . "<br>";
	//$row['medewerkerID_uitvoerder'] . "<br>";
	echo "</div>"; 
}

?>				