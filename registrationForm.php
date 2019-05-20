<?php include "includes/db.php"; ?>
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
            $query = "INSERT INTO registration(firstname,lastname,username,email,password,address,mobile,image) VALUES ('{$firstname}','{$lastname}','{$username}','{$email}','{$password}','{$address}','{$mobile}' ,'{$book_pic}')";
            $create_user_query = mysqli_query($connection,$query);
           

            
        //    }else{
          //      echo"Retype your password again";
          //  }
         

     }



                 //select quary---------------------------------------------------------------------------------------      

   /*                     
                $query =   "SELECT image FROM `registration` WHERE username ='{$email}'";
              
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
    <!---main css-->
    <link rel="stylesheet" href="cs/register.css">
    <link rel="stylesheet" href="cs/register.css">
</head>
<body>


     <div class="container">
       <h1><div class="py-5 text-center">Registration</div></h1>
         
         <div class="row">
             
             <div class="col-md-8">
         
       <div class="flex-box">
           
           
           
          <form  onsubmit="return  validation()"   action="" method="post" class="bg-light"  enctype="multipart/form-data">

          <div class="row">
              <div class="col-md-6 mb-3">
                  <!-- first name-->

             
                  <label for="firstName">First name</label>
                  <input type="text" class="form-control" id="firstName"  name="firstname"  placeholder="" >
                  <span id="fn" class="text-danger font-weight-bold"></span>
                </div>

                  <!--Last Name-->

                <div class="col-md-6 mb-3">
                  <label for="lastName">Last name</label>
                  <input type="text" class="form-control" id="lastName" name="lastname" placeholder="" value="">
                  <span id="ln" class="text-danger font-weight-bold"></span>
          </div>
        </div>

        <div class="mb-3">
                        <label for="username">Username</label>
                        <div class="input-group">
                          <div class="input-group-prepend"></div>
                          </div>
                          <input type="text" class="form-control" id="username" name="username" placeholder="Username" >
                          <span id="un" class= "text-danger font-weight-bold"></span>
                        </div>
                  
              
                      <div class="mb-3">
                        <label for="email">Email </label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="you@example.com" >
                        <span id="em" class="text-danger font-weight-bold"></span>
                      </div>
              
                      <div class="mb-3">
                        <label for="Password">Password</label>
                        <input type="text" class="form-control" id="pwd" name="password" placeholder="8 chracters with number" >
                        <span id="pswd" class="text-danger font-weight-bold"></span>
                      </div>

                      <div class="mb-3">
                        <label for="CPassword">Confirm Password</label>
                        <input type="text " class="form-control" id="cpwd" name="cpassword" placeholder="8 chracters with number" >
                        <span id="cpswd" class="text-danger font-weight-bold" ></span>
                      </div>
              
                      <div class="mb-3">
                            <label for="address">Address  </label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="66/1,kandyroad,colombo" >
                            <span id="add" class="text-danger font-weight-bold"></span>
                         </div>

                         <div class="mb-3">
                            <label for="mnum">Mobile number  </label>
                            <input type="text" class="form-control" id="monum" name="mobile" placeholder="07********" >
                            <span id="Mob" class="text-danger font-weight-bold"></span>
                         </div>
                         
                      
                   
         
    
       </div>
                 </div>
           
         
        

              <div class="col-sm-4 col-lg-4 col-md-4  text-center">
            <div class="thumbnail">
            <div class="inner">
            </div>
                <br><br>

                <label class="filebutton text-light">
                ADD IMAGE!
                <span><input type="file" id="image" name="image" class="form-control "></span>
               
                </label>
              

             <style>
             label.filebutton {
              width:100px;
              height:40px;
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
<button  class="btn btn-primary" type="submit" name="submit" id="submit">SUBMIT</button>
                     <a href="login.php " class="btn btn-danger">Back</a>
       
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



 
         



</body>
</html>