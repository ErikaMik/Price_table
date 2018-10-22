<?php

function getSH($cp) {
	if ($cp > 40) {
		return 0;
	} else {
		return 10;
		} 
}

function getMG($cp) {
	if ($cp < 100) {
		return ($cp * 0.3);
	} else return ($cp * 0.2);
}

function getVAT($cp) {
	return ($cp + getSH($cp) + getMG($cp)) * 0.21;
}

function getRetail($cp) {
	return ($cp + getSH($cp) + getMG($cp) + getVAT($cp));
}

// $t_from = 0;
// $t_to = 40;

// // function getFeel($t) {
// // 	if ($t > 30) {
// // 		return "karšta";
// // 	} else if ($t > 15) {
// // 		return "šilta";
// // 	} else if ($t >= 5 && $t <= 14) {
// // 		return "vėsu";
// // 	}
// // }


// $temperatures = [];
// for ($temp=$t_from; $temp < $t_to; $temp++) { 
// 	$temperatures[] = [
// 		'value' => $temp,
// 		'feel' => getFeel($temp),
// 		'style' => (getFeel($temp) == "Karšta") ? "bg-danger" : "bg-success" 
// 	];
// }