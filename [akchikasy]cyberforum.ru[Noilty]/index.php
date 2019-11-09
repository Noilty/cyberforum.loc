<!DOCTYPE html>
<html>
<head>
	<title>[akchikasy]cyberforum.ru[Noilty]</title>
</head>
<body>
	<style type="text/css">
		.One{
			margin: 0px 0px 0px 0px;
		}
		.Two{
			margin: 0px 0px 0px 10px;
		}
		.Tree{
			margin: 0px 0px 0px 20px;
		}
	</style>
</body>
</html>

<?php
$var_mass = [
	'Laptop' => [
		'Macbook' => [
			'Apple',
		],
	],
];

echo "<ol style='margin: 0;'>";
$k=1;
for ($i=0; $i < count($var_mass, COUNT_RECURSIVE)+1; $i++) { 
	foreach ($var_mass as $key_var_mass => $value_var_mass) {
		$k++;
		echo "<li> <my class='One'>$key_var_mass</my></li>";
		if ($k <= 4) {
			foreach ($value_var_mass as $key_value_var_mass=> $value2) {
				echo "<li><my class='Two'>$key_value_var_mass</my></li>";		
				foreach ($value2 as $value3) {
					echo "<li><my class='Tree'>$value3</my></li>";
				}
			}
		}
	}
}
echo "</ol>";