<?php require 'config/db.php';?>
<?php include('controllers/session.php'); ?>
<?php $get_id = $_SESSION['id']; ?>
<!DOCTYPE html>

<html >
<head >

   
    <meta charset="utf-8"/>
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="Coming soon, Bootstrap, Bootstrap 3.0, Free Coming Soon, free coming soon, free template, coming soon template, Html template, html template, html5, Code lab, codelab, codelab coming soon template, bootstrap coming soon template"/>

    <title>Forum</title>

    <!-- ============ Add custom CSS here ============ -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/my_style.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/hover.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="css/jquery.min.js"></script>
     <script type="text/javascript" src="css/bootstrap.min.js"></script>

    <link rel="stylesheet" href="dist/css/AdminLTE.min.css" type="text/css"/>
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css" type="text/css"/>
    <link rel="stylesheet" href="dist/css/style.css" type="text/css"/>
    <link rel="stylesheet" href="dist/css/custom.css" type="text/css"/>

    <style>
        html, html a {
            color:#e2e2e2;
            -webkit-font-smoothing: antialiased;
            text-shadow: 1px 1px 1px rgba(0,0,0,0.004);
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background: #e2e2e2;
        }

        #plans, #plans ul, #plans ul li {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        #pricePlans {
            width: 155px;
        }

            #pricePlans #plans .plan {                
                float: left;
                width: 100%;
                text-align: center;
            }

        .planContainer .options li {
            font-weight: 700;
            color: #364762;
            line-height: 2.5;
        }

            .planContainer .options li span {
                color: #e2e2e2;
            }

        .planContainer .button {
            text-decoration: none;
            color: #e2e2e2;
            font-weight: 700;
            line-height: 2.6em;
            border: 2px solid #e2e2e2;
            display: inline-block;
            width: 80%;
            height: 2.8em;
            border-radius: 4px;
        }

        .shift {
            margin-left: 10px;
        }

        .planContainer .button.bestPlanButton {
            color: #fff;
            background: #f7814d;
            border: 2px solid #f7814d;
        }

        @media screen and (min-width: 1025px) {

            #pricePlans #plans .plan {
                margin: 5px;
            }

            .planContainer .button:hover {
                background: #e2e2e2;
                color: #3e4f6a;
            }

            .planContainer .button.bestPlanButton:hover {
                background: #ff9c70;
                border: 2px solid #ff9c70;
            }
        }

        .fixed-content {
            height:490px;          
            position: fixed;
            overflow-y: scroll;
            overflow-x: hidden;
        }

        .assignment {            
            background: rgba(0, 0, 0, 0.3);
            color: #FFF !important;
        }

    </style>

</head>
<body style="background-image:url('img/002.jpg')">
    
    
        <div id="custom-bootstrap-menu" class="navbar navbar-default" role="navigation">
            <div class="container">
                <?php $get_id = $_SESSION['id']; ?>
                        <?php 
                        $query= mysqli_query($conn,"SELECT * ,year(curDate())-year(dob) as age from register_tb  where user_id ='$get_id'")or die(mysqli_error($conn));
                        $row = mysqli_fetch_array($query);
                        
                        ?>
                <div class="navbar-header">
                    <a  id="logo" class="navbar-brand"><p><?php echo $row['fname']." ".$row['mname']. " ".$row['lname'];?><img src="uploads/<?php echo $row["picture"]?>"  height="50px" width="50px" style="position: absolute;top:-1px;border-radius: 20px;"></p></a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-menubuilder">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="profile.php"><span class="glyphicon glyphicon-home"></span></a> </li>
                        <li class="active"><a href="forum.php"><span class="glyphicon glyphicon-comment"></span> Forum</a> </li>
                        <!-- <li class="active"><a href="forum.php">Forum</a> </li> -->
                        <li><a href="controllers/logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 assignment" style="width: 200px; height: 560px; border-radius: 5px">
             <div style="text-align: center; text-decoration: underline">
                 <!-- <h3>Lessons</h3> -->
             </div>
             <div >
                

                 <a href="view_user.php" class="btn btn-primary btn-sm" style="margin: 5px;"><i class="fa fa-eye"> &nbsp;&nbsp;&nbsp; &nbsp;View Details</i></a>
                  <a href="update.php" class="btn btn-success btn-sm" style="margin: 5px;"><i class="fa fa-pencil"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Update</i></a>
                  <a href="changepass.php" class="btn btn-warning btn-sm" style="margin: 5px;"><i class="fa fa-lock"> Change Password</i></a>
                  <a href="forum.php" class="btn btn-danger btn-sm" style="margin: 5px;"><i class="fa fa-comments "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Forum</i></a>
             </div>
         </div>

        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">

            <div class="box box-primary direct-chat direct-chat-primary">
                <div class="box-header with-border" style="background-color:#e2e2e2">
                    <i class="fa fa-comments fa-fw"></i>
                    <Label ID="txtChatTitle"  class="box-title text-primary">Chat Room</Label>
                </div>
                <!-- /.box-header -->
                <div class="box-body" style="background-color:#e2e2e2">
                    <!-- Conversations are loaded here -->
                                             <?php
                          if(isset($_POST['send'])){
                           $message=$_POST['message'];
                            if(!empty($message)){

                      mysqli_query($conn,"INSERT INTO message(user_id,message)VALUES('$get_id','$message')");

                        }else
                        {echo "<div class='alert alert-info'>Your a comment to post
                         <button class='close' data-dismiss='alert'>&times;</button>
                        </div>";}
                       }

              ?>    
                    <div class="direct-chat-messages" style="max-height: 445px; height: 445px">

                    

                        <div class="jumbotron" >
                            <ItemTemplate>
                                <!-- Message. Default to the left -->
                                <div class="direct-chat-msg" style="margin: 10px">
                                    <div class="direct-chat-info clearfix">
                                        
             
                                    </div>
                                    
                                   <?php

                                    $select="SELECT register_tb.fname,register_tb.picture,register_tb.lname,message.message,message.msg_time from register_tb LEFT JOIN message on register_tb.user_id=message.user_id where register_tb.user_id=message.user_id ORDER BY message.msg_time DESC ";
                                    $result=mysqli_query($conn,$select);
                                    while($row2=mysqli_fetch_array($result)){
                                    $name= $row2['fname']." ".$row2['lname'];
                                    $message=$row2['message'];
                                     $datepaid=date('Y-m-d', strtotime($row2['msg_time']));
                                     $time=date('H:i A',strtotime($row2['msg_time']));
                                    ?>
                                
                                    <div class="direct-chat-text" style="word-wrap: break-word; word-break: break-all">
                                     <p><img src="uploads/<?php echo $row2["picture"]?>"  height="50px" width="50px" style="position: absolute;top:-1px;border-radius: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $name ;?><p>
                                    <p style="font-family: sans-serif;font-size: 15px; font-weight: bold;"><?php echo $message; ?><p>
                                    <small style="font-style: italic; font-weight: bold;font-size:10px;"><?php echo  $datepaid;?></small>
                                    <small style="font-style: italic; font-weight: bold;font-size:10px;"><?php echo  $time?></small>
                                    <?php  if(!$_SESSION['id']):?>
                                    <small style="font-style: italic; font-weight: bold;font-size:10px;"><?php echo " <span class='badge btn btn-primary'>online</span>";?></small>
                                    <?php  endif;?>
                                    </div>
                                   
                                    <?php

                           }

                                   ?>
                                  <!--  <img src="uploads/<?php //echo $row["picture"]?>"  height="50px" width="50px" style="position: absolute;top:-1px;border-radius: 20px;"> -->

                                    <!-- /.direct-chat-text -->
                                </div>
                                <!-- /.direct-chat-msg -->
                            </ItemTemplate>
                        </div>

                    </div>
                    <!--/.direct-chat-messages-->
                </div>
                <!-- /.box-body -->
                <div class="box-footer" style="background-color:#e2e2e2">
                    <form action="#" method="post">
                        <div class="input-group ">
                            <input type="text"  id="txtMessage" placeholder="Type Message ..." class="form-control" name="message" />
                            <span class="input-group-btn">
                                <button   id="btnSend" class="btn btn-primary btn-flat" name="send">Send</button>
                            </span>
                        </div>
                    </form>
                </div>
              
            </div>

        </div>

   
</body>
</html>
