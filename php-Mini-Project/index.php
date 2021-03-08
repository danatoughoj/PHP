<?php include './data/data.php';?>
<html lang="en">
  <?php include 'header.php';?>
<body>
  <h1 class="text-center">Trainers</h1>
  <hr class="mb-5" style="width: 70%" />
  <div class="container row m-auto">
    <?php 
    foreach($data as $key => $value){
      echo ' 
        <div class="col-sm-3">
          <div class="card text-center">
            <div class="card-body">
                <img src="'.$value["image"].'" class="image"> </img>
                <h5 class="card-title">'.$value["name"].'</h5>
                <a class="icons-style" href="'.$value["linkedin"].'"> <i class="fab fa-linkedin-in"></i> </a>
                <a class="icons-style"> <i class="fab fa-github"></i></a>
                <a class="icons-style" href="'.$value["linkedin"].'"> <i class="fab fa-facebook-f"></i></a><br>
                <a href="profile.php?id='.$value["id"].'" class="btn btn-primary mt-3">View Profile</a>
            </div>
          </div>
        </div>
      ';
    }
    ?>
  </div>

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>
</html>