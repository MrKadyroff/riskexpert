<?php 
include "menu.php";
error_reporting(0);

$mail=$_SESSION['mail'];
$mark= $_POST['mark'];
$model = $_POST['model'];
$year =$_POST['year'];
$pr_auto = $_POST['pr_auto'];
$risk =$_POST['risk'];
$fran =$_POST['fran'];
$reg =$_POST['reg'];




switch ($fran) {
  case 'f0':
    switch ($risk) {
      case 'all_risks':
        switch ($reg) {
          case 'kz':
            $coun = $pr_auto*0.032;
            break;
            case 'sng':
           $coun = $pr_auto*0.0132;
            break;
        }
        break;

      case 'dtp':
      switch ($reg) {
        case 'kz':
            $coun = $pr_auto*0.0256;
            break;
            case 'sng':
           $coun = $pr_auto*0.0356;
            break;}
            break;
             case 'ugon':
             switch ($reg) {
        case 'kz':
            $coun = $pr_auto*0.025;
            break;
            case 'sng':
           $coun = $pr_auto*0.035;
            break;}
            break;

             case 'bedstviya':
             switch ($reg) {
        case 'kz':
            $coun = $pr_auto*0.0269;
            break;
            case 'sng':
           $coun = $pr_auto*0.0369;
            break;}break;

             case 'sob':
             switch ($reg) {
        case 'kz':
            $coun = $pr_auto*0.0198;
            break;
            case 'sng':
           $coun = $pr_auto*0.0298;
            break;
}break;
             case 'all':
             switch ($reg) {
        case 'kz':
            $coun = $pr_auto*0.0368;
            break;
            case 'sng':
           $coun = $pr_auto*0.0468;
            break;


            }       break;


      
             }
               break;
  
 case 'f1':
    switch ($risk) {
      case 'all_risks':
        switch ($reg) {
          case 'kz':
            $coun = $pr_auto*0.003;
            break;
            case 'sng':
           $coun = $pr_auto*0.004;
            break;}
        
        break;
      case 'dtp':
      switch ($reg) {
        case 'kz':
            $coun = $pr_auto*0.024;
            break;
            case 'sng':
           $coun = $pr_auto*0.034;
            break;}
            break;
             case 'ugon':
             switch ($reg) {
        case 'kz':
            $coun = $pr_auto*0.0234;
            break;
            case 'sng':
           $coun = $pr_auto*0.0334;
            break;
}break;
             case 'bedstviya':
             switch ($reg) {
        case 'kz':
            $coun = $pr_auto*0.0252;
            break;
            case 'sng':
           $coun = $pr_auto*0.0352;
            break;
}break;
             case 'sob':
             switch ($reg) {
        case 'kz':
            $coun = $pr_auto*0.0186;
            break;
            case 'sng':
           $coun = $pr_auto*0.0286;
            break;
}break;
             case 'all':
             switch ($reg) {
        case 'kz':
            $coun = $pr_auto*0.0345;
            break;
            case 'sng':
           $coun = $pr_auto*0.0445;
            break;


            }       break;


      
             }
               break;
               case 'f2':
    switch ($risk) {
      case 'all_risks':
        switch ($reg) {
          case 'kz':
            $coun = $pr_auto*0.028;
            break;
            case 'sng':
           $coun = $pr_auto*0.038;
            break;
        }
        break;
      case 'dtp':
      switch ($reg) {
        case 'kz':

            $coun = $pr_auto*0.0224;
            break;
            case 'sng':
           $coun = $pr_auto*0.0324;
            break;}break;
             case 'ugon':
             switch ($reg) {
        case 'kz':
            $coun = $pr_auto*0.0218;
            break;
            case 'sng':
           $coun = $pr_auto*0.0318;
            break;
}break;
             case 'bedstviya':
             switch ($reg) {
        case 'kz':
            $coun = $pr_auto*0.0235;
            break;
            case 'sng':
           $coun = $pr_auto*0.0335;
            break;} 
            break;

             case 'sob':
             switch ($reg) {
        case 'kz':
            $coun = $pr_auto*0.0174;
            break;
            case 'sng':
           $coun = $pr_auto*0.0274;
            break;
}break;
             case 'all':
             switch ($reg) {
        case 'kz':
            $coun = $pr_auto*0.0322;
            break;
            case 'sng':
           $coun = $pr_auto*0.0422;
            break;


            }       break;


      
             }
               break;
  
 case 'f3':
    switch ($risk) {
      case 'all_risks':
        switch ($reg) {
          case 'kz':
            $coun = $pr_auto*0.026;
            break;
            case 'sng':
           $coun = $pr_auto*0.036;
            break;
        }
        break;
      case 'dtp':
      switch ($reg) {
        case 'kz':
            $coun = $pr_auto*0.0208;
            break;
            case 'sng':
           $coun = $pr_auto*0.0308;
            break;
          }
          break;
             case 'ugon':
             switch ($reg) {
        case 'kz':
            $coun = $pr_auto*0.0203;
            break;
            case 'sng':
           $coun = $pr_auto*0.0303;
            break;
}
break;
             case 'bedstviya':
             switch ($reg) {
        case 'kz':
            $coun = $pr_auto*0.0218;
            break;
            case 'sng':
           $coun = $pr_auto*0.0318;
            break;
} break;
             case 'sob':
             switch ($reg) {
        case 'kz':
            $coun = $pr_auto*0.0161;
            break;
            case 'sng':
           $coun = $pr_auto*0.0261;
            break;
}break;
             case 'all':
             switch ($reg) {
        case 'kz':
            $coun = $pr_auto*0.0299;
            break;
            case 'sng':
           $coun = $pr_auto*0.0399;
            break;


            }       break;


      
             }
               
  
 case 'f4':
    switch ($risk) {
      case 'all_risks':
        switch ($reg) {
          case 'kz':
            $coun = $pr_auto*0.024;
            break;
            case 'sng':
           $coun = $pr_auto*0.0324;
            break;
        }
        break;
      case 'dtp':
      switch ($reg) {
        case 'kz':
            $coun = $pr_auto*0.0192;
            break;
            case 'sng':
           $coun = $pr_auto*0.0292;
            break;}
            break;
             case 'ugon':
             switch ($reg) {
        case 'kz':
            $coun = $pr_auto*0.0187;
            break;
            case 'sng':
           $coun = $pr_auto*0.0287;
            break;
}break;
             case 'bedstviya':
             switch ($reg) {
        case 'kz':
            $coun = $pr_auto*0.0202;
            break;
            case 'sng':
           $coun = $pr_auto*0.0302;
            break;}
            break;

             case 'sob':
             switch ($reg) {
        case 'kz':
            $coun = $pr_auto*0.0149;
            break;
            case 'sng':
           $coun = $pr_auto*0.0249;
            break;
}
break;
             case 'all':
             switch ($reg) {
        case 'kz':
            $coun = $pr_auto*0.0276;
            break;
            case 'sng':
           $coun = $pr_auto*0.0376;
            break;


            }       break;


      
             }
               break;
  

  
               
} '<span id="e_answ" >'.$coun.'</span>';
$conn = new mysqli('localhost', 'root', '', 'calc');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

} 


    $sql = "INSERT INTO elegans (`mark`,`model`,`year`,`mail`,`pr_auto`,`price_2`,`risk`,`fran`) VALUES
     ('$mark','$model','$year','$mail','$pr_auto','$coun','$risk','$fran')";
     if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
      

  
?>