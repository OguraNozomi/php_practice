<?php

$name ="Ogura";

if($name == "Ogura"){
    echo "私は".$name ."です";
    echo "\n";
}
else{
     echo $name ."ではありません";
     echo "\n";
}

//1から10000の合計値
$total=0;

for($i=1;$i<=10000;$i++){
    $total +=$i;
}

echo $total;
echo "\n";

//$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください

$fruits = array("apple","orange","grape","greenapple","pineapple");

foreach($fruits as $fruits_name){
    echo $fruits_name;
    echo "\n";
}


//５の倍数表示
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}

