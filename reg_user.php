
<?php require_once 'controllers/authControllers.php';?>
<?php include 'config/forms_validation.php';?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="css/bootstrap.min.js"></script>
  <script type="text/javascript" src="css/jquery.min.js"></script>
   <link href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/my_style.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="css/jquery.min.js"></script>
     <script type="text/javascript" src="css/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="sweetalert/sweetalert.css">
  <script type="text/javascript" src="sweetalert/sweetalert.min.js"></script>
<style type="text/css">
 
.register{
  background:rgba(0,0,0,0.5);
}
    input{border:none !important;
            background: none!important;
            border-bottom:2px solid white !important; 
            font-size: 30px !important;
            color:#ffffff!important;
        }
        input[type=file]{
          border-bottom:none !important; 
            font-size: none !important;
            color:none!important;
            padding: 0!important;
            margin: 0 !important;
            cursor: pointer !important;
            top: -100%;
        }
        input[type=file]:hover{
            border-bottom: none !important;
            cursor: pointer !important;
        }
        input:hover{
            border-bottom: 2px solid darkorange !important;
        }
        input[type=file]::placeholder{
            color:none!important;
            font-size:none !important;
        }
        input::placeholder{
            color:#fff!important;
            font-size: 30px !important;
        }
        input[type='date']{
            color:#fff!important;
            font-size: 30px !important;
        }
        button:hover{
            background: darkorange !important;
            border:none;
            opacity: 0.9;
            transition: 2s;
        }
        .log{
          background-color: rgb(0,0,0);
      background:rgba(0,0,0,0.4);
    /*  filter: blur(8px);
  -webkit-filter: blur(8px);*/
  border: 3px solid #f1f1f1;
  /*transform: translate(-50%, -50%);*/

      

    }




        form{
          margin-top: 80px!important;
          background:rgba(0,0,0.0.5)!important;
        }

</style>
</head>
<body style="background-image: url('img/clk2.png'),url('img/4.jpg');
background-repeat: no-repeat center center fixed;
/*background-position: center;*/
  -moz-background-size: cover;
  -o-background-size: cover;

 
      ">
<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WEB DESIGN</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-menubuilder">
                    <ul class="nav navbar-nav navbar-right">                      
                        <li ><a href="home.php">Home</a> </li>
                        <li class="active"><a href="reg_user.php">Register</a> </li>
                        <li ><a href="index.php">Login</a> </li>
                       <!--  <li ><a href="#"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
          <div class="row log md-col-4">
          <form method="post" enctype="multipart/form-data" autocomplete="off">
                         <?php if(count($errors)>0):?>
                            <div class="alert alert-info">
                          <button class='close' data-dismiss='alert'>&times;</button>
                           <?php foreach($errors as $error):?>
                            <li><?php echo $error;?></li>
                           <?php endforeach; ?>
                         </div>
                          <?php endif;?>

    <div class="form-group col-md-4">
      
    
                    
                    
                      
                      <img src="uploads/avatar-2.png" id="pic" style="width:70px; height: 70px; margin:0;padding: 0;">
                      
                      <input type="file" id="file" class="input-block-level"  name="image"  accept="image/*" onChange='readURL(this);' required>
                  
      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input type="text" class="form-control" id="inputEmail4" placeholder="First Name" name="fname" value="<?php echo $fname;?>"  onkeyup="letteronly(this)">
    </div>
  </div>
    <div class="form-group col-md-4">

       <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Middle Name" name="mname" value="<?php echo $mname?>" onkeyup="letteronly(this)">
    </div>
 </div>
  <div class="form-group col-md-4">
    
     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input type="text" class="form-control" id="inputAddress" placeholder="Last Name" name="lname" value="<?php echo $lname?>" onkeyup="letteronly(this)">
  </div>
</div>
  <div class="form-group col-md-4">
   
     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
    <input type="date" class="form-control" id="inputAddress2" placeholder="Date of Birth" name="dob" value="<?php echo $dob?>">
  </div>
</div>
  
  
    <div class="form-group col-md-4">
    
       <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
      <input type="text" class="form-control" id="inputCity" placeholder="Home town" name="hometown" value="<?php echo $hometown?>">
    </div>
  </div>
    <div class="form-group col-md-4">
     
       <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
      <input type="text" class="form-control" id="inputZip" placeholder="School" name="school" value="<?php echo $school?>">
    </div>
  </div>
    <div class="form-group col-md-4">
    
       <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-level-up"></i></span>
      <select id="inputState" class="form-control" name="level_edu" value="<?php echo $level_edu;?>">
        <option selected disabled="">Select Educational Level</option>
        <option>PRIMARY</option>
        <option>JHS</option>
        <option>SECONDARY</option>
        <option>TERTIARY</option>
      </select>
    </div>
    </div>
    <div class="form-group col-md-4">
  
       <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input type="text" class="form-control" id="inputZip" placeholder="username" value="<?php echo $username?>" name="username">
    </div>
  </div>
   
    <div class="form-group col-md-4">
    
       <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input type="text" class="form-control" id="inputZip" placeholder="password" name="password">
    </div>
    </div>
 
  <div class="offset-col-md-6">
     <div class="form-group col-md-4 ">
  
  <button type="submit" class="btn btn-primary form-control" name="submit"><i class="fa fa-sign-in"> Submit</i>


  </button>
 <!--  <?php
 
echo '<script type="text/javascript">';
 
echo 'setTimeout(function () { swal("WOW!","Message!","error");';
 
echo '}, 1000);</script>';
 
?> -->
</div>
</div>
</form>
 </div>
   </div>  

   <script type="text/javascript">
              
              function readURL(input){
                if(input.files && input.files[0]){
                  var reader = new FileReader();

                  reader.onload = function(e){
                    $('#pic')
                    .attr('src',e.target.result);
                  };

                  reader.readAsDataURL(input.files[0]);
                }
              }

            </script> 
       
</body>
</html>