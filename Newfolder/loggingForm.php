<?php include "includes/db.php"; ?>

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
                    $db_firstname = $row['firstname'];
                    $db_lastname = $row['lastname'];
                   
                    
                 if($emaili == "admin@admin" && $passwordi == "admin" ){
                     header("LOCATION: adminpro.php");
                    
                }elseif($emaili !==$db_email && $passwordi !== $db_password){
                    header("LOCATION: logingForm.php");
                    //echo"<h1>invalid username </h1>";
                   
                }else if($emaili == $db_email && $passwordi == $db_password){
                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['email'] = $db_email;
                    $_SESSION['password'] = $db_password;
                    $_SESSION['firstname'] = $db_firstname;
                    $_SESSION['lastname'] = $db_lastname;
                    $_SESSION['propic'] = $_db_pro_pic;
                               
                    header("LOCATION: homepage.php?p_id=$user_id");
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
    <title>Document</title>
    <link rel="stylesheet" href="cs/bootstrap.min.css">
    <link rel="stylesheet" href="cs/loging.css">

</head>
<body>
        <form action="" method="post" class="form-signin">
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
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
                <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
              </form>
</body>
</html>
