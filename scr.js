<?php 
error_reporting(0);
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

<?php 
error_reporting(0);
require_once('menu.php');
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













<!DOCTYPE html>

<html >
<head>

  <meta charset="UTF-8">
  <title>Меню калькуляторов</title>
  
  
  
      <link rel="stylesheet" href="css/style_m.css">

  
</head>

<body>
  <body>
 <div class="naccs">
  <div class="grid">
   <div class="gc gc--1-of-4">
    <div class="menu">
     <div class="active"><span class="light"></span><span>КАСКО "ЭЛЕГАНС-АВТО"</span></div>
     <div><span class="light"></span><span>КАСКО "АВАНГАРД-АВТО"</span></div>
     <div><span class="light"></span><span>Калькулятор грузов</span></div>
     <div><span class="light"></span><span>Страхование работников</span></div>

    </div>
   </div>
   <div class="gc gc--2-of-3">
    <ul class="nacc">
     <li class="active">
      <div>
       <h1>КАСКО "ЭЛЕГАНС-АВТО"</h1>
      
        
        <form  method="POST" action="menu.php">

        <label>Марка авто:</label>
        <input type="text" id="mark" name="mark" size="20" required>
         <label>Модель авто:</label>
        <input type="text" id="model" name="model" size="20" required>
        <br>
         <label>Год выпуска авто:</label>
        <input type="text" id="year" name="year" size="10" required>
         <label>Стоимость авто:</label>
        <input type="number" id="pr_auto" name="pr_auto" size="10"required>
        <br>
         <label>ФИО:</label>
        <input type="text" id="name" name="name" size="70"  required>
        <br>
         <label>Эл. почта:</label>
        <input type="text" id="email" name="email" size="30" required>
         <label>Моб:</label>
        <input type="number" id="mob" name="mob" size="50" required>
        
        <select name="risk"   id="risk" required>
<option >Выберите риски</option>
<option value="1">все риски</option>
<option value="2">1+3+4</option>
<option value="3">1+4</option>
<option value="4">1+2</option>
<option value="5">1</option>
<option value="6">все + доп.опции</option>
        </select>

        <select name="fran"   id="fran" required>
<option >Выберите франшизу</option>
<option value="f1">0</option>
<option value="f2">0,5% , но неменее 15 000тнг</option>
<option value="f3">1% , но неменее 25 000тнг</option>
<option value="f4">1,5% , но неменее 40 000тнг</option>
<option value="f5">2% , но неменее 50 000тнг</option>
        </select>
<select name="reg" id="reg">
<option value="kz">РК</option>
<option value="sng">СНГ</option>
</select>
<br>
<input type="checkbox" required><span>Я согласен с передачей данных на сервер</span>
        <input type="submit" value="Расчитать">
        <br>
        <label>Стоимость страховки: </label><span><?php echo $coun;?></span>


        </form>

        <div id="inf" style="float:left;" >
        <h2>Риски:</h2>
        <p>1)ДТП</p>
        <p>2)Действие 3-их лиц (угон , кража)</p>
        <p>3)Стихийные бедствия</p>
        <p>4)иные непредвиденные события</p></div>
       <div id="inf2" style="float:left; margin-left:50px;"><h2>Доп опции:</h2>
        <p>Повреждение стекол , оптики</p>
        <p>Кража легкосьемных деталей</p></div> 
     
      </div>
     </li>
      <li>
      <div>
       <h1>КАСКО "АВAНГАРД-АВТО"</h1>

        
        
        <form  method="POST" action="menu.php">

        <label>Марка авто:</label>
        <input type="text" id="mark" name="mark" size="20" required>
         <label>Модель авто:</label>
        <input type="text" id="model" name="model" size="20" required>
        <br>
         <label>Год выпуска авто:</label>
        <input type="text" id="year" name="year" size="10" required>
         <label>Стоимость авто:</label>
        <input type="number" id="pr_auto" name="pr_auto" size="10"required>
        <br>
         <label>ФИО:</label>
        <input type="text" id="name" name="name" size="70"  required>
        <br>
         <label>Эл. почта:</label>
        <input type="text" id="email" name="email" size="30" required>
         <label>Моб:</label>
        <input type="number" id="mob" name="mob" size="50" required>
        <br>
        <label>Укажите ваш год рождения:</label>
        <input type="number" size="20" id="age">
        <br>
        <select name="risk"   id="risk" required>
<option >Выберите риски</option>
<option value="1">все риски</option>
<option value="2">1+3+4</option>
<option value="3">1+4</option>
<option value="4">1+2</option>
<option value="5">1</option>
<option value="6">все + доп.опции</option>
        </select>

        <select name="fran"   id="fran" required>
<option >Выберите франшизу</option>
<option value="f1">0</option>
<option value="f2">0,5% , но неменее 15 000тнг</option>
<option value="f3">1% , но неменее 25 000тнг</option>
<option value="f4">1,5% , но неменее 40 000тнг</option>
<option value="f5">2% , но неменее 50 000тнг</option>
        </select>
<select name="reg" id="reg">
<option value="kz">РК</option>
<option value="sng">СНГ</option>
</select>
<br>
<input type="checkbox" required><span>Я согласен с передачей данных на сервер</span>
        <input type="submit" value="Расчитать">
        <br>
        <label>Стоимость страховки: </label><span><?php echo $coun;?></span>


        </form>
        <div id="inf" style="float:left;" >
        <h2>Риски:</h2>
        <p>1)ДТП</p>
        <p>2)Действие 3-их лиц (угон , кража)</p>
        <p>3)Стихийные бедствия</p>
        <p>4)иные непредвиденные события</p></div>
       <div id="inf2" style="float:left; margin-left:20px;"><h2>Доп опции:</h2>
        <p>Повреждение стекол , оптики</p>
        <p>Кража легкосьемных деталей</p></div> 
     
      </div>
     </li>
     <li>
      <div>

      <h1>Грузы</h1>
      <form method="POST" action="menu.php">
        <label>Дата отправки:</label>
        <input type="date" id="date" name="trip-start" value="" min="today" required>
        <label>Дата прибытия:</label>
        <input type="date" id="date" name="trip-start" value="today" min="today" required>
        <br>
        <label>Страна перевозки:</label>
         <select name="region" required  id="region">
<option value="" hidden >Выбрать</option>
  <option value="0">Казахстан и Средняя Азия</option>
  <option value="1">Западная Европа , Европейская часть СНГ</option>
  <option value="2">Остальная территория</option>
 </select>
 <br>
 <label>Тип транспорта:</label>
 <select name="transport"  name="transport" required>
  <option value="">Выбрать</option>
  <option value="a1">Авиационная</option>
  <option value="a2">Железнодорожная</option>
  <option value="a3">Автомобильная</option>
  <option value="a4">Морская</option>
  <option value="a5">Комбинированная</option>
 </select>
<br>
<label>Тип груза:</label>
<select  name="category" size="1" id="category" >
  <option value="" hidden>Выбрать</option>
  <optgroup label="Категория А">
    <option value="a">Руда</option>
    <option value="a">Уголь</option>
    <option value="a">Песок</option>
    <option value="a">Камень</option>
    <option value="a">ж.бет конструкции</option>
    <option value="a">кирпич</option>
  </optgroup>
  <optgroup label="Категория B">
    <option value="b">Жидкости</option>
    <option value="b">Пиломатериалы</option>
    <option value="b">продукция</option>
    <option value="b">фармацефтика</option>
  </optgroup>
  <optgroup label="C">
    <option value="c">Пищевые продукты </option>
    <option value="c"> кофе</option>
    <option value="c"> Медикаменты</option>
    <option value="c"> Одежда</option>
  </optgroup>
  <optgroup label="D">
    <option value="d">Спиртные напитки </option>
    <option value="d"> Табак </option>
    <option value="d"> Сигареты</option>
    <option value="d"> Меха</option>
  </optgroup>
  <optgroup label="E">
    <option value="e">Легковые авто </option>
    <option value="e"> пиротехника</option>
    <option value="e"> замороженные продукты</option>
    
  </optgroup>
</select>
<br>

<label>Цена товара(от 100000 - 1000000):</label>
<input type="number" name="sum" min="100000" max="1000000" required>

 <span><input type="checkbox" name="terms" required>Я согласен с передачей данных на сервер</span> 
 <input type="submit" id="enter"></p>
 <label id="count">Стоимость страховки</label> <span> : <?php echo $counted; ?></span>


      </form>
      </div>
     </li>
     <li>
      <div>
      <h1>Страхование</h1>
       </div>
     </li>
    </ul>
   </div>
  </div>
 </div>
</body>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

    <script src="js/index_m.js"></script>

</body>
</html>


<style type="text/css">
form{
  border:dotted 4px #ffffffbd;
  border-radius: 15px;
  padding: 13px;
}
p{
  font-weight: 200;
  font-size: 18px;
}
</style>