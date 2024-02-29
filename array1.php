<?php

function imprimeVetor($vet)
{
    foreach ($vet as $nome) 
    {
        print $nome . "|";
    }
}

$vetor = array("Walmonn", "Rebs", "Vini", "Vini", "Sarah");
$vetor1 = array("Julio", "Daniel", "Jeffinho", "Silvia", "Marcelo");
$vetor2 = array("Buche", "Ana Ju", "Kassime", "Mayara", "Leticia");
$vetor3 = array("Jonathan", "Mari", "Rafael", "Yuri", "Pazinato");

imprimeVetor($vetor);
imprimeVetor($vetor1);
imprimeVetor($vetor2);
imprimeVetor($vetor3);
