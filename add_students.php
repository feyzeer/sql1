<?php
   $db_name='e_classe';
if ($_SERVER ['REQUEST_METHOD'] ==='POST'){

    $connection = mysqli_connect('localhost', 'root', '',  $db_name);

    $name = $_POST['name'];
    $email = $_POST['e_mail'];
    $phone = $_POST['phone'];
    $enroll_number = $_POST['enroll_number'];
    $date_of_admission = $_POST['date_of_admission'];

    $sql = "INSERT INTO students(name,e_mail,phone,enroll_number,date_of_admission)
     VALUES ('$name',' $email','$phone','$enroll_number','$date_of_admission')";
     mysqli_query($connection,$sql);

     header('Location: thirdpage.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body> 
<form  method="POST"> 
    <div class="container">
<div class="col-xs_6">
    
       <div class="form-group">
           <label for="username">Name</label>
           <input type="text" name="name" class="form-control">
       </div> 

       <div class="container">
<div class="col-xs_6">
    
       <div class="form-group">
           <label for="e_mail">email</label>
           <input type="text" name="e_mail" class="form-control">
       </div> 


       <div class="form-group">
       <label for="phone">phone</label>
           <input type="number" name="phone"  class="form-control">
       </div> 
      
       <div class="form-group">
              <label for="enroll_number">enroll_number</label>
                <input type="number" name="enroll_number"  class="form-control">
        </div>
    
       <div class="form-group">
              <label for="date_of_admission">date_of_admission</label>
                  <input type="date" name="date_of_admission"  class="form-control">
                  
        </div>
           <input class="btn btn-primary mt-5" type="submit" name="submit" value="submit">
    </form>
</div>

</body>
</html>