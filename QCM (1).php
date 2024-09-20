<?php 

/*
QCM : Les classes et objets en PHP

Question 1 :
En PHP, qu'est-ce qu'une classe ?
A) Une méthode qui retourne un objet
B) Un type de donnée
C) Un modèle permettant de créer des objets >>>> X OK
D) Une fonction statique

Question 2 :
En PHP, quel mot-clé est utilisé pour créer une nouvelle instance d'une classe ?
A) create
B) instance
C) new >>>>  X OK
D) build

Question 3 :
Quel est le rôle du mot-clé public dans une classe PHP ?
A) Permet de restreindre l'accès à une propriété
B) Rend une méthode ou une propriété accessible depuis l'extérieur de la classe>>>> X OK
C) Rend une propriété privée
D) Désigne une méthode abstraite

Question 4 :
Comment appelle-t-on le concept qui permet de définir des méthodes avec le même nom dans des classes parentes et filles ?
A) Héritage >>>> X NON
B) Polymorphisme >>>> X OUI
C) Encapsulation
D) Abstraction

Question 5 :
Quelle est la syntaxe correcte pour déclarer une méthode dans une classe PHP ?
A) def maMethode()
B) function maMethode() >>>> OUI
C) class maMethode() >>>> X NON
D) method maMethode()

Question 6 :
Lequel de ces mots-clés est utilisé pour indiquer qu'une méthode ne peut pas être redéfinie dans une classe fille ?
A) static
B) final >>>> OUI
C) const

Question 7 :
En PHP, comment appelle-t-on un constructeur dans une classe ?
A) __construct() >>>> X
B) __init__()
C) constructor()
D) __create()

Question 8 :
Quel est le mot-clé utilisé pour hériter d'une autre classe en PHP ?
A) inherit
B) extends >>>> X oui
C) implements
D) parent >>>> X non

Question 9 :
Comment accède-t-on à une propriété statique dans une classe PHP ?
A) $this->propriete 
B) self::propriete >>>>> oui
C) parent::propriete 
D) static->propriete

Question 10 :
Lequel de ces mots-clés est utilisé pour définir une méthode ou propriété statique ?
A) global 
B) static >>>> X OK
C) final
D) public

Question 11 :
En PHP, qu'est-ce que l'héritage multiple ?
A) Une classe qui hérite de plusieurs classes >>>> X NON
B) Une classe qui hérite d'une interface et d'une classe
C) Une classe qui utilise plusieurs traits 
D) PHP ne supporte pas l'héritage multiple >>>> X OUI

Question 12 :
Quel est le rôle du mot-clé private dans une classe PHP ?
A) Empêche l'accès depuis l'extérieur de la classe >>>> X OUI
B) Permet l'accès depuis les classes filles
C) Permet l'accès depuis toute partie du programme
D) Rend la méthode publique

Question 13 :
Que signifie l'encapsulation en POO ?
A) Restreindre l'accès à certaines propriétés ou méthodes >>>> oui
B) Utiliser des classes et objets
C) Invoquer des méthodes de manière dynamique
D) Permettre l'héritage de classes

Question 14 :
Quel est le mot-clé utilisé pour appeler le constructeur de la classe parente dans une classe enfant ?
A) super()
B) this()
C) parent::__construct() >>>> X OK
D) base()

Question 15 :
Qu'est-ce qu'une interface en PHP ?
A) Une classe abstraite avec des méthodes définies
B) Un modèle qui impose certaines méthodes à implémenter >>> OUI
C) Une méthode qui permet de communiquer entre deux objets
D) Un objet complexe

Question 16 :
Quelle est la syntaxe correcte pour implémenter une interface en PHP ?
A) class MonClasse implements MonInterface
B) class MonClasse extends MonInterface
C) class MonClasse inherit MonInterface
D) class MonClasse use MonInterface

Question 19 :
Comment appelle-t-on une méthode qui n’a pas de corps dans une classe abstraite ?
A) Méthode publique
B) Méthode finale
C) Méthode statique
D) Méthode abstraite >>>> X

Question 20 :
Quel mot-clé est utilisé pour définir une méthode abstraite dans une classe abstraite en PHP ?
A) abstract
B) private
C) static
D) protected

Question 21 :
Quelle est la bonne façon de déclarer un constructeur dans une classe PHP ?
A) function __construct($param)
B) public static function __construct() >>>> X
C) function construct()
D) static function __construct()

Question 22 :
En PHP, quel mot-clé est utilisé pour désigner l'héritage d'une interface ?
A) extends >>>> X NON
B) implements >>>> OUI
C) use
D) inherit 

Question 28 :
Quel est le mot-clé utilisé pour définir une constante dans une classe PHP ?
A) static
B) const >>>> X
C) final
D) define

Question 29 :
Quelle est la différence principale entre une propriété statique et une propriété normale dans une classe PHP ?
A) Une propriété statique appartient à la classe, pas à l'objet>>X
B) Une propriété normale peut être appelée sans instance de classe
C) Les propriétés statiques ne peuvent pas être modifiées
D) Les propriétés normales ne peuvent pas être utilisées dans les méthodes statiques

Question 30 :
Quelle est la bonne façon de définir un getter pour une propriété $name dans une classe PHP ?
A) function getName() { return $this->name; } >>>> X
B) function get_name() { return self::name; }
C) public static function getName() { return $name; }
D) function getName() { return parent::name; }


*/