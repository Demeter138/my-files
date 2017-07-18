<?php
header('Content-Type: text/html; charset=utf-8');
ini_set ('display_errors', true);
error_reporting (E_ALL);

////////////////////////////////////////////////////////////////////////
/*Задача 2 Cоздать массив из 1000 чисел каждый элемент которого равен квадрату своего номера.
Результат вывести в виде таблицы (офорить ее рамкой)
 */

$array = range(0, 1000);
print_r($array);
echo '<br><br>';
$arr = $array;
for ($i=0;$i<=1000;$i++){
    $arr[$i]=$i*$i;
}

print_r($arr);
echo "<br><br>";
echo "<br><br>";


echo '<table border="1" cellspacing="0" style="border-top:2px double blue;
border-bottom:2px double blue;border-left:2px double blue;border-right:2px double blue;">';

for ($i = 0;$i<1;$i++) {
	
	echo '<tr>';
	
		for ($j=0;$j<=49;$j++) {
		  	
		   echo "<td>{$arr[$j]}</td>";	
		   
	}	   
	echo '</tr>';
	
}	
for ($i = 0;$i<1;$i++) {
	
	echo '<tr>';
	
		for ($j=50;$j<=99;$j++) {
		  	
		   echo "<td>{$arr[$j]}</td>";	
		   	
	}	   
	echo '</tr>';
	
	
for ($i = 0;$i<1;$i++) {
		
	     echo '<tr>';
	     
	for ($k=150;$k<=199;$k++) {
	
           echo "<td style='border: 1px solid black;'>{$arr[$k]}</td>";	
		  	
	}	   
		   echo '</tr>';
  } 
  
for ($i = 0;$i<1;$i++) {
	
	echo '<tr>';
	
	for ($c=250;$c<=299;$c++) {
	
           echo "<td>{$arr[$c]}</td>";	
		  	
	}	   
		   echo '</tr>';
  } 
  
for ($i = 0;$i<1;$i++) {
	  
	echo '<tr>';
	
	for ($j=350;$j<=399;$j++) {
	
           echo "<td>{$arr[$j]}</td>";	
		  	
	}	   
		   echo '</tr>';
  } 
  
 for ($i = 0;$i<1;$i++) {
	 
	echo '<tr>';
	
	for ($c=450;$c<=499;$c++) {
	
           echo "<td>{$arr[$c]}</td>";	
		  
	}	   
		   echo '</tr>';
  } 
  
 for ($i = 0;$i<1;$i++) {
	 
	echo '<tr>';
	
for ($j=550;$j<=599;$j++) {
	
           echo "<td>{$arr[$j]}</td>";	
		  	
	}	   
		   echo '</tr>';
  } 
  
 for ($i = 0;$i<1;$i++) {
	 
	echo '<tr>';
	
	for ($j=650;$j<=699;$j++) {
	
           echo "<td>{$arr[$j]}</td>";	
		  
	}	   
		   echo '</tr>';
  } 
  
 for ($i = 0;$i<1;$i++) {
	 
	echo '<tr>';
	
	for ($c=750;$c<=799;$c++) {
	
           echo "<td>{$arr[$c]}</td>";	
		  	
	}	   
		   echo '</tr>';
  } 
  
 for ($i = 0;$i<1;$i++) {
	 
	echo '<tr>';
	
	for ($c=850;$c<=899;$c++) {
	
           echo "<td>{$arr[$c]}</td>";	
		  	
	}	   
		   echo '</tr>';
  } 
  
 for ($i = 0;$i<1;$i++) {
	 
	echo '<tr>';
	
	for ($j=950;$j<=999;$j++) {
	
           echo "<td>{$arr[$j]}</td>";	
		  
	}	   
		   echo '</tr>';
  } 
  
  
}
     
	echo '</table>';

		echo '<br><br><br><br><br>';





////////////////////////////////////////////////////////////////////////

//Задача 3 - Создайте массив из 1000 случайных чисел. Определите, есть ли в массиве повторяющиеся элементы 

//генерируем массив случайных чисел
 //Объявляем массив: 
$array = array();
 
//Заполняем массив случайными числами: 
for ($i = 0; $i < 1000; $i++) {
  $array[$i] = rand(0, 10);
}
 
 //Выводим содержимое массива: 
print_r($array). '<br>';
echo "<br><br>";
$arr = $array; 
$count = count($arr); 
for ($i = 0; $i < $count; $i++) 
   for ($k = $i+1; $k < $count; $k++) 
      if ($arr[$i] == $arr[$k]) $arr2[$i] = $arr[$k]; 
	    if (count($arr2) > 0) 
		  foreach ($arr2 as $key => $val) 
			echo "Повторяется элемент под номером ".($key+1)." ($val)<br>"; 
              else
				echo "В массиве нет повторяющихся элементов<br>";
				
echo '<br><br><br>';

////////////////////////////////////////////////////////////////////////////////

/*Задача 4 + Создать массив из 100 случайных чисел. 
Найти сумму чисел, которые кратны 5-ти(пяти) */
//Заполняем массив случайными числами от 0 до 10: 
for ($i = 0; $i < 100; $i++) {
  $arr[$i] = rand(0, 10);
}
$array = $arr;
print_r($array). '<br><br>';
 //Выводим содержимое массива: 
echo '<br><br>';

$sum=0; 
	foreach($array as $value) { 
		if ($value % 5 == 0) { 
	$sum+=$value; 
 } 
} 
echo $sum. '<br><br>';


//////////////////////////////////////////////////////////////////////////////

/*Задача 5  Дана строка. Если ее длина больше 10 символов, то оставить в строке только первые 6 символов, 
иначе дополнить строку символами 'o' до длины 12.*/
$string = 'Добавляет оформление текста';
//$string = 'Доба';
if (strlen($string) > 10) {
	
	$string = 'Добавл';
	echo $string. '<br><br><br>';
	
	} else {
	
	echo str_pad($string, 12, "о", STR_PAD_RIGHT). '<br><br><br>'; 
	
}	


//Задача 6 Сгенерировать массив из 10-ти случайных чисел. После этого, сгенерировать одно случайно число и проверить, входи ли оно в данный массив. +
//генерируем массив случайных чисел
 //Объявляем массив: 
$array = array();
//Заполняем массив случайными числами: 
for ($i = 0; $i < 10; $i++) {
  $array[$i] = rand(0, 5);
}
 
 //Выводим содержимое массива: 
print_r($array). '<br>';
echo "<br><br>";
$arr = $array; 
$number = rand(0, 5);
if (in_array($number, $arr)) {
	
	echo 'Число входит в данный массив';
} else {
	echo 'Число не входит в данный массив';
}

////////////////////////////////////////////////////////////////////

//Задача 7 Сгенерировать массив из 10-ти случайных чисел. После этого, сгенерировать одно случайно число и проверить, входи ли оно в данный массив. +
/*Создать массив из 100 случайных как чисел так и ключей. После этого выполнить:
Сортировку массива по значению  Сортировку массива по ключу.*/ 
$array = array();
//Заполняем массив случайными числами: 
$array = array_fill( rand(0, 5) , 100 , rand(0, 5) ); 

print_r($array);
echo '<br><br><br>';

asort($array);
print_r($array);
echo '<br><br><br>';
ksort($array);
print_r($array);
echo '<br><br><br>';


////////////////////////////////////////////////////////////////////////////////

/*/////////Задача 8
Создать два массива из 10-ти случайных чисел.
Выполнить сравнения массивов по двум критеряим: вычислить схождение массива, вычислить расхождение массива.*/

$mass=array();
for($i=0;$i<10;$i++) {
	
	$mass[$i]=rand(0,10);
}
for($i=0;$i<10;$i++) {
	$array = $mass[$i];
	echo $array;
}  
print"<br>";
$mass1=array();
for($i=0;$i<10;$i++) {
	
	$mass1[$i]=rand(0,10);
}
for($i=0;$i<10;$i++) {
	$array1 = $mass1[$i];
	echo $array1;
} 
print"<br>"; 
 $array_res = array_intersect((array)$array, (array)$array1);
 print_r($array_res);
 echo '<br>';
 
 $array_res = array_diff((array)$array, (array)$array1);
 print_r($array_res);
 echo '<br><br><br><br>';

////////////////////////////////////////////////////////////////////////

// Задача 9.
//Создать массив из 50-ти случайных чисел. Генерируя случайно число, 
//проверять есть ли такой ключ в данном массив.


$key = rand(0, 99);
$search_array = range(0, 50);
	if (array_key_exists( $key, $search_array)) {
		
		echo 'Массив содержит ключ '.$key.'.<br><br><br>';
			
	} else {
				
				echo 'Массив не содержит ключ '.$key.'.<br><br><br>';
}


////////////////////////////////////////////////////////////////////////

// Задача 11. 
//Создать массива з 10-ти чисел. Вычислить произведение значений массива.
//Не использовать для решения задачи циклы.
$array1 = array(2, 5, 9, 25, 54, 4, 1, 8, 12, 24);

$res = array_product($array1);
echo $res. '<br><br><br>';

////////////////////////////////////////////////////////////////////////

//Задача 12.
$array1 = array('&nbsp','&nbsp', '&nbsp', '&nbsp', '&nbsp', '&nbsp', 1, '&nbsp', '&nbsp');
$array2 = array('&nbsp', '&nbsp', '&nbsp', '&nbsp', 1, 1, 1, '&nbsp', '&nbsp');
$array3 = array('&nbsp', '&nbsp', '&nbsp', 1, 1, 1, 1, 1);
$array4 = array('&nbsp', '&nbsp', 1, 1, 1, 1, 1, 1, 1,'&nbsp');
$array5 = array(1, 1, 1, 1, 1, 1, 1, 1, 1, '&nbsp', '&nbsp');

foreach ($array1 as $arr) {
	echo $arr;
}
echo '<br>';
foreach ($array2 as $arr) {
	echo $arr;
}
echo '<br>';
foreach ($array3 as $arr) {
	echo $arr;
}
echo '<br>';

foreach ($array4 as $arr) {
	echo $arr;
}
echo '<br>';

foreach ($array5 as $arr) {
	echo $arr;
}
echo '<br><br><br>';


////////////////////////////////////////////////////////////////////////

//Задача 13.

$array1 = array('&nbsp','&nbsp', '&nbsp', '&nbsp', '&nbsp', '&nbsp', 1, '&nbsp', '&nbsp');
$array2 = array('&nbsp', '&nbsp', '&nbsp', '&nbsp', 1, 1, 1, '&nbsp', '&nbsp');
$array3 = array('&nbsp', '&nbsp', '&nbsp', 1, 1, 1, 1, 1);
$array4 = array('&nbsp', '&nbsp', 1, 1, 1, 1, 1, 1, 1,'&nbsp');
$array5 = array(1, 1, 1, 1, 1, 1, 1, 1, 1, '&nbsp', '&nbsp');
$array6 = array('&nbsp', '&nbsp', 1, 1, 1, 1, 1, 1, 1,'&nbsp');
$array7 = array('&nbsp', '&nbsp', '&nbsp', 1, 1, 1, 1, 1);
$array8 = array('&nbsp', '&nbsp', '&nbsp', '&nbsp', 1, 1, 1, '&nbsp', '&nbsp');
$array9 = array('&nbsp','&nbsp', '&nbsp', '&nbsp', '&nbsp', '&nbsp', 1, '&nbsp', '&nbsp');
foreach ($array1 as $arr) {
	echo $arr;
}
echo '<br>';
foreach ($array2 as $arr) {
	echo $arr;
}
echo '<br>';
foreach ($array3 as $arr) {
	echo $arr;
}
echo '<br>';

foreach ($array4 as $arr) {
	echo $arr;
}
echo '<br>';

foreach ($array5 as $arr) {
	echo $arr;
}
echo '<br>';
foreach ($array6 as $arr) {
	echo $arr;
}
echo '<br>';
foreach ($array7 as $arr) {
	echo $arr;
}
echo '<br>';
foreach ($array8 as $arr) {
	echo $arr;
}
echo '<br>';
foreach ($array9 as $arr) {
	echo $arr;
}
echo '<br>';


////////////////////////////////////////////////////////////////////////


//Задача 16. Выполнить вывод товаров сайта в разделе «контент».




$dropdown = array("Pizza1", "Pizza2", "Pizza3");
echo '<select name="drop_down">';
foreach($dropdown as $key=>$value)
{
   echo '<option value="'.$key.'">'.$value.'</option>';
}
echo '</select>';

?>
<?php
$data = 'a:19:{i:72;O:8:"stdClass":22:{s:2:"id";s:2:"72";s:3:"url";s:51:"hot-wheels-aksessuar-prepyatstvie-dlya-treka-4-vida";s:8:"brand_id";s:1:"0";s:8:"position";s:2:"72";s:7:"created";s:19:"2017-05-11 12:12:59";s:7:"visible";s:1:"1";s:8:"featured";s:1:"0";s:6:"rating";s:3:"0.0";s:5:"votes";s:1:"0";s:11:"last_modify";s:19:"2017-05-11 12:12:59";s:4:"name";s:83:"Hot Wheels Аксессуар-препятствие для трека (4 вида)";s:10:"meta_title";s:83:"Hot Wheels Аксессуар-препятствие для трека (4 вида)";s:13:"meta_keywords";s:83:"Hot Wheels Аксессуар-препятствие для трека (4 вида)";s:16:"meta_description";s:83:"Hot Wheels Аксессуар-препятствие для трека (4 вида)";s:10:"annotation";s:1081:"<div>
Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
</div>";s:11:"description";s:1068:"Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.";s:7:"special";s:0:"";s:8:"variants";a:1:{i:0;O:8:"stdClass":16:{s:2:"id";s:2:"74";s:10:"product_id";s:2:"72";s:6:"weight";s:4:"0.00";s:5:"price";d:331.11111111111109;s:13:"compare_price";d:0;s:3:"sku";s:5:"DLF01";s:5:"stock";s:2:"50";s:8:"infinity";s:1:"1";s:10:"attachment";s:0:"";s:8:"position";s:1:"1";s:11:"currency_id";s:1:"4";s:4:"feed";s:1:"1";s:9:"rate_from";s:4:"0.45";s:7:"rate_to";s:4:"1.00";s:4:"name";s:0:"";s:5:"units";s:0:"";}}s:6:"images";a:7:{i:0;O:8:"stdClass":5:{s:2:"id";s:3:"212";s:10:"product_id";s:2:"72";s:4:"name";s:0:"";s:8:"filename";s:9:"1_726.jpg";s:8:"position";s:3:"212";}i:1;O:8:"stdClass":5:{s:2:"id";s:3:"213";s:10:"product_id";s:2:"72";s:4:"name";s:0:"";s:8:"filename";s:9:"2_625.jpg";s:8:"position";s:3:"213";}i:2;O:8:"stdClass":5:{s:2:"id";s:3:"214";s:10:"product_id";s:2:"72";s:4:"name";s:0:"";s:8:"filename";s:9:"3_580.jpg";s:8:"position";s:3:"214";}i:3;O:8:"stdClass":5:{s:2:"id";s:3:"215";s:10:"product_id";s:2:"72";s:4:"name";s:0:"";s:8:"filename";s:9:"5_444.jpg";s:8:"position";s:3:"215";}i:4;O:8:"stdClass":5:{s:2:"id";s:3:"216";s:10:"product_id";s:2:"72";s:4:"name";s:0:"";s:8:"filename";s:9:"6_402.jpg";s:8:"position";s:3:"216";}i:5;O:8:"stdClass":5:{s:2:"id";s:3:"217";s:10:"product_id";s:2:"72";s:4:"name";s:0:"";s:8:"filename";s:9:"4_529.jpg";s:8:"position";s:3:"217";}i:6;O:8:"stdClass":5:{s:2:"id";s:3:"218";s:10:"product_id";s:2:"72";s:4:"name";s:0:"";s:8:"filename";s:9:"7_319.jpg";s:8:"position";s:3:"218";}}s:10:"properties";a:0:{}s:7:"variant";r:21;s:5:"image";r:39;}i:71;O:8:"stdClass":22:{s:2:"id";s:2:"71";s:3:"url";s:45:"hot-wheels-nabor-dopolnitelnyh-dorozhek-treka";s:8:"brand_id";s:1:"0";s:8:"position";s:2:"71";s:7:"created";s:19:"2017-05-11 12:12:59";s:7:"visible";s:1:"1";s:8:"featured";s:1:"0";s:6:"rating";s:3:"0.0";s:5:"votes";s:1:"0";s:11:"last_modify";s:19:"2017-05-11 12:12:59";s:4:"name";s:76:"Hot Wheels Набор дополнительных дорожек трека";s:10:"meta_title";s:76:"Hot Wheels Набор дополнительных дорожек трека";s:13:"meta_keywords";s:76:"Hot Wheels Набор дополнительных дорожек трека";s:16:"meta_description";s:76:"Hot Wheels Набор дополнительных дорожек трека";s:10:"annotation";s:1081:"<div>
Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
</div>";s:11:"description";s:1068:"Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.";s:7:"special";s:0:"";s:8:"variants";a:1:{i:0;O:8:"stdClass":16:{s:2:"id";s:2:"73";s:10:"product_id";s:2:"71";s:6:"weight";s:4:"0.00";s:5:"price";d:242.22222222222223;s:13:"compare_price";d:0;s:3:"sku";s:5:"CCX79";s:5:"stock";s:2:"50";s:8:"infinity";s:1:"1";s:10:"attachment";s:0:"";s:8:"position";s:1:"1";s:11:"currency_id";s:1:"4";s:4:"feed";s:1:"1";s:9:"rate_from";s:4:"0.45";s:7:"rate_to";s:4:"1.00";s:4:"name";s:0:"";s:5:"units";s:0:"";}}s:6:"images";a:3:{i:0;O:8:"stdClass":5:{s:2:"id";s:3:"209";s:10:"product_id";s:2:"71";s:4:"name";s:0:"";s:8:"filename";s:9:"3_579.jpg";s:8:"position";s:3:"209";}i:1;O:8:"stdClass":5:{s:2:"id";s:3:"210";s:10:"product_id";s:2:"71";s:4:"name";s:0:"";s:8:"filename";s:9:"2_624.jpg";s:8:"position";s:3:"210";}i:2;O:8:"stdClass":5:{s:2:"id";s:3:"211";s:10:"product_id";s:2:"71";s:4:"name";s:0:"";s:8:"filename";s:9:"1_725.jpg";s:8:"position";s:3:"211";}}s:10:"properties";a:0:{}s:7:"variant";r:103;s:5:"image";r:121;}i:70;O:8:"stdClass":22:{s:2:"id";s:2:"70";s:3:"url";s:49:"hot-wheels-igrovoj-trek-perekrestnoe-stolknovenie";s:8:"brand_id";s:1:"0";s:8:"position";s:2:"70";s:7:"created";s:19:"2017-05-11 12:12:59";s:7:"visible";s:1:"1";s:8:"featured";s:1:"0";s:6:"rating";s:3:"0.0";s:5:"votes";s:1:"0";s:11:"last_modify";s:19:"2017-05-11 12:12:59";s:4:"name";s:86:"Hot Wheels Игровой трек "Перекрестное столкновение"";s:10:"meta_title";s:86:"Hot Wheels Игровой трек "Перекрестное столкновение"";s:13:"meta_keywords";s:86:"Hot Wheels Игровой трек "Перекрестное столкновение"";s:16:"meta_description";s:86:"Hot Wheels Игровой трек "Перекрестное столкновение"";s:10:"annotation";s:1081:"<div>
Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
</div>";s:11:"description";s:1068:"Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.";s:7:"special";s:0:"";s:8:"variants";a:1:{i:0;O:8:"stdClass":16:{s:2:"id";s:2:"72";s:10:"product_id";s:2:"70";s:6:"weight";s:4:"0.00";s:5:"price";d:6220;s:13:"compare_price";d:0;s:3:"sku";s:5:"DTN42";s:5:"stock";s:2:"50";s:8:"infinity";s:1:"1";s:10:"attachment";s:0:"";s:8:"position";s:1:"1";s:11:"currency_id";s:1:"4";s:4:"feed";s:1:"1";s:9:"rate_from";s:4:"0.45";s:7:"rate_to";s:4:"1.00";s:4:"name";s:0:"";s:5:"units";s:0:"";}}s:6:"images";a:9:{i:0;O:8:"stdClass":5:{s:2:"id";s:3:"200";s:10:"product_id";s:2:"70";s:4:"name";s:0:"";s:8:"filename";s:9:"9_150.jpg";s:8:"position";s:3:"200";}i:1;O:8:"stdClass":5:{s:2:"id";s:3:"201";s:10:"product_id";s:2:"70";s:4:"name";s:0:"";s:8:"filename";s:9:"5_443.jpg";s:8:"position";s:3:"201";}i:2;O:8:"stdClass":5:{s:2:"id";s:3:"202";s:10:"product_id";s:2:"70";s:4:"name";s:0:"";s:8:"filename";s:9:"1_724.jpg";s:8:"position";s:3:"202";}i:3;O:8:"stdClass":5:{s:2:"id";s:3:"203";s:10:"product_id";s:2:"70";s:4:"name";s:0:"";s:8:"filename";s:9:"2_623.jpg";s:8:"position";s:3:"203";}i:4;O:8:"stdClass":5:{s:2:"id";s:3:"204";s:10:"product_id";s:2:"70";s:4:"name";s:0:"";s:8:"filename";s:9:"6_401.jpg";s:8:"position";s:3:"204";}i:5;O:8:"stdClass":5:{s:2:"id";s:3:"205";s:10:"product_id";s:2:"70";s:4:"name";s:0:"";s:8:"filename";s:9:"7_318.jpg";s:8:"position";s:3:"205";}i:6;O:8:"stdClass":5:{s:2:"id";s:3:"206";s:10:"product_id";s:2:"70";s:4:"name";s:0:"";s:8:"filename";s:9:"3_578.jpg";s:8:"position";s:3:"206";}i:7;O:8:"stdClass":5:{s:2:"id";s:3:"207";s:10:"product_id";s:2:"70";s:4:"name";s:0:"";s:8:"filename";s:9:"8_218.jpg";s:8:"position";s:3:"207";}i:8;O:8:"stdClass":5:{s:2:"id";s:3:"208";s:10:"product_id";s:2:"70";s:4:"name";s:0:"";s:8:"filename";s:9:"4_528.jpg";s:8:"position";s:3:"208";}}s:10:"properties";a:0:{}s:7:"variant";r:161;s:5:"image";r:179;}i:69;O:8:"stdClass":22:{s:2:"id";s:2:"69";s:3:"url";s:31:"hot-wheels-trek-protivostoyanie";s:8:"brand_id";s:1:"0";s:8:"position";s:2:"69";s:7:"created";s:19:"2017-05-11 12:12:59";s:7:"visible";s:1:"1";s:8:"featured";s:1:"0";s:6:"rating";s:3:"0.0";s:5:"votes";s:1:"0";s:11:"last_modify";s:19:"2017-05-11 12:12:59";s:4:"name";s:50:"Hot Wheels Трек "Противостояние"";s:10:"meta_title";s:50:"Hot Wheels Трек "Противостояние"";s:13:"meta_keywords";s:50:"Hot Wheels Трек "Противостояние"";s:16:"meta_description";s:50:"Hot Wheels Трек "Противостояние"";s:10:"annotation";s:1081:"<div>
Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
</div>";s:11:"description";s:1068:"Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.";s:7:"special";s:0:"";s:8:"variants";a:1:{i:0;O:8:"stdClass":16:{s:2:"id";s:2:"71";s:10:"product_id";s:2:"69";s:6:"weight";s:4:"0.00";s:5:"price";d:3331.1111111111109;s:13:"compare_price";d:4397.7777777777774;s:3:"sku";s:5:"DHY25";s:5:"stock";s:2:"50";s:8:"infinity";s:1:"1";s:10:"attachment";s:0:"";s:8:"position";s:1:"1";s:11:"currency_id";s:1:"4";s:4:"feed";s:1:"1";s:9:"rate_from";s:4:"0.45";s:7:"rate_to";s:4:"1.00";s:4:"name";s:0:"";s:5:"units";s:0:"";}}s:6:"images";a:7:{i:0;O:8:"stdClass":5:{s:2:"id";s:3:"193";s:10:"product_id";s:2:"69";s:4:"name";s:0:"";s:8:"filename";s:9:"1_723.jpg";s:8:"position";s:3:"193";}i:1;O:8:"stdClass":5:{s:2:"id";s:3:"194";s:10:"product_id";s:2:"69";s:4:"name";s:0:"";s:8:"filename";s:9:"2_622.jpg";s:8:"position";s:3:"194";}i:2;O:8:"stdClass":5:{s:2:"id";s:3:"195";s:10:"product_id";s:2:"69";s:4:"name";s:0:"";s:8:"filename";s:9:"7_317.jpg";s:8:"position";s:3:"195";}i:3;O:8:"stdClass":5:{s:2:"id";s:3:"196";s:10:"product_id";s:2:"69";s:4:"name";s:0:"";s:8:"filename";s:9:"3_577.jpg";s:8:"position";s:3:"196";}i:4;O:8:"stdClass":5:{s:2:"id";s:3:"197";s:10:"product_id";s:2:"69";s:4:"name";s:0:"";s:8:"filename";s:9:"6_400.jpg";s:8:"position";s:3:"197";}i:5;O:8:"stdClass":5:{s:2:"id";s:3:"198";s:10:"product_id";s:2:"69";s:4:"name";s:0:"";s:8:"filename";s:9:"5_442.jpg";s:8:"position";s:3:"198";}i:6;O:8:"stdClass":5:{s:2:"id";s:3:"199";s:10:"product_id";s:2:"69";s:4:"name";s:0:"";s:8:"filename";s:9:"4_527.jpg";s:8:"position";s:3:"199";}}s:10:"properties";a:0:{}s:7:"variant";r:255;s:5:"image";r:273;}i:68;O:8:"stdClass":22:{s:2:"id";s:2:"68";s:3:"url";s:33:"hot-wheels-trek-rekordnyj-pryzhok";s:8:"brand_id";s:1:"0";s:8:"position";s:2:"68";s:7:"created";s:19:"2017-05-11 12:12:59";s:7:"visible";s:1:"1";s:8:"featured";s:1:"0";s:6:"rating";s:3:"0.0";s:5:"votes";s:1:"0";s:11:"last_modify";s:19:"2017-05-11 12:12:59";s:4:"name";s:53:"Hot Wheels Трек "Рекордный прыжок"";s:10:"meta_title";s:53:"Hot Wheels Трек "Рекордный прыжок"";s:13:"meta_keywords";s:53:"Hot Wheels Трек "Рекордный прыжок"";s:16:"meta_description";s:53:"Hot Wheels Трек "Рекордный прыжок"";s:10:"annotation";s:1081:"<div>
Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
</div>";s:11:"description";s:1068:"Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.";s:7:"special";s:0:"";s:8:"variants";a:1:{i:0;O:8:"stdClass":16:{s:2:"id";s:2:"70";s:10:"product_id";s:2:"68";s:6:"weight";s:4:"0.00";s:5:"price";d:3553.333333333333;s:13:"compare_price";d:0;s:3:"sku";s:5:"DJC05";s:5:"stock";s:2:"50";s:8:"infinity";s:1:"1";s:10:"attachment";s:0:"";s:8:"position";s:1:"1";s:11:"currency_id";s:1:"4";s:4:"feed";s:1:"1";s:9:"rate_from";s:4:"0.45";s:7:"rate_to";s:4:"1.00";s:4:"name";s:0:"";s:5:"units";s:0:"";}}s:6:"images";a:4:{i:0;O:8:"stdClass":5:{s:2:"id";s:3:"189";s:10:"product_id";s:2:"68";s:4:"name";s:0:"";s:8:"filename";s:9:"1_722.jpg";s:8:"position";s:3:"189";}i:1;O:8:"stdClass":5:{s:2:"id";s:3:"190";s:10:"product_id";s:2:"68";s:4:"name";s:0:"";s:8:"filename";s:9:"2_621.jpg";s:8:"position";s:3:"190";}i:2;O:8:"stdClass":5:{s:2:"id";s:3:"191";s:10:"product_id";s:2:"68";s:4:"name";s:0:"";s:8:"filename";s:9:"4_526.jpg";s:8:"position";s:3:"191";}i:3;O:8:"stdClass":5:{s:2:"id";s:3:"192";s:10:"product_id";s:2:"68";s:4:"name";s:0:"";s:8:"filename";s:9:"3_576.jpg";s:8:"position";s:3:"192";}}s:10:"properties";a:0:{}s:7:"variant";r:337;s:5:"image";r:355;}i:67;O:8:"stdClass":22:{s:2:"id";s:2:"67";s:3:"url";s:38:"hot-wheels-igrovoj-nabor-ataka-drakona";s:8:"brand_id";s:1:"0";s:8:"position";s:2:"67";s:7:"created";s:19:"2017-05-11 12:12:59";s:7:"visible";s:1:"1";s:8:"featured";s:1:"0";s:6:"rating";s:3:"0.0";s:5:"votes";s:1:"0";s:11:"last_modify";s:19:"2017-05-11 12:12:59";s:4:"name";s:64:"Hot Wheels Игровой набор "Атака дракона"";s:10:"meta_title";s:64:"Hot Wheels Игровой набор "Атака дракона"";s:13:"meta_keywords";s:64:"Hot Wheels Игровой набор "Атака дракона"";s:16:"meta_description";s:64:"Hot Wheels Игровой набор "Атака дракона"";s:10:"annotation";s:1081:"<div>
Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
</div>";s:11:"description";s:1068:"Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.";s:7:"special";s:0:"";s:8:"variants";a:1:{i:0;O:8:"stdClass":16:{s:2:"id";s:2:"69";s:10:"product_id";s:2:"67";s:6:"weight";s:4:"0.00";s:5:"price";d:2220;s:13:"compare_price";d:0;s:3:"sku";s:5:"DWL04";s:5:"stock";s:2:"50";s:8:"infinity";s:1:"1";s:10:"attachment";s:0:"";s:8:"position";s:1:"1";s:11:"currency_id";s:1:"4";s:4:"feed";s:1:"1";s:9:"rate_from";s:4:"0.45";s:7:"rate_to";s:4:"1.00";s:4:"name";s:0:"";s:5:"units";s:0:"";}}s:6:"images";a:7:{i:0;O:8:"stdClass":5:{s:2:"id";s:3:"182";s:10:"product_id";s:2:"67";s:4:"name";s:0:"";s:8:"filename";s:9:"6_399.jpg";s:8:"position";s:3:"182";}i:1;O:8:"stdClass":5:{s:2:"id";s:3:"183";s:10:"product_id";s:2:"67";s:4:"name";s:0:"";s:8:"filename";s:9:"7_316.jpg";s:8:"position";s:3:"183";}i:2;O:8:"stdClass":5:{s:2:"id";s:3:"184";s:10:"product_id";s:2:"67";s:4:"name";s:0:"";s:8:"filename";s:9:"4_525.jpg";s:8:"position";s:3:"184";}i:3;O:8:"stdClass":5:{s:2:"id";s:3:"185";s:10:"product_id";s:2:"67";s:4:"name";s:0:"";s:8:"filename";s:9:"2_620.jpg";s:8:"position";s:3:"185";}i:4;O:8:"stdClass":5:{s:2:"id";s:3:"186";s:10:"product_id";s:2:"67";s:4:"name";s:0:"";s:8:"filename";s:9:"3_575.jpg";s:8:"position";s:3:"186";}i:5;O:8:"stdClass":5:{s:2:"id";s:3:"187";s:10:"product_id";s:2:"67";s:4:"name";s:0:"";s:8:"filename";s:9:"1_721.jpg";s:8:"position";s:3:"187";}i:6;O:8:"stdClass":5:{s:2:"id";s:3:"188";s:10:"product_id";s:2:"67";s:4:"name";s:0:"";s:8:"filename";s:9:"5_441.jpg";s:8:"position";s:3:"188";}}s:10:"properties";a:0:{}s:7:"variant";r:401;s:5:"image";r:419;}i:66;O:8:"stdClass":22:{s:2:"id";s:2:"66";s:3:"url";s:44:"hot-wheels-nabor-gotov-k-igre-neskolko-vidov";s:8:"brand_id";s:1:"0";s:8:"position";s:2:"66";s:7:"created";s:19:"2017-05-11 12:12:59";s:7:"visible";s:1:"1";s:8:"featured";s:1:"0";s:6:"rating";s:3:"0.0";s:5:"votes";s:1:"0";s:11:"last_modify";s:19:"2017-05-11 12:12:59";s:4:"name";s:79:"Hot Wheels Набор "Готов к игре!" (несколько видов)";s:10:"meta_title";s:79:"Hot Wheels Набор "Готов к игре!" (несколько видов)";s:13:"meta_keywords";s:79:"Hot Wheels Набор "Готов к игре!" (несколько видов)";s:16:"meta_description";s:79:"Hot Wheels Набор "Готов к игре!" (несколько видов)";s:10:"annotation";s:1081:"<div>
Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
</div>";s:11:"description";s:1068:"Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.";s:7:"special";s:0:"";s:8:"variants";a:1:{i:0;O:8:"stdClass":16:{s:2:"id";s:2:"68";s:10:"product_id";s:2:"66";s:6:"weight";s:4:"0.00";s:5:"price";d:1775.5555555555554;s:13:"compare_price";d:2220;s:3:"sku";s:5:"X9295";s:5:"stock";s:2:"50";s:8:"infinity";s:1:"1";s:10:"attachment";s:0:"";s:8:"position";s:1:"1";s:11:"currency_id";s:1:"4";s:4:"feed";s:1:"1";s:9:"rate_from";s:4:"0.45";s:7:"rate_to";s:4:"1.00";s:4:"name";s:0:"";s:5:"units";s:0:"";}}s:6:"images";a:3:{i:0;O:8:"stdClass":5:{s:2:"id";s:3:"179";s:10:"product_id";s:2:"66";s:4:"name";s:0:"";s:8:"filename";s:9:"3_574.jpg";s:8:"position";s:3:"179";}i:1;O:8:"stdClass":5:{s:2:"id";s:3:"180";s:10:"product_id";s:2:"66";s:4:"name";s:0:"";s:8:"filename";s:9:"2_619.jpg";s:8:"position";s:3:"180";}i:2;O:8:"stdClass":5:{s:2:"id";s:3:"181";s:10:"product_id";s:2:"66";s:4:"name";s:0:"";s:8:"filename";s:9:"1_720.jpg";s:8:"position";s:3:"181";}}s:10:"properties";a:0:{}s:7:"variant";r:483;s:5:"image";r:501;}i:65;O:8:"stdClass":22:{s:2:"id";s:2:"65";s:3:"url";s:30:"hot-wheels-bazovyj-trek-3-vida";s:8:"brand_id";s:1:"0";s:8:"position";s:2:"65";s:7:"created";s:19:"2017-05-11 12:12:59";s:7:"visible";s:1:"1";s:8:"featured";s:1:"0";s:6:"rating";s:3:"0.0";s:5:"votes";s:1:"0";s:11:"last_modify";s:19:"2017-05-11 12:12:59";s:4:"name";s:47:"Hot Wheels Базовый трек (3 вида)";s:10:"meta_title";s:47:"Hot Wheels Базовый трек (3 вида)";s:13:"meta_keywords";s:47:"Hot Wheels Базовый трек (3 вида)";s:16:"meta_description";s:47:"Hot Wheels Базовый трек (3 вида)";s:10:"annotation";s:1081:"<div>
Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
</div>";s:11:"description";s:1068:"Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.";s:7:"special";s:0:"";s:8:"variants";a:1:{i:0;O:8:"stdClass":16:{s:2:"id";s:2:"67";s:10:"product_id";s:2:"65";s:6:"weight";s:4:"0.00";s:5:"price";d:1553.3333333333333;s:13:"compare_price";d:1775.5555555555554;s:3:"sku";s:5:"DNR74";s:5:"stock";s:2:"50";s:8:"infinity";s:1:"1";s:10:"attachment";s:0:"";s:8:"position";s:1:"1";s:11:"currency_id";s:1:"4";s:4:"feed";s:1:"1";s:9:"rate_from";s:4:"0.45";s:7:"rate_to";s:4:"1.00";s:4:"name";s:0:"";s:5:"units";s:0:"";}}s:6:"images";a:9:{i:0;O:8:"stdClass":5:{s:2:"id";s:3:"170";s:10:"product_id";s:2:"65";s:4:"name";s:0:"";s:8:"filename";s:9:"2_618.jpg";s:8:"position";s:3:"170";}i:1;O:8:"stdClass":5:{s:2:"id";s:3:"171";s:10:"product_id";s:2:"65";s:4:"name";s:0:"";s:8:"filename";s:9:"5_440.jpg";s:8:"position";s:3:"171";}i:2;O:8:"stdClass":5:{s:2:"id";s:3:"172";s:10:"product_id";s:2:"65";s:4:"name";s:0:"";s:8:"filename";s:9:"9_149.jpg";s:8:"position";s:3:"172";}i:3;O:8:"stdClass":5:{s:2:"id";s:3:"173";s:10:"product_id";s:2:"65";s:4:"name";s:0:"";s:8:"filename";s:9:"1_719.jpg";s:8:"position";s:3:"173";}i:4;O:8:"stdClass":5:{s:2:"id";s:3:"174";s:10:"product_id";s:2:"65";s:4:"name";s:0:"";s:8:"filename";s:9:"3_573.jpg";s:8:"position";s:3:"174";}i:5;O:8:"stdClass":5:{s:2:"id";s:3:"175";s:10:"product_id";s:2:"65";s:4:"name";s:0:"";s:8:"filename";s:9:"4_524.jpg";s:8:"position";s:3:"175";}i:6;O:8:"stdClass":5:{s:2:"id";s:3:"176";s:10:"product_id";s:2:"65";s:4:"name";s:0:"";s:8:"filename";s:9:"6_398.jpg";s:8:"position";s:3:"176";}i:7;O:8:"stdClass":5:{s:2:"id";s:3:"177";s:10:"product_id";s:2:"65";s:4:"name";s:0:"";s:8:"filename";s:9:"8_217.jpg";s:8:"position";s:3:"177";}i:8;O:8:"stdClass":5:{s:2:"id";s:3:"178";s:10:"product_id";s:2:"65";s:4:"name";s:0:"";s:8:"filename";s:9:"7_315.jpg";s:8:"position";s:3:"178";}}s:10:"properties";a:0:{}s:7:"variant";r:541;s:5:"image";r:559;}i:64;O:8:"stdClass":22:{s:2:"id";s:2:"64";s:3:"url";s:42:"hot-wheels-igrovoj-nabor-avtoservis-4-vida";s:8:"brand_id";s:1:"0";s:8:"position";s:2:"64";s:7:"created";s:19:"2017-05-11 12:12:59";s:7:"visible";s:1:"1";s:8:"featured";s:1:"0";s:6:"rating";s:3:"0.0";s:5:"votes";s:1:"0";s:11:"last_modify";s:19:"2017-05-11 12:12:59";s:4:"name";s:72:"Hot Wheels Игровой набор "Автосервис" (4 вида)";s:10:"meta_title";s:72:"Hot Wheels Игровой набор "Автосервис" (4 вида)";s:13:"meta_keywords";s:72:"Hot Wheels Игровой набор "Автосервис" (4 вида)";s:16:"meta_description";s:72:"Hot Wheels Игровой набор "Автосервис" (4 вида)";s:10:"annotation";s:1081:"<div>
Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
</div>";s:11:"description";s:1068:"Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.";s:7:"special";s:0:"";s:8:"variants";a:1:{i:0;O:8:"stdClass":16:{s:2:"id";s:2:"66";s:10:"product_id";s:2:"64";s:6:"weight";s:4:"0.00";s:5:"price";d:1108.8888888888889;s:13:"compare_price";d:0;s:3:"sku";s:5:"DWK99";s:5:"stock";s:2:"50";s:8:"infinity";s:1:"1";s:10:"attachment";s:0:"";s:8:"position";s:1:"1";s:11:"currency_id";s:1:"4";s:4:"feed";s:1:"1";s:9:"rate_from";s:4:"0.45";s:7:"rate_to";s:4:"1.00";s:4:"name";s:0:"";s:5:"units";s:0:"";}}s:6:"images";a:9:{i:0;O:8:"stdClass":5:{s:2:"id";s:3:"161";s:10:"product_id";s:2:"64";s:4:"name";s:0:"";s:8:"filename";s:9:"1_718.jpg";s:8:"position";s:3:"161";}i:1;O:8:"stdClass":5:{s:2:"id";s:3:"162";s:10:"product_id";s:2:"64";s:4:"name";s:0:"";s:8:"filename";s:9:"9_148.jpg";s:8:"position";s:3:"162";}i:2;O:8:"stdClass":5:{s:2:"id";s:3:"163";s:10:"product_id";s:2:"64";s:4:"name";s:0:"";s:8:"filename";s:9:"5_439.jpg";s:8:"position";s:3:"163";}i:3;O:8:"stdClass":5:{s:2:"id";s:3:"164";s:10:"product_id";s:2:"64";s:4:"name";s:0:"";s:8:"filename";s:9:"3_572.jpg";s:8:"position";s:3:"164";}i:4;O:8:"stdClass":5:{s:2:"id";s:3:"165";s:10:"product_id";s:2:"64";s:4:"name";s:0:"";s:8:"filename";s:9:"2_617.jpg";s:8:"position";s:3:"165";}i:5;O:8:"stdClass":5:{s:2:"id";s:3:"166";s:10:"product_id";s:2:"64";s:4:"name";s:0:"";s:8:"filename";s:9:"4_523.jpg";s:8:"position";s:3:"166";}i:6;O:8:"stdClass":5:{s:2:"id";s:3:"167";s:10:"product_id";s:2:"64";s:4:"name";s:0:"";s:8:"filename";s:9:"6_397.jpg";s:8:"position";s:3:"167";}i:7;O:8:"stdClass":5:{s:2:"id";s:3:"168";s:10:"product_id";s:2:"64";s:4:"name";s:0:"";s:8:"filename";s:9:"7_314.jpg";s:8:"position";s:3:"168";}i:8;O:8:"stdClass":5:{s:2:"id";s:3:"169";s:10:"product_id";s:2:"64";s:4:"name";s:0:"";s:8:"filename";s:9:"8_216.jpg";s:8:"position";s:3:"169";}}s:10:"properties";a:0:{}s:7:"variant";r:635;s:5:"image";r:653;}i:63;O:8:"stdClass":22:{s:2:"id";s:2:"63";s:3:"url";s:48:"hot-wheels-igrovoj-nabor-gorod-chudovisch-3-vida";s:8:"brand_id";s:1:"0";s:8:"position";s:2:"63";s:7:"created";s:19:"2017-05-11 12:12:59";s:7:"visible";s:1:"1";s:8:"featured";s:1:"0";s:6:"rating";s:3:"0.0";s:5:"votes";s:1:"0";s:11:"last_modify";s:19:"2017-05-11 12:12:59";s:4:"name";s:77:"Hot Wheels Игровой набор "Город чудовищ" (3 вида)";s:10:"meta_title";s:77:"Hot Wheels Игровой набор "Город чудовищ" (3 вида)";s:13:"meta_keywords";s:77:"Hot Wheels Игровой набор "Город чудовищ" (3 вида)";s:16:"meta_description";s:77:"Hot Wheels Игровой набор "Город чудовищ" (3 вида)";s:10:"annotation";s:1081:"<div>
Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
</div>";s:11:"description";s:1068:"Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.";s:7:"special";s:0:"";s:8:"variants";a:1:{i:0;O:8:"stdClass":16:{s:2:"id";s:2:"65";s:10:"product_id";s:2:"63";s:6:"weight";s:4:"0.00";s:5:"price";d:1331.1111111111111;s:13:"compare_price";d:0;s:3:"sku";s:5:"DWK94";s:5:"stock";s:2:"50";s:8:"infinity";s:1:"1";s:10:"attachment";s:0:"";s:8:"position";s:1:"1";s:11:"currency_id";s:1:"4";s:4:"feed";s:1:"1";s:9:"rate_from";s:4:"0.45";s:7:"rate_to";s:4:"1.00";s:4:"name";s:0:"";s:5:"units";s:0:"";}}s:6:"images";a:9:{i:0;O:8:"stdClass":5:{s:2:"id";s:3:"152";s:10:"product_id";s:2:"63";s:4:"name";s:0:"";s:8:"filename";s:9:"2_616.jpg";s:8:"position";s:3:"152";}i:1;O:8:"stdClass":5:{s:2:"id";s:3:"153";s:10:"product_id";s:2:"63";s:4:"name";s:0:"";s:8:"filename";s:9:"1_717.jpg";s:8:"position";s:3:"153";}i:2;O:8:"stdClass":5:{s:2:"id";s:3:"154";s:10:"product_id";s:2:"63";s:4:"name";s:0:"";s:8:"filename";s:9:"8_215.jpg";s:8:"position";s:3:"154";}i:3;O:8:"stdClass":5:{s:2:"id";s:3:"155";s:10:"product_id";s:2:"63";s:4:"name";s:0:"";s:8:"filename";s:9:"7_313.jpg";s:8:"position";s:3:"155";}i:4;O:8:"stdClass":5:{s:2:"id";s:3:"156";s:10:"product_id";s:2:"63";s:4:"name";s:0:"";s:8:"filename";s:9:"6_396.jpg";s:8:"position";s:3:"156";}i:5;O:8:"stdClass":5:{s:2:"id";s:3:"157";s:10:"product_id";s:2:"63";s:4:"name";s:0:"";s:8:"filename";s:9:"3_571.jpg";s:8:"position";s:3:"157";}i:6;O:8:"stdClass":5:{s:2:"id";s:3:"158";s:10:"product_id";s:2:"63";s:4:"name";s:0:"";s:8:"filename";s:9:"4_522.jpg";s:8:"position";s:3:"158";}i:7;O:8:"stdClass":5:{s:2:"id";s:3:"159";s:10:"product_id";s:2:"63";s:4:"name";s:0:"";s:8:"filename";s:9:"5_438.jpg";s:8:"position";s:3:"159";}i:8;O:8:"stdClass":5:{s:2:"id";s:3:"160";s:10:"product_id";s:2:"63";s:4:"name";s:0:"";s:8:"filename";s:9:"9_147.jpg";s:8:"position";s:3:"160";}}s:10:"properties";a:0:{}s:7:"variant";r:729;s:5:"image";r:747;}i:62;O:8:"stdClass":22:{s:2:"id";s:2:"62";s:3:"url";s:46:"hot-wheels-karmannyj-trek-gonki-neskolko-vidov";s:8:"brand_id";s:1:"0";s:8:"position";s:2:"62";s:7:"created";s:19:"2017-05-11 12:12:59";s:7:"visible";s:1:"1";s:8:"featured";s:1:"0";s:6:"rating";s:3:"0.0";s:5:"votes";s:1:"0";s:11:"last_modify";s:19:"2017-05-11 12:12:59";s:4:"name";s:83:"Hot Wheels Карманный трек "Гонки" (несколько видов)";s:10:"meta_title";s:83:"Hot Wheels Карманный трек "Гонки" (несколько видов)";s:13:"meta_keywords";s:83:"Hot Wheels Карманный трек "Гонки" (несколько видов)";s:16:"meta_description";s:83:"Hot Wheels Карманный трек "Гонки" (несколько видов)";s:10:"annotation";s:1081:"<div>
Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
</div>";s:11:"description";s:1068:"Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.";s:7:"special";s:0:"";s:8:"variants";a:1:{i:0;O:8:"stdClass":16:{s:2:"id";s:2:"64";s:10:"product_id";s:2:"62";s:6:"weight";s:4:"0.00";s:5:"price";d:886.66666666666663;s:13:"compare_price";d:0;s:3:"sku";s:5:"CKJ08";s:5:"stock";s:2:"50";s:8:"infinity";s:1:"1";s:10:"attachment";s:0:"";s:8:"position";s:1:"1";s:11:"currency_id";s:1:"4";s:4:"feed";s:1:"1";s:9:"rate_from";s:4:"0.45";s:7:"rate_to";s:4:"1.00";s:4:"name";s:0:"";s:5:"units";s:0:"";}}s:6:"images";a:9:{i:0;O:8:"stdClass":5:{s:2:"id";s:3:"143";s:10:"product_id";s:2:"62";s:4:"name";s:0:"";s:8:"filename";s:9:"1_716.jpg";s:8:"position";s:3:"143";}i:1;O:8:"stdClass":5:{s:2:"id";s:3:"144";s:10:"product_id";s:2:"62";s:4:"name";s:0:"";s:8:"filename";s:9:"2_615.jpg";s:8:"position";s:3:"144";}i:2;O:8:"stdClass":5:{s:2:"id";s:3:"145";s:10:"product_id";s:2:"62";s:4:"name";s:0:"";s:8:"filename";s:9:"3_570.jpg";s:8:"position";s:3:"145";}i:3;O:8:"stdClass":5:{s:2:"id";s:3:"146";s:10:"product_id";s:2:"62";s:4:"name";s:0:"";s:8:"filename";s:9:"7_312.jpg";s:8:"position";s:3:"146";}i:4;O:8:"stdClass":5:{s:2:"id";s:3:"147";s:10:"product_id";s:2:"62";s:4:"name";s:0:"";s:8:"filename";s:9:"4_521.jpg";s:8:"position";s:3:"147";}i:5;O:8:"stdClass":5:{s:2:"id";s:3:"148";s:10:"product_id";s:2:"62";s:4:"name";s:0:"";s:8:"filename";s:9:"5_437.jpg";s:8:"position";s:3:"148";}i:6;O:8:"stdClass":5:{s:2:"id";s:3:"149";s:10:"product_id";s:2:"62";s:4:"name";s:0:"";s:8:"filename";s:9:"6_395.jpg";s:8:"position";s:3:"149";}i:7;O:8:"stdClass":5:{s:2:"id";s:3:"150";s:10:"product_id";s:2:"62";s:4:"name";s:0:"";s:8:"filename";s:9:"8_214.jpg";s:8:"position";s:3:"150";}i:8;O:8:"stdClass":5:{s:2:"id";s:3:"151";s:10:"product_id";s:2:"62";s:4:"name";s:0:"";s:8:"filename";s:9:"9_146.jpg";s:8:"position";s:3:"151";}}s:10:"properties";a:0:{}s:7:"variant";r:823;s:5:"image";r:841;}i:61;O:8:"stdClass":22:{s:2:"id";s:2:"61";s:3:"url";s:29:"hot-wheels-legendarnyj-garazh";s:8:"brand_id";s:1:"0";s:8:"position";s:2:"61";s:7:"created";s:19:"2017-05-11 12:12:59";s:7:"visible";s:1:"1";s:8:"featured";s:1:"0";s:6:"rating";s:3:"0.0";s:5:"votes";s:1:"0";s:11:"last_modify";s:19:"2017-05-11 12:12:59";s:4:"name";s:44:"Hot Wheels Легендарный гараж";s:10:"meta_title";s:44:"Hot Wheels Легендарный гараж";s:13:"meta_keywords";s:44:"Hot Wheels Легендарный гараж";s:16:"meta_description";s:44:"Hot Wheels Легендарный гараж";s:10:"annotation";s:1081:"<div>
Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
</div>";s:11:"description";s:1068:"Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.";s:7:"special";s:0:"";s:8:"variants";a:1:{i:0;O:8:"stdClass":16:{s:2:"id";s:2:"63";s:10:"product_id";s:2:"61";s:6:"weight";s:4:"0.00";s:5:"price";d:16664.444444444445;s:13:"compare_price";d:0;s:3:"sku";s:5:"CMP80";s:5:"stock";s:2:"50";s:8:"infinity";s:1:"1";s:10:"attachment";s:0:"";s:8:"position";s:1:"1";s:11:"currency_id";s:1:"4";s:4:"feed";s:1:"1";s:9:"rate_from";s:4:"0.45";s:7:"rate_to";s:4:"1.00";s:4:"name";s:0:"";s:5:"units";s:0:"";}}s:6:"images";a:8:{i:0;O:8:"stdClass":5:{s:2:"id";s:3:"135";s:10:"product_id";s:2:"61";s:4:"name";s:0:"";s:8:"filename";s:9:"2_614.jpg";s:8:"position";s:3:"135";}i:1;O:8:"stdClass":5:{s:2:"id";s:3:"136";s:10:"product_id";s:2:"61";s:4:"name";s:0:"";s:8:"filename";s:9:"3_569.jpg";s:8:"position";s:3:"136";}i:2;O:8:"stdClass":5:{s:2:"id";s:3:"137";s:10:"product_id";s:2:"61";s:4:"name";s:0:"";s:8:"filename";s:9:"1_715.jpg";s:8:"position";s:3:"137";}i:3;O:8:"stdClass":5:{s:2:"id";s:3:"138";s:10:"product_id";s:2:"61";s:4:"name";s:0:"";s:8:"filename";s:9:"4_520.jpg";s:8:"position";s:3:"138";}i:4;O:8:"stdClass":5:{s:2:"id";s:3:"139";s:10:"product_id";s:2:"61";s:4:"name";s:0:"";s:8:"filename";s:9:"7_311.jpg";s:8:"position";s:3:"139";}i:5;O:8:"stdClass":5:{s:2:"id";s:3:"140";s:10:"product_id";s:2:"61";s:4:"name";s:0:"";s:8:"filename";s:9:"6_394.jpg";s:8:"position";s:3:"140";}i:6;O:8:"stdClass":5:{s:2:"id";s:3:"141";s:10:"product_id";s:2:"61";s:4:"name";s:0:"";s:8:"filename";s:9:"5_436.jpg";s:8:"position";s:3:"141";}i:7;O:8:"stdClass":5:{s:2:"id";s:3:"142";s:10:"product_id";s:2:"61";s:4:"name";s:0:"";s:8:"filename";s:9:"8_213.jpg";s:8:"position";s:3:"142";}}s:10:"properties";a:0:{}s:7:"variant";r:917;s:5:"image";r:935;}i:60;O:8:"stdClass":22:{s:2:"id";s:2:"60";s:3:"url";s:31:"hot-wheels-gruzovik-transporter";s:8:"brand_id";s:1:"0";s:8:"position";s:2:"60";s:7:"created";s:19:"2017-05-11 12:12:59";s:7:"visible";s:1:"1";s:8:"featured";N;s:6:"rating";s:3:"0.0";s:5:"votes";s:1:"0";s:11:"last_modify";s:19:"2017-07-09 16:36:02";s:4:"name";s:50:"Hot Wheels Грузовик-транспортёр";s:10:"meta_title";s:50:"Hot Wheels Грузовик-транспортёр";s:13:"meta_keywords";s:50:"Hot Wheels Грузовик-транспортёр";s:16:"meta_description";s:50:"Hot Wheels Грузовик-транспортёр";s:10:"annotation";s:1079:"<div>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</div>";s:11:"description";s:1075:"<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>";s:7:"special";s:0:"";s:8:"variants";a:2:{i:0;O:8:"stdClass":16:{s:2:"id";s:2:"62";s:10:"product_id";s:2:"60";s:6:"weight";s:4:"0.00";s:5:"price";d:2108.8888888888887;s:13:"compare_price";d:0;s:3:"sku";s:5:"CKC09";s:5:"stock";s:1:"0";s:8:"infinity";s:1:"0";s:10:"attachment";s:0:"";s:8:"position";s:2:"62";s:11:"currency_id";s:1:"4";s:4:"feed";s:1:"1";s:9:"rate_from";s:4:"0.45";s:7:"rate_to";s:4:"1.00";s:4:"name";s:0:"";s:5:"units";s:0:"";}i:1;O:8:"stdClass":16:{s:2:"id";s:3:"113";s:10:"product_id";s:2:"60";s:6:"weight";s:4:"0.00";s:5:"price";s:6:"950.00";s:13:"compare_price";N;s:3:"sku";s:4:"1050";s:5:"stock";s:2:"10";s:8:"infinity";s:1:"0";s:10:"attachment";s:0:"";s:8:"position";s:3:"113";s:11:"currency_id";s:1:"2";s:4:"feed";s:1:"0";s:9:"rate_from";s:4:"8.13";s:7:"rate_to";s:4:"8.13";s:4:"name";s:0:"";s:5:"units";s:0:"";}}s:6:"images";a:4:{i:0;O:8:"stdClass":5:{s:2:"id";s:3:"131";s:10:"product_id";s:2:"60";s:4:"name";s:0:"";s:8:"filename";s:9:"3_568.jpg";s:8:"position";s:1:"0";}i:1;O:8:"stdClass":5:{s:2:"id";s:3:"132";s:10:"product_id";s:2:"60";s:4:"name";s:0:"";s:8:"filename";s:9:"2_613.jpg";s:8:"position";s:1:"1";}i:2;O:8:"stdClass":5:{s:2:"id";s:3:"133";s:10:"product_id";s:2:"60";s:4:"name";s:0:"";s:8:"filename";s:9:"4_519.jpg";s:8:"position";s:1:"2";}i:3;O:8:"stdClass":5:{s:2:"id";s:3:"134";s:10:"product_id";s:2:"60";s:4:"name";s:0:"";s:8:"filename";s:9:"1_714.jpg";s:8:"position";s:1:"3";}}s:10:"properties";a:0:{}s:7:"variant";r:1005;s:5:"image";r:1040;}i:59;O:8:"stdClass":22:{s:2:"id";s:2:"59";s:3:"url";s:43:"hot-wheels-trek-mega-pryzhok-neskolko-vidov";s:8:"brand_id";s:1:"0";s:8:"position";s:2:"59";s:7:"created";s:19:"2017-05-11 12:12:59";s:7:"visible";s:1:"1";s:8:"featured";N;s:6:"rating";s:3:"0.0";s:5:"votes";s:1:"0";s:11:"last_modify";s:19:"2017-07-09 16:37:35";s:4:"name";s:75:"Hot Wheels Трек "Мега Прыжок" (несколько видов)";s:10:"meta_title";s:75:"Hot Wheels Трек "Мега Прыжок" (несколько видов)";s:13:"meta_keywords";s:75:"Hot Wheels Трек "Мега Прыжок" (несколько видов)";s:16:"meta_description";s:75:"Hot Wheels Трек "Мега Прыжок" (несколько видов)";s:10:"annotation";s:1079:"<div>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</div>";s:11:"description";s:1075:"<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>";s:7:"special";s:0:"";s:8:"variants";a:2:{i:0;O:8:"stdClass":16:{s:2:"id";s:2:"61";s:10:"product_id";s:2:"59";s:6:"weight";s:4:"0.00";s:5:"price";d:664.44444444444446;s:13:"compare_price";d:0;s:3:"sku";s:5:"DNN77";s:5:"stock";s:2:"50";s:8:"infinity";s:1:"1";s:10:"attachment";s:0:"";s:8:"position";s:2:"61";s:11:"currency_id";s:1:"4";s:4:"feed";s:1:"1";s:9:"rate_from";s:4:"0.45";s:7:"rate_to";s:4:"1.00";s:4:"name";s:0:"";s:5:"units";s:0:"";}i:1;O:8:"stdClass":16:{s:2:"id";s:3:"114";s:10:"product_id";s:2:"59";s:6:"weight";s:4:"0.00";s:5:"price";s:6:"350.00";s:13:"compare_price";N;s:3:"sku";s:10:"впвап";s:5:"stock";s:2:"50";s:8:"infinity";s:1:"1";s:10:"attachment";s:0:"";s:8:"position";s:3:"114";s:11:"currency_id";s:1:"2";s:4:"feed";s:1:"0";s:9:"rate_from";s:4:"8.13";s:7:"rate_to";s:4:"8.13";s:4:"name";s:0:"";s:5:"units";s:0:"";}}s:6:"images";a:3:{i:0;O:8:"stdClass":5:{s:2:"id";s:3:"128";s:10:"product_id";s:2:"59";s:4:"name";s:0:"";s:8:"filename";s:9:"2_612.jpg";s:8:"position";s:1:"0";}i:1;O:8:"stdClass":5:{s:2:"id";s:3:"129";s:10:"product_id";s:2:"59";s:4:"name";s:0:"";s:8:"filename";s:9:"3_567.jpg";s:8:"position";s:1:"1";}i:2;O:8:"stdClass":5:{s:2:"id";s:3:"130";s:10:"product_id";s:2:"59";s:4:"name";s:0:"";s:8:"filename";s:9:"1_713.jpg";s:8:"position";s:1:"2";}}s:10:"properties";a:0:{}s:7:"variant";r:1086;s:5:"image";r:1121;}i:58;O:8:"stdClass":22:{s:2:"id";s:2:"58";s:3:"url";s:49:"hot-wheels-trek-ohota-na-akulu-serii-izmeni-tsvet";s:8:"brand_id";s:1:"0";s:8:"position";s:2:"58";s:7:"created";s:19:"2017-05-11 12:12:59";s:7:"visible";s:1:"1";s:8:"featured";N;s:6:"rating";s:3:"0.0";s:5:"votes";s:1:"0";s:11:"last_modify";s:19:"2017-07-09 16:38:02";s:4:"name";s:83:"Hot Wheels Трек "Охота на акулу" серии "Измени цвет"";s:10:"meta_title";s:83:"Hot Wheels Трек "Охота на акулу" серии "Измени цвет"";s:13:"meta_keywords";s:83:"Hot Wheels Трек "Охота на акулу" серии "Измени цвет"";s:16:"meta_description";s:83:"Hot Wheels Трек "Охота на акулу" серии "Измени цвет"";s:10:"annotation";s:1079:"<div>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</div>";s:11:"description";s:1075:"<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>";s:7:"special";s:0:"";s:8:"variants";a:5:{i:0;O:8:"stdClass":16:{s:2:"id";s:2:"60";s:10:"product_id";s:2:"58";s:6:"weight";s:4:"0.00";s:5:"price";d:2222;s:13:"compare_price";d:2775.5555555555557;s:3:"sku";s:5:"BGK04";s:5:"stock";s:2:"50";s:8:"infinity";s:1:"1";s:10:"attachment";s:0:"";s:8:"position";s:2:"60";s:11:"currency_id";s:1:"4";s:4:"feed";s:1:"1";s:9:"rate_from";s:4:"0.45";s:7:"rate_to";s:4:"1.00";s:4:"name";s:0:"";s:5:"units";s:0:"";}i:1;O:8:"stdClass":16:{s:2:"id";s:3:"115";s:10:"product_id";s:2:"58";s:6:"weight";s:4:"0.00";s:5:"price";s:6:"200.00";s:13:"compare_price";N;s:3:"sku";s:0:"";s:5:"stock";s:2:"50";s:8:"infinity";s:1:"1";s:10:"attachment";s:0:"";s:8:"position";s:3:"115";s:11:"currency_id";s:1:"2";s:4:"feed";s:1:"0";s:9:"rate_from";s:4:"8.13";s:7:"rate_to";s:4:"8.13";s:4:"name";s:0:"";s:5:"units";s:0:"";}i:2;O:8:"stdClass":16:{s:2:"id";s:3:"116";s:10:"product_id";s:2:"58";s:6:"weight";s:4:"0.00";s:5:"price";s:6:"300.00";s:13:"compare_price";N;s:3:"sku";s:0:"";s:5:"stock";s:2:"50";s:8:"infinity";s:1:"1";s:10:"attachment";s:0:"";s:8:"position";s:3:"116";s:11:"currency_id";s:1:"2";s:4:"feed";s:1:"0";s:9:"rate_from";s:4:"8.13";s:7:"rate_to";s:4:"8.13";s:4:"name";s:0:"";s:5:"units";s:0:"";}i:3;O:8:"stdClass":16:{s:2:"id";s:3:"117";s:10:"product_id";s:2:"58";s:6:"weight";s:4:"0.00";s:5:"price";s:6:"500.00";s:13:"compare_price";N;s:3:"sku";s:0:"";s:5:"stock";s:2:"50";s:8:"infinity";s:1:"1";s:10:"attachment";s:0:"";s:8:"position";s:3:"117";s:11:"currency_id";s:1:"2";s:4:"feed";s:1:"0";s:9:"rate_from";s:4:"8.13";s:7:"rate_to";s:4:"8.13";s:4:"name";s:0:"";s:5:"units";s:0:"";}i:4;O:8:"stdClass":16:{s:2:"id";s:3:"118";s:10:"product_id";s:2:"58";s:6:"weight";s:4:"0.00";s:5:"price";s:7:"1000.00";s:13:"compare_price";N;s:3:"sku";s:0:"";s:5:"stock";s:2:"50";s:8:"infinity";s:1:"1";s:10:"attachment";s:0:"";s:8:"position";s:3:"118";s:11:"currency_id";s:1:"2";s:4:"feed";s:1:"0";s:9:"rate_from";s:4:"8.13";s:7:"rate_to";s:4:"8.13";s:4:"name";s:0:"";s:5:"units";s:0:"";}}s:6:"images";a:3:{i:0;O:8:"stdClass":5:{s:2:"id";s:3:"125";s:10:"product_id";s:2:"58";s:4:"name";s:0:"";s:8:"filename";s:11:"bgk04_1.jpg";s:8:"position";s:1:"0";}i:1;O:8:"stdClass":5:{s:2:"id";s:3:"126";s:10:"product_id";s:2:"58";s:4:"name";s:0:"";s:8:"filename";s:11:"bgk04_5.jpg";s:8:"position";s:1:"1";}i:2;O:8:"stdClass":5:{s:2:"id";s:3:"127";s:10:"product_id";s:2:"58";s:4:"name";s:0:"";s:8:"filename";s:11:"bgk04_4.jpg";s:8:"position";s:1:"2";}}s:10:"properties";a:0:{}s:7:"variant";r:1161;s:5:"image";r:1247;}i:57;O:8:"stdClass":22:{s:2:"id";s:2:"57";s:3:"url";s:65:"hot-wheels-igrovoj-nabor-priklyucheniya-v-bolshom-gorode-v-assort";s:8:"brand_id";s:1:"0";s:8:"position";s:2:"57";s:7:"created";s:19:"2017-05-11 12:12:59";s:7:"visible";s:1:"1";s:8:"featured";s:1:"0";s:6:"rating";s:3:"0.0";s:5:"votes";s:1:"0";s:11:"last_modify";s:19:"2017-05-11 12:12:59";s:4:"name";s:105:"Hot Wheels Игровой набор "Приключения в большом городе" (2 вида)";s:10:"meta_title";s:105:"Hot Wheels Игровой набор "Приключения в большом городе" (2 вида)";s:13:"meta_keywords";s:105:"Hot Wheels Игровой набор "Приключения в большом городе" (2 вида)";s:16:"meta_description";s:105:"Hot Wheels Игровой набор "Приключения в большом городе" (2 вида)";s:10:"annotation";s:1081:"<div>
Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
</div>";s:11:"description";s:1068:"Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.";s:7:"special";s:0:"";s:8:"variants";a:1:{i:0;O:8:"stdClass":16:{s:2:"id";s:2:"59";s:10:"product_id";s:2:"57";s:6:"weight";s:4:"0.00";s:5:"price";d:886.66666666666663;s:13:"compare_price";d:1042.2222222222222;s:3:"sku";s:5:"CDM44";s:5:"stock";s:2:"50";s:8:"infinity";s:1:"1";s:10:"attachment";s:0:"";s:8:"position";s:1:"1";s:11:"currency_id";s:1:"4";s:4:"feed";s:1:"1";s:9:"rate_from";s:4:"0.45";s:7:"rate_to";s:4:"1.00";s:4:"name";s:0:"";s:5:"units";s:0:"";}}s:6:"images";a:5:{i:0;O:8:"stdClass":5:{s:2:"id";s:3:"120";s:10:"product_id";s:2:"57";s:4:"name";s:0:"";s:8:"filename";s:8:"1_99.jpg";s:8:"position";s:3:"120";}i:1;O:8:"stdClass":5:{s:2:"id";s:3:"121";s:10:"product_id";s:2:"57";s:4:"name";s:0:"";s:8:"filename";s:8:"2_95.jpg";s:8:"position";s:3:"121";}i:2;O:8:"stdClass":5:{s:2:"id";s:3:"122";s:10:"product_id";s:2:"57";s:4:"name";s:0:"";s:8:"filename";s:8:"3_82.jpg";s:8:"position";s:3:"122";}i:3;O:8:"stdClass":5:{s:2:"id";s:3:"123";s:10:"product_id";s:2:"57";s:4:"name";s:0:"";s:8:"filename";s:8:"4_79.jpg";s:8:"position";s:3:"123";}i:4;O:8:"stdClass":5:{s:2:"id";s:3:"124";s:10:"product_id";s:2:"57";s:4:"name";s:0:"";s:8:"filename";s:8:"5_62.jpg";s:8:"position";s:3:"124";}}s:10:"properties";a:0:{}s:7:"variant";r:1287;s:5:"image";r:1305;}i:55;O:8:"stdClass":22:{s:2:"id";s:2:"55";s:3:"url";s:29:"hot-wheels-nabor-superskorost";s:8:"brand_id";s:1:"0";s:8:"position";s:2:"55";s:7:"created";s:19:"2017-05-11 12:12:59";s:7:"visible";s:1:"1";s:8:"featured";s:1:"0";s:6:"rating";s:3:"0.0";s:5:"votes";s:1:"0";s:11:"last_modify";s:19:"2017-05-11 12:12:59";s:4:"name";s:48:"Hot Wheels Набор Суперскорость";s:10:"meta_title";s:48:"Hot Wheels Набор Суперскорость";s:13:"meta_keywords";s:48:"Hot Wheels Набор Суперскорость";s:16:"meta_description";s:48:"Hot Wheels Набор Суперскорость";s:10:"annotation";s:1081:"<div>
Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
</div>";s:11:"description";s:1068:"Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.";s:7:"special";s:0:"";s:8:"variants";a:1:{i:0;O:8:"stdClass":16:{s:2:"id";s:2:"57";s:10:"product_id";s:2:"55";s:6:"weight";s:4:"0.00";s:5:"price";d:886.66666666666663;s:13:"compare_price";d:0;s:3:"sku";s:5:"BGX82";s:5:"stock";s:1:"0";s:8:"infinity";s:1:"0";s:10:"attachment";s:0:"";s:8:"position";s:1:"1";s:11:"currency_id";s:1:"4";s:4:"feed";s:1:"1";s:9:"rate_from";s:4:"0.45";s:7:"rate_to";s:4:"1.00";s:4:"name";s:0:"";s:5:"units";s:0:"";}}s:6:"images";a:6:{i:0;O:8:"stdClass":5:{s:2:"id";s:3:"110";s:10:"product_id";s:2:"55";s:4:"name";s:0:"";s:8:"filename";s:9:"1_103.jpg";s:8:"position";s:3:"110";}i:1;O:8:"stdClass":5:{s:2:"id";s:3:"111";s:10:"product_id";s:2:"55";s:4:"name";s:0:"";s:8:"filename";s:8:"2_99.jpg";s:8:"position";s:3:"111";}i:2;O:8:"stdClass":5:{s:2:"id";s:3:"112";s:10:"product_id";s:2:"55";s:4:"name";s:0:"";s:8:"filename";s:8:"6_53.jpg";s:8:"position";s:3:"112";}i:3;O:8:"stdClass":5:{s:2:"id";s:3:"113";s:10:"product_id";s:2:"55";s:4:"name";s:0:"";s:8:"filename";s:8:"4_83.jpg";s:8:"position";s:3:"113";}i:4;O:8:"stdClass":5:{s:2:"id";s:3:"114";s:10:"product_id";s:2:"55";s:4:"name";s:0:"";s:8:"filename";s:8:"5_65.jpg";s:8:"position";s:3:"114";}i:5;O:8:"stdClass":5:{s:2:"id";s:3:"115";s:10:"product_id";s:2:"55";s:4:"name";s:0:"";s:8:"filename";s:8:"3_86.jpg";s:8:"position";s:3:"115";}}s:10:"properties";a:0:{}s:7:"variant";r:1357;s:5:"image";r:1375;}i:54;O:8:"stdClass":22:{s:2:"id";s:2:"54";s:3:"url";s:37:"hot-wheels-nabor-prepyatstviya-v-puti";s:8:"brand_id";s:1:"0";s:8:"position";s:2:"54";s:7:"created";s:19:"2017-05-11 12:12:59";s:7:"visible";s:1:"1";s:8:"featured";N;s:6:"rating";s:3:"0.0";s:5:"votes";s:1:"0";s:11:"last_modify";s:19:"2017-07-09 16:38:44";s:4:"name";s:69:"Hot Wheels Набор Препятствия в пути (2 вида)";s:10:"meta_title";s:69:"Hot Wheels Набор Препятствия в пути (2 вида)";s:13:"meta_keywords";s:69:"Hot Wheels Набор Препятствия в пути (2 вида)";s:16:"meta_description";s:69:"Hot Wheels Набор Препятствия в пути (2 вида)";s:10:"annotation";s:1079:"<div>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</div>";s:11:"description";s:1075:"<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>";s:7:"special";s:0:"";s:8:"variants";a:4:{i:0;O:8:"stdClass":16:{s:2:"id";s:2:"56";s:10:"product_id";s:2:"54";s:6:"weight";s:4:"0.00";s:5:"price";d:442.22222222222223;s:13:"compare_price";d:0;s:3:"sku";s:5:"BGX66";s:5:"stock";s:1:"0";s:8:"infinity";s:1:"0";s:10:"attachment";s:0:"";s:8:"position";s:2:"56";s:11:"currency_id";s:1:"4";s:4:"feed";s:1:"1";s:9:"rate_from";s:4:"0.45";s:7:"rate_to";s:4:"1.00";s:4:"name";s:0:"";s:5:"units";s:0:"";}i:1;O:8:"stdClass":16:{s:2:"id";s:3:"119";s:10:"product_id";s:2:"54";s:6:"weight";s:4:"0.00";s:5:"price";s:6:"200.00";s:13:"compare_price";N;s:3:"sku";s:6:"цук";s:5:"stock";s:2:"50";s:8:"infinity";s:1:"1";s:10:"attachment";s:0:"";s:8:"position";s:3:"119";s:11:"currency_id";s:1:"2";s:4:"feed";s:1:"0";s:9:"rate_from";s:4:"8.13";s:7:"rate_to";s:4:"8.13";s:4:"name";s:0:"";s:5:"units";s:0:"";}i:2;O:8:"stdClass":16:{s:2:"id";s:3:"120";s:10:"product_id";s:2:"54";s:6:"weight";s:4:"0.00";s:5:"price";s:6:"205.00";s:13:"compare_price";N;s:3:"sku";s:10:"ук645645";s:5:"stock";s:2:"50";s:8:"infinity";s:1:"1";s:10:"attachment";s:0:"";s:8:"position";s:3:"120";s:11:"currency_id";s:1:"2";s:4:"feed";s:1:"0";s:9:"rate_from";s:4:"8.13";s:7:"rate_to";s:4:"8.13";s:4:"name";s:0:"";s:5:"units";s:0:"";}i:3;O:8:"stdClass":16:{s:2:"id";s:3:"121";s:10:"product_id";s:2:"54";s:6:"weight";s:4:"0.00";s:5:"price";s:6:"210.00";s:13:"compare_price";N;s:3:"sku";s:5:"68768";s:5:"stock";s:2:"50";s:8:"infinity";s:1:"1";s:10:"attachment";s:0:"";s:8:"position";s:3:"121";s:11:"currency_id";s:1:"2";s:4:"feed";s:1:"0";s:9:"rate_from";s:4:"8.13";s:7:"rate_to";s:4:"8.13";s:4:"name";s:0:"";s:5:"units";s:0:"";}}s:6:"images";a:6:{i:0;O:8:"stdClass":5:{s:2:"id";s:3:"104";s:10:"product_id";s:2:"54";s:4:"name";s:0:"";s:8:"filename";s:9:"1_102.jpg";s:8:"position";s:1:"0";}i:1;O:8:"stdClass":5:{s:2:"id";s:3:"105";s:10:"product_id";s:2:"54";s:4:"name";s:0:"";s:8:"filename";s:8:"4_82.jpg";s:8:"position";s:1:"1";}i:2;O:8:"stdClass":5:{s:2:"id";s:3:"106";s:10:"product_id";s:2:"54";s:4:"name";s:0:"";s:8:"filename";s:8:"2_98.jpg";s:8:"position";s:1:"2";}i:3;O:8:"stdClass":5:{s:2:"id";s:3:"107";s:10:"product_id";s:2:"54";s:4:"name";s:0:"";s:8:"filename";s:8:"5_64.jpg";s:8:"position";s:1:"3";}i:4;O:8:"stdClass":5:{s:2:"id";s:3:"108";s:10:"product_id";s:2:"54";s:4:"name";s:0:"";s:8:"filename";s:8:"3_85.jpg";s:8:"position";s:1:"4";}i:5;O:8:"stdClass":5:{s:2:"id";s:3:"109";s:10:"product_id";s:2:"54";s:4:"name";s:0:"";s:8:"filename";s:8:"6_52.jpg";s:8:"position";s:1:"5";}}s:10:"properties";a:0:{}s:7:"variant";r:1433;s:5:"image";r:1502;}i:53;O:8:"stdClass":22:{s:2:"id";s:2:"53";s:3:"url";s:41:"mashinka-hot-wheels-izmeni-tsvet-v-assort";s:8:"brand_id";s:1:"0";s:8:"position";s:2:"53";s:7:"created";s:19:"2017-05-11 12:12:59";s:7:"visible";s:1:"1";s:8:"featured";s:1:"0";s:6:"rating";s:3:"0.0";s:5:"votes";s:1:"0";s:11:"last_modify";s:19:"2017-05-11 12:12:59";s:4:"name";s:49:"Машинка Hot Wheels "Измени цвет"";s:10:"meta_title";s:49:"Машинка Hot Wheels "Измени цвет"";s:13:"meta_keywords";s:49:"Машинка Hot Wheels "Измени цвет"";s:16:"meta_description";s:49:"Машинка Hot Wheels "Измени цвет"";s:10:"annotation";s:1081:"<div>
Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
</div>";s:11:"description";s:1068:"Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.";s:7:"special";s:0:"";s:8:"variants";a:1:{i:0;O:8:"stdClass":16:{s:2:"id";s:2:"55";s:10:"product_id";s:2:"53";s:6:"weight";s:4:"0.00";s:5:"price";d:442.22222222222223;s:13:"compare_price";d:553.33333333333337;s:3:"sku";s:5:"BHR15";s:5:"stock";s:2:"50";s:8:"infinity";s:1:"1";s:10:"attachment";s:0:"";s:8:"position";s:1:"1";s:11:"currency_id";s:1:"4";s:4:"feed";s:1:"1";s:9:"rate_from";s:4:"0.45";s:7:"rate_to";s:4:"1.00";s:4:"name";s:0:"";s:5:"units";s:0:"";}}s:6:"images";a:9:{i:0;O:8:"stdClass":5:{s:2:"id";s:2:"95";s:10:"product_id";s:2:"53";s:4:"name";s:0:"";s:8:"filename";s:8:"6_51.jpg";s:8:"position";s:2:"95";}i:1;O:8:"stdClass":5:{s:2:"id";s:2:"96";s:10:"product_id";s:2:"53";s:4:"name";s:0:"";s:8:"filename";s:9:"1_100.jpg";s:8:"position";s:2:"96";}i:2;O:8:"stdClass":5:{s:2:"id";s:2:"97";s:10:"product_id";s:2:"53";s:4:"name";s:0:"";s:8:"filename";s:8:"2_96.jpg";s:8:"position";s:2:"97";}i:3;O:8:"stdClass":5:{s:2:"id";s:2:"98";s:10:"product_id";s:2:"53";s:4:"name";s:0:"";s:8:"filename";s:8:"7_37.jpg";s:8:"position";s:2:"98";}i:4;O:8:"stdClass":5:{s:2:"id";s:2:"99";s:10:"product_id";s:2:"53";s:4:"name";s:0:"";s:8:"filename";s:7:"9_7.jpg";s:8:"position";s:2:"99";}i:5;O:8:"stdClass":5:{s:2:"id";s:3:"100";s:10:"product_id";s:2:"53";s:4:"name";s:0:"";s:8:"filename";s:8:"3_83.jpg";s:8:"position";s:3:"100";}i:6;O:8:"stdClass":5:{s:2:"id";s:3:"101";s:10:"product_id";s:2:"53";s:4:"name";s:0:"";s:8:"filename";s:8:"8_25.jpg";s:8:"position";s:3:"101";}i:7;O:8:"stdClass":5:{s:2:"id";s:3:"102";s:10:"product_id";s:2:"53";s:4:"name";s:0:"";s:8:"filename";s:8:"5_63.jpg";s:8:"position";s:3:"102";}i:8;O:8:"stdClass":5:{s:2:"id";s:3:"103";s:10:"product_id";s:2:"53";s:4:"name";s:0:"";s:8:"filename";s:8:"4_80.jpg";s:8:"position";s:3:"103";}}s:10:"properties";a:0:{}s:7:"variant";r:1560;s:5:"image";r:1578;}}';
$products = unserialize($data);
$pages = false;
/*echo '<pre>';
print_r($products);
echo'</pre>';

echo '<br><br><br>';

foreach ($products as $product) {
	
	//echo "$product->name";
	//echo '<br><br><br>';
	echo '<select name="drop_down">';
	foreach ($product->variants as $variant) {
		
		
	echo "<option>.$variant->price</option>";
}	
	     echo '</select>';
}	
	

echo '<br><br><br>';*/
?>
<!DOCTYPE html>
<html>
<title>Мой магазин</title>
<head>
    <title>class work#3</title>
</head>

<style>
    ul {
        list-style: none;
        padding: 0;

    }
    .clearfix:after {
        visibility: hidden;
        display: inline-block;
        font-size: 0;
        content: " ";
        clear: both;
        height: 0;
    }
    * html .clearfix { height: 1%; }
    .clearfix { display: inline-block; }
    .header {
        width: 100%;
        padding: 5px;
        background: #ddd;
        margin-bottom: 10px;
    }
    .sidebar{
        float: left;
        width: 250px;
        padding: 5px;
    }
    .container {
        width: 1000px;
        float: left;
        padding: 5px;
    }
    .red {
        color: red;
    }
    .menu_link {
        float: left;
        padding-left: 5px;
    }
    .menu_link:hover{
        cursor: pointer;
    }
    .h2_title{
        font-size: 16px;
        text-align: left;
    }
    .inner{
        border: 1px solid #ddd;
        border-radius: 3px;
        padding: 2px;
    }
    .product_item{
		display: inline-block;
        width: 30%;
        float: left!important;
        padding: 2px;
        min-height: 350px;
        border: 1px solid #ddd;
        border-radius: 3px;
        margin: 5px;
        position: relative;
    }
    .image{
        background: #CCCCCC;
        height: 250px;
        margin: 0 5px 0 5px;
    }
    .product_name{
        text-align: center;
        cursor: pointer;
    }
    .date{
        text-align: right;
        background: #d4a507;
        padding: 2px;
        position: absolute;
        right: 0;
        top:0
    }
    .price {
        text-align: center;
        font-weight: bold;
    }
    .stock{
        text-align: center;
    }


</style>


<body>

<div class="header">
    <? if($pages):?>
    <ul class="clearfix">
        <? foreach ($pages as $menu) {
            if($menu->visible) {
                echo "<li class='menu_link'><a href=".$menu->url.">$menu->name</a></li>";
            } else { // этого быть не должно
                echo "<li class='menu_link'><a class='red' href=".$menu->url.">$menu->name</a></li>";
            }
        }
        ?>
    </ul>
    <? endif ?>

</div>

<div class="sidebar">
    <div class="inner">
        <h2 class="h2_title">Каталог товаров</h2>
    </div>
</div>
<div class="container">
    <div class="inner">
        <? if($products) :?>
            <ul class="clearfix">
                <? foreach ($products as $product) :?>
                    <? if($product->visible):?>
                    <li class="product_item">
                        <span class="date"><? echo date('m.d.y',strtotime($product->created)) ?></span>
                        <!--? foreach ($product->images as $img) :?--> 
                        <div class="image"><!--? echo "<img src='{$img->filename}'>" ?--></div>
                        <!--div class="image"--><!--? echo "<img src='{$img->filename}'>" ?></div-->
                        <!--? endforeach; ?-->
                        <div class="product_name">
                            <a href="<? echo $product->url ?>"><? echo $product->name ?></a>
                        </div>
                        
                        <div class="price">
						Цена: 
                        <select name="drop_down">
                        	
                        <? foreach ($product->variants as $variant) :?>
                          
						<option><? echo $variant->price ?> UAH</option><? endforeach; ?>
						</select>
						</div>
						<div class="stock">
                        Товара на складе: <select name="drop_down">
                         <? foreach ($product->variants as $variant) :?>
                          
						<option><? echo $variant->stock ?> шт</option><? endforeach; ?>
						
		                </select>
                       </div>
                </li>
                    <? endif; ?>
                <? endforeach; ?>
            </ul>
        <? endif; ?>
    </div>
</div>

 <!--? echo "<img src='{$img->filename}'>" ?-->;
</body>
</html>


////////////////////////////////////////////////////////////////////////



       
