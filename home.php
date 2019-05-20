<?php include "includes/db.php"; ?>
<?php
// Start the session
session_start();
?>

<?php
// Echo session variables that were set on previous page
echo "Email is " . $_SESSION["email"] . ".<br>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    

  

 

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="./Boostrap/css/bootstrap.css">
<link rel="stylesheet" href="./Boostrap/css/bootstrap-grid.css.map">
<link rel="stylesheet" href="./Boostrap/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="./Boostrap/css/bootstrap-grid.min.css.map">
<link rel="stylesheet" href="./Boostrap/css/bootstrap.css.map">
<link rel="stylesheet" href="./Boostrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./Boostrap/css/bootstrap.min.css.map">

<link rel="stylesheet" href="./home.css">
    <link rel="stylesheet" href="./home3.css">
    
    <title>ARD LIBRARY</title>
</head>
<body data-spy="scroll" data-target="#main-nav" id="home" >
    

    <!---navBar-->
    <nav class="navbar navbar-expand-sm   fixed-top navbar-dark bg-dark  "  id="main-nav">
        <div class="container">
            
            <a href="index.html" class="navbar-brand"><i class="fas fa-book-open"></i> ARD LIBRARY</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggle-icon"> <i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav m-auto ">
                    <li class="nav-item">
                        <a href="#home-section"class="nav-link"><i class="fas fa-home"></i> Home</a>
                    </li>
                 
                    <li class="nav-item">
                        <a href="#book-head-section" class="nav-link"><i class="fas fa-book-open"></i> Books </a>
                    </li>
                    <li class="nav-item">
                        <a href="#profile-head-section"class="nav-link"><i class="fas fa-users"></i> Profile</a>
                    </li>
                   
                    <li class=" ">
                        <a href="Profile.php"class="nav-link text-info">
                        
                        
                       <?php
                        // Echo session variables that were set on previous page
                        echo "Welcome  " . $_SESSION["firstname"] . " ";
                        echo "" . $_SESSION["lastname"] . ".";   

                        ?>  


                        </a>
                        </li>
                        <li class="nav-item">
                        <a href="Profile.php"> <img src="./img/books/<?php echo $_SESSION["image"];  ?>" height="5" width="5" alt="new-arrivals1" style="width: 3rem;height:3rem; "></a>

                        </li>
                   
                        <li class="nav-item">
                        <a href="loggingForm.php"class="nav-link"><i class="fas fa-sign-out-alt"></i>Logout</a>
                       <?php
                     //  session_unset(); 
                     // session_destroy();
                       
                      
                       // $_SESSION["image"] = "/reading";
                    //    $_SESSION["firstname"] ="firstname";
                     //   $_SESSION["lastname"] = "lastname";
                    
                       ?>
                    </li>
                                         
                   
                </ul>
            </div>
        </div>
    </nav>


 
    <section id="home-section">

        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            
            </ol>
        
        
        
                  <div class="carousel-inner" style="margin-top:-15px;" >
                          <div class="carousel-item carousel-image-1 active" style="height:500px;">
                            <div class="container">
                              
                              <div class="carousel-caption d-none d-sm-block  ">
                                
                                <h1 class="  display-3 text-light" >ARD LIBRARY </h1>
                                <p class="topic lead text-light">The place whare you can gain a world of knowladge</p>
                              </div>
                            </div>
                        </div>
        
                        <div class="carousel-item carousel-image-2 " style="height:500px;>
                          <div class="container">
                            <div class="carousel-caption d-none d-sm-block ">
                              <h1 class="display-3 text-light"> Reading maketh a man  </h1>
                              <p class="topic lead text-light">Reading is essentail for those who sekk to rise above the ordinary</p>
                            </div>
                          </div>
                      </div>
          
                    
                </div>
                  
        
        
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        
    
    </section>
    
    
   
    
 
<!--Book head-->
<section id="book-head-section">
    <div class="container    text-light">
        <div class="row ">
            <div class="col text-center py-5 "> 
                    <h1 class="display-3">Our Books Store</h1>
                   
                <p class="lead">Welcome to our great collection , Click below to explore</p>
              
                <a href="addBook.php" class="btn btn-outline-info">Find Out Books </a>
                    <a href="books.php" class="btn btn-outline-info">Books </a>
                
            </div>
            <div class="col-md-12 mt-3 text-center">
                <img src="./images/tumblr_o8rq37d7OS1rtjufao2_500.gif" alt="book image"class="img-fluid mb-3 bg-light" style="width:30rem">
        </div>
        </div>
    </div>

</section>




<!--profile home head-->
<section class="bg-info" id="profile-head-section">
        <div class="container">
            <div class="row">
                <div class="col text-center py-5">
                    <h1 class="display-4"><i class="fas fa-user-circle"></i> Profile</h1>
                    <p class="lead">Start using today.Be a part of our Community.</p>
                    <a href="Profile.php" class="btn btn-outline-dark">View My Profile </a>
                </div>
            </div>
        </div>
    
    </section>
    
    <!--Account section-->
    <section id="Account-section" class="bg-light text-mute py-5">
        <div class="container">
            <div class="row">
              
                <div class="col-md-6 text-center">
                    <h3 class="text-dark"><u>My Account</u></h3>
                  
                    <div class="d-flex">
                            <div class="p-4 align-self-end">
                                <strong> Manage your services and accounts easily with My Account. Sing in using facebook or your Google Accounts.</strong>
                            </div>  
                    </div>
                    <div class="d-flex">
                            <div class="p-4 align-self-start">
                                    <i class="fas fa-arrow-circle-right"></i>
                            </div>
                            <div class="p-4 align-self-end">
                                    Create an online account to use our services any time from any whare using our mobile app.
                            </div>  
                    </div>
                    <div class="d-flex">
                            <div class="p-4 align-self-start">
                                    <i class="fas fa-arrow-circle-right"></i>
                            </div>
                            <div class="p-4 align-self-end">
                                The ones who joined with us can have the access to a huge collection of books
                            </div>  
                    </div>
                    
                </div>

                <div class="col-md-6 mt-2" >
                    <img src="./images/staff.png" alt="Phone image"class="img-fluid mb-3 rounded-right join-pic" style="width:20rem">
            </div>
                
                
                
            </div>
        </div>
    </section>

    



<!--footer-->
<!-- Footer -->
<footer class="page-footer font-small text-white">

    <div class="social-link">
      <div class="container">

        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">

          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0">Get connected with us on social networks!</h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">

            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fab fa-facebook-f text-white mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter white-text mr-4"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fab fa-google-plus-g white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fab fa-linkedin-in white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram white-text"> </i>
            </a>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
    </div>

<!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

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

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
   
    <script>
        //get the current year for the copyright
        $('#year').text(new Date().getFullYear());
        //init-scrollplay
        $('body').scrollspy({target:'#main-nav'});
        //smoth-scrollig
        $('#main-nav a').on('click' , function(event){

            if(this.hash !== ""){
                event.preventDefault();
                const hash = this.hash;
                $('html ,body').animate({scrollTop : $(hash).offset().top},
                500,
                function(){
                    window.location.hash = hash;    
                }
                );
            }
        });
        
        --//carousel-----------
        $('.carousel').carousel({
      interval: 1500
    
    });
  
    </script>



  
</body>
</html>