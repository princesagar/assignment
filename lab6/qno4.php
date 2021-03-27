<?php
echo "Normal array<br>";
$value = array("shubham","abinash","ragina");
echo $value[0].",".$value[1].",".$value[2]."<br>";

echo "<br>Array pop<br>";
array_pop($value);
print_r($value);
echo "<br>";

echo "<br>array push<br>";
array_push($value,"anita","krishna");
foreach ($value as $key) {
	echo $key."<br>";
}
echo "<br>array merge<br>";
$car=["bmw","toyta"];
$model=[12,57];
print_r(array_merge($car,$model));
echo "<br>array sum<br>";
$n1=array(12,8,10);
$n2=array_sum($n1);
echo $n2;
echo "<br>array slice<br>";

$name=array("ramesh","sagun","ram","tim","hari");
print_r(array_slice($name, 3));

echo "<h1>string function</h1>";
echo "the substr of the string is:".substr("nikisha gautam",3);
echo "<br>";
echo "the length of the string is:".strlen("iamahero");
echo "<br>";
echo "the replace form of the string is:".str_replace
("love","am a bad ","i love boy");
echo "<br>";
$name="hancy boy shubham";
echo trim($name,"hanham");
echo "<br>";
echo strpos("hello how are you,hello how are you there","you");
echo "<br>";
echo strtolower("HANCY BOY SHUBHAM GAUTAM");
echo "<br>";
echo strtoupper("how are you darling");
?>