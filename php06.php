<?php

//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function double($num){
    $result=0;
    
    $result=$num*2;
    
    return $result;
}


echo double(100);
echo "\n";

//2
function add($a, $b){
 //処理したい内容
  $result=0;
  
  $result =$a+$b;

  return $result;
 }
 
 
echo add(1,2);
echo "\n";

 
 //3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) 
 //を渡すとその要素をすべてかけた結果を返す関数を作成してください
 
 function product($arr){
     
     $result = $arr[0];
     
     for($i=1;$i<count($arr);$i++){
         $result *= $arr[$i];
              }
              
    return $result;
 }
 
$arraynum = array(1, 3, 5 ,7, 9);

echo product($arraynum);
echo "\n";



//4
function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    // ここで配列の中の1番大きい値を探したい
    if($max_number < $a){
        $max_number=$a;
    }
  }

  return $max_number;
}

echo max_array($arraynum);
echo "\n";

//5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください

//strip_tags
//strip_tags($str, $allowed_tags = null)
// タグを取り除いた文字列 = strip_tags(タグを取り除きたい文字列, 出力を許可するタグ（取り除かないタグ）)

$string ="<p>abcde</p>";
//echo $string;
echo strip_tags($string);
echo "\n";

//array_push
//array_push(追加先の配列,追加する値1,追加する値2,…)


array_push($arraynum,"aaa");

print_r($arraynum);

//array_merge
//配列を結合する
//$array = array_merge($array1, $array2, $array3);

$array1 = ["bbb","ccc"];
$array3 = array_merge($arraynum,$array1);

print_r($array3);

//time, mktime
//$timestamp = mktime(9, 12, 30, 6, 17);
  //--> 2006/06/17 9:12:30のタイプスタンプ

print_r(time());
echo "\n";
$timestamp = mktime(9, 12, 30, 12, 18,2023);
print_r($timestamp);
echo "\n";

//date
//date('Y年m月d日');  --> 2006年05月01日

var_dump(date('Y年m月d日h時i分s秒', $timestamp));
echo "\n";
