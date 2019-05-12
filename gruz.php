<?php 
include "menu.php";

 $_SESSION['mail'];
$user_id= $_SESSION['mail'];
error_reporting(0);

require_once('menu.php');
$sum = $_POST['sum'];
$region = $_POST['region'];
switch ($region){
    case 'kz':  
    $transport = $_POST['transport'];
    switch ($transport) {
      case 'avia':
        $category = $_POST['category'];
        switch ($category) {
          case 'a':
               $counted=$sum*0.12;
               break;

          case 'b':
          $counted=$sum*0.14;;
            break;
        case 'c':
           $counted=$sum*0.17;
          break;
          case 'd':
           $counted=$sum*0.23;
            break;
        }break;
         case 'jd':
        $category = $_POST['category'];
        switch ($category) {
          case 'a':
                $counted=$sum*0.14;
               break;

          case 'b':
           $counted=$sum*0.17;
            break;
        case 'c':
           $counted=$sum*0.2;
          break;
          case 'd':
           $counted=$sum*0.25;
            break;
        }
        break;
         case 'auto':
         "auto ";
        $category = $_POST['category'];
        switch ($category) {
          case 'a':
               echo $counted=$sum*0.15;
               break;

          case 'b':
           $counted=$sum*0.19;
            break;
        case 'c':
           $counted=$sum*0.22;
          break;
          case 'd':
           $counted=$sum*0.27;
            break;
        }
        break;
         case 'morskaya':
        $category = $_POST['category'];
        switch ($category) {
          case 'a':
                $counted=$sum*0.15;
               break;

          case 'b':
           $counted=$sum*0.19;
            break;
        case 'c':
           $counted=$sum*0.22;
          break;
          case 'd':
           $counted=$sum*0.27;
            break;
        }
        break;
         case 'combo':
        $category = $_POST['category'];
        switch ($category) {
          case 'a':
                $counted=$sum*0.17;
               break;

          case 'b':
           $counted=$sum*0.21;
            break;
        case 'c':
           $counted=$sum*0.24;
          break;
          case 'd':
           $counted=$sum*0.3;
            break;
        }break;
        
    }

    break;
    case 'sng': 
    $transport = $_POST['transport'];
    switch ($transport) {
      case 'avia':
        $category = $_POST['category'];
        switch ($category) {
          case 'a':
                $counted=$sum*0.14;
               break;

          case 'b':
           $counted=$sum*0.15;
            break;
        case 'c':
           $counted=$sum*0.18;
          break;
          case 'd':
           $counted=$sum*0.25;
            break;
        }break;
         case 'jd':
        $category = $_POST['category'];
        switch ($category) {
          case 'a':
                $counted=$sum*0.17;
               break;

          case 'b':
           $counted=$sum*0.2;
            break;
        case 'c':
           $counted=$sum*0.23;
          break;
          case 'd':
           $counted=$sum*0.28;
            break;
        }
        break;
         case 'auto':
        $category = $_POST['category'];
        switch ($category) {
          case 'a':
                $counted=$sum*0.18;
               break;

          case 'b':
           $counted=$sum*0.22;
            break;
        case 'c':
           $counted=$sum*0.25;
          break;
          case 'd':
           $counted=$sum*0.3;
            break;
        }
        break;
         case 'morskaya':
        $category = $_POST['category'];
        switch ($category) {
          case 'a':
                $counted=$sum*0.18;
               break;

          case 'b':
           $counted=$sum*0.22;
            break;
        case 'c':
           $counted=$sum*0.25;
          break;
          case 'd':
           $counted=$sum*0.3;
            break;
        }
        break;
         case 'combo':
        $category = $_POST['category'];
        switch ($category) {
          case 'a':
               $counted=$sum*0.2;
               break;

          case 'b':
          $counted=$sum*0.24;
            break;
        case 'c':
           $counted=$sum*0.28;
          break;
          case 'd':
           
           $counted=$sum*0.35;
            break;
        }break;
        
    }


    break;
    case 'other':  
    $transport = $_POST['transport'];
    switch ($transport) {
      case 'avia':
        
        $category = $_POST['category'];
        switch ($category) {
          case 'a':
                $counted=$sum*0.14;
               break;

          case 'b':
           $counted=$sum*0.15;
            break;
        case 'c':
           $counted=$sum*0.18;
          break;
          case 'd':
           $counted=$sum*0.25;
            break;
        }break;
         case 'jd':
        $category = $_POST['category'];
        switch ($category) {
          case 'a':
                $counted=$sum*0.17;
               break;

          case 'b':
           $counted=$sum*0.2;
            break;
        case 'c':
           $counted=$sum*0.23;
          break;
          case 'd':
           $counted=$sum*0.28;
            break;
        }
        break;
         case 'auto':
        
        $category = $_POST['category'];
        switch ($category) {
          case 'a':
               $counted=$sum*0.18;
               break;

          case 'b':
           $counted=$sum*0.22;
            break;
        case 'c':
           $counted=$sum*0.25;
          break;
          case 'd':
            
           $counted=$sum*0.3;
            break;
        }
        break;
         case 'morskaya':
        
        $category = $_POST['category'];
        switch ($category) {
          case 'a':
            
                $counted=$sum*0.18;
               break;

          case 'b':
         
           $counted=$sum*0.22;
            break;
        case 'c':
        
           $counted=$sum*0.25;
          break;
          case 'd':
            
           $counted=$sum*0.3;
            break;
        }
        break;
         case 'combo':
       
        $category = $_POST['category'];
        switch ($category) {
          case 'a':
                $counted=$sum*0.2;
               break;

          case 'b':
          
           $counted=$sum*0.24;
            break;
        case 'c':
        
           $counted=$sum*0.28;
          break;
          case 'd':
            
          $counted=$sum*0.35;
            break;
        }break;
        break;
    }


    break;
    break;
    }

    $date_1 = $_POST['date_1'];
    $date_2 = $_POST['date_2'];
  echo '<span id="counted" >'.$counted.'</div>';
    
    $err_message = ''; 

if (empty($region)) {
    $err_message .= "Выберите регион";    
} 
if (empty($transport)) {
    $err_message .= "Выберите вид транспорта";    
}
if (empty($category)) {
    $err_message .= "Выберите категорию";    
}
if (empty($sum)) {
    $err_message .= "Введите цену";    
}
if (empty($counted)) {
    $err_message .= "111";    
}

if (empty($err_message)) {
$conn = new mysqli('localhost', 'root', '', 'calc');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    $sql = "INSERT INTO calc_gruz (`user_id`,`region`,`transport`,`category`,`price`,`price_2`,`date_1`,`date_2`) VALUES
     ('$user_id','$region','$transport','$category','$sum','$counted','$date_1','$date_2')";
     if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

$conn->close();
  }}  
      
  else {
  //print $err_message;
}
?>
