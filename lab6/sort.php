<?php
echo "<h1>sorting</h1>";
$names = ['ramesh','shubham','sagun','alisha','bibek'];
sort($names);
foreach ($names as $name) {
	echo $name.'<br>';
}
echo "<h1>rsorting</h1>";
rsort($names);
foreach ($names as $name) {
	echo $name.'<br>';
}
echo "<h1>asorting</h1>";
$values = array("sagun" => "21","shubham" => "20","priya" => "18");
asort($values);
foreach ($values as $name => $age) {
    echo $name.",".$age."<br>";
}
echo "<h1>ksorting</h1>";
ksort($values);
foreach ($values as $name => $age) {
    echo $name.",".$age."<br>";

}
echo "<h1>arsorting</h1>";
arsort($values);
foreach ($values as $key => $value) {
	echo $key.",".$value."<br>";
}
echo "<h1>krsorting</h1>";
krsort($values);
foreach ($values as $key => $value) {
		echo $key.",".$value."<br>";

}
?>