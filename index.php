<?php
include 'config\config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select Liés</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Select Ajax-jQuery</h1>
        <form action="">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <select name="pays" id="pays" class="form-control">
                            <option value="0">Sélectionner votre pays</option>
                        </select>
                        <!--<select name="pays" id="pays" class="form-control">
                            <option value="0">Sélectionner votre pays</option>
                            <?php
/*                            $pdo = \App\Config::getPDO();
                            $listePays = $pdo->query('SELECT idpays, nompays FROM pays');
                            foreach($listePays as $pays){
                                */?>
                                <option value="<?/*= $pays['idpays'] */?>"><?/*= $pays['nompays'] */?></option>
                                <?php
/*                            }
                            */?>
                        </select>-->
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <select name="region" id="region" class="form-control">
                            <option value="0">Sélectionner votre région</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <select name="ville" id="ville" class="form-control">
                            <option value="0">Sélectionner votre ville</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>