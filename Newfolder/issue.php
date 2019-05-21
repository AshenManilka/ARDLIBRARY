<?php include "includes/db.php"; ?>

<?php 




if (isset($_POST['issue'])) {
    // print_r($_POST);

     $cid = $_POST['cid'];

echo $query = "SELECT * FROM `registration` WHERE id ='$cid' ";
          

    
    $resultkk =  mysqli_query($connection, $query);
    
    while($row=mysqli_fetch_assoc($resultkk)){

     $firstName=$row['firstName'];
     $id=$row['id'];	
    }
    if(!$id==$cid){
        header('LOCATION: issue.php?mass=no');
        return false;
    }

     $b_no = $_POST['b_no'];
  $q="SELECT * FROM `bookskk` where bid='$b_no'";
    $resultkk2 =  mysqli_query($connection, $q);
    
    if($row2=mysqli_fetch_assoc($resultkk2)){

     $bname=$row2['bookName'];
     $cnum=$row2['cnumber'];
     $bid=$row2['bid'];
     
    }
    if(!$bid==$b_no){
        header('LOCATION: issue.php?mass=nos');
        return false;
    }

     $cnum--;
     $q2="UPDATE `bookskk` set cnumber='$cnum' where bid='$b_no'";
     $resultkk3 =  mysqli_query($connection, $q2);
    
    
    $t_give = $_POST['t_give'];
    $firstName = $firstName;

 

        $now=date("Y-m-d H:i:s",strtotime("0 day"));
        $t=$t_give." day";
        $ex=date("Y-m-d H:i:s",strtotime($t));


    $queryss = "INSERT INTO customer_dit(cid,c_name,bid,b_name,divs,`date`,return_date) VALUES ('$cid','$firstName','$b_no','$bname','$t_give','$now','$ex')";

    $add_query = mysqli_query($connection, $queryss);

    $query = "INSERT INTO issus_book(cid,c_name,b_no,t_give,b_name) VALUES ('$cid','$firstName','$b_no','$t_give','$bname')";

    $add_query = mysqli_query($connection, $query);

    

    if($add_query){
         header('LOCATION: issue.php?mass=ok');
    }else{
         header('LOCATION: issue.php?mass=no');
         
    }
   
}

if (isset($_GET['mass'])) {

    if( $_GET['mass']=='ok'){
         echo "<script>alert('issue success');</script>";
         
    }else if($_GET['mass']=='nos'){
        echo "<script>alert('ther is not bid like this');</script>"; 
    }
    else{
         echo "<script>alert('ther is not cid like this');</script>";
        
    }
}
?>
<?php
if (isset($_POST['submit'])) {

    $b_no = $_POST['b_no'];
    $cid = $_POST['cid'];

   /* echo $queryas = "SELECT * FROM `return_book` WHERE b_no ='$b_no' ";
          

    
    $resultkw =  mysqli_query($connection, $queryas);
    
    while($row=mysqli_fetch_assoc($resultkw)){

     $b_no=$row['b_no'];
     $cid = $row['cid'];	
    }

    if(!$b_no==$b_no){
        header('LOCATION: issue.php?mas=nos');
        return false;
    }





    
    if(!$cid==$cid){
        header('LOCATION: issue.php?mas=nos');
        return false;
    }
    */



    $query = "INSERT INTO return_book(b_no,cid) VALUES ('$b_no','$cid')";

    $add_query = mysqli_query($connection, $query);

    if($add_query){
        header('LOCATION: issue.php?mas=ok');
   }else{
        header('LOCATION: issue.php?mas=no');
        
   }
    /*if ($add_query) {
        echo"Success";
        header('LOCATION: issue.php');
    } else {
        die("QUERY FAILED" . mysqli_error($connection));
    }*/
}
if (isset($_GET['mas'])) {

    if( $_GET['mas']=='ok'){
         echo "<script>alert('Return success');</script>";
         
    }
    /*else if($_GET['mas']=='nos'){
        echo "<script>alert('ther is not bid like this');</script>"; 
    }*/
    else{
         echo "<script>alert('Return not success');</script>";
         return false;
    }
}
?>

<?php

    $query = "SELECT * FROM bookskk";
                                                
    
    $result =  mysqli_query($connection, $query);
    $result5 =  mysqli_query($connection, $query);
    
    


?>
<?php

$query = "SELECT * FROM issus_book";
                                            

$result9 =  mysqli_query($connection, $query);




?>

<?php

    
    $query = "SELECT * FROM registration";                                            
    
    
    $result1 =  mysqli_query($connection, $query);
    $result7 =  mysqli_query($connection, $query);


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

                <a href="adminpro.php" class="navbar-brand"><i class="fas fa-book-reader"></i>  ARD LIBRARY</a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggle-icon"> <i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto ">
                        <li class="nav-item">
                            <a href="adminpro.php"class="nav-link"><i class="fas fa-home"></i> Admin Profile</a>
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
                        <img src="./img/804508_book_512x512.png" alt="issue" class="img-fluid mb-3 rounded-left event-pic">
                    </div>
                    <div class="col-md-4 text-center ">
                        <h1 class="text-dark"><u>BORROW AND RETURN</u></h1>
                        <div class="d-flex">

                            <div class="p-4 align-self-end ">
                                <h2>
                                    <strong>          


                                    </strong><br><br>
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#contactmodal">Issue Book</button>
                                </h2>
                            </div>  
                            <div class="p-4 align-self-end ">
                                <h2>
                                    <strong>          


                                    </strong><br><br>
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#contactmoda">Return Book</button>
                                </h2>
                            </div>  


                            <div class="p-4 align-self-end ">
                                <h2>
                                    <strong>          


                                    </strong><br><br>

                                    <a href="issu.php" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Customer Issue Status</a></button>

                                </h2>
                            </div>  
                             <div class="p-4 align-self-end ">
                                <h2>
                                    <strong>          


                                    </strong><br><br>

                                    <a href="booka.php" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Book Status</a></button>

                                </h2>
                            </div>  





                        </div>

                        <!--Add book pop up modal-->
                        <div class="modal fade text-dark" id="contactmodal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Issue Book</h5>
                                        <button type="close" data-dismiss="modal">
                                            <span>&times;</span>

                                        </button>
                                    </div>
                                    <div class="modal-body">


                                        <!--add book form-->
                                        <form action="" method="POST" onsubmit="return my()" class="bg-light" enctype="multipart/form-data">
                                            <!--customer id-->

                                            <div class="form-group">
                                                <label for="user" class="font-weight-bold">Enter CID: </label>
                                                 
                                                <input type="number" list="cid2" name="cid" id="cid" class="form-control" required />
                                                <datalist id="cid2">
                                                
                                                    <?php while ($row1 = mysqli_fetch_array($result1)):; ?>
                                                    <option value = "<?php echo $row1[0]; ?>" > <?php echo $row1[0]; ?>--<?php echo $row1[1]; ?> </option>
                                                    <?php endwhile; ?>
                                                </datalist>
                                                
                                                
                                                <span id="cids" class="text-danger font-weight-bold"> </span>


                                            </div>

                                            <div class="form-group">
                                                <label for="user" class="font-weight-bold">Book ID: </label>
                                                

                                                <input type="text" list="b_no2" class="form-control" id="b_no" name="b_no" autocomplete="off" required />
                                                <datalist id="b_no2">
                                                
                                                    <?php while ($row2 = mysqli_fetch_array($result)):; ?>
                                                    <option value = "<?php echo $row2[1]; ?> " > <?php echo $row2[1]; ?> -- <?php echo $row2[2]; ?> </option>
                                                    <?php endwhile; ?>
                                                 
                                                </datalist>
                                                
                                                <div class="form-group">
                                                <label for="user" class="font-weight-bold">time period to return: </label>

                                                <input type="number" name="t_give" id="t_give" class="form-control" required>

                                                <span id="td" class="text-danger font-weight-bold"></span>

                                             </div>


                                                <span id="bookid" class="text-danger font-weight-bold"> </span>
                                            </div>
                                            
                                           
                                            


                                            <!--buttons-->
                                            <input type="submit"  name="issue" value="issue" class="btn btn-success btn-lg" 	autocomplete="off">

                                            <button class="btn btn-primary btn-lg " type="button"  onclick="window.location.href = 'issue.php'">Cancel</button>

                                        </form><br><br>





                                    </div>

                                </div>
                            </div>

                        </div>


                        <div class="modal fade text-dark" id="contactmoda">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Return Book</h5>
                                        <button type="close" data-dismiss="modal">
                                            <span>&times;</span>

                                        </button>
                                    </div>
                                    <div class="modal-body">


                                        <!--add book form-->
                                        <form action="" method="POST" class="bg-light" enctype="multipart/form-data">
                                            <!--customer id-->

                                            <div class="form-group">
                                                <label for="user" class="font-weight-bold">Enter BookID: </label>
                                                
                                        <input type="text" name="b_no" id="b_no" class="form-control" list="b_no2" required/>
                                                <datalist id="b_no2">
                                                <?php while ($row2 = mysqli_fetch_array($result9)):; ?>
                                                    <option value = "<?php echo $row2[3]; ?> " > <?php echo $row2[3]; ?> -- <?php echo $row2[4]; ?> </option>
                                                    <?php endwhile; ?>
                                                    
                                                </datalist>
                                                <span id="bookid" class="text-danger font-weight-bold"></span>

                                             </div>

                                            <div class="form-group">
                                                <label for="user" class="font-weight-bold">enter CID: </label>
                                                
                                                <input list="cid2" type="text" class="form-control" id="cid" name="cid" autocomplete="off" required />
                                                <datalist id="cid2">
                                                <?php while ($row1 = mysqli_fetch_array($result9)):; ?>
                                                    <option value = "<?php echo $row1[1]; ?>" > <?php echo $row1[1]; ?>--<?php echo $row1[2]; ?> </option>
                                                    <?php endwhile; ?>  
                                                    
                                                </datalist>


                                               
                                                
                                                

                                                <span id="cids" class="text-danger font-weight-bold"> </span>
                                            </div>

                                            

                                            <!--buttons-->
                                            <input type="submit" name="submit" name="submit" value="submit" class="btn btn-success btn-lg" autocomplete="off" >

                                            <button class="btn btn-primary btn-lg " type="button"  onclick="window.location.href = 'issue.php'">Cancel</button>
                                            
                                            <button class="btn btn-primary btn-lg " type="button"  onclick="window.location.href = 'issue_Book_cal.php'">Fine cal</button>

                                        </form><br><br>





                                    </div>

                                </div>
                            </div>

                        </div>                

                        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


                        <!--Validation part for add books-->

                        
                           
    



                        </section>
