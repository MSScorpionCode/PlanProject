<div class="container-fluid" id="custom">
    <!-- START FORM -->
    <form method="post" action="index.php?pageNr=2" class="form-horizontal text-center"> 
        <!-- ROW 1 CHECKBOXES -->
        
<?php


        $input = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24); 
        $parameters = array(':PRINS_functie' => 'Laborant');
        $sth = $pdo->prepare('SELECT naam, medewerkerid FROM medewerkers WHERE PRINS_functie = :PRINS_functie');
        $sth->execute($parameters);

        $input = array();
        $name = array();
        $id = array();
        while ($col = $sth->fetch()) {
          $input[] = $col; 
          $name[] = $col['naam'];
          $id[] = $col['medewerkerid'];
        }

        $len = count($input); 
        $thirdOfArray = array_slice($input, 0, $len / 3);

        $i = 0;
        foreach ($thirdOfArray as $row) 
        {

            echo "<div class='row' id='margin-row'>"
               . "<div class='col-md-1 col-lg-1'></div>";

            for ($j=0; $j<2; $j++)
            {
                echo "<div class='col-md-4 col-lg-4'>"
                   . "<div class='col-md-2 col-lg-2'>"
                   . "<input type='checkbox' class='form-control chk_boxes2 chk1' id='marginset' name='check_list[]' value='"
                   . $id[$i]
                   . "'></div>"
                   . "<label class='col-md-3 col-lg-3' id='marginset'>"
                   . $name[$i]
                   . "</label>"        
                   . "</div>";
                   $i++;
            }

            for ($k=0; $k<1; $k++)
            {
                echo "<div class='col-md-3 col-lg-3'>"
                   . "<div class='col-md-2 col-lg-2'>"
                   . "<input type='checkbox' class='form-control chk_boxes2 chk2' name='check_list[]' value='"
                   . $id[$i]
                   . "'></div>"
                   . "<label class='col-md-3 col-lg-3'>"
                   . $name[$i]
                   . "</label>"
                   . "</div>";
                   $i++;
            }
            echo "</div>";
        }
?>       

        <!-- ROW SUBMIT -->
        <div class="row" id="margin-top">
            <div class="col-md-3 col-lg-3">
            </div>
            <div class="col-md-8 col-lg-8">
                <label id='marginsetsubmit' class="col-md-2 col-lg-2">Check all</label>
                <!-- CHECK ALL -->
                <div class="col-md-1 col-lg-1">
                    <input type='checkbox' id="marginsetsubmit" class="chk_boxes form-control">
                </div>
                <!-- SUBMIT -->
                <div class="col-md-5 col-lg-5">
                    <input type="submit" name="Verder" value="Verder" class="form-control" id="basbtn">
                </div>
            </div>
        </div>  
    </form>
    <!-- END FORM -->
</div>