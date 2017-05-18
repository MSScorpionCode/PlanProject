<?php
$today = date('d-m');

$currentDays[0] = $today;

for ($i=1; $i < 6; $i++) 
{ 
    $currentDays[$i] = date('d-m', strtotime('+' . $i . ' days'));
}
?>


        <!-- FOR LOOP -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h2 class="color-primary">Medewerker<!--OUTPUT DATABASE--></h2>
            <button type="button" class="btn btn-primary print">Print</button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <hr>
        </div>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <td><?php if ($currentDays[0] == $today)
                                {
                                    echo "<b>" . $currentDays[0] . "</b>";
                                }
                                else
                                {
                                    echo $currentDays[0];
                                } ?></td>
                    <td><?php if ($currentDays[1] == $today)
                                {
                                    echo "<b>" . $currentDays[1] . "</b>";
                                }
                                else
                                {
                                    echo $currentDays[1];
                                } ?></td>
                    <td><?php if ($currentDays[2] == $today)
                                {
                                    echo "<b>" . $currentDays[2] . "</b>";
                                }
                                else
                                {
                                    echo $currentDays[2];
                                } ?></td>
                    <td><?php if ($currentDays[3] == $today)
                                {
                                    echo "<b>" . $currentDays[3] . "</b>";
                                }
                                else
                                {
                                    echo $currentDays[3];
                                } ?></td>
                    <td><?php if ($currentDays[4] == $today)
                                {
                                    echo "<b>" . $currentDays[4] . "</b>";
                                }
                                else
                                {
                                    echo $currentDays[4];
                                } ?></td>     
                </tr>           
            </thead>
            <tbody>
                <tr> 
                    <td> <!-- FOR LOOP MONDAY -->
                        <div>   Opdracht:               <br>
                                Opdrachtgever:          <br>
                                Aantal Activiteiten:    <br>
                        </div>
                    </td>
                    <td> <!-- FOR LOOP TUESDAY -->
                        <div>   Opdracht:               <br>
                                Opdrachtgever:          <br>
                                Aantal Activiteiten:    <br>
                        </div>
                    </td>
                    <td> <!-- FOR LOOP WEDNESDAY -->
                        <div>   Opdracht:               <br>
                                Opdrachtgever:          <br>
                                Aantal Activiteiten:    <br>
                        </div>
                    </td>
                    <td> <!-- FOR LOOP THURSDAY -->
                        <div>   Opdracht:               <br>
                                Opdrachtgever:          <br>
                                Aantal Activiteiten:    <br>
                        </div>
                    </td>
                    <td> <!-- FOR LOOP FRIDAY -->
                        <div>   Opdracht:               <br>
                                Opdrachtgever:          <br>
                                Aantal Activiteiten:    <br>                        
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

 <table class="table">
     <thead>
        <tr>
             
        </tr> 
    </thead>
    <tbody>

    </tbody>
</table>
<?php
    print_r($_POST);

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
