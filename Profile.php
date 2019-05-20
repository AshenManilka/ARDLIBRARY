<?php include "includes/db.php"; ?>
<?php
// Start the session
session_start();
?>
<?php
  
                 //select quary---------------------------------------------------------------------------------------      

                        
                 $query = "SELECT * FROM `registration` WHERE email ='{$_SESSION['email']}'";
             // $query = "SELECT * FROM `registration` WHERE email ='ashen9593@gmail.com'";
              
                $select_all_books_query = mysqli_query($connection,$query);


                while($row = mysqli_fetch_assoc($select_all_books_query)){
                $firstname = $row['firstName'];
                $lastname = $row['lastname'];
                $username = $row['username'];
                $email = $row['email'];
                $password = $row['password'];
             
                $address = $row['address'];
                $mobile = $row['mobile'];
                $image = $row['image'];


                }
   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!----botstrap css-->
    <link rel="stylesheet" href="cs/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

    <!---main css-->
    <link rel="stylesheet" href="cs/register.css">
    <link rel="stylesheet" href="cs/register.css">
</head>
<body>
<style>
body{
    font-family: 'Roboto Slab', Courier, monospace;
   
  } 
</style>

     <div class="container">
       <h1><div class="py-5 text-center">PROFILE</div></h1>
         
         <div class="row">
             
             <div class="col-md-8">
         
       <div class="flex-box">
           
           
           
          <form  onsubmit="return  validation()"   action="" method="post" class="bg-light"  enctype="multipart/form-data">

          <div class="row">
              <div class="col-md-6 mb-3">
                  <!-- first name-->

             
                  <label for="firstName">First name   </label>
                  <h5><?php echo $firstname ?></h5>
                 
               
                 
                 
                </div>

                  <!--Last Name-->

                <div class="col-md-6 mb-3">
                  <label for="lastName">Last name</label>
                  <h5><?php echo $lastname ?></h5>
          </div>
        </div>

        <div class="mb-3">
                        <label for="username">Username</label>
                        <h5><?php echo $username ?></h5>
                 
                        <div class="input-group">
                          <div class="input-group-prepend"></div>
                          </div>
                          <span id="un" class= "text-danger font-weight-bold"></span>
                        </div>
                  
              
                      <div class="mb-3">
                        <label for="email">Email </label>
                        <h5><?php echo $email ?></h5>
                        <span id="em" class="text-danger font-weight-bold"></span>
                      </div>
              
                      <div class="mb-3">
                        <label for="Password">Password</label>
                        <h5><?php echo $password ?></h5>
                        <span id="pswd" class="text-danger font-weight-bold"></span>
                      </div>

                    
              
                      <div class="mb-3">
                            <label for="address">Address  </label>
                            <h5><?php echo $address ?></h5>
                            <span id="add" class="text-danger font-weight-bold"></span>
                         </div>

                         <div class="mb-3">
                            <label for="mnum">Mobile number  </label>
                            <h5><?php echo $mobile ?></h5>
                            <span id="Mob" class="text-danger font-weight-bold"></span>
                         </div>
                         
                      
                   
         
    
       </div>
                 </div>
           
         
        

              <div class="col-sm-4 col-lg-4 col-md-4  text-center">
            <div class="thumbnail">
            <div class="inner">
              <a href="#"> <img src="./img/books/<?php echo $image;  ?>" height="300" width="300" alt="new-arrivals1" style="width: 15rem;height:15rem; "></a>
            </div>
                <br><br>

              

              <br>      
              <a href="Update-profile.php " class="btn btn-primary">Update</a>

                     <a href="home.php " class="btn btn-danger">Back</a>
       
            </div>
            </form>
         
         </div>
     </div>  
 


             
    

     <script type="text/javascript">
                      

     </script>



 
         



</body>
</html>