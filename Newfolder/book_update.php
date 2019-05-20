<!--
Design: IT17049146  H.A.D.A. Perera
Function Administrator
-->


<?php include "includes/DBs.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ARD Library</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="keywords" content="" />
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
		
		
		
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="./cs/home2.css">
		
		
		
		
		
		
		
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="../css/style4.css">
        <link href="../css/fontawesome-all.css" rel="stylesheet">
		<link rel='stylesheet prefetch' href='http://dfcb.github.io/extra-strength-responsive-grids/css/grid.css'>
		<link rel='stylesheet prefetch' href='http://thisisstar.com/images/100UI/002/css/paymentfont.css'>

<style>
body {
  
  font-weight: 100;
  height: 100%;
  width: 100%;
  background: 
    /* top, transparent red, faked with gradient */ 
    linear-gradient( 
      rgba(200, 247, 197, 0.4),
      rgba(129, 207, 224, 0.8)
    ),
    linear-gradient( 
      rgba(130, 130, 130, 0.5),
      rgba(130, 130, 115, 0.6)
    ),
    
    radial-gradient(ellipse closest-side at center, rgba(255, 255, 255, 0.9) 50%, rgba(0, 0, 0, 0.4) 100%),
    /* bottom, image */
    url(http://www.thisisstar.com/images/100UI/002/black_marble.jpg) no-repeat center center;
  background-size: cover;
  background-attachment: fixed;
  background-blend-mode: multiply,normal,normal,normal;
}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

    </head>


    <body>
	 <div class="wrapper">
            <!-- Sidebar Holder -->
            

            <!-- Page Content Holder -->
            <div id="content">
                <!-- top-bar -->
               
                <!--// top-bar -->

                <!-- main-heading -->
                <!--// main-heading -->
                <!-- Page Content -->
                <div class="blank-page-content">
                    
                    <div class="row">
       

                        <?php
                        if (isset($_POST['btnUpdate'])) {

                            $sqlUpdate = "UPDATE books
SET `id` = '" . $_POST['id`'] . "',
`bookName` = '" . $_POST['bookName`'] . "',
  `bcategory` = '" . $_POST['bcategory`'] . "',
  `author` = '" . $_POST['author'] . "',
  `pages` = '" . $_POST['pages'] . "',
  `publisher` = '" . $_POST['publisher'] . "',
  `cnumber` = '" . $_POST['cnumber'] . "',
  `discription` = '" . $_POST['discription'] . "'
WHERE `id` = '" . $_POST['id'] . "';";
                            setUpdate($sqlUpdate, TRUE);
                        } 
                        ?>
                        <div class="col-md-8">
						
						

                           
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">Update Book Information</div>
                                        <div class="panel-body">
										<form class="form-horizontal" action="book_update.php" method="post">
										
										


                                        <input type="hidden" value="<?php echo $row['id'] ?>" name="id"  />
                                        <span class="mando-msg">* fields are mandatory</span>
                                        <div class="form-group">
                                            <label for="text" class="control-label col-xs-4">Book Name <span class="mando-msg">*</span></label> 
                                            <div class="col-xs-8">
                                                <input id="text" name="bookName" type="text"  required="" class="form-control" value="<?php echo $row['bookName'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="text1" class="control-label col-xs-4">Category <span class="mando-msg">*</span></label> 
                                            <div class="col-xs-8">
                                                <input id="text1" name="bcategory" type="text" required="" readonly="" class="form-control" value="<?php echo $row['bcategory'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="text2" class="control-label col-xs-4">Author <span class="mando-msg">*</span></label> 
                                            <div class="col-xs-8">
                                                <input id="text2" name="author" type="text" required="" class="form-control" readonly="" value="<?php echo $row['author'] ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="text3" class="control-label col-xs-4">Pages</label> 
                                            <div class="col-xs-8">
                                                <input id="text3" name="pages" type="text" class="form-control" value="<?php echo $row['pages'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="text4" class="control-label col-xs-4">Publisher</label> 
                                            <div class="col-xs-8">
                                                <input id="text4" name="publisher" type="text" class="form-control" value="<?php echo $row['publisher'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="text5" class="control-label col-xs-4">Availability <span class="mando-msg">*</span></label> 
                                            <div class="col-xs-8">
                                                <input id="text5" name="cnumber"  type="text" required="" class="form-control" value="<?php echo $row['cnumber'] ?>">
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label for="text4" class="control-label col-xs-4">Discription</label> 
                                            <div class="col-xs-8">
                                                <input id="text6" name="discription" type="text" class="form-control" value="<?php echo $row['discription'] ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-xs-offset-4 col-xs-8">
                                                <button name="btnUpdate" type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
										
										
                                    </form>
                                        </div>
                                    </div>

                                
                                   
                                  


                        </div>

                       




                        </div>
                    </div>


                    <div class="panel panel-warning">
                        <div class="panel-heading ">Book List</div>
                        <div class="panel-body">
                             <table id="example" class="display table-responsive" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Book ID</th>
                                <th>Book Name</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th>Pages</th>
                                <th>Publisher</th>
                                <th>Availability</th>
                                <th>Discription</th>
                               
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = " SELECT * FROM books ";
                            $resultx = getData($sql);
                            if ($resultx != FALSE) {
                                while ($row = mysqli_fetch_assoc($resultx)) {
                                    ?>

                                    <tr>
                                        <td><?= $row['bid'] ?></td>
                                        <td><?= $row['bookName'] ?></td>
                                        <td><?= $row['bcategory'] ?></td>
                                        <td><?= $row['author'] ?></td>
                                        <td><?= $row['pages'] ?></td>
                                        <td><?= $row['publisher'] ?></td>
                                        <td><?= $row['cnumber'] ?></td>
                                        <td><?= $row['discription'] ?></td>
                                        
                                        <td><a class="btn btn-success btn-sm" >update</a></td>

                                    </tr>

                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                        </div>
                    </div>
                   


                </div>

               
            </div>
        </div>


        <!-- Required common Js -->
        <script src='../js/jquery-2.2.3.min.js'></script>
        <!-- //Required common Js -->

        <!-- Sidebar-nav Js -->
        <script>
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
        <!--// Sidebar-nav Js -->

        <!-- dropdown nav -->
        <script>
            $(document).ready(function () {
                $(".dropdown").hover(
                        function () {
                            $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                            $(this).toggleClass('open');
                        },
                        function () {
                            $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                            $(this).toggleClass('open');
                        }
                );
            });
        </script>
        <!-- //dropdown nav -->

        <!-- Js for bootstrap working-->
        <script src="../js/bootstrap.min.js"></script>
        <!-- //Js for bootstrap working -->


        <link href="../css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>
    </body>

</html>


