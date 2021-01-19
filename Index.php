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
            <label for="consigne"> La multiplication est :
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
        <div class="container" id="blockRevision">
            <h2>Mode révision</h2>
            <form action="views/revision.php" method='POST'>
                <?php
                    $Chiffre1 = array(0,1,2,3,4,5,6,7,8,9,10);
                    $Chiffre2 = array(0,1,2,3,4,5,6,7,8,9,10);
                    $Chiffre3 = array(0,1,2,3,4,5,6,7,8,9,10);
                    $Chiffre4 = array(0,1,2,3,4,5,6,7,8,9,10);
                    $Chiffre5 = array(0,1,2,3,4,5,6,7,8,9,10);
                    $Chiffre6 = array(0,1,2,3,4,5,6,7,8,9,10);
                    $Chiffre7 = array(0,1,2,3,4,5,6,7,8,9,10);
                    $Chiffre8 = array(0,1,2,3,4,5,6,7,8,9,10);

                    $x1 = array_rand($Chiffre1);
                    $x2 = array_rand($Chiffre2);
                    $x3 = array_rand($Chiffre3);
                    $x4 = array_rand($Chiffre4);
                    $x5 = array_rand($Chiffre5);
                    $x6 = array_rand($Chiffre6);
                    $x7 = array_rand($Chiffre7);
                    $x8 = array_rand($Chiffre8);

                    $reponse1 = $x1+$x2;
                    $reponse2 = $x3-$x4;
                    $reponse3 = $x5+$x6;
                    $reponse4 = $x7-$x8;   
                    ?>
                <!--Question 1 -->
                <p> Première question : <?= $x1 . "+". $x2 . "="; ?>  </p>      
                <input type="hidden" name="Revision1" id="Revision1" value="<?= $reponse1 ?>"> 
                <input type="number" name="UserReponse1" id="UserReponse1"> 

                <!--Question 2 -->
                <p> Deuxième question : <?= $x3 . "-". $x4 . "="; ?>  </p>      
                <input type="hidden" name="Revision2" id="Revision2" value="<?= $reponse2 ?>"> 
                <input type="number" name="UserReponse2" id="UserReponse2"> 

                <!--Question 3 -->
                <p> Troisième question : <?= $x5 . "+". $x6 . "="; ?>  </p>      
                <input type="hidden" name="Revision3" id="Revision3" value="<?= $reponse3 ?>"> 
                <input type="number" name="UserReponse3" id="UserReponse3">

                <!--Question 4 -->
                <p> Quatrième question : <?= $x7 . "-". $x8 . "="; ?>  </p>      
                <input type="hidden" name="Revision4" id="Revision4" value="<?= $reponse4 ?>"> 
                <input type="number" name="UserReponse4" id="UserReponse4">  
                <br>
                <button type="submit" class="btn btn-success">Résultats</button>  
            </form>

        
        </div>
    </div>
    <div>
        


</body>
</html>
