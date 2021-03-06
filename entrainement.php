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



// ---------------------------------------
echo '<hr><h2>Structures conditionnelles (IF/ELSE) - opérateurs de comparaison </h2>';
// isset() & empty()
// isset() determine si une variable est considérée comme défini ,ceci signifie qu'elle est déclarée et est différente de NULL.Retourne TRUE si var existe et a une valeur autre que NULL.Sinon elle retournera FALSE.
// empty() determine  si une variable est considéréé comme vide.Elle est considérée comme vide si elle n'existe pas,ou si sa valeur équivaut à FALSE.
$var1 = 0;
$var2 = "";
if(empty($var1)) echo '$var1 , vide ou non définie <br>';
if(isset($var2)) echo 'La variable $var2 existe ,donc je peux l\'afficher,même si elle est vide <br>';
// IF /ELSE IF / ELSE
$a = 10; $b = 5; $c = 2;
if($a > $b){  //Si 10 est superieur à 5 alors ...
    print "A est bien supérieur à B <br>";  //(print) affiche une chaine de caractére.
}                                           //Donc j'affiche mon print
else{                                       // Sinon ..a(10)n'est pas supérieur à b(5).
    print "A n'est pas supérieur à B <br>";
                                        //Donc j'affiche mon print
}
//------------------
if($a > $b && $b > $c){
    echo "Mes deux conditions sont bonnes <br>";
}
if($a == 9 || $b > $c){ //les deux batons droit veulent dire "et"
    print "Une  seule de nos conditions est valable <br>";   //a = 10 et nom 9
}
if($a == 8){
    print "1. A est égal à 8 <br> ";
}
elseif($a != 10){
    print "2. A est different de 10 <br>";
}
else{
    print "3. Aucunes de mes conditions ne sont bonnes <br>";
}
//-----------------------------
if($a == 10 XOR $b == 6){       //XOR:veut dire 'ou bien' seulement il prend une seule condition.
    echo ' Mes deux conditions sont bien valides mais XOR n\'en attend q\'une à la fois pas les deux en même temps ($a est bien égal à 10 mais $b ne vaut que 6<br>)';
}
else{
    print 'XOR n\'attend q\'une seule condition valable à la fois<br>';
}
//-----------
//Opérateur logiques
// && => AND => nécessite que les 2 conditions soient vraies pour que la valeur TRUE soit retournée ($a && $b)
// || => OR => nécéssite que l'une des 2 conditions soit vraie pour que la valeur TRUE soit retournée 
// ! (Different de)=> retourne la valeur inverse.
// XOR (OU EXCLUSIF)=> nécessite que l'une des 2 conditions soit vraie pour que la valeur TRUE soit retournée,MAIS PAS LES DEUX EN MËME TEMPS.
//Forme contractée : 2eme possibilité d'écriture des conditions
echo ($a == 10) ? '$a est égal à 10<br>': '$a n\'est pas égal à 10<br>';
//Ici le "?" remplace le IF et le ":" remplace le ELSE
//  /!\ PHP 7 => entrer une valeur dans une variable sous une condition.
$var1 = isset($maVar) ? $maVar : "Valeur_par_defaut";
//Si $maVar existe,on affiche sa valeur à $maVar1, SINON on y affecte "Valeur _par_defaut" 
echo $var1 . '<br>';      //Valeur _par_defaut
$var2 = $maVar ?? "Valeur_par_defaut_2<br>";
//La même chose en plus court avec les "??" .Soit l'un soit l'autre.
echo $var2 . "<br>";   //valeur _par_defaut_2
$var3 = $_GET["pays"] ?? $_GET["ville"] ?? "Pas d'informations";
//Soit on récupere pays,soit ville,soit on affiche "pas d'informations"
echo $var3 . "<br>";   //pas d'informations.
//------
//Comparaison
$vara = 1;
$varb = "1";
if($vara == $varb){
    echo "Il s'agit bien de la même chose<br>";
}
//  /!\ À mémoriser: pour le a majuscule il faut faite( altgr 7 et on fait le A )
// = Affectation
// == Comparaison des valeurs
// === Comparaison des valeurs et des types 
//-------------------------------------
//  Opérateurs de comparaison
//----------------------------------
// >    :strictement superieur à 
//----------------------------------
// <    :stristement inferieur à 
//--------------------------------
// >=   :supérieur ou égal à
//--------------------------------
// <=   :inferieur ou égal à 
//----------------------------
// ==  : égal à (la valeur)
//---------------------------
// === :strictement égal à (la valeur et le type)
//--------------------------------------------------
// !=   :différent de la (valeur)
//-----------------------------------
//<>    :different de (la valeur)
//--------------------------------
// !==  : strictement different de (la valeur et le type).
//-----------------------------------------------------------
// $a <=> $b   :Combiné:Un entier inférieur ,égal ou supérieur à 0 lorsque $a est inférieur,égal ou supérieur à $b(disponible depuis PHP 7).

// ---------------------------------------------------

echo "<hr><h2> La condition switch</h2>";

$monPays = "France";
$mon2emePays = "Etats-Unis";

switch($monPays) {
    case 'Etats-Unis':
        echo 'Vous êtes américain<br>';
    break;
    case 'Italie':
        echo 'Vous êts italien<br>';
    break;
    case 'Espagne':
        echo 'Vous êts espagnol<br>';
    break;
    case 'Japon':
        echo 'Vous êtes japonais<br>';
    break;
    case 'Singapour':
        echo 'vous êtes singapourien<br>';
    break;
    case 'Norvège':
        echo 'vous êtes norvègien<br>';
    break;
    default: 
        echo 'Vous n\'avez pas de nationalité connue dans notre liste de possibilité<br>';
break;
}

// ----------------------------------
// /!\ Attention : Soyez vigilant lorsque vous utilisez la condition if ou la condition if/elseis/else car il y a une réelle différence entre les deux

$couleur = 'bleu';

if($couleur == 'bleu') {
    echo 'Votre couleur préférée est bien le bleu<br>';
}
if($couleur == 'orange') {
    echo "Votre couleur préférée est bien l'orange<br>";
}
if($couleur == 'rose') {
    echo "Votre couleur préférée est bien le rose<br>";
}
else {
    echo "Nous n'arrivons pas à déterminer quelle et votre couleur préférée !<br>";
}

// si votre objectif est de prévoir qu'un seul cas possible pour vos conditions, vous devrez priviligier la structure if/elseif/else ou la structure switch

// ----------------------------------------------

echo "<hr><h2> Fonctions prédefinies</h2>";

// date()
echo 'Date : ' . date ('d-m-y H:i:s');
// date() est une fonction qui permet de récupérer la date et l'heure local et de la formater

// Le Y majuscule permet d'obtenir l'année en 4 chiffres (2019)
// Le y en minuscule permet d'obtenir l'année en 2 chiffres (19)
// Le H en majuscule permet d'obtenir l'heure au format 24h
// Le H en minuscule permet d'obtenir l'heure au format 12h

// En savoir plus : https://www.php.net/manual/fr/function.date

echo '<br>';

// --------------------------------------------

echo "<hr><h2> Fonctions prédefinies: traitement des chaines de caractères (iconc-strlen, strpos, substr</h2>";

$email = "kevin@lepoles.com";

echo 'L\'@ se trouve à la position n°'. strpos($email, '@');
// L'@ se trouve à la position n°5 

// strpos() est une fonction qui indique la position (sous un tableau index commençant par ZÉRO) d'un caractère dans une chaine de caractère
// Elle attend 2 arguments :
    // La chaine de caractères -> ici $email ("kevin@lepoles.com";)
    // L'information à chercher dans la chaine de caractères -> @

    $email2 = 'Bonjour';
    echo strpos($email2, '@');  // Cette ligne ne ressort rie car par de @ -> FALSE
    echo '<br>';

    // var_dump() - Affiche les informations d'une variable (y compris son type et sa valeur), très utile pour débugger en phase de développement.
    var_dump(strpos($email2, '@'));   // boolean (false)
    echo '<br>';

    // ------------------
    $phrase = "Mettez une phrase ici à cet endroit";

    echo iconv_strlen($phrase). '<br>'; // 35

    /*
        iconv_strlen() est une fonction prédefinie permettant de retourner le nombre de caractères d'une chaine de caractères:
            Succès -> INTEGER (chiffre)
            Echec -> Boolean (False)
            Argument -> La chaine de caractères dans laquelle on souhaite connaitre la taille
    */

// ---------------------
$texte = 'lorem ipsum dolor sit met consectetur adipisicing elit. Amet harum rem, dicta in aliquid, sint fuga hic aperiam, est iure dolorum? Dolore vero ex, iure expedita enim itaque voluptas quidem!';

echo substr($texte, 0, 20). "...<a href=''>Lire la suite</a><br>";

/*
    substr() est une fonction prédéfinie permettant de retourner une partie (un segment) de la chaine de caractères
        Succès -> STRING (Texte)
        Echec -> Boolean (False)
        Arguments:
            1. indiquer la chaine que l'on souhaite "couper"
            2. préciser la position de début
            3. préciser la position de fin
*/

// -----------------------------------
echo "<hr><h2> Fonctions utilisateurs</h2>";

// sans argument

function separation() {  // Déclaration d'une fonction prévu pour ne pas recevoir d'arguments
    echo '<hr><hr><hr>'; // doit afficher 3 <hr> dans la page
}
separation();  // exctution de la fonction

// Avec argument(s)

function bonjour($qui) {
    return "Bonjour $qui <br>\n"; // "\n" m'affectuer une nouvelle la ligne
}

echo bonjour("Zitouni");  // Si la fonction reçoit un argument, il faut lui envoyer un argument
echo bonjour("Juliette");

$prenom = "Philippe";
echo bonjour ($prenom);  // l'argument peut être une variable

// --------------------

// *** EXERCICE *** //

// Créer une fonction appliqueTva() qui va ajouter la tva de 20% à un nombre passé en paramètre de la fonction



function appliqueTva($prixHT){

$prixTTC = $prixHT * (1 + (20/100));
return $prixTTC;
}
echo appliqueTva(100);
echo '<br>';

// -------

function appliqueTva2($prixHT, $taux = 1.2){
    return $prixHT *$taux;
}
echo '20€ avec la tva à 20% donne:' . appliqueTva2(20). '€<br>';

echo '35€ avec la tva à 5.5% donne:' . appliqueTva2(35, 1.055). '€<br>';

echo '60€ avec la tva à 19.6% donne:' . appliqueTva2(60, 1.196). '€<br>';

// --------------------------
meteo('hiver', "2");  // il est possible d'exécuter une fonction avant qu'elle soit déclarée dans le code

function meteo ($saison, $temperature) {
    if ($temperature >1 ||$temperature <-1){
    echo "nous sommes en $saison et il fait $temperature degrés";
    }
    else {
    echo "nous sommes en $saison et il fait $temperature degré";
    }
    
}

// *** EXERCICE *** //

// Gérer l'affichage du S de degrée avec un if/else

exoMeteo("hiver", "-1");

function exoMeteo($saison, $temperature) {
    echo "Nous somme en $saison et il fait $temperature";
    if ($temperature >1  OR $temperature <-1) {
         echo "nous sommes en $saison et il fait $temperature degrés<br>";
    }
    else {
    echo "nous sommes en $saison et il fait $temperature degré<br>";
    }
}

// ------------------
// LA PORTÉE DES VARIABLES

function jourSemaine()  {
    $jour = "mardi";  // variable
    return $jour;     // la fonction retourne bien quelque chose (à ce moment la ce qui suit n'est pas exécuté, on quitte la fonction)

    echo 'Teste';     // Cetteligne ne sera pas éxécutée à cause du return juste au dessus
}

// echo $jour;            // Ne fonctionnnera pas car cette variable n'est connu qu'à l'intérieur de la fonction

$recup = jourSemaine();   // Ici je récupère le resultat de ma fonction jourSemaine() en l'affectant à une variable

echo $recup . '<br>';  // affiche mardi


// -----------
$pays = "Chine";

function affichePays() {

    global $pays;    // le echo qui suit ne fonctionnerait pas si nous n'avions pas mit le mot-clé 'global' pour importer tout ce qui est déclaré de l'espace global (global scope) dans l'espace local (local scope)
    echo $pays;
}
affichePays();

function facultatif() {   // fonctions avec des arguments facultatifs

    print '<pre>'; print_r(func_get_args()); "</pre>";

    // func_get_args() permet d'obtenir un tableau array avec les arguments passés
    foreach(func_get_args() as $indice => $element) {
        echo $indice,'->', $element, '<br>';  
    }

}
facultatif();
facultatif('chien', 'jaguar', 'chauve-souris', 2);
facultatif('Tesla');

// ---------------
// /!\ PHP 7 - On précise en amont la valeur de retour que doit retourner la fonction

function isAdult(int $age) : bool {
    return $age >= 18;
}
var_dump(isAdult(9));   // boolean (false)

// ---------------------------------

echo "<hr> <h2> Structure itérative : Boucle </h2>";

// Contexte -> Quand il y a une multitude de produits à afficher sur une page catalogue produit dans un site 'e-commerce, on va utiliser une boucle qui va repéter l'affichage de chaque produit dans notre catalogue

// La boucle while()
$i = 0;

while($i <3) {    // Tant que $i est inférieur à 3
    echo "$i-----";
    $i++;         // opérateur d'incrementation qui équivaut à écrire $i = $i+1;
                  // L'incrémentation du compteur est affetée à chaque tour de boucle
}
                  // Affiche 0-----1-----2-----
echo '<br>';

// *** EXERCICE **** //

// Faire en sorte de ne pas avoir les tirets après '2' comme ceci: 0-----1-----2
 
$j = 0;
while($j <3) {
    
    if($j == 2) {
        echo $j;
    }
    else {
        echo "$j-----";
    }
    $j++;
}
// Affiche : 0-----1-----2

echo '<br>';

// -----------
// La Boucle FOR()

for($i = 0; $i <=16; $i++) {    // Initialisation de la valeur de départ; notre condition; et l'incrémentation (ou décrémentation);

    print $i . "<br>";
}
echo '<br>';

