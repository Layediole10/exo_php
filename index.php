<?php
 
 echo 'Exo_php <br/> <br/>';

//   EXO1
//  function somme($nombre1, $nombre2){
//     $result = 0;

//      if($nombre1 !== $nombre2){
//         $result =  $nombre1 + $nombre2;
//         echo $result;
//      } elseif ($nombre1 != 0  && $nombre1 === $nombre2) {
//         $result =  $nombre1 * 2 * 3;
//         echo $result;
//      }
//  }
//  somme(5, 3);


// ----------------------EXO2----------------------------
//  
// function difference_abs($n){
//     $nombre = 51;
//     $result = abs($n - $nombre);

//      if($n >= $nombre){
        
//         echo $result * 3;
//      } else {
        
//         echo $result;
//      }
//  }
//  difference_abs(51);

// ----------------------EXO3----------------------------

// function verification($nb1, $nb2){
 
//     $compared_numb = 30;
//     $somme = $nb1 + $nb2;
//      if($nb1 === $compared_numb OR $nb2 === $compared_numb) {
//         echo true;
//      } elseif($somme === $compared_numb) {
//          echo true;
//      } else {
//          echo false;
//      }
     
//  }
//  verification(0, 30);

//  function verification($nb1, $nb2){
 
//     $compared_numb = 30;
//     $somme = $nb1 + $nb2;
    
//     switch ($compared_numb) {
//         case $nb1:
//         case $nb2:
//         case $somme:
//             echo 'true';
//              break;
//         default:
//             echo 'false';
           
//     }
     
//  }
//  verification(5, 25);

// --------------------EXO4----------------------------

// function verif_int($n){
 
//     echo ($n > 10 && $n < 200)? "true": "false";
//  }
//  verif_int(1);

 // --------------------EXO5----------------------------

//  function create_str($myStr){
 
//     $first = "if";
    
//     $myArr = explode(" ", $myStr);
    
//     if ($myArr[0] !== $first) {
//         (array_unshift($myArr, $first));
//         echo implode(" ", $myArr);
//     }else {
//         echo $myStr;
//     } 
//  }
//  create_str('if else');

// --------------------EXO6----------------------------

// function delete_elem($myStr, $n){
 
//     $myArr = str_split($myStr); 
//     array_splice($myArr, $n, 1);

//     echo implode("", $myArr);
   
//  }
//  echo delete_elem("Python", 1)."<br/>";
//  echo delete_elem("Python", 0)."<br/>";
//  echo delete_elem("Python", 4)."<br/>";

 // --------------------EXO7----------------------------

//  function swap_elem($myStr){
 
//     $lower = strtolower($myStr);
//     $myArr = str_split($lower);
     
//     if (count($myArr) === 0) {
//         echo implode("", $myArr);
//     }else {
//         $first = array_shift($myArr);
//         $last = array_pop($myArr);

//         $arr1 = array_unshift($myArr, $last);
//         $arr2 = array_push($myArr, $first);
//        echo implode("", $myArr);
//     }
 
//  }
//  swap_elem("Y");

 // --------------------EXO8----------------------------

//  function copy_elem($myStr){
 
//     $arr1 = str_split($myStr);
//     $arr2 = array_slice($arr1, 0, 2);
//     echo str_repeat(implode($arr2), 4);
    

 
//  }
//  echo copy_elem("C Sharp"). "<br/>";
//  echo copy_elem("JS"). "<br/>";
//  echo copy_elem("a"). "<br/>";

 // --------------------EXO9----------------------------

//  function create_new_str($myStr){
 
//     if(strlen($myStr) === 1){
//       echo  str_repeat($myStr, 3);
//     }else{
//         $str = strtolower($myStr);
//         $arr1 = str_split($str);
//         $lg = count($arr1);
//         $copyElem = array_slice($arr1, $lg-1, 1);
//         $elem = implode($copyElem);
//         array_push($arr1, $elem);
//         array_unshift($arr1, $elem);

//         implode("", $arr1);
      
//     }

//  }
//  echo create_new_str("E"). "<br/>";

//  -------------------EXO10-------------------------

// function multiple($n){
 
//     echo ($n % 3 === 0 || $n % 7 === 0)? "True": "False";
   
//  }
//  echo multiple(14). "<br/>";

// -----------------------------------------------------


// class SimpleClass
// {
//     // déclaration d'une propriété
//     public $var = 'une valeur par défaut';

//     // déclaration des méthodes
//     public function displayVar() {
//         echo $this->var;
//     }
// }


// -----------------COALESCENT----------------------------
//  **l’opérateur coalescent
//   $a = 7;
//   $b = 5;
//  echo $a ?? $b ?? 3;
// -------------------VAR-GLOBAL-----------------------------
// variable globale
$_GLOBALS['MaVar']="Bonjour";
 echo  '<br/> <br/>';

// echo $_GLOBALS['MaVar']

// -------------------CONSTANT-----------------------------
// les constantes
// define("MyVar","Bonsoir");

// -------------------QLQ_FUNCT_STR-----------------------
$long = 'bonjour';
 $lg=strlen($long);
// echo $lg;
// echo stristr($long, 'Jour')?'vrai': 'false';

// -------------------TABLEAUX--------------------------

// EXO1
// $color = array('white', 'green', 'red', 'blue', 'black');

// echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the " .$color[2]." carpet, the ".$color[1]. " lawn, the ".$color[0]." house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

// ------------------EXO2---------------------------
// $color = array('white', 'green', 'red');

// for ($i=0; $i < count($color); $i++) { 
//     echo $color[$i]."\n";
// }

// sort($color);
// echo "<ul>";
// for ($i=0; $i < count($color); $i++) { 
//     echo "<li>" .$color[$i]. "</li>";
// }
// echo "</ul>";

// -------------------EXO2-BIS-----------------------

// $color = array('white', 'green', 'red');

// foreach($color as $item){
//     echo $item."\n";
// }

// sort($color);
//     echo "<ul>";
// foreach($color as $item){
//     echo "<li>" .$item. "</li>";
// }
//     echo "</ul>";

// ----------------EXO3---------------------------
// $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

// // asort(): tri un tableau dans l'ordre croissant en conservant l'association des index... Son contraire : arsort()....
// asort($ceu);
// foreach($ceu as $k => $v){
//     // sort($v);
//     echo "The capital of " .$k. " is " .$v."<br/> ";
// }

// ---------------------EXO4--------------------------
// $x = array(1, 2, 3, 4, 5);

// var_dump($x);
// // unset — Détruit une variable
// unset($x[3]);
// echo "<br/> <br/>";
// // array_values — Retourne toutes les valeurs d'un tableau
// // print_r — Affiche des informations lisibles pour une variable
// print_r(array_values($x));
// echo "<br/> <br/>";
// var_dump($x);

// ---------------------EXO5-----------------------

// $color = array(4 => 'white', 6 => 'green', 11=> 'red');
// // reset() replace le pointeur de tableau array au premier élément et retourne la valeur du premier élément.
// $first = reset($color);
// echo $first;

// ----------------EXO6-------------------------

// function display($val, $key){
//     echo $key. " : " .$val. "<br/>";
// }

// $json = '{"Title": "The Cuckoos Calling",
//     "Author": "Robert Galbraith",
//     "Detail": {
//     "Publisher": "Little Brown"
//     }}';

//     $arr1 = (json_decode($json, true));

    // print_r($arr1);
    // foreach ($arr1 as $key => $val) {
    //     echo $key. " : " .$val. "<br/>";
    // }

// ----------------------------



// array_walk_recursive($arr1, "display");
// -------------------EXO7-------------------------

function insert_elem($el, int $i){
   
   $myarr = array('1','2','3','4','5');
        array_splice($myarr, $i, 0, $el);
        // print_r($myarr);
        foreach($myarr as $elem){
            echo ' '.$elem;
        }
    
}
insert_elem('$', 3);










// Les tableaux associatifs parcourus avec foreach

$myArr = array('Abdoulaye'=>1988, 'Marie'=>1995, 'Rokhaya'=>2021);
// foreach($myArr as $key=>$val)
// echo $key. " ".$val. '<br/>';

// ----------------------------------------------------
//HTTP(Hypertext Transfer Protocol): Protocole de transmission permettant à l'utilisateur d'accéder à des pages web par l'intermédiaire d'un navigateur.
// ------------------------------------------------

// Les Superglobales

// Ce sont des tableaux concernant pour l’essentiel le protocole HTTP ou la gestion de Cookies
// ou des Sessions.
// — $_GET[ ], $_POST[ ] ou $_REQUEST[ ] qui englobe les 2
// — $_SERVER[ ] : Variables décrivant le client ou la page courante
// — $_GLOBALS[ ] variables globales
// — $_COOKIE[ ] pour les cookies
// — $_SESSION[ ] pour les sessions



// -----------------CLASS & OBJET--------------

//  class Vehicle {

//         // ayons l'habitude de mettre nos propriets en private ou protected s'il ya heritage
//         protected $_name;
//         // definissons les getteurs pour acceder a nos proprietes et des setteurs pour les modifier
//         public function getName(){
//            echo $this->_name;
//         }
//         public function setName($_newName){
//            echo $this->_name = $_newName;
//         }
//         protected $_speed;
        
//         // definition d'un constructeur...
//         public function __construct( $name,  $speed){

//             $this->_name = $name;
//             $this->_speed = $speed;
//         }

//         // definition d'une methode
//         public function move(){
//             echo $this->_name. 'se deplace' .$this->_speed. 'km/h';
//         }
    
//     }
     
//     // instanciation de la classe (creation d'un objet)
//     $obj1 = new Vehicle('Audi', 750);

//     // acces a la propriete
//     $obj1->getName();
//     echo '<br/>';
//     $obj1->setName('BMW');
//     echo '<br/>';
//     $obj1->move();
//     echo '<br/>';


//     class Bus extends Vehicle {

//         private $_color;
//         public function __construct($name, $speed, $color){

//             // ici on a pas besoin de redefinir le constructeur mere, on utilise le mot cle "parent" et l'operateur de resolution(::) pour heriter de la classe mere...
//             parent::__construct($name, $speed);

//             // on peut egalement ajouter de nouvelles propriétes dans le constructeur...
//             $this->_color = $color;
//         }
        
//         public function myCar(){
//             echo "Ma voiture ".$this->_name. " est de couleur ". $this->_color. " et a une vitesse de " .$this->_speed. " km/h.";
//         }

//     }
//     echo '<br/> <br/> <br/>';
//     $obj2 = new Bus('TOYOTA', 250, 'blanche');
    
//     $obj2->myCar();


    // ---------------ABSTRACT CLASS-------------------
    
// on ne peut pas instancier une classe abstrait et pour l'heritage de cette classe il est imperatif de redefinir les proprietes et les methodes...
// abstract class Mere {
//     abstract public function hello();
// }
// class Fille extends Mere {
//     public function hello(){
//         echo 'je suis une classe fille...';
//     }
// }

// $obj3 = new Fille();
// echo '<br/> <br/> <br/>';
// $obj3->hello();


// ----------------OPERATEUR DE RESOLUTION------------
// class DataBase {

//     // definition d'une propriete statique
//     public static $_sgbd = 'MySQL';
    
//     // definition d'une methode statique
//     public static function connect(){
//         echo 'Je me connecte...';
//     }

// }
// //  dans une classe statique pour acceder aux methodes et proprietes on utilise l'operateur de resolution 

// // et pour cela on utilise le nom de la classe suivi de l'operateur de resolution suivi du nom de la propriete ou methode...

// echo DataBase::$_sgbd;
// echo '<br/>';
// DataBase::connect();


 ?>