

<?php require 'config/db.php';?>
<?php include('controllers/session.php'); ?>
<?php $get_id = $_SESSION['id']; ?>
<head>
	<style type="text/css">
		.row{
			color:white;
		}
	</style>
</head>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container">
            <div class="row">
				
                <div class="span9" id="">
                     <div class="row">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            
                            <div class="block-content collapse in">
												<?php
						
						$query=mysqli_query($conn,"SELECT *,year(curDate())-year(DOB) as age FROM register_tb where user_id ='$get_id'") or die(mysqli_error($conn));
						$row = mysqli_fetch_array($query);
						$user_id = $row['user_id'];
						?>
						<!-- <div class="alert alert-success">USER DETAILS</div> -->
						<div class="span6">
						
						<div class="alert alert-success">

							<center style="font-size: 30px;font-family: sans-serif;"><?php echo  strtoupper($row['username'])?><?php echo" You are ".$row['age']." Years old";?></center>
						</div>
						
						</div>
						<br><br>
						
	<hr>
		

</div>
							

                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
			
        </div>
		
    </body>	
</html>