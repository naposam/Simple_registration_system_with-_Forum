<!DOCTYPE html>

<html >
<head >
    
    <meta charset="utf-8"/>
   
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta http-equiv="refresh" content="5" >
       
    <title>Home</title>

    <!-- ============ Add custom CSS here ============ -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/my_style.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="all">
    <script type="text/javascript" src="css/jquery.min.js"></script>
     <script type="text/javascript" src="css/bootstrap.min.js"></script>

    <script src="dist/js/jquery-ui.js"></script>
    <script src="dist/js/jquery-2.1.4.js"></script>

   <style type="text/css">
        *{
            padding: 0;
            margin: 0;
        }
        .load{
            animation: slide 2s;

        }
        .slider{
            background-repeat: no-repeat;
            background-size: cover;
            background-position: cover;
            width: 100%;
            
            animation: slide 40s infinite;


        }
        .content{
            columns: #fff;
            width: 100%;
            height: 100vh;
            background-color: rgba(0,0,0,0.5);
        }
        .principal{
            left: 50%;
            top:50%;
            transform: translate(-50%,-50%);
            position: absolute;
            text-align: center;
            letter-spacing: 5px;
            
        }
        .principal h1{
            font-size: 40px;
            margin-bottom: 20px: 
            
        }
        h1{
            color:#ffffff !important;
            text-shadow: 2px 2px 2px darkorange;
        }
        h2{
            color:#ffffff !important;
             text-shadow: 2px 2px 2px green;

        
        }
        .principal p{
            font-size: 20px;
        }
        @keyframes slide{
          0%{
background-image: url('img/1.jpg');
          }
          20%{
background-image: url('img/2.jpg');
          }
           20.01%{
background-image: url('img/3.jpg');
          }
          40%{
background-image: url('img/4.jpg');
          }
           40.01%{
background-image: url('img/sam1.jpg');
          }
          60%{
background-image: url('img/kb1.jpg');
          }
           60.01%{
background-image: url('img/banner/sams.jpg');
          }
          80%{
background-image: url('img/vb1.jpg');
          }
           80.01%{
background-image: url('img/sam1.jpg');
          }
          100%{
background-image: url('img/kb1.jpg');
          }
          100.01%{
background-image: url('img/jk1.jpg');
          }

        }
        
    </style>
</head>

</head>
<body style="background-image: url('img/colorful.jpg')">
    
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
                        <li class="active"><a href="home">Home</a> </li>
                        <li ><a href="reg_user.php">Register</a> </li>
                        <li><a href="index.php">Login</a> </li>
                        <!-- <li ><a href="#"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
<div class="slider">
    <div class="load"></div>
    <div class="content">
        
    
    <div class="principal">
        <h1 class="text animated hinge">ADVANCE WEB DESIGN</h1>
        <p><h2 class="animated flash">GROUP ....</h2></p>
        </div>
    </div>
  </div>
     


      
        
   
</body>
</html>