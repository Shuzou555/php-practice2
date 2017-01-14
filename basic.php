<?php 
echo 'Hello,' . 'world'. '<br>';

$colorName = 'red';
  echo "frame is ${colorName} color".'<br>';

 echo 5 * 3 . '<br>';
 echo 8 / 2 . '<br>';
 echo 3 + 6 . '<br>';
 echo 5 - 2 . '<br>';
 echo 7 % 3 . '<br>';

 $var = '変数の値を出力します';
  echo $var .'<br>';

 $var = 'この文字列と';
  $var .= 'この文字列を';
  $var .= '繋げます';
  echo $var.'<br>';;

  $var = 5;
  echo $var . '<br>';
  $var = '文字に上書き';
  echo $var.'<br>';

  $var = 11;
  if ($var > 10) {
    echo '10より大きい数値です'.'<br>';
  }

  $var = 23;
  if ($var >= 20 && $var < 30) {
    echo '20代です'.'<br>';
  }

  $var = 32;
  if ($var >= 20 && $var < 30) {
    echo '20代です'.'<br>';
  } else {
    echo '20代ではありません'.'<br>';
  }
echo $var ."<br>"."<br>";

  $var = 19;
  if ($var >= 20 && $var < 30) {
    echo '20代です'.'<br>';
  } elseif($var >= 30 && $var < 40) {
    echo '30代です'.'<br>';
  } else {
    echo '20代または30代ではありません'.'<br>';
  }
echo "<br>"."<br>";


  $var = 'male';

  switch ($var) {
    case 'male':
      // 処理
      echo '男性です';
      break;
    case 'female':
      // 処理
      echo '女性です';
      break;
    default:
      // 処理
      echo '？';
      break;
  }
  echo "<br>"."<br>";



  $var = 0;
  while ($var < 10) {
    echo $var . '<br>';
    $var++;
  }

  echo $var ."<br>"."<br>";

  for ($i = 0; $i < 20; $i++) {
    echo $i . '<br>';
  }

  echo  "<br>"."<br>";

  $fruits = array('りんご', 'みかん', 'ばなな','スイカ','メロン');
  foreach ($fruits as $fruit) {
    echo $fruit . '<br>';
  }

   echo  "<br>"."<br>";

  $fruits = array('apple'=>'りんご', 'orange'=>'みかん', 'banana'=>'ばなな','watermelon'=>'すいか','melon'=>'メロン');
  foreach ($fruits as $key => $value) {
    echo $key . ' = ' . $value . '<br>';
  }

echo  "<br>"."<br>";
  for ($i = 100; $i > 0; $i--) {
    echo $i . '<br>';
  }
echo  "<br>"."<br>";

  for ($i = 1; $i < 10; $i++) {
  	if ($i%3 == 0){
  		echo $i.',' . '<br>';
  	}else{
    echo $i;
	}
  }
 echo  "<br>"."<br>";

 for ($i = 1; $i <= 100; $i++) {
  	if (($i%3 == 0) && ($i%5 == 0)){
  		echo 'FizzBuzz' . '<br>';
  	}elseif ($i%5 == 0) {
  		echo 'Buzz' . '<br>';
  	}elseif ($i%3 == 0){
  		echo 'Fizz' . '<br>';
  	}else{
    echo $i. '<br>';
	}
  }
 echo  "<br>"."<br>";

 for ($i = 1; $i <= 100; $i++) {
  	if ($i%10 == 0){
  		echo $i.' '.'<br>';
  	}else{
    echo $i.' ';
	}
  }
 echo  "<br>"."<br>";

 $alpha = array('E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C');
  $cns_word = 'A';
  $cnt = 0;

  foreach ($alpha as $array )
   {
    if ($array == $cns_word) {
      $cnt++;
      }
    }
    echo 'Aの個数';
    echo $cnt;

?>