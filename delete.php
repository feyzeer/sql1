<?php
   $db_name='e_classe';                
    $connection = mysqli_connect('localhost', 'root', '',  $db_name);
    $delete= "DELETE FROM `students` WHERE id='".$_GET["id"]."'";
    $sql= mysqli_query($connection,$delete);
      mysqli_close($connection);
      header('Location: thirdpage.php');
                        
                    
?>       