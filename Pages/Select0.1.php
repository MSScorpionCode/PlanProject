<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center mid">
            <!-- START FORM -->
            <form method="post" class="form-horizontal"> 
                <div class="form-group">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-3">
                        <br>
                        <br>
                        <label>Medewerker
                        <input type="checkbox" class="form-control chk_boxes2" name="checkbox[]" id="1"></label>
                        <label>Medewerker
                        <input type="checkbox" class="form-control chk_boxes2" name="checkbox[]" id="2"></label>
                        <label>Medewerker              
                        <input type="checkbox" class="form-control chk_boxes2" name="checkbox[]" id="3"></label>
                        <br>
                        <label>Medewerker
                        <input type="checkbox" class="form-control chk_boxes2" name="checkbox[]" id="4"></label>
                        <label>Medewerker
                        <input type="checkbox" class="form-control chk_boxes2" name="checkbox[]" id="5"></label>
                        <label>Medewerker
                        <input type="checkbox" class="form-control chk_boxes2" name="checkbox[]" id="6"></label>
                        <br>
                        <label>Check all
                        <input type="checkbox" class="form-control chk_boxes" label='check all'></label>
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
                    <input type="submit" value="Verder" class="form-control btn-primary">
                </div>
                <div  class="col-md-2">
                </div>
                </div>
            </form>
            <!-- END FORM -->
        </div>
    </div>
</div>