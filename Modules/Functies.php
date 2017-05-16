<?php


function weekDatum()
{
	
}


function weekToday()
{
	date_default_timezone_set('Europe/Amsterdam');

	$week = date('W');
	echo $week;
}


?>