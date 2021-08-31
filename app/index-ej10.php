<?php
	$lapicera01=array('color'=>'azul','trazo'=>'normal','precio'=>20);
	$lapicera02=array('color'=>'rojo','trazo'=>'fino','precio'=>18);
	$lapicera03=array('color'=>'verde','trazo'=>'grueso','precio'=>16);

	$asocLapiceras=array('lap01'=>$lapicera01,'lap02'=>$lapicera02,'lap03'=>$lapicera03);
	$indexLapiceras=array($lapicera01,$lapicera02,$lapicera03);

	//Array asociativo
	echo "ARRAY ASOCIATIVO<br>";

	foreach ($asocLapiceras as $clave => $lapicera)
		foreach ($lapicera as $claveLap => $valorLapicera)
			echo $claveLap . " " . $valorLapicera . "<br>";

	//Array indexado
		echo "ARRAY INDEXADO<br>";
	foreach ($indexLapiceras as $lapicera)
		foreach ($lapicera as $claveLap => $valorLapicera)
			echo $claveLap . " " . $valorLapicera . "<br>";
?>