<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		body{
			margin:1rem;
		}
		.form_style{
			width: 40vw;
			margin-left: 20px;
			background-color: #333333;
			border-radius: 10px;
			padding: 1.5rem;
			color: white;
		}
		.btn{
			background-color: #b30086;
			outline: none;
			border: none;
			width: 20%
		}
		.task_item{
			background-color: #b30086;
			border-radius: 10px;
			opacity: 0.4;
			margin-top: 0.5rem;
			padding: 0.5rem;
		}
		.special_text{
			color: #b30086;
			font-weight: bolder;
		}
	</style>

</head>
</html>
<!-- 1- create a form and send email and password , in the action page you will determine if the data
is sent by POST or post
 -->
 <?php echo "Question #1 <br><br>" ?>
 <div class="container form_style">
	 <form method="GET" action="">
	 	<div class="form-group">
		 	Email:<input type="email" name="email" class="form-control">
	 	</div>
	 	<div class="form-group">
	 		Password :<input type="password" name="password" class="form-control">
	 	</div>
	 	<input type="submit" name="login" value="Login" class="btn btn-primary">
	 </form>
 </div>
<?php
		if($_SERVER["REQUEST_METHOD"]== "POST"){
			echo "the data was sent by a post method";
		}
		elseif($_SERVER["REQUEST_METHOD"] == "GET"){
			echo "The data was sent by a get method";
		}
	echo "<br>-----------------------------------------<br>";
?>



<!--  2- make a search engine website that contain URL as input text and button
named (GO) if you click on Go will redirect you to the written URL -->
<?php echo "Question #2 :<br><br>"; ?>
<div class="container form_style">
	<form method="POST" action="">
		<div class="form-group">
			URL:<input type="text" name="URL" class="form-control">
		</div>
		<input type="submit" name="GO" value="GO" class="btn btn-primary">
	</form>
</div>
<?php
	if(isset($_POST["GO"])){
		$url=$_POST["URL"];
		header("Location: $url");
	}
	echo "-----------------------------------------<br>";
?>

<!-- 3- make a Calculator that contain Basic Mathematical operations(+,-,*,/) -->

<?php
echo "Question #3 :<br><br>";
function Calculate($number1,$number2,$operator){
	if($operator == "+"){
		return (int)$number1 + (int)$number2;
	}
	elseif($operator == "-"){
		return (int)$number1 - (int)$number2;
	}
	elseif($operator == "*"){
		return (int)$number1 * (int)$number2;
	}
	elseif ($operator == "/") {
		return (int)$number1 / (int)$number2;
	}
}
?>
<div class="container form_style">	
	<form method="POST" action="">
		<div class="form-group">
			First Number:<input type="number" name="number1" class="form-control">
		</div>
		<div class="form-group">
			Operation:
			<select name="operations" class="form-control">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select>
		</div>
		<div class="form-group">
			Second Number:<input type="number" name="number2" class="form-control">
		</div>
		<input type="submit" name="calculate" value="Calculate" class="btn btn-primary">
		<?php 
			if(isset($_POST['calculate'])){
				$result=Calculate($_POST['number1'],$_POST['number2'],$_POST['operations']);
				echo "<div class='form-group'>Result: <input type='number' name='result' value='$result' class='form-control'></div>";
			}
		?>
	</form>
</div>
<?php 	echo "-----------------------------------------<br>"; ?>



<!-- 4- Create a To Do List Page.-->
<?php echo "Question #4 :<br><br>"; ?>
<div class="container form_style">	
	<form method="post" action="">
		<div class="form-group row">
			<div class="col-9"><input type="text" name="task" id="task" class="form-control" placeholder="Task" required></div>
			<div class="col-3"><input type="submit" name="addTask" value= "Add Task" class="btn btn-primary" style="width: 100%"></div>
		</div>
	    <?php
			session_start();
			if (isset($_POST["addTask"])) {
			    if (isset($_SESSION["tasks"])) {
			        array_push($_SESSION["tasks"],$_POST["task"]);
			        foreach($_SESSION["tasks"] as $task){
				        echo "<div class='task_item'> $task</div>";
				    }
			    }
			    else{
			        $_SESSION["tasks"] = array($_POST["task"]);
			    }
			}
		?>
	</form>
</div>
<?php 	echo "-----------------------------------------<br>"; ?>


<!-- 5- determine the project name, and script name .-->
<?php echo "Question #5 :<br><br>"; ?>
<div class="container form_style">	
	<form method="POST" action="">
	 	<input type="submit" name="get_names" value="Get" class="btn btn-primary">
	 	<?php 	
	if(isset($_POST['get_names'])){
		$project_name = explode('/', $_SERVER['REQUEST_URI'])[2];
		$script_name=basename($_SERVER["SCRIPT_NAME"]);
		echo'
			<div class="form-group">
		 		Project Name:<input type="text" name="project_name" class="form-control" value="'.$project_name.'">
		 	</div>
		 	<div class="form-group">
		 		Script Name :<input type="text" name="script_name" class="form-control" value="'.$script_name.'">
		 	</div>
		 	';
	}
?>
	 </form>
</div>
<?php echo "<br>-----------------------------------------<br>"; ?>


<!-- 6- Determine page requested time.-->
<?php echo "Question #6 :<br><br>";
echo "
		<div class='container form_style'> 
			The page was requested at: 
			<span class='special_text'>".date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME'])."</span> 
		</div>";
echo "<br>-----------------------------------------<br>"; ?>


<!-- 7- make a website counter on refresh ?-->
<?php echo "Question #7 :<br><br>";
	// session_start();
	if (!isset($_SESSION['count'])) {
	 	$_SESSION['count'] = 0;
	} else {
	 	$_SESSION['count']++;
	}
	echo "
		<div class='container form_style'> 
			The number of times the page has been refreshed is: 
			<span class='special_text'>".$_SESSION['count']."</span> 
		</div>";
	echo "<br>-----------------------------------------<br>"; 



?>


<!-- 8- Number of visitors ? -->
<?php echo "Question #8 :<br><br>";
           // session_start(); // Should always be on top
           if(!isset($_SESSION['counter'])) { // It's the first visit in this session
             $handle = fopen("index.php", "r"); 
             if(!$handle){ 
              echo "Could not open the file" ;
               } 
              else { 
                $counter = ( int ) fread ($handle,20) ;
                fclose ($handle) ;
                $counter++ ; 
                echo"
	                <div class='container form_style'> 
						Unique visitors Count:  
						<span class='special_text'>".$counter."</span> 
					</div>";
                $handle = fopen("index.php", "w" ) ; 
                fwrite($handle,$counter) ; 
                fclose ($handle) ;
                $_SESSION['counter'] = $counter;
                }

           } else { // It's not the first time, do not update the counter but show the total hits stored in session
             $counter = $_SESSION['counter'];
              echo"
	                <div class='container form_style'> 
						Unique visitors Count:  
						<span class='special_text'>".$counter."</span> 
					</div>";
           }
 echo "<br>-----------------------------------------<br>"; ?>

 <!-- 9-Creating Cookies include cookie_name, cookie_value, [expiry_time], [cookie_path], [domain],
[secure], [httponly] . Then Retrieve all cookies value after that delete the cookies . -->
<!-- <?php echo "Question #9 :<br><br>"; ?>
<?php echo "<br>-----------------------------------------<br>"; ?>
 -->








