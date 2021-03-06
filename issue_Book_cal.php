<?php
session_start();
include 'includes/DBs.php';
?>

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
<section id="main-content">
	<section class="wrapper">
		<?php
		
		include_once('function/fun.php');

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
                                 <div class="panel-heading ">Find  Member</div> 
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
                                        <button name="btnaddbook" type="submit" class="btn btn-primary">Check</button>
                                    </div>
                                </div>
                                
                                      
                            </form>
                                </div>
                            </div>
                         
                        
                        
                         <div class="col-md-15">
                            <div class="panel panel-primary">
                                 <div class="panel-heading ">Details Of Fine</div> 
                                <div class="panel-body">
                                  <form class="form-horizontal" method="post" >
                               
                             
                                  <div class="form-group">
                                    <label for="avalability" class="control-label col-xs-4">Book ID <span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input id="mid" name="mid" required="" type="text" class="form-control" maxlength="4"  value="<?php echo $book['book_number'] ?>" onkeypress="isInput(event)">
                                        
                                        
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="avalability" class="control-label col-xs-4">Start Date<span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input id="miname" name="miname" required="" type="text" value="<?php echo $book['issue_date'] ?>" class="form-control">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="author" class="control-label col-xs-4">End Date<span class="mando-msg">*</span></label> 
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
                                    <label for="category" class="control-label col-xs-4">Over Due<span class="mando-msg">*</span></label> 
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
			
		
</section>
   
 
</section>
<!--main content end-->
</section>

<!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
        
        
        
        
        <script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>



<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
        
        
       <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>

        
        
        
        
        
        
</body>



</html>


