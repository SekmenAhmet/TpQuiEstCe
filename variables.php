<?php 
// On déclare un tableau qui contiendra les valeurs renvoyant aux personnages
$personnages = [
    "0000000",
    "0001111",
    "0010011",
    "0011100",
    "0100101",
    "0101010",
    "0110110",
    "0111001",
    "1000110",
    "1001001",
    "1010101",
    "1011010",
    "1100011",
    "1101100",
    "1110000",
    "1111111"
];

// On déclare un tableau afin de pouvoir vérifier si le joueur a menti ou non
$checks = [[1, 0, 0], [0, 1, 0], [1, 1, 0], [0, 0, 1], [1, 1, 1], [0, 1, 1], [1, 0, 1]];

