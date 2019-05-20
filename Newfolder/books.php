<?php include "includes/db.php"; ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ARD Library</title>
       
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="./home.css">
    <title>ARD Library</title>
	
	
</head>
<body>
    <!---navBar--->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="main-nav">
            <div class="container">
                
                <a href="index.html" class="navbar-brand"><i class="far fa-eye"></i>  ARD LIBRARY</a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggle-icon"> <i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto ">
                        <li class="nav-item">
                            <a href="#home-section"class="nav-link"><i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              CATEGORIES
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Hestorical</a>
                              <a class="dropdown-item" href="#">Novel</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">sudhhe</a>
                              <a class="dropdown-item" href="#">Sfhsuj</a>
                            
                          </div>
                        <li class="nav-item">
                            <a href="#join-head-section"class="nav-link"><i class="fas fa-users"></i> Join With Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about-head-section"class="nav-link"><i class="fas fa-info-circle"></i> About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br><br><br><br>

       

        <!--Book Head-->
        <section id="book-head-section">
            <div class="container">
                <div class="row ">
                    <div class="col text-center py-5 "> 
                            <h1 class="display-4"><i class="fas fa-book-open"></i> BOOKS</h1>
                        <p class="lead">Welcome to our great collection of Books</p>
                    </div>
                </div>
            </div>
        
        </section>
        
<!--Events home-->

<section id="content">
        <div class="container">
    
          <div class="row">
    
            <div class="col-lg-12"><br>
             
          
            </div><br><br><br>
              
                
              
<?php
        
                        $query = "SELECT * FROM books";
                        $select_all_books_query = mysqli_query($connection,$query);
                        
                    
                        while($row = mysqli_fetch_assoc($select_all_books_query)){
                            $bid = $row['bid'];
                            $bookName = $row['bookName'];
                            $bcategory = $row['bcategory'];
                            $discription = $row['discription'];
                            $image = $row['image'];
    
                            
                           
?>
                 <div class="col-sm-4 col-lg-4 col-md-4">
              <div class="thumbnail">
                <div class="inner">
                  <a href="#"> <img src="./img/books/<?php echo $image;  ?>" height="300" width="300" alt="new-arrivals1"></a>
                </div>
              
                <div class="caption">
                  <h5><?php echo $bookName;  ?></h5>
                  <p><?php echo $discription  ?></p>
                </div>
              </div>
            </div>
              
              
              
              
             <?php                         }
 ?> 
              
              
              
              
              
              
              
              
              
    
       
    
    

    
    
    

    

 
    
              
            </div>
            </div>
      </section>
</body>
</html>



