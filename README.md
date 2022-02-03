# cours_chamla
Cours sur la POO de Lior Chamla
https://www.youtube.com/watch?v=fZcGXjg97Ns&list=PLpUhHhXoxrjcOTNSHdIo_hSwtXFku16mL&ab_channel=LiorCHAMLA

Retour sur la Programmation Orientée Objet, comment va t on s'en servir :

  - Organisation du code (les classes)
  - Sécurité du code, intégrité (l'encapsulation)
  - Réutilisation du code (l'héritage)
  - Contrôle sur le developpement : classes abstraites et interfaces
  - Boss de fin : abstraction et polymorphisme


1- Les Classes [introduction.php]

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

