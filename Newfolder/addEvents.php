<?php include "includes/db.php"; ?>

<?php
    if(isset($_POST['submit'])){
        
        $Event_ID = $_POST['Event_ID'];
        $ename = $_POST['ename'];
        $edate = $_POST['edate'];
        $edate=date("Y-m-d",strtotime($edate));
        $eabout = $_POST['eabout']; 
        
        
        
        $event_pic = $_FILES['image']['name'];
        $event_pic_temp = $_FILES['image']['tmp_name'];
        
        move_uploaded_file($event_pic_temp,"img/events/$event_pic");
        
        
         $Event_ID = mysqli_real_escape_string($connection,$Event_ID);
         $ename = mysqli_real_escape_string($connection,$ename);
         $eabout = mysqli_real_escape_string($connection,$eabout);
       
$query = "INSERT INTO events(Event_ID,ename,edate,eabout,image) VALUES ('{$Event_ID}','{$ename}','{$edate}','{$eabout}','{$event_pic}')";
        
        $add_query = mysqli_query($connection,$query);
        
        if($add_query){
            echo"Success";
             header('LOCATION: addEvents.php');
            
        }else{
             die("QUERY FAILED ".mysqli_error($connection));
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
    <title>Document</title>
</head>

<body data-spy="scroll" data-target="#main-nav" id="home">


    <!---navBar-->
<!--
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="main-nav">
        <div class="container">

            <a href="index.html" class="navbar-brand"><i class="fas fa-book-reader"></i> ABC LIBRARY</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggle-icon"> <i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item">
                        <a href="#home-section" class="nav-link"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#shop-head-section" class="nav-link"><i class="fas fa-mobile"></i> Category </a>
                    </li>
                    <li class="nav-item">
                        <a href="#join-head-section" class="nav-link"><i class="fas fa-users"></i> Join</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about-head-section" class="nav-link"><i class="fas fa-info-circle"></i> About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
-->





    <!---Events Home section-->


    <header id="home-section">
        <div class="div" id="dark-overlay">

            <div class="div" id="home-inner container">
                <div class="row mt-5 ">
                    <div class="col-lg-12 d-none d-lg-block mt-5 ">
                        <h1 class="disply-4 text-sm-center welcomeevents">
                            <strong> WELCOME ADMIN ! </strong><br> <br> <br>
                        </h1>
                        <img src="./img/admin.png" id="welcome-image"> <br> <br> <br> <br>

                    </div>

                </div>
            </div>
        </div>
    </header>

    <!--Add Events interface-->
    <section id="addevent-section" class="bg-light text-mute py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5 ml-end">
                    <img src="./img/events admin home.png" height="300" width="300" alt="event image" class="img-fluid mb-3 rounded-left event-pic">
                </div>
                <div class="col-md-4 text-center ">
                    <h1 class="text-dark"><u>ADD EVENTS</u></h1>
                    <div class="d-flex">

                        <div class="p-4 align-self-end ">
                            <h2>
                                <strong> If you wants to Add Events Click below button.You wants to give Event Name and small Event Description using filling the form </strong><br><br>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#contactmodal"><i class="fas fa-calendar-week"></i> Add Events</button>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Add event pop up modal-->
    <div class="modal fade text-dark" id="contactmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Events</h5>
                    <button type="close" data-dismiss="modal">
                        <span>&times;</span>

                    </button>
                </div>
                <div class="modal-body">

                    <!--add event form-->
                    <form action="" method="post" onsubmit="return validation()" class="bg-light" enctype="multipart/form-data">
                        
                        
                             <div class="form-group">
                            <label for="user" class="font-weight-bold">Upload Event Image: </label>
                         
                           <input type="file" name="image" id="image" class="form-control">
                         
                         
                        </div>

                        <!--event id-->
                        <div class="form-group">
                            <label for="user" class="font-weight-bold">Event ID: </label>
                            <input type="text" name="Event_ID" class="form-control" id="Event_ID" autocomplete="off" placeholder="ex-EXXX">
                            <span id="eventid" class="text-danger font-weight-bold"> </span>
                        </div>


                        <!--event name-->
                        <div class="form-group">
                            <label for="user" class="font-weight-bold">Event Name: </label>
                            <input type="text" name="ename" class="form-control" id="ename" autocomplete="off" placeholder="Event Name">
                            <span id="eventname" class="text-danger font-weight-bold"> </span>
                        </div>



                        <!--Event Date-->
                        <div class="form-group">
                            <label for="user" class="font-weight-bold">Event Date: </label>
                            <input type="date" name="edate" class="form-control" id="edate" autocomplete="off">
                            <span id="eventdate" class="text-danger font-weight-bold"> </span>
                        </div>

                        <!--Description About Events-->
                        <div class="form-group">
                            <label class="font-weight-bold">Event Details: </label>
                            <input type="text" name="eabout" class="form-control" id="eabout" autocomplete="off" placeholder="Event Deatils">
                            <span id="aboutevent" class="text-danger font-weight-bold"> </span>
                        </div>


                        <!--buttons-->
                        <input type="submit" name="submit" value="submit" class="btn btn-success btn-lg" autocomplete="off">
                        <button class="btn btn-primary btn-lg " type="button" onclick="window.location.href='index4.html'">Cancel</button>

                    </form><br><br>

                </div>

            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


    <!--Validation part for Add Events-->

    <script type="text/javascript">
        function validation() {

            var Event_ID = document.getElementById('Event_ID').value;
            var ename = document.getElementById('ename').value;
            var edate = document.getElementById('edate').value;
            var eabout = document.getElementById('eabout').value;




            if (Event_ID == "") {
                document.getElementById('eventid').innerHTML = " ** Please fill the Event ID field";
                return false;
            }

            if ((Event_ID.length <= 0) || (Event_ID.length > 4)) {
                document.getElementById('eventid').innerHTML = " ** Event ID lenght only 4 characters";
                return false;
            }


            if (ename == "") {
                document.getElementById('eventname').innerHTML = " ** Please fill the Event Name field";
                return false;
            }
            if ((ename.length <= 2) || (ename.length > 30)) {
                document.getElementById('eventname').innerHTML = " ** Event name lenght must be between 2 and 30";
                return false;
            }
            if (!isNaN(ename)) {
                document.getElementById('eventname').innerHTML = " ** only characters are allowed";
                return false;
            }



            if (edate == "") {
                document.getElementById('eventdate').innerHTML = " ** Please fill the Book Issue Date field";
                return false;
            }



            if (eabout == "") {
                document.getElementById('aboutevent').innerHTML = " ** Please write About Book Details";
                return false;
            }




        }

    </script>


    </section>

