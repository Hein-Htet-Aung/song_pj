<?php
$conn = mysqli_connect('localhost','root','','bb');
$db_name='';
if (isset($_GET['submit'])) {
	$input = $_GET['name'];
	$count = strlen($input);
	for ($i=0; $i <$count; $i++) { 
		$a = substr($input,$i,2);
		$arr[$i]=$a;
	}
   print_r($arr);
   $query = "SELECT * FROM song";
   $res = mysqli_query($conn,$query);
   while ($row = mysqli_fetch_assoc($res)) {
      $k[] = $row['name'];
   	$db_name.= $row['name'];
   			
   	}
   }
   echo "$db_name";
   $c = strlen($db_name);
   	// print_r($dbarr);
   
   for ($e=0; $e <$c ; $e++) {
   
   $f = substr($db_name,$e,2);
		$sdbarr[$e]=$f;

   }
    
    sort($sdbarr);
   $arrr[] = array_unique($sdbarr);
    echo "<pre>";
    print_r($arrr);
    
    
    print_r($k);
    $f = sizeof($k);
    $e = sizeof($arrr);
     sizeof($k);
    echo array_search('Thin@Sut#W',$k);

     for ($n=0; $n <$f ; $n++) { 
      $dblen[$n] = strlen($k[$n]);     
      for ($l=0; $l <$c ; $l++) { 
       $ddb[$l] = substr($db_name,$l,2);
        
      }
    }

      print_r($dblen)."<br>";
      print_r($ddb)."<br>";
      

      for ($d=0; $d <count($ddb) ; $d++) 
      { 
        for ($g=0; $g <count($arrr); $g++) {
           if ($arrr[$d] == $ddb[$g]) {
            echo $arrr[$d];
            // $h=0;
            $key = $sdbarr[$d];
            echo $key."<br>";
            $same=array_search($sdbarr[$d],$ddb);
            // if ($same < strlen($k[$d])) {
              $index[]=$same;
              
            }
            
               
              
            } 
         
        }
      echo "<br>";
    print_r($index);

	

    

?>
<form method="get">
	<input type="text" name="name">
	<input type="submit" name="submit" value="search">
	
</form>