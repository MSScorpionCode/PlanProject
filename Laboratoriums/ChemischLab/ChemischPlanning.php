<?php
// HIGHLIGHT CURRENT DAY
$dateMonday = $dateTuesday = $dateWednesday = $dateThursday = $dateFriday = null;
$currentDays = array(1 => $dateMonday,
                     2 => $dateTuesday,
                     3 => $dateWednesday,
                     4 => $dateThursday,
                     5 => $dateFriday);

$today = time();
$week = date('w', $today);

for ($i=1; $i < 6; $i++) 
{ 
    $currentDays[$i] = date('d-m', strtotime(($i - $week) . ' day', $today));
}

$dayToday = date('d-m');


// SELECT WEEK
$Timestamp = strtotime('this week');
$output1 = [];
$output2 = [];
$output = [];

for ($week = 3; $week > 0; $week--)
{
    $output1[] = date('W Y', strtotime(sprintf('-%d weeks', $week), $Timestamp));
}

for ($week = 0; $week < 4; $week++) 
{ 
    $output2[] = date('W Y', strtotime(sprintf('+%d weeks', $week), $Timestamp));
}

$output = array_merge($output1, $output2);
?>

<nav class="navbar nabbar-inverse">
    <div class="container-fluid">
        <!--<img src="Logo.png" alt="Logo" 2class="navbar-brand">-->
        <ul class="nav navbar-nav">
            <li><a href="index.php?pageNr=7">Home</a></li>
            <li class="active"><a href="index.php?pageNr=5">Chemisch Lab</a></li>
            <li><a href="index.php?pageNr=3">Fysisch Lab</a></li>
            <li><a href="index.php?pageNr=1">MechanischLab</a></li>
        </ul>
    </div>
</nav>
        <!-- FOR LOOP -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <h2 class="color-primary">Medewerker<!--OUTPUT DATABASE--></h2>
        </div>
        <div class="col-md-5">
        </div>
        <div class="col-md-1">
            <button type="button" class="btn btn-primary print">Print</button>
        </div>
        <div class="col-md-2">
            <select name="weeks" class="form-control">
                <?php foreach ($output as $week) : ?>
                    <option value="<?php echo $week ?>"
                    <?php 
                    $weekToday = date('W Y');
                    if ($week == $weekToday) {
                        echo 'selected';
                    }
                    ?>>
                    <?php echo 'Week ' . $week ?></option>
                <?php endforeach; ?>
            </select>
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
                    <td>Maandag <?php if ($currentDays[1] == $dayToday)
                                {
                                    echo "<b>" . $currentDays[1] . "</b>";
                                }
                                else
                                {
                                    echo $currentDays[1];
                                } ?></td>
                    <td>Dinsdag <?php if ($currentDays[2] == $dayToday)
                                {
                                    echo "<b>" . $currentDays[2] . "</b>";
                                }
                                else
                                {
                                    echo $currentDays[2];
                                } ?></td>
                    <td>Woensdag <?php if ($currentDays[3] == $dayToday)
                                {
                                    echo "<b>" . $currentDays[3] . "</b>";
                                }
                                else
                                {
                                    echo $currentDays[3];
                                } ?></td>
                    <td>Donderdag <?php if ($currentDays[4] == $dayToday)
                                {
                                    echo "<b>" . $currentDays[4] . "</b>";
                                }
                                else
                                {
                                    echo $currentDays[4];
                                } ?></td>
                    <td>Vrijdag <?php if ($currentDays[5] == $dayToday)
                                {
                                    echo "<b>" . $currentDays[5] . "</b>";
                                }
                                else
                                {
                                    echo $currentDays[5];
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
            <td>Maandag <?php if ($currentDays[1] == $dayToday)
                            {
                                echo "<b>" . $currentDays[1] . "</b>";
                            }
                            else
                            {
                                echo $currentDays[1];
                            } ?></td>
            <td>Dinsdag <?php if ($currentDays[2] == $dayToday)
                            {
                                echo "<b>" . $currentDays[2] . "</b>";
                            }
                            else
                            {
                                echo $currentDays[2];
                            } ?></td>
            <td>Woensdag <?php if ($currentDays[3] == $dayToday)
                            {
                                echo "<b>" . $currentDays[3] . "</b>";
                            }
                            else
                            {
                                echo $currentDays[3];
                            } ?></td>
            <td>Donderdag <?php if ($currentDays[4] == $dayToday)
                            {
                                echo "<b>" . $currentDays[4] . "</b>";
                            }
                            else
                            {
                                echo $currentDays[4];
                            } ?></td>
            <td>Vrijdag <?php if ($currentDays[5] == $dayToday)
                            {
                                echo "<b>" . $currentDays[5] . "</b>";
                            }
                            else
                            {
                                echo $currentDays[5];
                            } ?></td>     
        </tr> 
    </thead>
    <tbody>
<?php 
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
               . "</td>";
        } 

        echo "</tr>";
?>
    </tbody>       
</table>

