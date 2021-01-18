<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css"/>
    <title>Table de 3</title>
</head>

<body>
    <div>
        <?php
        $proposition = $_POST['UserReponse'];
        $solution = $_POST['Solution'];

        echo "<div class=\"Intro\"></div>" . "Vous avez répondu =" . $proposition;
        ?>
        <br>
        <?php 
        if($proposition === $solution){
            echo  'Bonne réponse';
        }    else{
            echo 'Mauvaise réponse, la bonne réponse est =' . $solution;
        } 
        ?>
    </div>



    <div class="btnBack"> 
        <a href="../Index.php" class="btn btn-primary">Retour Accueil</a>
    </div>    

</body>
</html>