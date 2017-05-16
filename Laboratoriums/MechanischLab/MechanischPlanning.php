<html>
<head>
    <title>BAS / Mechanisch Lab</title>
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
            <li><a href="index.php?pageNr=3">Fysisch Lab</a></li>
            <li class="active"><a href="index.php?pageNr=1">MechanischLab</a></li>
        </ul>
    </div>
</nav>
    
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <!-- START FORM -->
            <form method="post" class="form-horizontal"> 
                <div class="form-group">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-3">
                        <br>
                        <br>
                        <input type="checkbox" name="checkbox[]" id="1"><label for="1">Medewerker</label>
                        <input type="checkbox" name="checkbox[]" id="2"><label for="2">Medewerker</label>
                        <br>
                        <input type="checkbox" name="checkbox[]" id="3"><label for="3">Medewerker</label>
                        <input type="checkbox" name="checkbox[]" id="4"><label for="4">Medewerker</label>
                        <br>
                        <input type="checkbox" name="checkbox[]" id="5"><label for="5">Medewerker</label>
                        <input type="checkbox" name="checkbox[]" id="6"><label for="6">Medewerker</label>
                        <br>
                    </div>    
                    <div class="col-md-2">
                        <div class="vertical-lines">
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
                    <select class="form-control">
                        <!-- DROPDOWN MENU WEKEN--> 
                        <option>Week 19</option>
                    </select>
                    <br>
                    <input type="submit" value="Verder" class="form-control">
                </div>
                <div  class="col-md-2">
                </div>
                </div>
            </form>
            <!-- END FORM -->
        </div>
    </div>
</div>

    
</body>
</html>