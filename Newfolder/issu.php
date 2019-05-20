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
    

   
                <span class="navbar-toggle-icon"> <i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item">
                        <a href="./issue.php"class="nav-link"><i class="fas fa-home"></i> BACK</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>


                    <div class="panel panel-warning">
					
                        <div class="panel-heading "><h1><center>customer Issue deteils</center></h1></div>
                        <div class="panel-body">
						
                            <table id="example" class="display table-responsive" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>customer ID</th>
                                <th>customer Name</th>
								<th>book Id</th>
								<th>book name</th>
								<th>divs</th>
                                <th>issue date</th>
                                <th>Date of return</th>
								
                               
                                <th></th>
								<th></th>
								
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = " SELECT * FROM customer_dit ";
                            $resultx = getData($sql);
                            if ($resultx != FALSE) {
                                while ($row = mysqli_fetch_assoc($resultx)) {
                                    ?>
                                    <tr>
                                        <td><?= $row['id'] ?></td>
                                        <td><?= $row['cid'] ?></td>
                                        <td><?= $row['c_name'] ?></td>
                                        <td><?= $row['bid'] ?></td>
                                        <td><?= $row['b_name'] ?></td>
										<td><?= $row['divs'] ?></td>
										<td><?= $row['date'] ?></td>
                                        <td><?= $row['return_date'] ?></td>
										
                                        
                                        <td></td>
                                        
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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

           

        <script src='../js/jquery-2.2.3.min.js'></script>

        <script>
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>

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
 
        <script src="../js/bootstrap.min.js"></script>


        <link href="../css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>
        
        
        
    </body>
    
    

</html>