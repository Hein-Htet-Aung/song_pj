<?php

$conn = mysqli_connect('localhost','root','','songs');

function array_fill1($count,$arr1){

$arr2 = array_fill(0,$count, 0);
//print_r($arr2);

for ($j=0; $j <count($arr1); $j++) {
   $a = $arr1[$j];
   $arr2[$a] = 1;

  
}
return $arr2;   
}

function bigram($a)
{
   $gh = "$a";
  global $conn;
  $total_db_name='';
  if (isset($_POST['submit'])) {
    
	$input = $_POST['search'];
	$count = strlen($input);
	for ($i=0; $i <$count; $i++) { 

		$a = substr($input,$i,2);
		$arr1[$i]=$a;
	}
  // print_r($arr1);
   $query = "SELECT * FROM music";
   $res = mysqli_query($conn,$query);
    $count1 = mysqli_num_rows($res);
   while ($row = mysqli_fetch_assoc($res)) {
      $e = strtolower($row["$gh"]);
      $full_name[] = $row["$gh"]; 
       $total_db_name.=strtolower($row["$gh"]); 
      strlen($e)."<br>";
      $arr3[]=$e;


       $d =strlen($e); 
    	for ($c=0; $c <$d ; $c++) { 
    		//echo $e;
    		$h= substr($e,$c,2);
    		

   		  $k[]= $h;
   		 

   		   
       
    }
   
    $arr[]=$k;

   unset($k);
    
    
    
}
// echo "<pre>";
//print_r($arr);
//print_r($full_name);
//echo $total_db_name;

$total_dbstrlen = strlen($total_db_name);
for ($i=0; $i <$total_dbstrlen-1 ; $i++)
 { 
 	$unique_db_array[$i] = substr($total_db_name,$i,2);
 } 
// echo "<pre>";

asort($unique_db_array);

$unique_db_array = array_unique($unique_db_array);
//print_r($unique_db_array);
$array_intersect = array_intersect($unique_db_array,$arr1);
//print_r($array_intersect);
$h = count($array_intersect);
for ($j=0; $j <$h; $j++)
 { 
	$manual_index_intersect[$j] = array_pop($array_intersect);
}
//print_r($manual_index_intersect);
$a = $manual_index_intersect[0];



for ($i=0; $i <$h; $i++)
 { 
 	$a=-1;
	 $l = $manual_index_intersect[$i];
	for ($j=0; $j <count($arr) ; $j++) {

		$a = array_search($l, $arr[$j]);
		if ($a>-1)
		{

          $m[$i][]=$j;
		 } 
		}
	}
	//print_r($m);

  

  for ($i=0; $i < count($m) ; $i++) { 
    $for_count[$i] = array_fill1($count1,$m[$i]);
    
  }
  
  $final_array = array_fill(0,$count1, 0);
 

for ($j=0; $j <$count1 ; $j++)
{ 
  for ($i=0; $i <count($for_count); $i++) { 
          $final_array[$j]+=$for_count[$i][$j];
  }
               
}
//echo "The final Array<br>";
//print_r($final_array);
 $max1 = max($final_array);
 for ($i=0; $i <count($final_array) ; $i++) 
 { 
    if ($max1 == $final_array[$i]) {
      $for_fullstring_index[] = $i;
     
    }
 }

 //print_r($for_fullstring_index);
 for ($i=0; $i < count($for_fullstring_index); $i++) {
      $l = $for_fullstring_index[$i]; 
      $result_array[$i] = $full_name[$l]; 
 }
 //echo "Result Array<br>";
 return $result_array;




}
            
}


 // $a = bigram();
 // print_r($a);
  # code...

 
 
?>
<!-- <form method="get">
  <input type="text" name="input">
  <input type="submit" name="submit1" value="search">
  
 </form> -->


