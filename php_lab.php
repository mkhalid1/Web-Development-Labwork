<!-- task1 -->
<?php 
	for ($i = 100; $i< 300; $i++){
		if($i%4==0) 
			echo "$i,";
	}
 ?>

 <!-- task2 -->
 <!DOCTYPE html>  
<html>   
 <head>   
  <title>Task-3</title>  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
  </head>  
  <body>  

  <?php  
		$month_temp = array(78,60,62,68,71, 68, 73, 85, 66,64, 76,63,81,
							76,73,68, 72, 73, 75, 65, 74, 63, 67, 65, 64,
							68, 73,75,79,73);  

		//calculating the average temperature 
		for ($i=0; $i<sizeof($month_temp);$i++){
			static $sum_temp=0;
 			$sum_temp+=$month_temp[$i];
 		}
 		$avg_temp = $sum_temp/sizeof($month_temp);
 		echo "Average Temperature is : "."$avg_temp"."<br>";

 		sort($month_temp);
 		echo "List of seven lowest temperatures : ";
 		for($i=0;$i<7;$i++){
 			echo "$month_temp[$i]".",";
 		}
 		echo "<br>";
		// rsort($month_temp);
		echo "List of seven highest temperatures : ";
		$new_list = array();
		for($i=sizeof($month_temp)-1;$i>sizeof($month_temp)-8;$i--){
			static $j=0;
			$new_list[$j]=$month_temp[$i];
			$j++;
 		}
 		sort($new_list);
 		for ($i=0; $i<sizeof($new_list);$i++){
 			echo "$new_list[$i]".",";
 		}
    ?>  
  </body>
  
</html>


<!-- task 3 -->
<!DOCTYPE html>  
<html>  
    <head>   
	  <title>Task-3</title>  
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
	  </head>  
	<body>  
    <?php  
		//your code here 
		echo "<table border=1 cellspacing =0 cellpadding=0 width=350px>";
		for ($j=1;$j<7;$j++){
			echo "<tr>";
			for ($i=1;$i<6;$i++){
				echo "<td>";
				$result = $j*$i;
				echo "$j * $i = $result";
				echo "</td>";
		}
			echo "</tr>";
		}
		echo "</table>"
		
    ?>  
  </body>  
</html>  
	
<!-- task 4 -->
<!DOCTYPE html>  
<html>   
 <head>   
  <title>Task-3</title>  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
  </head>  
  <body>   
  <h3>Chess Board - PHP Nested Loops</h3>  
	<!-- cell 270px wide (8 columns x 60px) -->  
      <?php  
      
		//your code here 
        echo "<table width= 300px height=300px border=1 cellspacing=0 cellpadding=0>";
        for ($i=0;$i<8;$i++){
          echo "<tr>";
          for ($j=0;$j<8;$j++){
              if ($i%2==0) {
                if ($j%2==0){
                  echo "<td width=270px bgcolor='black' ></td>";
                }
                else{
                  echo "<td width =270px bgcolor='white'></td>";
              }
                  
                }
              else{
                if ($j%2==0){
                  echo "<td width =270px bgcolor='white'></td>";
                }
                else{
                  echo "<td width=270px bgcolor='black' ></td>";
                    }
               }
              }
              echo "</tr>";
          }
        echo "</table>";
      ?>  
  </table>  
  </body>  
  </html> 
  