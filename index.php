<?php
    require('Modules/config.php');
    require('Modules/Functies.php');

    $pdo = connectDB();
?>
<!DOCTYPE html>
<html>
<head>
    <title>BAS / Home</title>
    <meta charset="utf-8">
    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Css/stylesheet.css">
    
    <!-- BOOTSTRAP & JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    

<?php 

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


    if(!empty($_GET['pageNr'])) 
    {
        $pageNr = $_GET['pageNr'];
    }
    else
    {
        $pageNr = null;
    }

    switch ($pageNr) {
        case 1:
            require('./Laboratoriums/MechanischLab/MechanischLab.php');
            break;
        case 2:
            require('./Laboratoriums/MechanischLab/MechanischPlanning.php');
            break;
        case 3: 
            require('./Laboratoriums/FysischLab/FysischLab.php');
            break;
        case 4:
            require('./Laboratoriums/FysischLab/FysischPlanning.php');
            break;
        case 5:
            require('./Laboratoriums/ChemischLab/ChemischLab.php');
            break;
        case 6: 
            require('./Laboratoriums/ChemischLab/ChemischPlanning.php');
            break;
        case 7:
            require('Home.php');
            break;    
        default: 
            require('Home.php');
            break;  
    }


?>


<script type="text/javascript">
$(function() {
    $('.chk_boxes').click(function(){
        $('.chk_boxes2').prop('checked', this.checked);
    });
});
</script>
</body>
</html>