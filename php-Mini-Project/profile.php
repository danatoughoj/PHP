<?php 
	$user=$_GET["id"];
	include './data/data.php';
	function get_date($str){
		$seperated_str = explode(" ", $str);
		$date=$seperated_str[0]." ".$seperated_str[1]." ".$seperated_str[2];
		return $date;
	}
	function get_time($str){
		$seperated_str = explode(" ", $str);
		$time=$seperated_str[3];
		return $time;
	}
	function calculate_time_status($checkin,$checkout){
		$check_in=explode(":",get_time($checkin));
		$check_out=explode(":",get_time($checkout));
		$checkin_hours=$check_in[0];
		$checkout_hours=$check_out[0];
		$checkin_minutes=$check_in[1];
		$checkout_minutes=$check_out[1];
		$style=null;
		if($checkout_hours-$checkin_hours == 8){
			if($checkout_minutes >= $checkin_minutes){
				return $style="table-success";
			}
			else{
				return $style="table-danger";
			}
		}
		elseif($checkout_hours-$checkin_hours > 8){
			return $style="table-success";
		}
		else{
			return $style="table-danger";
		}
	}
	function project_status($status){
		if($status == "yes"){
			return $style="table-success";
		}
		else{
			return $style="table-danger";
		}

	}
?>
<html>
	<?php include 'header.php';?>
	<body>
		<div class="container row m-auto">
			<div class="col-sm-5">
				<div> 
					<img class="profile-picture" src="<?php echo $data[$user]["image"]; ?>">
					<h2><?php echo $data[$user]["name"] ?></h2>
					<div class="profile_info">
						<h5><i class="fas fa-birthday-cake"></i><?php echo $data[$user]["birthday"] ?></h5>
						<h5><a><i class="fab fa-github"></i> @<?php echo $data[$user]["name"] ?></a></h5>
						<h5><a><i class="fab fa-linkedin-in"></i> @<?php echo $data[$user]["name"] ?></a></h5>
					</div>
				</div>
			</div>
			<div class="col-sm-7">
				<h4 class="mt-3">Projects</h4>
				<table class="table table-hover">
					<thead> 
						<tr>
							<th scope='col'>Project Name</th>
							<th scope='col'>Completed</th>
						</tr> </thead>
				  <tbody>
				    	<?php 
				    	foreach($data[$user]["projects"] as $key => $value){
				    		echo "<tr class='".project_status($value["is_compleated"])."'>";
							foreach($value as $k => $v){
								echo "<td> $v </td>";
							}
							echo "</tr>";
						} 
						?>
				  </tbody>
				</table>
				<h4 class="mt-5">Attendance</h4>
				<table class="table table-hover">
					<thead> 
						<tr>
							<th scope='col'>Date</th>
							<th scope='col'>Check in</th>
							<th scope='col'>Check out</th>							
						</tr> 
					</thead>
				  	<tbody>
				    	<?php 
				    	foreach($data[$user]["attendance"] as $key => $value){
				    		echo "<tr class='".calculate_time_status($value["check_in"],$value["check_out"])."'>";
								echo "<td>".get_date($value["check_in"]) ."</td>";
								echo "<td>".get_time($value["check_in"]) ."</td>";
								echo "<td>".get_time($value["check_out"]) ."</td>";
							echo "</tr>";
						} 
						?>
				  	</tbody>
				</table>
			</div>
		</div>
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	</body>
</html>