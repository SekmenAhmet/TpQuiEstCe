<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="app.js"></script>
    <title>Qui est ce?</title>
</head>
<body>
    
    <div class="img">
    <ul>
    <?php 

    $binaire = "";


    foreach ($_POST as $key => $value) {
        $binaire .= strval($value);
    }

    function S1($binaire) {
        $compte = 0;
        $s2 = [intval($binaire[0]), intval($binaire[2]), intval($binaire[4]) , intval($binaire[6])];
        $compte = count($s2) % 2;
        return $compte; 
    }

    function S2($binaire) {
        $compte = 0;
        $s2 = [intval($binaire[0]), intval($binaire[3]), intval($binaire[6])];
        $compte = count($s2) % 2;
        return $compte; 
    }
    
    function S3($binaire) {
        $compte = 0;
        $s2 = [intval($binaire[3]), intval($binaire[4]),intval($binaire[5]), intval($binaire[6])];
        $compte = count($s2) % 2;
        return $compte; 
    } 

    function compareTable($binaire, $tab2){
        $tab1[] = [];
        $s1 = S1($binaire);
        $s2 = S2($binaire);
        $s3 = S3($binaire);
        $tab1 = [$s1, $s2, $s3];
        
        foreach ($tab2 as $row) {
            if ($tab1 == $tab2[$row]) {
                echo "vous avez menti";
            } else {
                echo "Vous n'avez pas menti";
            }
        }
        
        
        
        
        var_dump($tab1);
    }

    compareTable($binaire, $check);
        
    $check = [[1, 0, 0], [0, 1, 0], [1, 1, 0], [0, 0, 1], [1, 1, 1], [0, 1, 1], [1, 0, 1]];
    
    
    // echo $binaire;

    function compare(String $binaire) : bool{
        $personnages = [
            "0000000.JPG",
            "0001111.JPG",
            "0010011.JPG",
            "0011100.JPG",
            "0100101.JPG",
            "0101010.JPG",
            "0110110.JPG",
            "0111001.JPG",
            "1000110.JPG",
            "1001001.JPG",
            "1010101.JPG",
            "1011010.JPG",
            "1100011.JPG",
            "1101100.JPG",
            "1110000.JPG",
            "1111111.JPG"
        ];
        
        $bin = $binaire . ".JPG";
        if(isset($binaire)) {
            foreach ($personnages as $key) {
                if ($bin == $key){
                    return true;
                }
            } 
            return false;
        }
    }

    if(compare($binaire) == true) {
        $result = "bon";
    }

    $personnages = [
        "0000000.JPG",
        "0001111.JPG",
        "0010011.JPG",
        "0011100.JPG",
        "0100101.JPG",
        "0101010.JPG",
        "0110110.JPG",
        "0111001.JPG",
        "1000110.JPG",
        "1001001.JPG",
        "1010101.JPG",
        "1011010.JPG",
        "1100011.JPG",
        "1101100.JPG",
        "1110000.JPG",
        "1111111.JPG"
    ];
    foreach ($personnages as $value) {?>
        <img id="<?=$result?>" src="Personnages/<?=$value?>">
    <?php }?>

    </ul>
    </div>

    <!--QUESTIONS-->
    <form action="" method="POST">
    <div class="questions">
        <ul>
            <li>Question 1</li>
            <h2 id="Q1">A-t-il des lunettes ?</h2>
            <input type="checkbox" name="q1b1" value="1">
            <input type="checkbox" name="q1b2" value="0">

            <li>Question 2</li>
            <h2 id="Q2">A-t-il une moustache ?</h2>
            <input type="checkbox" name="q2b1" value="1">
            <input type="checkbox" name="q2b2" value="0">

            <li>Question 3</li>
            <h2 id="Q3">A-t-il un chapeau ?</h2>
            <input type="checkbox" name="q3b1" value="1">
            <input type="checkbox" name="q3b2" value="0">

            <li>Question 4</li>
            <h2 id="Q4">A-t-il des cheveux ?</h2>
            <input type="checkbox" name="q4b1" value="1">
            <input type="checkbox" name="q4b2" value="0">

            <li>Question 5</li>
            <h2 id="Q5">A-t-il une boucle d'oreille ?</h2>
            <input type="checkbox" name="q5b1" value="1">
            <input type="checkbox" name="q5b2" value="0">

            <li>Question 6</li>
            <h2 id="Q6">A-t-il une barbe ?</h2>
            <input type="checkbox" name="q6b1" value="1">
            <input type="checkbox" name="q6b2" value="0">

            <li>Question 7</li>
            <h2 id="Q7">A-t-il un noeud papillon ?</h2>
            <input type="checkbox" name="q7b1" value="1">
            <input type="checkbox" name="q7b2" value="0">

            <button type="submit">Valider</button>

        </ul>
    </div>
    </form>

<!--Reponse-->

</body>
</html>