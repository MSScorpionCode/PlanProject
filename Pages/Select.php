<div class="container-fluid" id="custom">
    <!-- START FORM -->
    <form method="post" action="index.php?pageNr=2" class="form-horizontal text-center"> 
        <!-- ROW 1 CHECKBOXES -->
        
<?php


        for ($i=0; $i < ; $i++) { 
            echo 
        }
































/*
        for ($i=0; $i < 8; $i++) { 
            echo "<div class='row' id='margin-row'>
                <div class='col-md-1 col-lg-1'></div>
                <div class='col-md-4 col-lg-4'>
                    <div class='col-md-2 col-lg-2'><input type='checkbox' class='form-control chk_boxes2' name='check_list[]'></div>
                    <label class='col-md-2 col-lg-2'>Medewerker</label>        
                </div>
                <div class='col-md-4 col-lg-4'> 
                    <div class='col-md-2 col-lg-2'><input type='checkbox' class='form-control chk_boxes2' name='check_list[]'></div> 
                    <label class='col-md-2 col-lg-2'>Medewerker</label>
                </div>
                <div class='col-md-3 col-lg-3'>
                    <div class='col-md-2 col-lg-2'><input type='checkbox' class='form-control chk_boxes2' name='check_list[]'></div>
                    <label class='col-md-2 col-lg-2'>Medewerker</label>
                </div>
                </div>";
        }

*/
?>         
        <!-- ROW SUBMIT -->
        <div class="row" id="margin-top">
            <hr>
            <div class="col-md-3 col-lg-3">
            </div>
            <div class="col-md-8 col-lg-8">
                <label class="col-md-2 col-lg-2">Check all</label>
                <!-- CHECK ALL -->
                <div class="col-md-1 col-lg-1">
                    <input type='checkbox' class="chk_boxes form-control">
                </div>
                <!-- SUBMIT -->
                <div class="col-md-5 col-lg-5">
                    <input type="submit" name="Verder" value="Verder" class="form-control btn-primary">
                </div>
            </div>
        </div>  
    </form>
    <!-- END FORM -->
</div>
<?php
    print_r($_POST);
?>