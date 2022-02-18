<?php

  include_once('connection.php');
  $sql = "SELECT * FROM payment_details";
  $result = $connection->query($sql);
  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
    <style>
        .container-fluid-sm ul li:hover{
          background-color:  #00C1FE
         }
         body {
           overflow-x:hidden;
         }
         @media (max-width:992px){
          #side{
            position: absolute;
            margin-left: -700px;
            z-index: 1;
          } 
          
          #sidebtn:checked+#side{
            
            margin-left: 0px;
          }
          .container{
            overflow-x:scroll;
          }
 }
    
         
        
    </style>
</head>
<body>
 
    <div class="row align-items-start">
    <?php include 'side.php' ; ?>

      <div class="col-lg-10 col-md-12 col-sm-12 " style="padding: 0;  ">
      <?php include 'nav.php' ; ?>
        <div class="col" style="background-color: #E5E5E5; height: 100%;">
            <nav class="navbar navbar-light px-3">
                <div class="container-fluid">
                  <a class="navbar-brand fw-bold">Payment Details</a>
                  <form class="d-flex">
                  <button class="btn btn-outline-white  bg-info "  type="submit"><a class="text-white nav-link" href= "add_payements.php"> ADD NEW PAYMENT</a></button>
                    <a class=" mt-1 " href="#"><img src="Vector.png" alt=""></a>
                  </form>
                </div>
                
            </nav>
            <div class="container" >
              <div style="min-width:1000px; ">
                <div class="container border-top border-2 ps-5 " id="row">
                  <div class="row row-cols-7 py-3 text-muted" style="font-size: 90%;">
                    <div class="col">Name</div>
                    <div class="col">Payment Schedule</div>
                    <div class="col">Bill Number</div>
                    <div class="col">Balance amount</div>  
                    <div class="col">Date </div>
                    <div class="col"></div>


                    <?php
                       
                        if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                          echo'
                          <div class="row bg-white rounded my-2 me-1 text-nowrap" >
                                <div class="col pb-2" ><img  src="lastpic.png" alt=""></div>
                                <div class="col py-3"> '.$row['name'].' </div>
                                <div class="col py-3">  '.$row['schedule'].'</div>
                                <div class="col py-3"> '. $row['billnumber'].' </div>
                                <div class="col py-3"> '. $row['balance'].'</div>
                                <div class="col py-3">'  .$row['date'].'</div>
                                <div class="col text-end py-3">
                                <a><img class="pe-2"  src="view.png" alt=""></a>
                                </div>
                            </div>
                            ';
                          }
                        } else {
                          echo "0 results";
                        }

                    ?>
                </div>
              </div>
            </div>
        </div>
</div>
  


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>