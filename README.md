# cours_chamla
Cours sur la POO de Lior Chamla
<[Vidéo](https://www.youtube.com/watch?v=fZcGXjg97Ns&list=PLpUhHhXoxrjcOTNSHdIo_hSwtXFku16mL&ab_channel=LiorCHAMLA)>

Retour sur la Programmation Orientée Objet, comment va t on s'en servir :

  - Organisation du code (les classes)
  - Sécurité du code, intégrité (l'encapsulation)
  - Réutilisation du code (l'héritage)
  - Contrôle sur le developpement : classes abstraites et interfaces
  - Boss de fin : abstraction et polymorphisme


#1- Les Classes [introduction.php]#

Dans cet exercice, on va créer une classe Employe puis créer ses instances ($employe1 et $employe2). On se rend compte que grâce aux classes, on ne renseigne que peu 
d'informations comparé à la programmation PHP qu'on faisait jusqu'à maintenant. Ici, si on ne passe pas par les classes, le problème qui va apparaître sera le nombre
important de variables nécessaires à la création d'une bdd pour les employés d'une entreprise. Sans les classes, on devra également passer à la fonction les infos de 
l'employé à présenter.
Les classes permettent de structurer le code sous la forme d'entités cohétrentes.

On va creer des objets donc. La classe est un représentation de ce qu'est un employé (il faut y voir un élan, vous allez pas nous payer en oignons ?!! #ref) : Un employé
c'est un $prenom, un $nom et un $age. L'objet est l'employé : Joseph Darymacie 35 ans.

new Employe() = Nouvelle instance de la classe Employe.

$employe1 contient une nouvelle instance de la classe Employe ($nom, $prenom, $age).
Pour acceder au variables ici, l'operateur sera une fléche (->).

La Fonction "presentation" dans le code (public function presentation()) est en réalité une méthode : c'est une fonction qui fait partie d'un objet. En général, on 
appelle une "function" fonction quand elle est à l'exterieur de la classe, tandis qu'une fonction qui nécésite qu'on passe par un objet s'appellera une méthode donc.

Les "variables" au début du code (précedées par 'public' : $nom, $prenom et $age) sont plus précisement des prorietés (des variables qui font partie d'un objet).
On va désigner un objet en particulier en utilisant 'this->$variable'. ($this->nom pour désigner le nom de 'cet employé').

#2- L'encapsulation [introduction.php]#


On va définir le statut "private" à $age pour éviter d'éventuelles erreurs dans le code par la suite. Si un autre dev bosse sur ce même code qui a des centaines de lignes déjà écrites, le fait d'avoir l'age en private permet de veiller à ce que les bonnes données soient renseignées pour ce parametre.
Ici, grâce à un "setter", on va faire en sorte que l'age doit être un entier compris entre 1 et 120. Dans le cas ou une chaîne de caractere ou un mauvais chiffre est rentré, un message d'erreur adapté va s'afficher. Ainsi, il sera plus facile d'identifier et de corriger l'erreur. Le message d'erreur est codé de cette façon :

throw new Exception ("L'âge d'un employé devrait être un entier compris entre 1 et 120 !"); (il se trouve donc dans le setter).

L'encapsulation sert à securiser le code, grâce à ça il sera bien plus facile d'éviter les erreurs et de les corriger si il y'en a. On peux très facilement retrouver d'où vient l'erreur aussi.

#3- L'héritage [introduction.php]#

Ici la classe "Patron" hérite de la classe "Employe", c'est à dire qu'il va avoir les trois proprités de cette dernière. Pas besoin de répeter ces propriétés donc. La classe "Patron" aura la possibilité d'avoir plus de propriétés mais toujours avec $nom, $prenom et $age.
Grâce à la syntaxe "parent::", on n'a besoin que d'une ligne à la place des trois nécessaires pour $nom, $prenom et $age.

Pour 
