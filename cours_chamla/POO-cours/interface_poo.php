<?php

interface Travailleur{
    public function travailler();
}

class Employe implements Travailleur
{
    public $nom;
    public $prenom;
    protected $age; //On peut faire passer l'age en privé pour eviter les erreurs de calculs potenciel

///=============================================================//
//                                                                "CONSTRUCTEUR"                                                             // 
//=============================================================//

public function __construct($prenom, $nom, $age)
{
    $this->prenom = $prenom;
    $this->nom = $nom;
    $this->setAge($age);
    var_dump("Je suis construit");
}

public function presentation()
{
    var_dump("Yo, je suis $this->prenom $this->nom et j'ai $this->age ans");
}

public function travailler(){
return "Je suis un employé et je travail vite fait";
}
//=============================================================//
//                                                               "SETTER"                                                                              // 
//=============================================================//

    public function setAge($age)
    {
        if (is_int($age) && $age >= 1 && $age <= 120){ // Ici on précise que le valeur doit être comprise
        $this->age = $age;                            // entre 1 et 120;
    } else {
        //On va préciser sur un message d'où vient l'erreur si on met une chaîne de charactère à la place 
        //d'un entier (par exemple);
        throw new Exception ("L'âge d'un employé devrait être un entier compris entre 1 et 120 !");
    }
    }
///=============================================================//
//                                                                                "GETTER"                                                            // 
//=============================================================//

    public function getAge()
    {
        return $this->age;
    }


}

class Patron extends Employe{
    public $voiture;

    public function __construct($prenom, $nom, $age, $voiture)
    {
        parent::__construct($prenom, $nom, $age);//on a besoin que d'une ligne ici grâce à "parent::"
        $this->voiture = $voiture;
    }
    public function rouler()
    {
        var_dump("Bonjour, je roule avec ma $this->voiture !");
    }
    public function travailler(){
        return "Je suis le patron et je travail si je veux";
        }
}
class Etudiant implements Travailleur
{
    public function travailler()
    {
        return "Je suis un étudiant et je fais genre de réviser (en vrai je regarde des hot tubs)";
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
$etudiant = new Etudiant();
// Utilisation du setter ▼
$employe1->setAge(50); //Grâce au setter, on peu "set" l'age de employe1 qui est une proprieté "private";

$employe1->presentation();

$patron = new Patron("Coco", "Lasticot", 84, "Merco");
$patron->presentation();
$patron->rouler();


faireTravailler($patron);
faireTravailler($employe1);
faireTravailler($etudiant);

function faireTravailler(Travailleur $objet){
var_dump("Travail en cours : {$objet->travailler()}");
}