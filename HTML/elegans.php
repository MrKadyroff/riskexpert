<?php 
include 'menu.php';
$mark= $_POST['mark'];
$model = $_POST['model'];
$year =$_POST['year'];
$pr_auto = $_POST['pr_auto'];
$name = $_POST['name'];
$email =$_POST['email'];
$mob = $_POST['mob'];
$risk =$_POST['risk'];
$fran =$_POST['fran'];
$reg =$_POST['reg'];



switch ($fran) {
  case 'f1':
    switch ($risk) {
      case '1':
        switch ($reg) {
          case 'kz':
            $coun = $pr_auto*0.032;
            break;
            case 'sng':
           $coun = $pr_auto*0.0132;
            break;
        
        break;
      case '2':
        case 'kz':
            $coun = $pr_auto*0.0256;
            break;
            case 'sng':
           $coun = $pr_auto*0.0356;
            break;
             case '3':
        case 'kz':
            $coun = $pr_auto*0.025;
            break;
            case 'sng':
           $coun = $pr_auto*0.035;
            break;

             case '4':
        case 'kz':
            $coun = $pr_auto*0.0269;
            break;
            case 'sng':
           $coun = $pr_auto*0.0369;
            break;

             case '5':
        case 'kz':
            $coun = $pr_auto*0.0198;
            break;
            case 'sng':
           $coun = $pr_auto*0.0298;
            break;

             case '6':
        case 'kz':
            $coun = $pr_auto*0.0368;
            break;
            case 'sng':
           $coun = $pr_auto*0.0468;
            break;


            }       break;


      
             }
               break;
  
 case 'f2':
    switch ($risk) {
      case '1':
        switch ($reg) {
          case 'kz':
            $coun = $pr_auto*0.003;
            break;
            case 'sng':
           $coun = $pr_auto*0.004;
            break;
        
        break;
      case '2':
        case 'kz':
            $coun = $pr_auto*0.024;
            break;
            case 'sng':
           $coun = $pr_auto*0.034;
            break;
             case '3':
        case 'kz':
            $coun = $pr_auto*0.0234;
            break;
            case 'sng':
           $coun = $pr_auto*0.0334;
            break;

             case '4':
        case 'kz':
            $coun = $pr_auto*0.0252;
            break;
            case 'sng':
           $coun = $pr_auto*0.0352;
            break;

             case '5':
        case 'kz':
            $coun = $pr_auto*0.0186;
            break;
            case 'sng':
           $coun = $pr_auto*0.0286;
            break;

             case '6':
        case 'kz':
            $coun = $pr_auto*0.0345;
            break;
            case 'sng':
           $coun = $pr_auto*0.0445;
            break;


            }       break;


      
             }
               break;
               case 'f3':
    switch ($risk) {
      case '1':
        switch ($reg) {
          case 'kz':
            $coun = $pr_auto*0.028;
            break;
            case 'sng':
           $coun = $pr_auto*0.038;
            break;
        
        break;
      case '2':
        case 'kz':
            $coun = $pr_auto*0.0224;
            break;
            case 'sng':
           $coun = $pr_auto*0.0324;
            break;
             case '3':
        case 'kz':
            $coun = $pr_auto*0.0218;
            break;
            case 'sng':
           $coun = $pr_auto*0.0318;
            break;

             case '4':
        case 'kz':
            $coun = $pr_auto*0.0235;
            break;
            case 'sng':
           $coun = $pr_auto*0.0335;
            break;

             case '5':
        case 'kz':
            $coun = $pr_auto*0.0174;
            break;
            case 'sng':
           $coun = $pr_auto*0.0274;
            break;

             case '6':
        case 'kz':
            $coun = $pr_auto*0.0322;
            break;
            case 'sng':
           $coun = $pr_auto*0.0422;
            break;


            }       break;


      
             }
               break;
  
 case 'f4':
    switch ($risk) {
      case '1':
        switch ($reg) {
          case 'kz':
            $coun = $pr_auto*0.026;
            break;
            case 'sng':
           $coun = $pr_auto*0.036;
            break;
        
        break;
      case '2':
        case 'kz':
            $coun = $pr_auto*0.0208;
            break;
            case 'sng':
           $coun = $pr_auto*0.0308;
            break;
             case '3':
        case 'kz':
            $coun = $pr_auto*0.0203;
            break;
            case 'sng':
           $coun = $pr_auto*0.0303;
            break;

             case '4':
        case 'kz':
            $coun = $pr_auto*0.0218;
            break;
            case 'sng':
           $coun = $pr_auto*0.0318;
            break;

             case '5':
        case 'kz':
            $coun = $pr_auto*0.0161;
            break;
            case 'sng':
           $coun = $pr_auto*0.0261;
            break;

             case '6':
        case 'kz':
            $coun = $pr_auto*0.0299;
            break;
            case 'sng':
           $coun = $pr_auto*0.0399;
            break;


            }       break;


      
             }
               break;
  
 case 'f5':
    switch ($risk) {
      case '1':
        switch ($reg) {
          case 'kz':
            $coun = $pr_auto*0.024;
            break;
            case 'sng':
           $coun = $pr_auto*0.0324;
            break;
        
        break;
      case '2':
        case 'kz':
            $coun = $pr_auto*0.0192;
            break;
            case 'sng':
           $coun = $pr_auto*0.0292;
            break;
             case '3':
        case 'kz':
            $coun = $pr_auto*0.0187;
            break;
            case 'sng':
           $coun = $pr_auto*0.0287;
            break;

             case '4':
        case 'kz':
            $coun = $pr_auto*0.0202;
            break;
            case 'sng':
           $coun = $pr_auto*0.0302;
            break;

             case '5':
        case 'kz':
            $coun = $pr_auto*0.0149;
            break;
            case 'sng':
           $coun = $pr_auto*0.0249;
            break;

             case '6':
        case 'kz':
            $coun = $pr_auto*0.0276;
            break;
            case 'sng':
           $coun = $pr_auto*0.0376;
            break;


            }       break;


      
             }
               break;
  
 
  
 
}


  
?>