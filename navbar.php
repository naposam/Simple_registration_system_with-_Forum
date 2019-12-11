<head>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/my_style.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/jquery-ui.css" rel="stylesheet" type="text/css" />

    <script src="dist/js/jquery-ui.js"></script>
    <script src="dist/js/jquery-2.1.4.js"></script>

</head> 
<body style="background-image: url('img/colorful.jpg')">
<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
            <div class="container">
                <?php $get_id = $_SESSION['id']; ?>
                        <?php 
                        $query= mysqli_query($conn,"SELECT * ,year(curDate())-year(dob) as age from register_tb  where user_id ='$get_id'")or die(mysqli_error($conn));
                        $row = mysqli_fetch_array($query);
                        
                        ?>
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><p><?php echo  strtoupper($row['username']);?>&nbsp;<img src="uploads/<?php echo $row["picture"]?>"  height="50px" width="50px" style="position: absolute;top:-1px;border-radius: 20px;"> </P>
                        &nbsp; <!-- <?php echo  strtoupper($row['username'])." You are ".$row['age']." Years old";?></a> -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                 
                <div class="collapse navbar-collapse navbar-menubuilder">
                    <ul class="nav navbar-nav navbar-right">                      
                        <li ><a href="view_user.php"><span class="glyphicon glyphicon-user"></span>User Profile</a></li>
                        <li class="active"><a href="controllers/logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
</body>
    