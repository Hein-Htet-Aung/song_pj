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
   print_r($arr1);
   $query = "SELECT * FROM song";
   $res = mysqli_query($conn,$query);
   echo $count1 = mysqli_num_rows($res);
   while ($row = mysqli_fetch_assoc($res)) {
      $e = $row['name'];
      echo strlen($e)."<br>";
      $arr3[]=$e;

       $d =strlen($e); 
    	for ($c=0; $c <$d ; $c++) { 
    		//echo $e;
    		$h= substr($e,$c,2);
    		echo $h;

   		  $k[]= $h;

   		   
       
    }
   
    $arr[]=$k;

   unset($k);
    
    
    
}
print_r($arr3);

echo "<pre>";
print_r($arr);
for ($j=0; $j < $count1; $j++) { 
	$similar[]=array_intersect($arr1, $arr[$j]);
	$index[$j]=similarity($arr1,$arr[$j]);
	
}

print_r($similar);
print_r($index);
$max = max($index);
echo "Max of Similarity= ".$max.'<br>';
for ($k=0; $k < count($index); $k++) 
{ 
	if ($max == $index[$k])
	 {
		$final[] =$k ;
	}
}
echo "Result array".'<br>';
for ($l=0; $l <count($final); $l++)
 { 
	$a=$final[$l];
	$arr2 = $arr3[$a];
}
print_r($arr2);
}
?>

<form method="get">
 	<input type="text" name="name">
 	<input type="submit" name="submit" value="search">
	
 </form>
