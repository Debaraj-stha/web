<?php 
$arr=['watermelon','apple', 'orange', 'banana', 'pineapple', 'mango'];
foreach($arr as $key => $value){
    echo "key is ".$key." and value is ".$value."zA<br/>";
}
echo "before sorting";
print_r($arr);
sort($arr); //sort the array in ascending order
echo"<br/>";
echo "after sorting<br/>";
print_r($arr);
$arrayToString=implode(",",$arr);//convert the array to string separated by given delimiter
echo "arrayToString<br/>";
echo $arrayToString;
$arr2=[1,5,7,2,9,0];
$string="hello,world,whatsup";
$arrayFromString=explode(",",$string);//make an array from string separated from delimiter
print_r($string);

?>