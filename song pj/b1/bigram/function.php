<?php

function same($arr1,$arr2)
{
	$count1 = count($arr1);
	$count2 = count($arr2);
	$array=$arr2;
	for ($i=0; $i <$count1; $i++) { 
		$a = $arr1[$i];
        for ($j=0; $j <$count2 ; $j++) { 
        	if($a== $arr2[$j]){
        	 	$array[$j]=null;
        	 }
        	
        }
		
	}

	for($k=0;$k<=count($array)-1;$k++){
		if($array[$k] !== null){
			$arr3[] = $array[$k]; 
		}
	}
	return $arr3;

}

function similarity($arr1,$arr2)
{
     $count1 = count($arr1);
     $count2 = count($arr2);
     $arr3 = array_intersect($arr1,$arr2);
     $similar = 2*count($arr3)/count($arr1)+count($arr2);
     return $similar;

}
function array_fill1($count,$arr1){

$arr2 = array_fill(0,$count, 0);
//print_r($arr2);

for ($j=0; $j <count($arr1); $j++) {
   $a = $arr1[$j];
   $arr2[$a] = 1;

	
}
return $arr2;
}
?>