<?php

$MAIN =<<< HTMLMAIN
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>cyberforum.ru-Alone</title>
</head>
<body>
	<h1>Расчёт прямоугольника</h1>
	<form action="index.php" method="POST">
		<p>
			<input type="text" name="var1"> : A<br />
			<input type="text" name="var2"> : B
		</p>
		<button name="GoScript">Готово</button>		
	</form>
</body>
</html>
HTMLMAIN;

echo $MAIN;

$data = $_POST;
if(isset($data['GoScript'])){ // если кнопка нажата, то выполняем скрипт

	// Массив под данные из формы
	$var_mass = [
		$data['var1'],
		$data['var2']
	];

	// Вызываем функцию нахождения периметра, площади и длины диагонали
	echo 'Периметр: '.P($var_mass[0], $var_mass[1]);
	echo "<br />";
	echo 'Площадь: '.S($var_mass[0], $var_mass[1]);
	echo "<br />";
	echo 'Диагональ: '.D($var_mass[0], $var_mass[1]);	

}

/*
 * Функция нахождение периметра прямоугольника: P = 2(a + b)
 */
function P($value1, $value2)
{
	return 2*($value1+$value2);
}

/*
 * Функция нахождение площади прямоугольника: S = a*b
 */
function S($value1, $value2)
{
	return $value1*$value2;
}

/*
 * Функция нахождение длины диагонали прямоугольника: D = a^2+b^2
 */
function D($value1, $value2)
{
	$a = ($value1*$value1);
	$b = ($value2*$value2);

	$result = sqrt($a+$b); // sqrt — Квадратный корень

	return number_format($result, 2); // number_format — Форматирует число с разделением групп
}