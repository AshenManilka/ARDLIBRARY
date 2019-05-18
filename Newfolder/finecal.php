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
<section id="main-content">
	<section class="wrapper">
            
                   
            
            
            <h1><u><center>Fine Calculation</center></u></h1>
                <br>
                <br>
                <br>
                       
                        
                            <h4>
                            <strong>          
                                
                                <?php
		include "includes/fun.php"; 
		

                    if (isset($_POST['btnaddbook'])) {
                       $id=$_POST['mid'];
                    $book=viewproductimagebyid($id);
					$date1=$book['issue_date'];
					$date2=$book['return_date'];
					
					
					$diff1 = abs(strtotime($date2) - strtotime($date1));
					
$difff = floor(($diff1 )/ (60*60*24));
$int = (int)$difff;
						if($int<=13){
							
							$diff="No";
							
						}
						else{
							
							$diff= $int-13;
							
							$price= $diff*10;
						}
                    }
                    ?>
            
            <table 
            
		
                    
                    <div class="row">
                        
                         <div class="col-md-8">
                            <div class="panel panel-primary">
                                 <div class="panel-heading ">Find  Book</div> 
                                <div class="panel-body">
                                  <form class="form-horizontal" method="post" >
                               
                                  <div class="form-group">
                                    <label for="avalability" class="control-label col-xs-4">Member ID <span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input id="mid" name="mid" required="" type="text" class="form-control" maxlength="4" onkeypress="isInput(event)">
                                        
                                        
                                        
                                    </div>
                                </div>
								
								  
                                <div class="form-group row">
                                    <div class="col-xs-offset-4 col-xs-8">
                                        <button name="btnaddbook" type="submit" class="btn btn-primary">ISSUE</button>
                                    </div>
                                </div>
                                
                                      
                            </form>
                                </div>
                            </div>
                         
                        
                        
                         <div class="col-md-15">
                            <div class="panel panel-primary">
                                 <div class="panel-heading ">Return Book</div> 
                                <div class="panel-body">
                                  <form class="form-horizontal" method="post" >
                               
                             
                                  <div class="form-group">
                                    <label for="avalability" class="control-label col-xs-4">Member ID <span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input id="mid" name="mid" required="" type="text" class="form-control" maxlength="4"  value="<?php echo $book['book_number'] ?>" onkeypress="isInput(event)">
                                        
                                        
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="avalability" class="control-label col-xs-4">S date<span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input id="miname" name="miname" required="" type="text" value="<?php echo $book['issue_date'] ?>" class="form-control">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="author" class="control-label col-xs-4">E day<span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input  id="bid" name="bid" type="text" class="form-control" value="<?php echo $book['return_date'] ?>"  maxlength="4" onkeypress="isInput(event)">
                                    </div>
                                </div>
                                <script>
                                      function isInput(evt){
                                          var ch = String.fromCharCode(evt.which);
                                          if(!(/[0-9]/.test(ch))){
                                              evt.preventDefault();
                                          }
                                      }
                                </script>
                                 <div class="form-group">
                                    <label for="category" class="control-label col-xs-4">Diff daate<span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input id="bnam" required="" name="bnam" type="text" value="<?php echo $diff ?>" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="isbn" class="control-label col-xs-4">Price (RS.)<span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input id="dates" required="" name="dates" type="text"    value="<?php echo $price ?>"  class="form-control">
                                    </div>
                                </div>
                                  
                                
                                <div class="form-group row">
                                    <div class="col-xs-offset-4 col-xs-8">
                                        <button name="btnaddbook" type="submit" class="btn btn-primary">ISSUE</button>
                                    </div>
                                </div>
                                      
                            </form>
                                </div>
                            </div>
                        

                      

                        </div> </div>


                           
                        </div>  
                </div>

            
                
                
   


<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


            <!--Validation part for add books-->

           
            

</section>
























