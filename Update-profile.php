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

<?php
   
     if(isset($_POST['submit'])){
         
         $firstname = $_POST['firstname'];
         $lastname = $_POST['lastname'];
         $username = $_POST['username'];
         $email = $_POST['email'];
         $password = $_POST['password'];
         $cpassword = $_POST['cpassword'];
         $address = $_POST['address'];
         $mobile = $_POST['mobile'];

         $book_pic = $_FILES['image']['name'];
        $book_pic_temp = $_FILES['image']['tmp_name'];
        
        move_uploaded_file($book_pic_temp,"img/books/$book_pic");
    
         $firstname = mysqli_real_escape_string($connection,$firstname);
         $lastname = mysqli_real_escape_string($connection,$lastname);
         
         $username = mysqli_real_escape_string($connection,$username);
         $email = mysqli_real_escape_string($connection,$email);
         $password = mysqli_real_escape_string($connection,$password);
         $cpassword = mysqli_real_escape_string($connection,$cpassword);
         $address = mysqli_real_escape_string($connection,$address);
         $mobile = mysqli_real_escape_string($connection,$mobile);
         
         //insert qary
      //      if($password == $cpassword ){
   // echo "ashen";
         //   $query = "UPDATE INTO registration(firstname,lastname,username,email,password,address,mobile,image) VALUES ('{$firstname}','{$lastname}','{$username}','{$email}','{$password}','{$address}','{$mobile}' ,'{$book_pic}')";
           
         $query =    "UPDATE `registration` SET `firstName` = '{$firstname}',
        `lastname` = '{$lastname}',
         `username` = '{$username}',
         `email` = '{$email}',
         `password` = '{$password}',
         `address` = '{$address}',
         `mobile` = '{$mobile}',
         `image` = '{$book_pic}'
        WHERE `registration`.`email` ='{$_SESSION['email']}';"; 
       $create_user_query = mysqli_query($connection,$query);


       $_SESSION["email"] = $email;
       $_SESSION["image"] = $book_pic;
       $_SESSION["firstname"] =$firstname;
       $_SESSION["lastname"] = $lastname;

        //    }else{
          //      echo"Retype your password again";
          //  }
         

     }



                 //select quary---------------------------------------------------------------------------------------      

        /*                
                $query =   "SELECT image FROM `registration` WHERE username ='ashen'";
              
                $select_all_books_query = mysqli_query($connection,$query);


                while($row = mysqli_fetch_assoc($select_all_books_query))
                  
                    $image = $row['image'];

    */


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
   
   
</head>
<body>
<style>
body{
    font-family: 'Roboto Slab', Courier, monospace;
   
  } 
</style>

     <div class="container">
       <h1><div class="py-5 text-center">Update Profile</div></h1>
         
         <div class="row">
             
             <div class="col-md-8">
         
       <div class="flex-box">
           
           
           
          <form  onsubmit="return  validation()"   action="" method="post" class="bg-light"  enctype="multipart/form-data">

          <div class="row">
              <div class="col-md-6 mb-3">
                  <!-- first name-->

             
                  <label for="firstName">First name</label>
                  <input type="text" class="form-control" id="firstName"  name="firstname"  value="<?php echo htmlspecialchars($firstname); ?>" >
                  <span id="fn" class="text-danger font-weight-bold"></span>
                </div>

                  <!--Last Name-->

                <div class="col-md-6 mb-3">
                  <label for="lastName">Last name</label>
                  <input type="text" class="form-control" id="lastName" name="lastname" placeholder="" value="<?php echo htmlspecialchars($lastname); ?>">
                  <span id="ln" class="text-danger font-weight-bold"></span>
          </div>
        </div>

        <div class="mb-3">
                        <label for="username">Username</label>
                        <div class="input-group">
                          <div class="input-group-prepend"></div>
                          </div>
                          <input type="text" class="form-control" id="username" name="username"  value="<?php echo htmlspecialchars($username); ?>" >
                          <span id="un" class= "text-danger font-weight-bold"></span>
                        </div>
                  
              
                      <div class="mb-3">
                        <label for="email">Email </label>
                        <input type="text" class="form-control" id="email" name="email"  value="<?php echo htmlspecialchars($email); ?>" >
                        <span id="em" class="text-danger font-weight-bold"></span>
                      </div>
              
                      <div class="mb-3">
                        <label for="Password">Password</label>
                        <input type="text" class="form-control" id="pwd" name="password"  value="<?php echo htmlspecialchars($password); ?>" >
                        <span id="pswd" class="text-danger font-weight-bold"></span>
                      </div>

                      <div class="mb-3">
                        <label for="CPassword">Confirm Password</label>
                        <input type="text " class="form-control" id="cpwd" name="cpassword"  value="<?php echo htmlspecialchars($password); ?>" >
                        <span id="cpswd" class="text-danger font-weight-bold" ></span>
                      </div>
              
                      <div class="mb-3">
                            <label for="address">Address  </label>
                            <input type="text" class="form-control" id="address" name="address"  value="<?php echo htmlspecialchars($address); ?>" >
                            <span id="add" class="text-danger font-weight-bold"></span>
                         </div>

                         <div class="mb-3">
                            <label for="mnum">Mobile number  </label>
                            <input type="text" class="form-control" id="monum" name="mobile"  value="<?php echo htmlspecialchars($mobile); ?>" >
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

                <label class="filebutton text-light">
                CHANGE IMAGE!
                <span><input type="file" id="image" name="image" class="form-control "></span>
               
                </label>
              

             <style>
             label.filebutton {
              width:100px;
              height:50px;
              overflow:hidden;
              position:relative;
              background-color:	#5bc0de;
              
          }

                label span input {
                    z-index: 999;
                    line-height: 0;
                    font-size: 50px;
                    position: absolute;
                    top: -2px;
                    left: -700px;
                    opacity: 0;
                    filter: alpha(opacity = 0);
                    -ms-filter: "alpha(opacity=0)";
                    cursor: pointer;
                    _cursor: hand;
                    margin: 0;
                    padding:0;
                    
                }
             
             
             </style>  

              <br>      
<button  class="btn btn-primary" type="submit" name="submit" id="submit">Update</button>
         
                     <a href="Profile.php " type class="btn btn-danger">Back</a>
       
            </div>
            </form>
         
         </div>
     </div>  
 


             
    

     <script type="text/javascript">
     function validation(){
                            var firstName = document.getElementById('firstName').value;
                            var lastName = document.getElementById('lastName').value;
                            var user = document.getElementById('username').value;
                            var eml = document.getElementById('email').value;
                            var pswrd = document.getElementById('pwd').value;
                            var cpswrd = document.getElementById('cpwd').value;
                            var addr = document.getElementById('address').value;
                            var mobile = document.getElementById('monum').value;
                            var image = document.getElementById('image').value;
                            
                            
                            if( firstName == ""){
                              document.getElementById('fn').innerHTML = " ** please fill the First Name";
                              return false;
                            }
                            if( lastName == ""){
                              document.getElementById('ln').innerHTML = " ** please fill the Last Name";
                              return false;
                            }
                            
                            if( user == ""){
                              document.getElementById('un').innerHTML = " ** Please fill the User Name";
                              return false;
                            }
                            if ((user.length <3) || (user.length >20)){
                              document.getElementById('un').innerHTML = "  *** Please fill the User Name between 3 and 20 ****";
                              return false;
                            }

                            
                            if( eml == ""){
                              document.getElementById('em').innerHTML = " ** Please fill the email";
                              return false;
                            }
                            if( eml.indexOf('@') <= 0 ){
                              document.getElementById('em').innerHTML = " ** Invali email";
                              return false;
                            }
                           
                        

                            if( pswrd == ""){
                              document.getElementById('pswd').innerHTML = " ** Please fill the Password";
                              return false;
                            }
                            if ((pswrd.length <3) || (pswrd.length >20)){
                              document.getElementById('pswd').innerHTML = "  *** Please fill the Password between 3 and 20 ****";
                              return false;
                            }
                            if((pswrd!=cpswrd)){
                              document.getElementById('cpswd').innerHTML = "***Password are not match";
                              return false;
                            }
                            if( cpswrd == ""){
                              document.getElementById('cpswd').innerHTML = " ** Please enter Password agin";
                              return false;
                            }
                            if( addr == ""){
                              document.getElementById('add').innerHTML = " ** please fill the Address";
                              return false;
                            }
                            
                            if( mobile== ""){
                              document.getElementById('Mob').innerHTML = " ** please fill the Phone Number";
                              return false;
                            }
                            if(mobile.length!=10){
                              document.getElementById('Mob').innerHTML = " ** should contain 10 digits";
                              return false;
                            }
                            if(isNaN(mobile)){
                              document.getElementById('Mob').innerHTML = " ** should be only numbers";
                              return false;
                            }
                           
     }
                            

     </script>


<!-- Footer Links -->
<div class="container text-center text-md-left mt-5 ">

<!-- Grid row -->
<div class="row mt-3">

  <!-- Grid column -->
  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7971946959115!2d79.97095231370463!3d6.914834595003709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256db1a6771c5%3A0x2c63e344ab9a7536!2sSri+Lanka+Institute+of+Information+Technology!5e0!3m2!1sen!2slk!4v1552876854406" 
      width="300" height="250" frameborder="0" style="border:0" allowfullscreen>
  </iframe>

  </div>
  <!-- Grid column -->
<!-- Grid column -->
<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 mr-4">

<!-- Links -->
<h6 class="text-uppercase font-weight-bold">Contact</h6>
<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
<p>
<i class="fas fa-home mr-3"></i>ARD-library</p>
<p>
<i class="fas fa-envelope mr-3"></i> gmail.com</p>
<p>
<i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
<p>
<i class="fas fa-print mr-3"></i> 011-2543622</p>

</div>
  <!-- Grid column -->
  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

    <!-- Links -->
    <h6 class="text-uppercase font-weight-bold">Products</h6>
    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
    <p>
      <a   href="contactUs.html">Contact Us</a>
    </p>
    <p>
      <a  href="#!">About Us</a>
    </p>
    <p>
      <a   href="#!">Books</a>
    </p>
    <p>
      <a   href="#!">Packeges</a>
    </p>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

    <!-- Links -->
    <h6 class="text-uppercase font-weight-bold">Useful links</h6>
    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
    <p>
      <a href="#!"> Account</a>
    </p>
    <p>
      <a href="#!"> Affiliate</a>
    </p>
    <p>
      <a href="#!"> Rates</a>
    </p>
    <p>
      <a href="#!">Help</a>
    </p>

  </div>
  <!-- Grid column -->


  <!-- Grid column -->

</div>
<!-- Grid row -->

</div>
<!-- Footer Links -->



</footer>

 
         



</body>
</html>