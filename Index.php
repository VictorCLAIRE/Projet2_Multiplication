<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css"/>

    <title>Test php</title>
</head>
<body>
    <h1> Projet 2 PHP</h1>
    <div class="container" id="blockTable3">
        <h2>La table de 3</h2>
        <div> 
        <a href="views/Table3.php" class="btn btn-outline-danger">Table de 3</a>
        </div>
    </div>
    <div class="container" id="blockTableChoisie">
        <h2>Choisis la table</h2>
        <form method="post" action="views/Table_choisie.php">
            <div class="form-group">
                <label for="multiple">Choix du multiplicateur</label>
                <select class="form-control" id="multiple" name="multiple">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Résultat</button>
        </form>
    </div>
    <div class="container" id="blockCheckBox">
        <h2>Coches les multiplicateurs</h2>
        <div> 
            <form method='POST' action='views/TableCheckBox.php'>
             <p>Mulitplicateurs:</p>
            <input type="checkbox" name="multiplicateur[]" id="case1" value="1"> 1
            <input type="checkbox" name="multiplicateur[]" id="case2"  value="2"> 2
            <input type="checkbox" name="multiplicateur[]" id="case3"  value="3"> 3
            <input type="checkbox" name="multiplicateur[]" id="case4"  value="4"> 4
            <input type="checkbox" name="multiplicateur[]" id="case5"  value="5"> 5
            <input type="checkbox" name="multiplicateur[]" id="case6"  value="6"> 6
            <input type="checkbox" name="multiplicateur[]" id="case7"  value="7"> 7
            <input type="checkbox" name="multiplicateur[]" id="case8"  value="8"> 8
            <input type="checkbox" name="multiplicateur[]" id="case9"  value="9"> 9
            <input type="checkbox" name="multiplicateur[]" id="case10"  value="10"> 10
            <button type="submit" class="btn btn-success">Résultat</button>
            </form>
        </div>
    </div>
    <div class="container" id="blockTest">
     <form method='POST' action='views/True_False.php'>
        <h2>Multiplication au hasard</h2>
        <div class="form-group">    
            <label for="tretre"> La multiplication est :
                <?php
                    $ChiffreA = array(0,1,2,3,4,5,6,7,8,9,10);
                    $ChiffreB = array(0,1,2,3,4,5,6,7,8,9,10);

                    $premierChiffre = array_rand($ChiffreA);
                    $deuxiemeChiffre = array_rand($ChiffreB);
                    $reponse = $premierChiffre*$deuxiemeChiffre;   
                    echo $premierChiffre . 'X' . $deuxiemeChiffre. '=';   
                ?>
            </label>
            <input type="hidden" name="Solution" value="<?= $reponse ?>">
            <p>Quel est la réponse de cette multiplication:</p>
            <input type="number" name="UserReponse" id="UserReponse">
             
            <button type="submit" class="btn btn-success">Résultat</button>
            </form>
        </div>
    </div>
    <div>
        


</body>
</html>
