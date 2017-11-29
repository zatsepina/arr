<?php

$date= new DateTime;
$day2Week= $date->format ('D');
$m=$date->format ('m');
$m1=$m+1;
$y=$date->format ('Y');
$date -> setDate($y,$m,1);


$daysWeek = require ('date2.php');
$days2Week = [
	'Mon'=> 'До пятницы осталось 4 дня',
	'Tue'=>'До пятницы осталось 3 дня',
	'Wed'=>'До пятницы осталось 2 дня',
	'Thu'=>'До пятницы остался 1 день',
	'Fri'=>'Сегодня пятница',
	'Sat'=>'До пятницы осталось 6 дней',
	'Sun'=>'До пятницы осталось 5 дней'
	];
	
$dayWeek= $date->format ('D');
$date -> setDate($y,$m1,1);	
$date->	sub(new DateInterval('P1D'));
$day1Week= $date->format ('D');


	echo "<p>Первый день недели в текущем месяце - $daysWeek[$dayWeek].</p>
	<p>Последний день недели в текущем месяце - $daysWeek[$day1Week].</p>
	<p> $days2Week[$day2Week].";
	


?>