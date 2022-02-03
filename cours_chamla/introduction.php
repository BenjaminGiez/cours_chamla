<?php

class Employe{
    public $nom;
    public $prenom;
    public $age;

    public function __construct($prenom, $nom, $age)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
        var_dump("Je suis construit");
    }

    public function presentation()
    {
        var_dump("Bonjour, je suis $this->prenom $this->nom et j'ai $this->age ans");
    }
}

$employe1 = new Employe('Joseph', 'Darymacie', 35);
//=============================================================
/*▼ Nous n'avons plus besoin de ces trois lignes ▼
$employe1->prenom = "Joseph";
$employe1->nom = "Darymacie";
$employe1->age= 35;*/
//Les proprietés se retrouvent entre les parenthèses au dessus ▲
//=============================================================

$employe2 = new Employe('Uther', 'Pendragon', 48); 
//=============================================================
/*$employe2->prenom = "Uther";
$employe2->nom = "Pendragon";
$employe2->age = 48;*/
//Même chose que pour $employe1 *
//=============================================================


$employe1->presentation();