<?php
require_once("./Employee.php");
require_once("./Company.php");

$gces = new Company;
$gces->name = "Gandaki Collage of Engineering and Science";
$gces->address = "Lamachaur-19 Pokhara";

array_push($gces->employees,new Employee("Ramesh","Ktm"));
array_push($gces->employees,new Employee("Hari","Baglung"));
array_push($gces->employees,new Employee("Nikisha","Hatiya"));
array_push($gces->employees,new Employee("Prabina","Pokhara"));

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
	<table border="5px" >
		<tr>
			<th>Name</th>
			<th>Place</th>
		</tr>
		<tr>
			<?php
			foreach($gces->employees as $employee){
				?>

			<tr>
				<td><?=$employee->name?></td>
				<td><?=$employee->address?></td>
			</tr>

			<?php }?>
			
		</tr>

	</table>

</body>
</html>