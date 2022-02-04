<?php

class Employe{
    public $nom;
    public $prenom;
    private $age; //On fait passer l'age en privé pour eviter les erreurs de calculs potenciel

//=============================================================//
//                          "SETTER"                           // 
//=============================================================//

    public function setAge($age)
    {
        if (is_int($age) && $age >= 1 && $age <= 120) // Ici on précise que le valeur doit être comprise
        $this->age = $age;                            // entre 1 et 120;
    } else {
        //On va préciser sur un message d'où vient l'erreur si on met une chaîne de charactère à la place 
        //d'un entier (par exemple);
        throw new Exception ("L'âge d'un employé devrait être un entier compris entre 1 et 120 !");
    }

//=============================================================//
//                          "GETTER"                           // 
//=============================================================//

    public function getAge()
    {
        return $this->age;
    }

//=============================================================//
//                          "CONSTRUCTEUR"                     // 
//=============================================================//

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

// Utilisation du setter ▼
$employe1->setAge(50); //Grâce au setter, on peu "set" l'age de employe1 qui est une proprieté "private";

$employe1->presentation();