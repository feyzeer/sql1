<?php
   $db_name='e_classe';
if ($_SERVER ['REQUEST_METHOD'] ==='POST'){

    $connection = mysqli_connect('localhost', 'root', '',  $db_name);

    $fname = $_POST['fname'];
    $schedule = $_POST['schedule'];
    $balance = $_POST['balance'];

    $sql = "INSERT INTO payment_details(name,schedule,balance)
     VALUES ('$fname','$schedule','$balance')";
     mysqli_query($connection,$sql);

     header('Location: lastpage.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<form class="w-50 mx-auto" method="POST" action="">
<div class="form-group">
  <label for="fname">name:</label>
  <input class="form-control" required type="text" id="fname" name="fname">
</div>
<div class="form-group">
  <label for="lname">schedule:</label>
  <input class="form-control" required type="text" id="lname" name="schedule">
</div>
<div class="form-group">
  <label for="lname">balance:</label>
  <input class="form-control" required type="text" id="lname" name="balance">
</div>
  <input type="submit" class="btn btn-primary" value="Submit">
</form>
</body>
</html>

