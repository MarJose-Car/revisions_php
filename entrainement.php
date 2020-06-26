<style>
h2{
    margin: 0;
    font-size: 22px;
    color: red;
    font-family: sans-serif;
}

</style>
<body>

<h2>Écriture et Affichage</h2>


<?php

    // Commentaire sur une ligne en PHP

    /*
        Commentaires
        sur 
        plusieurs
        lignes 
    */

    // Instructions d'affichage
    // Variables: Types / Déclarations / Affectation
    // Concaténation 
    // Guillements et quotes "" ''
    // Constantes
    // Conditions et les opérateurs 
    // Fonctions prédéfinies 
    // Fonctions utilisateurs 
    // Boucles
    // Inclusions 
    // Array 
    // Classes et Objets

    echo 'Bonjour,';                        // echo est une instruction qui nous permet d'afficher notre texte dans notre page
    
    echo '<br>';                            // Nous pouvons également y mettre du HTML
    
    echo 'Bienvenue dans ce cours de PHP';  // Une instruction ECHO doit se terminer par ";"

    echo '<hr>';
?>

<?= "Nouveau texte" ?>      <!-- le " = " remplace le echo -->

<p>Un message sous HTML (en dehors des balises php)</p>

<?php 

//!\ Il est possible d'intégrer du HTML dans un fichier PHP mais l'inverse n'est pas possible

echo "La version de PHP : ";
echo phpversion();          // me retourne la version de PHP


// -----------------------------------


echo "<hr><h2>Variables : Types / Déclaration / Affectation</h2>";

// Une variable est un espace de stockage permettant de stocker tout types de données

// Déclaration d'une variable avec le signe "$"

// Structure d'une variable => $ma_variable OU $maVariable

// Une variable doit contenir des caractères alpha-numériques et underscore (A-z, 0-9 et _)
// Les variables sont sensibles à la casse (comme en JS) :
        // - $nom est différent de $Nom ou $NOM
// Les variables ne doivent pas commencer par un chiffre par convention

$a = 127;   // Affectation d'une valeur (127) à une variable ($a)
echo gettype($a);   // integer
    // gettype() est une fonction prédéfinie qui nous permet de connaître le type de données d'une variable

echo '<br>';

$b = 1.5;
echo gettype($b);   // double (nombre à virgule)

echo '<br>';

$c = "une chaîne";
echo gettype($c);   // string (texte ou aussi appelé VARCHAR)

$a = "127";
echo gettype($a);   // string (comme en js si une valeur numérique est entourée de guillemets, son type sera équivalent à du texte, string, varchar)

echo '<br>';

$d = true;
echo gettype($d);   // boolean -> true ou false

$e = false;
echo gettype($e);   // boolean -> true ou false

echo '<br>';

$f = [];
echo gettype($g);   // array -> tableau

echo '<br>';

// Les plusieurs  types de données supportées en PHP sont :
        //  -   string
        //  -   integer
        //  -   double (float)
        //  -   boolean 
        //  -   array
        //  -   object
        //  -   null


// -----------------------------------


echo "<hr><h2>Assignation par référence</h2>";

$var = "Salut";     // Affecte la valeur "Salut" à $var
$var2 = &$var;      // Assigne par référence $var à $var2

echo $var;          // Affiche Salut
echo '<br>';
echo $var2;         // Affiche aussi Salut

$var2 = "Hola";     // Si je change $var2, $var change également
echo '<br>';
echo $var2;         // Affiche Hola
echo "<br>";
echo $var;          // Affiche Hola

echo"<br>";

// -------------------------

$x = "je suis...";
$y = "en retard";

echo $x . $y . "<br>";  // Le point '.' de concaténation qui l'on peut traduire par "suivi de"
// Affiche 'je suis... en retard

echo "$x$y <br>";  // même chose sans concaténation
                   // affiche "je suis... en retard"

echo "Ma phrase : " . $x .$y ;  // Affiche " Ma phrase : Je suis... en retard"

echo '<br>', 'coucou', '<br>', 'tout', '<br>', 'le', '<br>', 'monde', '<br>' , '!', '<br>';
// Concaténation avec une virgule ',' (la virgule et le point de concaténation sont similaires)
// affiche:
// coucou
// tout
// le
// monde
// !

$num = 7;
$num2 = 3;

echo $num . $num2;  //  Affiche 73

// ---------------------------------

echo "<hr><h2>La concaténation lors de l'affectaction<h2>";

$prenom1 = 'Bruno';
$prenom2 = "Clara";

echo $prenom1. '<br>'; // Affiche Bruno

$prenom1 = "Charles";  // Réassigne une nouvelle valeur à la variable $prenom1

echo $prenom1 . '<br>';  // Affiche Charles

$prenom2 = 'Pascal';
$prenom2 .= 'Domonique'; // Cette valeur va s'ajouter à la suite sans remplacer la valeur précédente grâce à l'opérateur '.='

echo $prenom2;  // Affiche Pascal Dominique

// -----------------------------------

echo '<hr><h2> Les guillements et les quotes</h2>';

$message = "Aujourd'hui";      // ou bien -> 'Aujourd\'hui'
 
$texte = "Bonjour";

echo $texte. ", tout le monde <br>";  // Bonjour, tout le monde  // affiche dans des doubles quotes (guillements), la variable est évalué, c'est à dire que sa valeur est retournée

echo '$texte, tout le monde <br>';   // $texte, tout le monde  // Affiche dans des quotes, la variable n'est pas évaluée

// ----------------------------------

echo '<br><h2> Les constantes et constante magique<h2>';

// Une constante tout comme une variable permet de conserver une valeur, sauf que comme son nom l'indique, la valeur est constante, elle ne change pas. Utile pour garder de manière certaine les identifiants de connexion d'une BDD ou le chemin vers un site internet, par exemple.

// Structure :
// define (NAME, value, case-insensitive(true ou false)[OPTIONNEL]) // Par défaut, c'est false

define("CAPITALE", "Paris");  // Par convention, une constante se déclare toujours en majuscule

echo CAPITALE . '<br>';   // Affiche Paris
                          // La signe $ n'est pas nécessaire avant le nom de la constante

define("MESSAGE", "Session Pantin", true);
echo MESSAGE . '<br>';    // Affiche Session Pantin

// CONSTANTE MAGIQUE

echo __FILE__ . '<br>';   // ME renvoie le chemin complet vers le fichier:
                     //-> (C:\xamppy\htdocs\revisions_php\entrainement.php)

echo __LINE__ . '<br>';  // Me renvoie le numéro de la ligne où je me trouve (217)

// echo __FUNCTION__ . '<br>';  // Affiche le nom de la fonction dans laquelle nous somme

// echo __CLASS__ . '<br>';   // Affiche le nom de la classe dans laquelle nous sommes

// echo __METHOD__ . '<br>';   // Affiche le nom de la méthode dans laquelle nous sommes

// define('ANIMALS', array(
//    'chien',
//    'chat',                     // Constante avec une valeur Array
//    'lion',
//    'pigeon',
// ));

// --------------------------------------
echo '<hr><h2> Exercice variable</h2>';

// Exercice : Afficher 'Rouge-vert-bleu' (avec les tirets) en mettant chaque couleur dans une variable

$r = 'Rouge';
$v ='vert';
$b = 'bleu';

// echo '"'.$r .'-' . $v . '-'. $b.'"';

echo "$r-$v-$b";

// ---------------------
echo "<hr><h2> Opérateurs arithmétiques</h2>";
$a = 10; $b = 2;

echo $a + $b . '<br>';    // Affiche 12  // opérateur '+' => addition
echo $a - $b . '<br>';    // Affiche 10  // opérateur '-' => soustraction
echo $a * $b . '<br>';    // Affiche 20  // opérateur '*' => multiplication
echo $a / $b . '<br>';    // Affiche 5  // opérateur '/' => division
echo $a % $b . '<br>';    // Affiche 0  // opérateur '%' => modulo
echo $a ** $b . '<br>';    // Affiche 100  // opérateur '**' => puissance

$num3 = 10;
$num4 = "30";

echo $num3 + $num4;
echo '<br';
echo "Le type d'une opération entre un INTEGER et un STRING est :". gettype($num3 + $num4);   

// Opérateurs d'affectation

$c = 50; $d = 25;

$c += $d;      // équivaut à écrire $c = $c + $d;  => affiche 75

$c -= $d;     // équivaut à écrire $c = $c - $d;  => affiche 25

$c *= $d;      // équivaut à écrire $c = $c * $d;  => affiche 1250

$c /= $d;      // équivaut à écrire $c = $c / $d;  => affiche 2

$c %= $d;      // équivaut à écrire $c = $c % $d;  => affiche 0
