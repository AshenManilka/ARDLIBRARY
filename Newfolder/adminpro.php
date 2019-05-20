<!DOCTYPE html>


<html lang="en">
<head>
    <link rel="stylesheet" href="cs/bootstrap.min.css">
    <link rel="stylesheet" href="cs/admin.css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ARD Library</title>
</head>
<body>
    
    
        <!---navBar-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="main-nav">
        <div class="container">
            
            <a href="index.html" class="navbar-brand"><i class="fas fa-book-reader"></i>  ARD LIBRARY</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggle-icon"> <i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item">
                        <a href="#home-section"class="nav-link"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#shop-head-section" class="nav-link"><i class="fas fa-mobile"></i> Category </a>
                    </li>
                    <li class="nav-item">
                        <a href="#join-head-section"class="nav-link"><i class="fas fa-users"></i> Join</a>
                    </li>
                    <li class="nav-item">
                        <a href="./profileAdmin.php"class="nav-link"><i class="fas fa-info-circle"></i> Profile</a>
                    </li>
                     
                    <li class="nav-item">
                        <a href="../loggingForm.php"class="nav-link"><i class="fas fa-sign-out-alt"></i>Logout</a>
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
    </nav><br><br>

    
      <div class="display-1 text-center mt-5">ADMINISTRATOR</div>
      <br>
      <br>
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-md-12">
              
                  <div class="container">
                  
                    
                      <div class="row mbr-justify-content-center">
                  
                             
                              <div class="col-lg-6 mbr-col-md-10">
                                  <div class="wrap">
                                      <div class="ico-wrap">
                                          <span class="mbr-iconfont fa-globe fa"></span>
                                      </div>
                                      <div class="text-wrap vcenter">
                                          <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
                                              <span>BOOK MANAGEMENT</span>
                                          </h2>
                                          <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                                          <a href="./addBook.php" class="btn btn-outline-info main-btn lib-btn my-4  text-capitalize"> Add Books</a>
                                        </div>
                                  </div>
                              </div>
							   <div class="col-lg-6 mbr-col-md-10">
                                  <div class="wrap">
                                      <div class="ico-wrap">
                                          <span class="mbr-iconfont fa-trophy fa"></span>
                                      </div>
                                      <div class="text-wrap vcenter">
                                          <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"> <span>STAFF MANAGEMENTS</span></h2>
                                          <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                                          <a href="./addStaff.php" class="btn btn-outline-info main-btn lib-btn my-4  text-capitalize"> Manage </a>
                                        </div>
                                  </div>
                              </div>
                              <div class="col-lg-6 mbr-col-md-10">
                                  <div class="wrap">
                                      <div class="ico-wrap">
                                          <span class="mbr-iconfont fa-tree fa"></span>
                                      </div>
                                      <div class="text-wrap vcenter">
                                          <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"> <span>BURROW & RETURN</span></h2>
                                          <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                                          <a href="./issue.php" class="btn btn-outline-info main-btn lib-btn my-4  text-capitalize"> Burrow / Return </a>
                                        </div>
                                  </div>
                              </div>
							  
							   <div class="col-lg-6 mbr-col-md-10">
                                  <div class="wrap">
                                      <div class="ico-wrap">
                                          <span class="mbr-iconfont fa-volume-up fa"></span>
                                      </div>
                                      <div class="text-wrap vcenter" href= "#">
                                          <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"> <span>SEND-EMAIL</span></h2>
                                          <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                                          <a href="#" class="btn btn-outline-info main-btn lib-btn my-4  text-capitalize"> Send E-Mails</a>
                                        </div>
                                  </div>
                              </div>
                              <div class="col-lg-6 mbr-col-md-10">
                                  <div class="wrap">
                                      <div class="ico-wrap">
                                          <span class="mbr-iconfont fa-calendar fa"></span>
                                      </div>
                                      <div class="btn text-wrap vcenter" href = "./addEvents.html">   
                                          <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
                                              <span>FINE MANAGEMENT</span>
                                          </h2>
                                          <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                                          <a href="./finecal.php" class="btn btn-outline-info main-btn lib-btn my-4  text-capitalize"> Calculate Fine</a>
                                        </div>
                                      </div>

                                  
                              </div>           
                          </div>
                  
                  </div>
                  
              
          </div>
        </div>
      </div>
</body>
</html>






