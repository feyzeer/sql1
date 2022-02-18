<?php
    include_once('connection.php');
    $db_name='e_classe';
if ($_SERVER['REQUEST_METHOD']=== 'POST'){
            echo 'started to save changes';
            
            $name=$_POST["name"];
            $e_mail=$_POST["e_mail"];
            $phone=$_POST["phone"];
            $enroll_number=$_POST["enroll_number"];
            $date_of_admission=$_POST["date_of_admission"];
            
            

            $sql = "UPDATE students SET name='$name',  e_mail='$e_mail',  phone='$phone',  enroll_number='$enroll_number',  date_of_admission='$date_of_admission'  WHERE id=".$_POST['id'];
            
            if (mysqli_query($connection, $sql)) {
                echo "infos updated successfully";
            }
            
            else {
                echo "Error updating infos: ".mysqli_error($connection);
            }
            header('location:thirdpage.php'); 
            exit();
        }              
        if (!isset($_GET["id"])){
            echo 'id is not set';
                exit();
        }
   

    $got= "SELECT * FROM students";
    $flo=  mysqli_query($connection, $got);
    mysqli_close($connection);
    $flo=mysqli_fetch_assoc($flo);
   
   
    
?>    
   <form  method="POST"> 
    <div class="container">
<div class="col-xs_6">
    
       <div class="form-group">
           <label for="username">Name</label>
           <input type="text" name="name" value="<?php echo $flo["name"]; ?>" class="form-control">
       </div> 

       <div class="container">
<div class="col-xs_6">
    
       <div class="form-group">
           <label for="e_mail">email</label>
           <input type="text" name="e_mail" value="<?php echo $flo["e_mail"]; ?>" class="form-control">
       </div> 


       <div class="form-group">
       <label for="phone">phone</label>
       <input type="text" name="phone" value="<?php echo $flo["phone"]; ?>" class="form-control">
       </div> 
      
       <div class="form-group">
              <label for="enroll_number">enroll_number</label>
              <input type="text" name="enroll_number" value="<?php echo $flo["enroll_number"]; ?>" class="form-control">
        </div>
    
       <div class="form-group">
              <label for="date_of_admission">date_of_admission</label>
              <input type="text" name="date_of_admission" value="<?php echo $flo["date_of_admission"]; ?>" class="form-control">
        </div>
        <input class="btn btn-primary mt-5" type="submit" name="submit" value="submit">
        <input class="" type="hidden" name="id" value= " <?php echo $_GET['id']; ?> " >
    </form>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</div>   