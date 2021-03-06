<?php require 'config/db.php';?>
<?php include('controllers/session.php'); ?>
<?php $get_id = $_SESSION['id']; ?>
<!DOCTYPE html>

<html >
<head >

   
    <meta charset="utf-8"/>
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <
    <title>Change Password</title>

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
     <link rel="stylesheet" type="text/css" href="sweetalert/sweetalert.css">
  <script type="text/javascript" src="sweetalert/sweetalert.min.js"></script>


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
                        <li class="active"><a href="changepass.php"><span class="glyphicon glyphicon-lock"></span> Change Password</a> </li>
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
                <!--  <asp:DataList ID="dlLessons" runat="server" OnItemCommand="Item_Command">
                     <ItemTemplate>
                         <div id="pricePlans" style="overflow: hidden">
                             <ul id="plans">
                                 <li class="plan">
                                     <ul class="planContainer">
                                         <li>
                                             <asp:LinkButton ID="lnkBtn" CssClass="button" Text='<%# DataBinder.Eval(Container.DataItem, "lesson_id")%>' CommandName='<%# DataBinder.Eval(Container.DataItem, "lesson_id")%>' runat="server" />
                                         </li>
                                     </ul>
                                 </li>
                             </ul>
                         </div>
                     </ItemTemplate>
                 </asp:DataList> -->

                 <a href="view_user.php" class="btn btn-primary btn-sm" style="margin: 5px;"><i class="fa fa-eye"> &nbsp;&nbsp;&nbsp; &nbsp;View Details</i></a>
                  <a href="update.php" class="btn btn-success btn-sm" style="margin: 5px;"><i class="fa fa-pencil"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Update</i></a>
                  <a href="changepass.php" class="btn btn-warning btn-sm" style="margin: 5px;"><i class="fa fa-lock"> Change Password</i></a>
                  <a href="forum.php" class="btn btn-danger btn-sm" style="margin: 5px;"><i class="fa fa-comments "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Forum</i></a>
             </div>
         </div>

        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">

            <div class="box box-primary direct-chat direct-chat-primary">
                <div class="box-header with-border" style="background-color:#e2e2e2">
                    <i class="fa fa-pencil"></i>
                    <Label style="text-align: center;"  class="box-title text-primary">UPDATE</Label>
                </div>
                <!-- /.box-header -->
                <div class="box-body" style="background-color:#e2e2e2">
                    <!-- Conversations are loaded here -->
                    <div class="direct-chat-messages" style="max-height: 445px; height: 445px">

                      <!--   <asp:Label CssClass="Absolute-Center is-Responsive" Text="Select Lesson to join chat!!!" ID="lblPrompt" runat="server" Font-Bold="True" Font-Size="20" />
 -->
                        <div class="jumbotron" >
                            <ItemTemplate>
                                <!-- Message. Default to the left -->
                                <div class="direct-chat-msg" style="margin: 10px">
                                    <div class="direct-chat-info clearfix">
                                        
                                        
                                    </div>
                                    <!-- /.direct-chat-info -->
                                   <!--  <asp:Image runat="server" CssClass="direct-chat-img" ImageUrl='<%# DataBinder.Eval(Container.DataItem, "user_image")%>' /><!-- /.direct-chat-img --> 
                                    <div class="direct-chat-text" style="word-wrap: break-word; word-break: break-all">
                                        <div class=" col-md-6 offset-md-6 ">
                                                 <?php
                    if(isset($_POST['change'])){
                    $username=mysqli_real_escape_string($conn,$_POST['username']);
                    $password=mysqli_real_escape_string($conn,$_POST['password']);
                    $confirmpassword=$_POST['confirm-pass'];

                    if(!empty($password) && !empty($confirmpassword)){
                     if(($password!==$confirmpassword)){
                       echo "<center><div class='alert alert-danger'>The two password do not match
                               <button class='close' data-dismiss='alert'>&times;</button>
                       </div></center>";
                   }else{
                    $emailCheck="SELECT * FROM `register_tb` WHERE `username`='$username' ";
                   $result=mysqli_query($conn,$emailCheck)or die(mysqli_error($conn));
                   $usercount=mysqli_num_rows($result);
                   if ($usercount>0) {
                    mysqli_query($conn,"update `register_tb` set `password`='$password' where `username`='$username'");
                      echo "<center><div class='alert alert-success'>Password Change successfully your new password is: $password 
                                   <button class='close' data-dismiss='alert'>&times;</button>
                      </div></center>";
                      echo '<script type="text/javascript">';
 
                              echo 'swal("WOW!","Updated Successfully!","success");';
 
                              echo '</script>';
                   }


                   }

                  }else{
                    echo '<script type="text/javascript">';
 
                              echo ' swal("oops!","Enter New Password to change existing Password!","error");';
 
                              echo '</script>';
                    // echo "<center><div class='alert alert-warning'>Enter New Password to change existing Password</div></center>";
                  }
                
                   
                   
                  
                   }
                    ?>
                                       <form method="POST">
                               
                                  
                                  
                                  <div class="form-group">
                                 <div class="input-group ">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" name="username" placeholder="username" value="<?php echo $row['username'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group ">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="New password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group ">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" class="form-control" name="confirm-pass" placeholder="confirm-password">
                    </div>
                </div>
                    <div class="form-group ">
                    <button type="submit" class="btn btn-primary form-control" name="change"><i class="fa fa-lock"> Change</i></button>
                   
                </div>
                                    </div>
                                  </form>
                                    <!-- /.direct-chat-text -->
                                </div>
                              </div>
                                <!-- /.direct-chat-msg -->
                            </ItemTemplate>
                        </div>

                    </div>
                    <!--/.direct-chat-messages-->
                </div>
                <!-- /.box-body -->
                <div class="box-footer" style="background-color:#e2e2e2">
                    <!-- <form action="#" method="post">
                        <div class="input-group ">
                            <input type="text"  id="txtMessage" placeholder="Type Message ..." class="form-control" />
                            <span class="input-group-btn">
                                <button   id="btnSend" class="btn btn-primary btn-flat">Send</button>
                            </span>
                        </div>
                    </form> -->
                </div>
                <!-- /.box-footer-->
            </div>

        </div>


</body>
</html>
