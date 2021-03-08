<?php 
	include './data/data.php';
	include 'header.php';
	$completed=0;
	$uncompleted=0;
	foreach ($data as $key => $value) {
		foreach ($value["projects"] as $k => $v){
			if($v["is_compleated"] == "yes"){
				$completed++;
			}
			elseif ($v["is_compleated"] == "no") {
				$uncompleted++;
			}
		}
	}
	
?>
<html>
<body>
	<h1 class="text-center">Dashboard</h1>
	<hr style="width: 70%" />
	<div class="container row m-auto">
		<div class="dashboard_circles mb-3">
		<div class="dashboard_circle"><span class="number"><?php echo count($data) ?> </span> <span>Trainees</span></div>
		<div class="dashboard_circle"><span class="number"><?php echo $completed ?></span> <span>Completed Projects</span></div>
		<div class="dashboard_circle"><span class="number"><?php echo $uncompleted ?></span> <span>Uncompleted Projects</span></div>
		</div>
		<table class="table table-hover">
			<thead> 
				<tr>
					<th scope='col'>ID</th>
					<th scope='col'>Name</th>
					<th scope='col'>Birthday</th>
					<th scope='col'>GitHub</th>
					<th scope='col'>LinkedIn</th>							
				</tr> 
			</thead>
		  	<tbody>
			<?php
			foreach($data as $key => $value){
				echo "<tr>";				
				foreach($value as $k => $v){
					// echo gettype($v)."<br>";
					if($k == "linkedin" || $k == "github account"){
						echo '<td> <a href="'.$v.'" class="btn btn-primary mt-3">Visit</a> </td>';
					}
					elseif(gettype($v) == "array" || $k == "image"){
						continue;
					}
					else{
						echo"
		    				<td>". $v." </td>
		    			";
					}
				}
				echo "</tr>";
			}
			?>
			</tbody>
		</table>
	</div>


</body>
</html>