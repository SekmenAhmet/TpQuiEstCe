<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Qui est ce?</title>
</head>
<body>
    
    <div class="img">
    <ul>
    <?php 
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
        <img src="Personnages/<?=$value?>">
    <?php }?>
    </ul>
    </div>

    <!--QUESTIONS-->
    <div class="questions">
        <ul>
            <li>Question 1</li>
            <h2 id="Q1">A-t-il des lunettes ?</h2>
            <input type="button" value="Oui">
            <input type="button" value="Non">

            <li>Question 2</li>
            <h2 id="Q2">A-t-il une moustache ?</h2>
            <input type="button" value="Oui">
            <input type="button" value="Non">

            <li>Question 3</li>
            <h2 id="Q3">A-t-il un chapeau ?</h2>
            <input type="button" value="Oui">
            <input type="button" value="Non">

            <li>Question 4</li>
            <h2 id="Q4">A-t-il des cheveux ?</h2>
            <INPUT type="button" value="Oui">
            <INPUT type="button" value="Non">

            <li>Question 5</li>
            <h2 id="Q5">A-t-il une boucle d'oreille ?</h2>
            <INPUT type="button" value="Oui">
            <INPUT type="button" value="Non">

            <li>Question 6</li>
            <h2 id="Q6">A-t-il une barbe ?</h2>
            <INPUT type="button" value="Oui">
            <INPUT type="button" value="Non">

            <li>Question 7</li>
            <h2 id="Q7">A-t-il un noeud papillon ?</h2>
            <input type="button" value="Oui">
            <input type="button" value="Non">

        </ul>
    </div>
<!--Reponse-->

</body>
</html>