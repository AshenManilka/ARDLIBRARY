<?php include "includes/db.php"; ?>


<?php
    if(isset($_POST['submit'])){
        
        $bid = $_POST['bid'];
        $bookName = $_POST['bookName'];
        $bcategory = $_POST['bcategory'];
		$author = $_POST['author'];
		$pages = $_POST['pages'];
		$publisher = $_POST['publisher'];
        $bDate = $_POST['bDate'];
        $bDate=date("Y-m-d",strtotime($bDate));
        $cnumber = $_POST['cnumber'];
        $discription = $_POST['discription'];
        
        
        $book_pic = $_FILES['image']['name'];
        $book_pic_temp = $_FILES['image']['tmp_name'];
        
        move_uploaded_file($book_pic_temp,"img/books/$book_pic");
        
        
         $bid = mysqli_real_escape_string($connection,$bid);
         $bookName = mysqli_real_escape_string($connection,$bookName);
		 $author = mysqli_real_escape_string($connection,$author);
		 $pages = mysqli_real_escape_string($connection,$pages);
		 $publisher = mysqli_real_escape_string($connection,$publisher);
         $cnumber = mysqli_real_escape_string($connection,$cnumber);
         $discription = mysqli_real_escape_string($connection,$discription);
        

         $query = "INSERT INTO bookskk(bid,bookName,bcategory,author,pages,publisher,bDate,cnumber,discription,image) VALUES ('{$bid}','{$bookName}','{$bcategory}','{$author}','{$pages}','{$publisher}','{$bDate}','{$cnumber}','{$discription}','{$book_pic}')";
        
         $add_query = mysqli_query($connection,$query);

         

        
          $query = "INSERT INTO books(bid,bookName,bcategory,author,pages,publisher,bDate,cnumber,discription,image) VALUES ('{$bid}','{$bookName}','{$bcategory}','{$author}','{$pages}','{$publisher}','{$bDate}','{$cnumber}','{$discription}','{$book_pic}')";
        
        $add_query = mysqli_query($connection,$query);
        
        if($add_query){
            echo"Success";
             header('LOCATION: addBook.php');
            
        }else{
             die("QUERY FAILED".mysqli_error($connection));
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
    <link rel="stylesheet" href="./cs/home2.css">
    <title>ARD LIBRARY</title>
</head>
<body data-spy="scroll" data-target="#main-nav" id="home">
    

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
                        <a href="#about-head-section"class="nav-link"><i class="fas fa-info-circle"></i> Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

   
    
    
    
    <!---Home section-->
    
    
    <header id="home-section">
        <div class="div" id="dark-overlay">
            
            <div class="div" id="home-inner container">
                <div class="row mt-5 ">
                    <div class="col-lg-12 d-none d-lg-block mt-5 welcome">  
                        <h1 class="disply-4 text-sm-center welcome" >
                            <strong> WELCOME ADMIN </strong><br> <br> <br>
                     </h1>
                    <!-- <img src="./img/admin.png" id="welcome-image"> <br> <br> <br> <br> -->
                       
                    </div>
                   
                </div>
            </div>
        </div>
    </header>

    
    
<!--Add book interface-->
<section id="addbook-section" class="bg-light text-mute py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 ml-end">
                    <img src="./img/add_book.jpg" alt="Book image" class="img-fluid mb-3 rounded-left event-pic">
            </div>
            <div class="col-md-4 text-center ">
                <h1 class="text-dark"><u>MANAGE BOOKS</u></h1>
                <div class="d-flex">
                       
                        <div class="p-4 align-self-end ">
                            <h2>
                            <strong>          


                             </strong><br><br>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#contactmodal">Add Books </button>
                            </h2>
                        </div>  


                        <div class="p-4 align-self-end ">
                            <h2>
                            <strong>          


                             </strong><br><br>

                           <a href="books.php" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span>View Books</a></button>
                           
                            </h2>
                        </div>  

                        <div class="p-4 align-self-end ">
                            <h2>
                            <strong>          


                             </strong><br><br>

                           <a href="sbooks.php" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Search Books</a></button>
                           
                            </h2>
                        </div>  
						
						 <div class="p-4 align-self-end ">
                            <h2>
                            <strong>          


                             </strong><br><br>

                           <a href="book_report.php" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Get Reports</a></button>
                           
                            </h2>
                        </div>  
                </div>

                <!--Add book pop up modal-->
<div class="modal fade text-dark" id="contactmodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Book</h5>
                <button type="close" data-dismiss="modal">
                    <span>&times;</span>

                </button>
            </div>
            <div class="modal-body">
                

                <!--add book form-->
                <form action="" method="POST" onsubmit="return validation()" class="bg-light" enctype="multipart/form-data">
                     <!--book id-->
                    
                     <div class="form-group">
                            <label for="user" class="font-weight-bold">Upload Book Image: </label>
                         
                           <input type="file" name="image" id="image" class="form-control">
                         
                         
                        </div>
                    
                     <div class="form-group">
                            <label for="user" class="font-weight-bold">Book ID: </label>
                         
                            <input type="text" class="form-control" id="Book_ID" name="bid" autocomplete="off" placeholder="ex-CXXX">
                         
                            <span id="bookid" class="text-danger font-weight-bold"> </span>
                        </div>
        

                    <!--book name-->
                    <div class="form-group">
                        <label for="user" class="font-weight-bold">Book Name: </label>
                        
                        <input type="text" class="form-control" id="bname" name="bookName" autocomplete="off" placeholder="Book Name">
                        
                        <span id="bookname" class="text-danger font-weight-bold"> </span>
                    </div>
                    
                    <!--category-->
                     <div class="form-group">
                     <label for="user">Category</label>
                         
                    <select type="text" class="custom-select d-block w-100" id="bcategory" name="bcategory" >
                        <option value="Choose">Choose...</option>
                        <option value="Computer">Computer</option>
                        <option value="Novel">Novel</option>
                        <option value="History">History</option>
                        <option value="Science">Science</option>
						<option value="Politics">Politics</option>
						<option value="Sinhala">Sinhala</option>
						<option value="Business">Business</option>
					    <option value="Maths">Maths</option>
						<option value="Technology">Technology</option>
						<option value="Advanced Level">Advanced Level</option>
						<option value="English">English</option>
						<option value="Other">Other</option>
						
                         </select>
                         
                    <span id="bctype" class="text-danger font-weight-bold"></span>
                    </div>
					
					<!--Author-->
                    <div class="form-group">
                        <label for="user" class="font-weight-bold">Author: </label>
                        
                        <input type="text" class="form-control" id="author" name="author" autocomplete="off" placeholder="Author Name">
                        
                        <span id="author" class="text-danger font-weight-bold"> </span>
                    </div>
					
					<!--Pages-->
                    <div class="form-group">
                        <label class="font-weight-bold">Pages: </label>
                        <input type="text" class="form-control" id="pages" name="pages" autocomplete="off" placeholder="No of Pages">
                        <span id="pages" class="text-danger font-weight-bold"> </span>
                    </div>
					
					<!--Publisher-->
                    <div class="form-group">
                        <label class="font-weight-bold">Publisher: </label>
                        <input type="text" class="form-control" id="publisher" name="publisher" autocomplete="off" placeholder="Publisher">
                        <span id="publisher" class="text-danger font-weight-bold"> </span>
                    </div>
    
                    <!--Date-->
                    <div class="form-group">
                        <label for="user" class="font-weight-bold">Date: </label>
                        <input type="date" class="form-control" id="date" name="bDate" autocomplete="off">
                        <span id="bdate" class="text-danger font-weight-bold"> </span>
                    </div>
                    
                    <!--No of Copies-->
                    <div class="form-group">
                        <label class="font-weight-bold">No Of Copies: </label>
                        <input type="text" class="form-control" id="cnumber" name="cnumber" autocomplete="off" placeholder="No of Copies">
                        <span id="cpnumber" class="text-danger font-weight-bold"> </span>
                    </div>
    
                    <!--Description About Books-->
                    <div class="form-group">
                        <label class="font-weight-bold">Description About Book: </label>
                        <input type="text" class="form-control" id="about" name="discription" autocomplete="off" placeholder="Discription about books">
                        <span id="aboutbook" class="text-danger font-weight-bold"> </span>
                    </div>
                    
                    <!--buttons-->
                    <input type="submit" name="submit" name="submit" value="submit" class="btn btn-success btn-lg" 	autocomplete="off">
                    
                    <button class="btn btn-primary btn-lg " type="button"  onclick="window.location.href='index2.html'">Cancel</button>
    
                </form><br><br>
                
                
                
                
                
               </div>
                
            </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


            <!--Validation part for add books-->

            <script type="text/javascript">
		            function validation(){

                    var Book_ID = document.getElementById('Book_ID').value;
                    var bname = document.getElementById('bname').value;
                    var bcategory = document.getElementById('bcategory').value;
                    var date = document.getElementById('date').value;
                    var cnumber = document.getElementById('cnumber').value;
                    var about = document.getElementById('about').value;
                    
        
        
        
                    if(Book_ID == ""){
				        document.getElementById('bookid').innerHTML =" ** Please fill the Course ID field";
				        return false;
			        }

			        if((Book_ID.length <= 0) || (Book_ID.length > 6)) {
				        document.getElementById('bookid').innerHTML =" ** Course ID lenght only 6 characters";
				        return false;	
			        }

        
                    if(bname == ""){
                        document.getElementById('bookname').innerHTML =" ** Please fill the Book Name field";
                        return false;
                    }
                    if((bname.length <= 2) || (bname.length > 30)) {
                        document.getElementById('bookname').innerHTML =" ** Book name lenght must be between 2 and 30";
                        return false;	
                    }
                    if(!isNaN(bname)){
                        document.getElementById('bookname').innerHTML =" ** only characters are allowed";
                        return false;
                    }
        
        
        
                    if(bcategory == ""){
                        document.getElementById('bctype').innerHTML =" ** Please fill the Course field";
                        return false;
                    }
        
        
        
                    if(date == ""){
                        document.getElementById('bdate').innerHTML =" ** Please fill the Book Issue Date field";
                        return false;
                    }
                    
        
        
                    if(cnumber == ""){
                        document.getElementById('cpnumber').innerHTML =" ** Please fill the Number of copies  field";
                        return false;
                    }
                    if(isNaN(cnumber)){
				        document.getElementById('cpnumber').innerHTML =" ** Fill Numbers only";
				        return false;
			        }
                
        
        
                    if(about == ""){
                        document.getElementById('aboutbook').innerHTML =" ** Please write About Book Details";
                        return false;
                    }
                    
        
        
        
                }
        
            </script>
            

</section>




