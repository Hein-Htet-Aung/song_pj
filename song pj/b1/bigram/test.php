<?php 
function array_fill1($count,$arr1){

$arr2 = array_fill(0,$count, 0);
//print_r($arr2);

for ($j=0; $j <countount($arr1); $j++) {
   $a = $arr1[$j];
   $arr2[$a] = 1;

	
}
return $arr2;
}
echo "<pre>";
//print_r($arr2);
$aa1 =[0,3];

$aa = array_fill1(4,$aa1);
print_r($aa);



// $a=0;

// for ($i=0; $i < 7 ; $i++) { 

// 	$ab = $arr1[$i];
// 	if ($ab == $i) {
// 		$arr1[$i] = 1;
// 	}elseif ($ab != $arr1[$i]) {

// 		for ($j=$i; $j < 7 ; $j++) {

// 			$b = $arr1[$j];
// 		}
// 	}
// }


?>