<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css"/>
    <title>Résultats</title>
</head>

<?php
    $score = 0;
?>

<body>
    <div class="container">
     <h3>QUESTION 1</h3>
        <?php
        $proposition1 = $_POST['UserReponse1'];
        $solution1 = $_POST['Revision1'];

        echo " Vous avez répondu=" . $proposition1;
        ?>
        <br>
        <?php 
        if($proposition1 === $solution1){
            echo  'Bonne réponse! ';
            $score += 1;
        }    else{
            echo 'Mauvaise réponse, la bonne réponse est = ' . $solution1;
        }
        ?>
        <br>
    </div>
    <div class="container">
     <h3>QUESTION 2</h3>
        <?php
        $proposition2 = $_POST['UserReponse2'];
        $solution2 = $_POST['Revision2'];

        echo "Vous avez répondu=" . $proposition1;
        ?>
        <br>
        <?php 
        if($proposition2 === $solution2){
            echo  'Bonne réponse!';
            $score += 1;
        }    else{
            echo 'Mauvaise réponse, la bonne réponse est=' . $solution2;
        }
        ?>
        <br>
    </div>
    <div class="container">
     <h3>QUESTION 3</h3>
        <?php
        $proposition3 = $_POST['UserReponse3'];
        $solution3 = $_POST['Revision3'];

        echo "<div class=\"Intro\"></div>" . "Vous avez répondu=" . $proposition3;
        ?>
        <br>
        <?php 
        if($proposition3 === $solution3){
            echo  'Bonne réponse!';
            $score += 1;
        }    else{
            echo 'Mauvaise réponse, la bonne réponse est =' . $solution3;
        }
        ?>
        <br>
    </div>
    <div class="container">
     <h3>QUESTION 4</h3>
        <?php
        $proposition4 = $_POST['UserReponse4'];
        $solution4 = $_POST['Revision4'];

        echo "Vous avez répondu =" . $proposition4;
        ?>
        <br>
        <?php 
        if($proposition4 === $solution4){
            echo  'Bonne réponse';
            $score += 1;
        }    else{
            echo 'Mauvaise réponse, la bonne réponse est =' . $solution4;
        }
        ?>
        <br>    
    </div>
    <div class="container">
        <p>
        <?php echo $score; ?> 
        </p>
    </div>


    <div class="container btnBack"> 
        <a href="../Index.php" class="btn btn-primary">Retour Accueil</a>
    </div>    

</body>
</html>