<html>
<head>
    <title>BAS / Fysisch Lab</title>
    <meta charset="utf-8">
    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/stylesheet.css">
    
    <!-- BOOTSTRAP & JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    
<nav class="navbar nabbar-inverse">
    <div class="container-fluid">
        <!--<img src="Logo.png" alt="Logo" 2class="navbar-brand">-->
        <ul class="nav navbar-nav">
            <li><a href="index.php?pageNr=7">Home</a></li>
            <li><a href="index.php?pageNr=5">Chemisch Lab</a></li>
            <li class="active"><a href="index.php?pageNr=3">Fysisch Lab</a></li>
            <li><a href="index.php?pageNr=1">MechanischLab</a></li>
        </ul>
    </div>
</nav>
    
<?php 
    weekToday();
    echo "<br>";



$day = date('w');
$week_start = date('d-m-Y', strtotime('-'.$day.' days'));
$week_end = date('d-m-Y', strtotime('+'.(6-$day).' days'));

echo $day . "<br>";
echo $week_start . "<br>";
echo $week_end . "<br>";
?>
    
</body>
</html>