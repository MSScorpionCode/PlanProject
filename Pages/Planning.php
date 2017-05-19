<?php
$today = date('d-m');

$currentDays[0] = $today;

for ($i=1; $i < 6; $i++) 
{ 
    $currentDays[$i] = date('d-m', strtotime('+' . $i . ' days'));
}

$check_list = $_POST['check_list'];
$counted = count($check_list);
for ($j=0; $j < $counted; $j++) { 
    $id[$j] = $check_list[$j];
}


?>
       
<div class="container-fluid">
    
<?php
    for ($i=0; $i < count($id); $i++) { 
        $parameter = array(':id' => $id[$i]);
        $sth = $pdo->prepare("SELECT naam FROM medewerkers WHERE medewerkerid = :id");
        $sth->execute($parameter);  
    
        // WHILE LOOP 
        while ($row = $sth->fetch()) { 
            echo "<div class='row align-items'>"
               . "<div class='col-md-2'>"
               .        "<h2 id='bascolor'>"
               .    $row['naam']
               .    "</h2>"
               .    "</div>"
               .    "<div class='col-md-6'>"
               .       "<button type='button' id='basbtn1' class='btn print'>Print</button>"
               .    "</div>"
                    

               .    "<div class='row'>"
               .        "<div class='col-md-12'>"
               .            "<hr>"
               .        "</div>"
               .    "</div>"

               .    "<div class='row'>"
               .        "<table class='table'>"
               .            "<thead>"
               .                "<tr>"
               .                   "<td id='leftpadding'>"; 
                                                if ($currentDays[0] == $today)
                                                {
                                                    echo '<b>' . $currentDays[0] . '</b>';
                                                }
                                                else
                                                {
                                                    echo $currentDays[0];
                                                } 
            echo                    "</td>"
               .                    "<td>";        
                                                if ($currentDays[1] == $today)
                                                {
                                                    echo '<b>' . $currentDays[1] . '</b>';
                                                }
                                                else
                                                {
                                                    echo $currentDays[1];
                                                } 
            echo                    "</td>"
               .                    "<td>"; 
                                                if ($currentDays[2] == $today)
                                                {
                                                    echo '<b>' . $currentDays[2] . '</b>';
                                                }
                                                else
                                                {
                                                    echo $currentDays[2];
                                                } 
            echo                    "</td>"
               .                    "<td>";        
                                                if ($currentDays[3] == $today)
                                                {
                                                    echo '<b>' . $currentDays[3] . '</b>';
                                                }
                                                else
                                                {
                                                    echo $currentDays[3];
                                                } 
            echo                    "</td>"
               .                    "<td>"; 
                                                if ($currentDays[4] == $today)
                                                {
                                                    echo '<b>' . $currentDays[4] . '</b>';
                                                }
                                                 else
                                                {
                                                    echo $currentDays[4];
                                                } 
            echo                    "</td>"

               .                "</tr>"           
               .            "</thead>"
               .            "<tbody>"
               .                "<tr>" 
               .                    "<td id='leftpadding'> <!-- FOR LOOP DAY1 -->"
               .                        "<div>   Opdracht:               <br>"
               .                                "Kritische Datum:        <br>"
               .                                "                        <br>"
               .                        "</div>"
               .                    "</td>"
               .                    "<td> <!-- FOR LOOP DAY2 -->"
               .                        "<div>   Opdracht:               <br>"
               .                                "Kritische Datum:        <br>"
               .                                "                        <br>"
               .                        "</div>"
               .                    "</td>"
               .                    "<td> <!-- FOR LOOP DAY3 -->"
               .                        "<div>   Opdracht:               <br>"
               .                                "Kritische Datum:        <br>"
               .                                "                        <br>"
               .                        "</div>"
               .                    "</td>"
               .                    "<td> <!-- FOR LOOP DAY4 -->"
               .                         "<div>   Opdracht:              <br>"
               .                                "Kritische Datum:        <br>"
               .                                "                        <br>"
               .                        "</div>"
               .                    "</td>"
               .                    "<td> <!-- FOR LOOP DAY5 -->"
               .                        "<div>   Opdracht:               <br>"
               .                                "Kritische Datum:        <br>"
               .                                "                        <br>"                        
               .                        "</div>"
               .                    "</td>"
               .                "</tr>"
               .            "</tbody>"
               .        "</table>"
               .    "</div>"
               . "</div>";
        }
    }


?>



           
        
       

</div>


<?php

?>






<?php 
/*
        $medewerker1 = "J. J. Janssen";
        $parameters = array(':medewerker' => $medewerker1);
        $sth = $pdo->prepare('SELECT * FROM opdracht WHERE uitvoerder = :medewerker');
        $sth->execute($parameters);

        echo "<tr>";

        while ($row = $sth->fetch()) 
        {
            echo "<td class='actShow'>"
               . "Opdracht: "    
               . $row['opdracht']
               . "<br>"
               . "Opdrachtgever: "
               . $row['opdrachtgever']
               . "<br>"
               . "Activiteiten: "
               . $row['aantal_activiteiten']
               . "<div class='showhide'>" . $row['activiteit'] . "</div>"
               . "</td>"
               . "</div>";
        } 

        echo "</tr>";
*/
?>
