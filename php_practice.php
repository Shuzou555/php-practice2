<?php
		$var = 100;
  while ($var >0 && $var<= 100) {
    echo $var . '<br>';
    $var = $var -1;
  }

  $num = 100;
 	for ($i=100; $i >0 && $i <= $num; $i--) { 
 			echo $i . '<br>';
 	}


  for ($i = 1; $i <= 9; $i++) {
    if ($i%3 == 0 ){
      echo ("$i ");
    }  else{
      echo($i);
    }   
	}

	echo '<br>';

   for ($n = 1; $n <= 100; $n++) {
    if (($n%3 == 0) && ($n%5 == 0)){
      echo ('FizzBuzz');
      echo '<br>';
    }   
    else if($n%3 == 0){
         echo('Fizz');
         echo '<br>';
    }
    else if($n%5 == 0){
         echo('Buzz');
         echo '<br>';
    }else{
      echo($n);
      echo '<br>';
    }   
  }


 
  


  echo '<br>';

  $num = 100;
  for($i = 0; $i <= $num; $i++){
      if($i%10==0){
        echo($i);
        echo "<br>";
      }
  else{
   
    echo(' ');

  }

  //問題５
  if ($i%10 == 0) {
    echo ' ' . $i . '<br>';
    }
    else{
      echo ' ' . $i;
    }
  }
 
$alpha = array('E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C');

  echo '<hr>';
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