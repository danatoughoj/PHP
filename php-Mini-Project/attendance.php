<html>
<?php 
	include 'header.php';
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
?>
<body>
	<h1 class="text-center mb-5">Attendace Report</h1>
	<div class="container row m-auto">
		<table class="table table-hover">
			<thead> 
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th scope='col'>Date</th>
					<th scope='col'>Check in</th>
					<th scope='col'>Check out</th>							
				</tr> 
			</thead>
		  	<tbody>
		    	<?php
		    	foreach($data as $key => $value){
		    		foreach($value["attendance"] as $k => $v){
			    		echo "<tr class='".calculate_time_status($v["check_in"],$v["check_out"])."'>
			    				<td>". $value["id"]." </td>
			    				<td>". $value["name"]." </td>
			    				<td>".get_date($v["check_in"]) ."</td>
			    				<td>".get_time($v["check_in"]) ."</td>
			    				<td>".get_time($v["check_out"]) ."</td>
			    			</tr>
			    		";
					} 
		    	}
				?>
		  	</tbody>
		</table>
	</div>

</body>
</html>