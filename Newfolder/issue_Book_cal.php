<?php
session_start();
include '../DB.php';
?>

<!DOCTYPE html>
<head>
    
    
<title>ARD Library</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> 
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0); 
    }, false); function hideURLbar(){ window.scrollTo(0,1); }
</script>


<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >


<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>

<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>

<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">

 <link href="css/fontawesome-all.css" rel="stylesheet">
        <!--// Fontawesome Css -->
        <!--// Style-sheets -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
   
</head>


<body>
    
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="home.php" class="logo">
        ARD Library
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
  <?php     include_once '../_top_bar.php'; ?>

</header>
<!--header end-->


                        <?php include '../_tree_admin.php'; ?>


    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<?php
		
		include_once('../function/fun.php');

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
			
		
</section>
    <?php include '../_footer.php'; ?>
 
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


