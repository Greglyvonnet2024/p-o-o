<?php

// // Une classe est une structure (ou un model) qui définit un objet
// class Personne
// { // class Personne (toujours premiere lettre en majuscule du nom de la classe)
//     public $nom; // on appelle ça une propriété dans une classe
//     public $age;
//     public function parler()
//     {
//         echo "<br>Bonjour, je m'appelle " . $this->nom;
//     }
// }

// Instanciation d'une classe : 
// $sirine = new Personne;
// // On affecte la valeur Sirine à la propriété (variable) nom de la classe Personne
// $sirine->nom = 'Sirine';
// $sirine->age = 25;

// $sirine->parler();

// $apprenant2 = new Personne;
// $apprenant2->nom = 'Kevin';
// $apprenant2->age = 20;

// $apprenant2->parler();

// Public , Private, Protected

// Public = Accessible de n'importe où (aussi bien à l'interieur qu'à l'exterieur de la classe)
// Private = Accessible uniquement dans la classe à laquelle elle appartient
// Protected = Accessible  dans la classe à laquelle elle appartient ET dans ses classes filles

// Le constructeur 

// Le constructeur est une méthode spéciale (methode magique) qui est automatiquement appelée lors de la création d'un objet (ou instanciation de classe) 

class Gateaux
{

    public $nomGateau;
    public $oeufs;
    public $farine;
    public $tempsCuisson;

    public function __construct(string $n, int $t)
    {
        $this->nomGateau = $n;
        $this->tempsCuisson = $t;
    }
}

$gateau1 = new Gateaux('mille-feuilles', 60); // Instanciation de classe

// Heritages : 

// La classe personne (tout en haut) sera notre classe mère 

// classe fille : 

// La classe fille Employes aura accès aux propriétés et méthodes de Personne à partir du moment où celles ci sont public ou protected
// class Employes extends Personne
// { // extends est un mot clé qui 'étend' la portée de la classe Employes à Personne

//     public $salaire; // Propriété salaire appartenant à Employes
//     public function nom()
//     {
//         // On a accès à la propriété nom de la classe Personne car elle est étendue
//         echo $this->nom . $this->salaire;
//     }
// }

// $employe1 = new Employes;
// // accès à la propriété public salaire de Employes
// $employe1->salaire = 3000;
// // accès à la méthode nom public de Employes
// $employe1->nom();
// // accès à la méthode parler public de Personne
// $employe1->parler();



// parent:: 

// parent:: est un mot clé qui est utilisé pour faire reference à la classe parente et accéder aux méthodes ou propriétés de cette derniere

// syntaxe : parent::nomdelaméthode() ou parent::nomdelapropriété

class Personne
{
    public $nom;
    public $age;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function jeSuis()
    {
        echo "Je suis une personne, $this->nom";
    }
}

class Eleve extends Personne
{
    public function __construct($nom)
    {
        parent::__construct($nom);
    }

    public function jeSuis()
    {
        parent::jeSuis();

        echo " Je suis un eleve et mon nom est $this->nom";
    }
}

// new Eleve(parametre du constructeur Eleve), le constructeur de Eleve est chargé d'appeler le constructeur de Personne(classe parente), de lui fournir le paramètre passé, et le construteur de Personne sera chargé d'affecter la valeur du paramètre passé à la propriété nom
$eleve1 = new Eleve("Jeremy");
// jeSuis() est la méthode de Eleve qui appelle la méthode de Personne (jeSuis()) et qui ensuite affiche un message
$eleve1->jeSuis();


// Polymorphisme

// Permet à des objets de classes différentes d'êtres traitées de manière interchangeable, à condition qu'ils partagent une interface ou héritent d'une même classe parente.

class Maison
{
    public function sePresenter()
    {
        echo " <br>Je suis une maison";
    }
}
class SousSol extends Maison
{
    public function sePresenter()
    {
        echo "<br>Je suis un sous-sol";
    }
}

// On stock dans un tableau les deux instances des classes
$maisons = [new Maison, new SousSol];

// On boucle sur maisons et on appelle la méthode sePresenter() sur chacune des classes
foreach ($maisons as $m) {
    $m->sePresenter(); // Appellera la méthode appropriée selon l'objet presenté
}

// Encapsulations

// L'encapsulation est le concept de restreindre l'accès direct aux propriétés d'un objet, en utilisant des méthodes publiques pour manipuler ces propriétés 

class CompteBancaire
{
    private $solde; // solde est privé

    public function deposer($montant)
    {
        $this->solde += $montant; // $this->solde = $this->solde + $montant
    }

    public function retirer($montant)
    {
        $this->solde -= $montant;
    }

    public function afficherSolde()
    {
        echo "<br>$this->solde";
    }
}

$compte1 = new CompteBancaire;
$compte1->deposer(20);
$compte1->afficherSolde();
$compte1->deposer(50);
$compte1->afficherSolde();
$compte1->retirer(30);
$compte1->afficherSolde();

// Méthodes et propriétés statiques 
// Une methode ou une propriété statique n'ont pas besoin que la classe dans laquelle ils sont soit instanciée
// On les appelle de la manière suivante : Class::méthode , Class::propriété
// Exemple : PDO::FETCH_ASSOC

// Utilisées pour stocker des données qui doivent être accessible à partir de n'importe quel endroit du code
// Exemple : Compteur d'incrémentation pour un bouton 

// Au lieu de $this-> on va utiliser self::

class Button
{
    // propriété static qui stockera le nombre de clicks
    private static $compteur = 0;

    // méthode pour cliquer sur le bouton
    public function click()
    {
        self::$compteur++;
    }

    // Méthode statique pour récupérer le nombre total de clics
    public static function getClicks()
    {
        return self::$compteur;
    }
}

// création de 3 objets bouton
$button1 = new Button;
$button2 = new Button;
$button3 = new Button;

// On simule les clicks sur les boutons
$button1->click();
$button2->click();
$button3->click();

// On récupère le nombre total de click
echo "Nombre total de clicks : " . Button::getClicks();


class Animaux
{
    private $nom;
    private $espece;
    private $couleur;
    private $age;
    private $prix;
    private $regime_alimentaire;
    private $categorie;

    public function __construct(string $n, string $e, string $co, int $a, float $p, string $r, string $ca)
    {
        $this->nom = $n;
        $this->espece = $e;
        $this->couleur = $co;
        $this->age = $a;
        $this->prix = $p;
        $this->regime_alimentaire = $r;
        $this->categorie = $ca;
    }

    public function afficherAnimal()
    {
        echo "Cet animal est un(e) $this->espece, il s'appelle $this->nom, il a $this->age an(s), c'est un $this->categorie, de couleur $this->couleur, il faut le nourrir correctement car c'est un $this->regime_alimentaire";
    }
}

$petitChien = new Animaux("froufrou", 'chien', 'marron', 1, 350, 'carnivore', 'mammifere');
$petitChat = new Animaux("Salem", 'chat', 'noire', 3, 0, 'carnivore', 'mammifere');
$petitChien->afficherAnimal();
$petitChat->afficherAnimal();
