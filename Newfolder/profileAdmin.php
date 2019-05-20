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
                </ul>
            </div>
        </div>
    </nav><br><br>

    
      <div class="display-1 text-center mt-5">ADMIN-PROFILE</div>
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-md-12">
              
                   <div class="row">
                        <div class="col-md-2"> 

                            
                        </div>
                        <div class="col-md-5">


                            <div class="panel panel-warning">
                                <div class="panel-heading ">
                                    <h4>Profile</h4>
                                </div>

                                <?php
                                if (isset($_POST['btnChangeInfo'])) {
                                    $sql = "UPDATE `registration`
SET `firstName` = '" . $_POST['firstName`'] . "',
  `lastname` = '" . $_POST['lastname'] . "',
  `username` = '" . $_POST['username'] . "',
  `email` = '" . $_POST['email'] . "',
  `address` = '" . $_POST['address'] . "',
  `mobile` = '" . $_POST['mobile'] . "'
WHERE `id` = '" . $_POST['id'] . "'";
                                    setUpdate($sql, TRUE);
                                    $_SESSION['firstName'] = $_POST['firstName'];
                                    $_SESSION['lastname'] = $_POST['lastname'];
                                    $_SESSION['username'] = $_POST['username'];
                                    $_SESSION['email'] = $_POST['email'];
									$_SESSION['address'] = $_POST['address'];
									$_SESSION['mobile'] = $_POST['mobile'];
                                }



                                if (isset($_POST['btnChangePass'])) {
                                    $new_password = $_POST['new_password'];
                                    $retype_password = $_POST['retype_password'];
                                    if (strlen($new_password) >= 6 && ($new_password == $retype_password)) {


                                        $sqlRead = "SELECT * FROM registration WHERE id = '" . $_POST['id'] . "' AND pword = PASSWORD('" . $_POST['old_password'] . "');";
                                        $data = getData($sqlRead);
                                        if ($data != null) {
                                            $sql = "UPDATE `registration`
SET 
  `pword` = PASSWORD('" . $_POST['new_password'] . "')
WHERE `id` = '" . $_SESSION['userbean']['id'] . "' AND pword = PASSWORD('" . $_POST['old_password'] . "');";
//                                            echo $sql;
                                            setUpdate($sql, TRUE);
                                        } else {
                                            echo 'Invalid password';
                                        }
                                    } else {
                                        echo 'Invalid password constrains';
                                    }
                                }
                                ?>
                                <div class="panel-body">
                                    <form class="form-horizontal" action="profile.php" method="post">
                                       
                                        <span class="mando-msg">* fields are mandatory</span>
                                        <input type="hidden" name="id" value="<?= $_SESSION['userbean']['id'] ?>" />
                                        <div class="form-group">
                                            <label for="text" class="control-label col-xs-4">First Name <span class="mando-msg">*</span></label> 
                                            <div class="col-xs-8">
                                                <input id="text" name="firstName" type="text" required="" class="form-control"  value="<?= $_SESSION['firstName'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="text1" class="control-label col-xs-4">Last Name <span class="mando-msg">*</span></label> 
                                            <div class="col-xs-8">
                                                <input id="text1" name="lastname" type="text" required="" class="form-control"  value="<?= $_SESSION['lastname'] ?>">
                                            </div>
                                        </div>

										 <div class="form-group">
                                            <label for="text5" class="control-label col-xs-4">User Name</label> 
                                            <div class="col-xs-8">
                                                <input id="text2" name="username" type="text" class="form-control"  value="<?= $_SESSION['userbean']['username'] ?>" readonly="" > 
                                            </div>
                                        </div>
                                        
                                       
                                        <div class="form-group">
                                            <label for="text3" class="control-label col-xs-4">Email <span class="mando-msg">*</span></label> 
                                            <div class="col-xs-8">
                                                <input id="text3" name="email" required="" type="text" class="form-control" value="<?= $_SESSION['userbean']['email'] ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="text5" class="control-label col-xs-4">Address</label> 
                                            <div class="col-xs-8">
                                                <input id="text4" name="address" type="text" class="form-control"  value="<?= $_SESSION['userbean']['address'] ?>"  > 
                                            </div>
                                        </div>
										
										 <div class="form-group">
                                            <label for="text5" class="control-label col-xs-4">Mobile</label> 
                                            <div class="col-xs-8">
                                                <input id="text5" name="mobile" type="number" class="form-control"  value="<?= $_SESSION['userbean']['mobile'] ?>"  > 
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xs-offset-4 col-xs-8">
                                                <button name="btnChangeInfo" type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">

                            <h3>Change Password </h3>
                            <form class="form-horizontal" action="profileAdmin.php"  method="post" >
                                <input type="hidden" name="id" value="<?= $_SESSION['userbean']['id'] ?>" />

                                <div class="form-group">
                                    <label for="text" class="control-label col-xs-4">Old Password</label> 
                                    <div class="col-xs-8">
                                        <input id="text" name="old_password" type="password" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text1" class="control-label col-xs-4">New Password</label> 
                                    <div class="col-xs-8">
                                        <input id="text1" name="new_password" type="password" class="form-control" placeholder="minimum 6 characters">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text2" class="control-label col-xs-4">Retype Password</label> 
                                    <div class="col-xs-8">
                                        <input id="text2" name="retype_password" type="password" class="form-control">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="col-xs-offset-4 col-xs-8">
                                        <button name="btnChangePass" type="submit" class="btn btn-primary">Change Password</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="col-md-1"></div>
                    </div>


                </div>
                  
              
          </div>
        </div>
      </div>
</body>
</html>

