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
//  somme(5, 5);


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

function multiple($n){
 
    echo ($n % 3 === 0 || $n % 7 === 0)? "True": "False";
   
 }
 echo multiple(14). "<br/>";




// -----------------COALESCENT----------------------------
//  **l’opérateur coalescent
//   $a = 7;
//   $b = 5;
// -------------------VAR-GLOBAL-----------------------------
// variable globale
$_GLOBALS['MaVar']="Bonjour";
 echo  '<br/> <br/>';
//  echo $a ?? $b ?? 3;
// echo $_GLOBALS['MaVar']

// -------------------CONSTANT-----------------------------
// les constantes
// define("MyVar","Bonsoir");

// -------------------QLQ_FUNCT_STR-----------------------
$long = 'bonjour';
 $lg=strlen($long);
// echo $lg;
// echo stristr($long, 'Jour')?'vrai': 'false';

// -------------------TABLEAUX-----------------------------
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



 ?>