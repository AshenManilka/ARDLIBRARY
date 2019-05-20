<?php include "includes/db.php"; ?>

<?php
// Start the session
 
session_start();
?>

<?php



    if(isset($_POST['login'])){
        $emaili = $_POST['emaili'];
        $passwordi = $_POST['passwordi'];

        $emaili = mysqli_real_escape_string($connection,$emaili);
        $passwordi = mysqli_real_escape_string($connection,$passwordi);
        
        
        $query = "SELECT * FROM registration WHERE email ='{$emaili}' AND password ='{$passwordi}' ";
        $user_select = mysqli_query($connection,$query);
        
        if(!$user_select){
            die("QUERY FAILED".mysqli_error($connection));   
        }
        
              while($row = mysqli_fetch_array($user_select)){
                    
                    $user_id = $row['id'];
                    $db_email = $row['email'];
                    $db_password = $row['password'];
                    $db_firstname = $row['firstName'];
                    $db_lastname = $row['lastname'];
                    $db_image = $row['image'];
                   
                    
                 if($emaili == "admin@admin" && $passwordi == "pptx" ){
                     header("LOCATION: Newfolder/adminpro.php");
                    
                }elseif($emaili !==$db_email && $passwordi !== $db_password){
                    header("LOCATION: logingForm.php");
                    //echo"<h1>invalid username </h1>";
                   
                }else if($emaili == $db_email && $passwordi == $db_password){
                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['email'] = $db_email;
                    $_SESSION['password'] = $db_password;
                    $_SESSION['firstname'] = $db_firstname;
                    $_SESSION['lastname'] = $db_lastname;
                    $_SESSION['image'] =  $db_image; 


                               
                    header("LOCATION: home.php?p_id=$user_id");
                }else{
                    header("LOCATION: logingForm.php");
                } 
                    
                } 
        
        
        
        
    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="./home.css">
    <link rel="stylesheet" href="./home3.css">
    <title>ARD LIBRARY</title>

</head>
<body>
    
    
  <!---navBar-->
    <nav class="navbar navbar-expand-sm   fixed-top navbar-dark bg-dark  "  id="main-nav">
        <div class="container">
            
            <a href="#" class="navbar-brand"><i class="fas fa-book-open"></i> ARD LIBRARY</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggle-icon"> <i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav m-auto ">
                   
                </ul>
            </div>
        </div>
    </nav>

      
     <section class="container-fluid " id="loin-home-section"><!--full width-->
        <section class="row justify-content-center">
          
 
            <section  class="col-12 col-sm-5 col-md-6">
                    <br><br><br><br><br><br><br><br>
                

                    
                <form action="" method="post" class="myForm form-signin">
                <div class="text-center mb-4">
                  
                  <h1 class="h3 mb-3 font-weight-normal"> LOG-IN</h1>
                  
                </div>
              
                <div class="form-label-group">
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="emaili" required autofocus>
                  <label for="inputEmail">Email address</label>
                </div>
              
                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="passwordi" required>
                  <label for="inputPassword">Password</label>
                </div>
              
                <div class="checkbox mb-3">
                  <label>
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                </div>
                      <p class=" mb-3 text-muted text-center">&copy; 2017-2018</p>
                <button class="btn btn-primary " type="submit" name="login">Sign in</button>
                      <a href="index.php" class="btn btn-danger">Back</a>
              
              </form>

			   
            </section>
        </section>
    </section>
 
        

    
    
       
</body>
</html>

