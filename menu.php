<!DOCTYPE html>
<?php session_start();
$_SESSION['mail'];
 ?>
<html >
<head>

  <meta charset="UTF-8">
  <title>Меню калькуляторов</title>
  
  
      <link rel="stylesheet" type="text/css" href="css/css.css">
      <link rel="stylesheet" href="css/style_m.css">
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="ajax.js"></script>
  <script src="js/gruz.js"></script>
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
      
        <form  method="POST" action="elegans.php" name="elegans">

        <label>Марка авто:</label><br>
        <input type="text" id="mark" name="mark" size="20" required>
        <br>
         <label>Модель авто:</label><br>
        <input type="text" id="model" name="model" size="20" required>
        <br>
         <label>Год выпуска авто:</label><br>
        <input type="number" id="year" name="year" size="30" min="2004" max="2019" required>
        <br>
         <label>Стоимость авто:</label><br>
        <input type="number" id="pr_auto" name="pr_auto" size="10"required>
        <label>Тенге</label><br>
        
       
        
        

        <!--<select name="risk"   id="risk" required>
<option >Выберите риски</option>
<option value="1">все риски</option>
<option value="2">1+3+4</option>
<option value="3">1+4</option>
<option value="4">1+2</option>
<option value="5">1</option>
<option value="6">все + доп.опции</option>
        </select>
-->
<label>Выберите франшизу</label>
<br>
<select name="fran"   id="fran" required>
<option ></option>
<option value="f0">0</option>
<option value="f1">0,5% , но неменее 15 000тнг</option>
<option value="f2">1% , но неменее 25 000тнг</option>
<option value="f3">1,5% , но неменее 40 000тнг</option>
<option value="f4">2% , но неменее 50 000тнг</option>
</select><br>
<label>Выберите регион:</label>
<select name="reg" id="reg">
<option value="kz">РК</option>
<option value="sng">СНГ</option>
</select>
<br>
<div class="chec">
  <table>
  <tr>
    <td>
        <input type="checkbox" name="risk" value="all_risks">Все риски</td>
       <td> <input type="checkbox" name="risk" value="dtp">ДТП</td></tr>
       <tr> <td><input type="checkbox" name="risk" value="ugon">угон,кража</td>
        
       <td> <input type="checkbox" name="risk" value="bedstviya">стихийные бедствия</td></tr>
        <tr><td><input type="checkbox" name="risk" value="sob">непредвиденные события</td>
        <br>
       <td> <input type="checkbox" name="risk" value="all">Все риски + доп. услуги (Повреждение стекол , оптики. 

Кража легкосьемных деталей)</td></tr></table></div>
<input type="checkbox" /> <span onClick="CheckClick(this)" class="hand">Согласен</span><br/> 
       <input type="submit" value="Расчитать">
        <br>
        <label>Стоимость страховки: </label><span id="e_answ"></span>


        </form>
<!--
        <div id="inf2" style="float:left;" >

        <p>Риски:
        1)ДТП
        2)Действие 3-их лиц (угон , кража)
        3)Стихийные бедствия
        4)иные непредвиденные события</p>
       <p>Доп опции:
        <p>Повреждение стекол , оптики</p>
        <p>Кража легкосьемных деталей</p>
    
      </div>-->
     </li>   <li>
      <div>

       <h1>КАСКО "АВAНГАРД-АВТО"</h1>

        
        
          <form  method="POST" action="avangard.php" name="avangard">

        <label>Марка авто:</label><br>
        <input type="text" id="mark" name="mark" size="20" required>
        <br>
         <label>Модель авто:</label><br>
        <input type="text" id="model" name="model" size="20" required>
        <br>
         <label>Год выпуска авто:</label><br>
        <input type="number" id="year" name="year" size="30" min="2004" max="2019" required>
        <br>
         <label>Стоимость авто:</label><br>
        <input type="number" id="pr_auto" name="pr_auto" size="10"required>
        <label>Тенге</label><br>
        
       
        
        

        <!--<select name="risk"   id="risk" required>
<option >Выберите риски</option>
<option value="1">все риски</option>
<option value="2">1+3+4</option>
<option value="3">1+4</option>
<option value="4">1+2</option>
<option value="5">1</option>
<option value="6">все + доп.опции</option>
        </select>
-->
<label>Выберите франшизу</label>
<br>
<select name="fran"   id="fran" required>
<option ></option>
<option value="f0">0</option>
<option value="f1">0,5% , но неменее 15 000тнг</option>
<option value="f2">1% , но неменее 25 000тнг</option>
<option value="f3">1,5% , но неменее 40 000тнг</option>
<option value="f4">2% , но неменее 50 000тнг</option>
</select><br>
<label>Выберите регион:</label>
<select name="reg" id="reg">
<option value="kz">РК</option>
<option value="sng">СНГ</option>
</select>
<br>
<div class="chec">
  <table>
  <tr>
    <td>
        <input type="checkbox" name="risk" value="all_risks">Все риски</td>
       <td> <input type="checkbox" name="risk" value="dtp">ДТП</td></tr>
       <tr> <td><input type="checkbox" name="risk" value="ugon">угон,кража</td>
        
       <td> <input type="checkbox" name="risk" value="bedstviya">стихийные бедствия</td></tr>
        <tr><td><input type="checkbox" name="risk" value="sob">непредвиденные события</td>
        <br>
       <td> <input type="checkbox" name="risk" value="all">Все риски + доп. услуги (Повреждение стекол , оптики. 

Кража легкосьемных деталей)</td></tr></table></div>
<input type="checkbox" /> <span onClick="CheckClick(this)" class="hand">Согласен</span><br/> 
       <input type="submit" value="Расчитать">
        <br>
        <label>Стоимость страховки: </label><span id="e_answ"></span>


        </form>
   
      
     </li>
     <li>
      <div>

      <h1>Грузы</h1>
      <form   id="gruz" name="gruz">
        <label>Дата отправки:</label>
         <input type="date" id="date_1" name="date_1"  min="today" required>
        <br>
        <label>Дата прибытия:</label>
        <input type="date" id="date_2" name="date_2"  min="today" required>
        <br>
        <label>Страна перевозки:</label>
         <select name="region" required  id="region">
<option value="" hidden >Выбрать</option>
  <option value="kz">Казахстан и Средняя Азия</option>
  <option value="sng">Западная Европа , Европейская часть СНГ</option>
  <option value="other">Остальная территория</option>
 </select>
 <br>
 <label>Тип транспорта:</label>
 <select name="transport"  name="transport" required>
  <option value="">Выбрать</option>
  <option value="avia">Авиационная</option>
  <option value="jd">Железнодорожная</option>
  <option value="auto">Автомобильная</option>
  <option value="morskaya">Морская</option>
  <option value="combo">Комбинированная</option>
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

<label>Цена товара:</label>
<input type="number" name="sum" min="0"  required>
<br>
<input type="checkbox" name="terms"required>Я согласен с передачей данных на сервер</input>
 <input type="submit" id="enter"></p>
 <label id="count">Стоимость страховки</label> <span id="response">: </span>


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
<script src="js/gruz.js"></script>
<script src="js/elegans.js"></script>
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

<script type="text/javascript"><!--

function CheckClick(e){
   t=e.previousSibling.previousSibling;
   //alert(t.tagName+' '+t.type);
   if( (t.tagName=='INPUT')&&(t.type=='checkbox')) t.click();
}

//--></script>
