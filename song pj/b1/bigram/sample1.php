<?php
include_once "function.php";
$conn = mysqli_connect('localhost','root','','bb');
$db_name='';
$f=0;
if (isset($_GET['submit'])) {
	$input = $_GET['name'];
	$count = strlen($input);
	for ($i=0; $i <$count; $i++) { 

		$a = substr($input,$i,2);
		$arr1[$i]=$a;
	}
   //print_r($arr);
   $query = "SELECT * FROM song";
   $res = mysqli_query($conn,$query);
   echo $count1 = mysqli_num_rows($res);
   while ($row = mysqli_fetch_assoc($res)) {
      $e = $row['name'];
      echo $e."<br>";

      $d =strlen($e); 
    	for ($c=0; $c <$d ; $c++) { 
    		//echo $e;
    		$h= substr($e,$c,2);
    		echo $h;

   		  $k[]= $h;

   		   
       
    }
   
    $arr[]=$k;

   // unset($k);
    
    
    
}
echo "<pre>";
print_r(array_unique($arr[3]));
die();

echo "<pre>";
    print_r($arr);
}
$arr7[0]=$arr[0];

$arr7=[];
$arr8=[];
for ($i=0; $i <$count1-1 ; $i++) { 
	array_push($arr7,array_merge($arr[$i],$arr[$i+1]));
	echo "result";
	if($i >= 1){
		array_push($arr7,array_merge($arr7[$i-1],$arr[$i]));
		print_r($arr7);
		break;
	}
	// array_push($arr8,array_unique($arr7));

// for ($l=0; $l < $count1-1; $l++) 
// {
// if($i >= 1){

// 	$arr5[]=same($arr8[$i],$arr[$i+1]);
// }
// }
}
// print_r($arr5);
// print_r($arr7);
//print_r($arr7);


// $arr6[0]=$arr5[0];

// //for ($p=0; $p <count($arr5) ; $p++) {
// $arr9[0] =$arr5[0];

// 	for ($o=0; $o <count($arr5)-1 ; $o++) {
   
//    $arr6[$o]=array_merge($arr5[$o],$arr5[$o+1]);
//    $arr9=array_merge($arr6[$o],$arr9[$o]);
   

// $arr10 = array_unique($arr9[$o]);

// }
// for ($r=0; $r <count($arr7)-1 ; $r++) 
// { 
// 	$arr8[]=same($arr7[$r],$arr7[$r+1]);
// }

// +
// print_r($arr10);
	

?>
<form method="get">
 	<input type="text" name="name">
 	<input type="submit" name="submit" value="search">
	
 </form>
