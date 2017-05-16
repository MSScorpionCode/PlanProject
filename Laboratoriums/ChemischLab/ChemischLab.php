
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
    
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center mid">
            <!-- START FORM -->
            <form method="post" class="form-horizontal"> 
                <div class="form-group">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
<?php
                        $parameters = array(':lab' => "Mechanisch");
                        $sth = $pdo->prepare("SELECT uitvoerder FROM opdracht where lab = :lab");
                        $sth->execute($parameters);

                        while ($row = $sth->fetch()) 
                        {
                            echo "<label>"
                               . $row['uitvoerder'] . "</label>"
                               . "<input type='checkbox' 
                                         class='form-control chk_boxes2' 
                                         name='check_list[]' 
                                         value='"
                               . $row['uitvoerder'] . "'>";
                        }

            
?>
                        <input type="checkbox" class="chk_boxes" label='check all'>check all
                        </div>
                    </div>    
                    <div class="col-md-2">
                        <div class="vertical-lines hidden-sm hidden-xs">
                        <!-- VERTICAL LINE -->            
                        <!-- VERTICAL LINE -->
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                <div class="col-md-3">
                    <br>
                    <br>
                        <select class="form-control" name="weeks">
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
                    <br>
                    <input type="submit" value="Verder" class="form-controln btn-primary">
                </div>
                <div  class="col-md-2">
                </div>
                </div>
            </form>
            <!-- END FORM -->
        </div>
    </div>
</div>