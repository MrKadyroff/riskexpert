<?php 

include 'menu.php';
$sum = $_POST['sum'];
$region = $_POST['region'];
switch ($region){
    case '0':  
    $transport = $_POST['transport'];
    switch ($transport) {
      case 'a1':
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
         case 'a2':
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
         case 'a3':
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
         case 'a4':
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
         case 'a5':
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
    case '1': 
    $transport = $_POST['transport'];
    switch ($transport) {
      case 'a1':
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
         case 'a2':
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
         case 'a3':
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
         case 'a4':
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
         case 'a5':
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
    case '2':  
    $transport = $_POST['transport'];
    switch ($transport) {
      case 'a1':
        
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
         case 'a2':
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
         case 'a3':
        
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
         case 'a4':
        
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
         case 'a5':
       
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
  
  
?>