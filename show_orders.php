<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> Online Pharmacy </title>
    
      <!-- core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <link href="css/font-awesome.min.css" rel="stylesheet"/>
      <link href="css/animate.min.css" rel="stylesheet"/>
      <link href="css/main.css" rel="stylesheet"/> 
  </head>

  <body> 
    <!-- following section is used for creating the menubar in the webpage -->
	<section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px;"> Online Pharmacy </div>
			<div class="col-md-10" style="text-align: right"> 
				<!-- <a href="#"> Home </a> 
				<a href="#" style="margin-left: 20px;"> Students </a> 
				<a href="#" style="margin-left: 20px;"> Teachers  </a>  -->
			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title"> CURRENT ORDERS </div>

        <div class="container medicine_table">
            <div class="row" style="padding: 5px;">
                <div class="col-md-2">Quantity</div>
                <div class="col-md-2">Medicine</div>
                <div class="col-md-2">User</div>
                <div class="col-md-2">Price</div>
                <div class="col-md-2">Order Satus</div>
                <div class="col-md-2">Approve</div>
            </div>

            <!-- Below, order infos will be added dynamically from the database -->
            
            <?php

                require_once("DBconnect.php");

                $sql_query = "SELECT * FROM orders o, user u, medicine m where o.user_id = u.id AND o.product_id = m.id";
                $result = mysqli_query($connection, $sql_query);

                if(mysqli_num_rows($result) != 0) {
                    while($row = mysqli_fetch_array($result)) {
            ?>

            <div class="row" style="padding: 5px;">
                <div class="col-md-2"><?php echo $row[1] ?></div>
                <div class="col-md-2"><?php echo $row[14] ?></div>
                <div class="col-md-2"><?php echo $row[9] ?></div>
                <div class="col-md-2"><?php echo $row[4] ?></div>
                
                <?php 
                    $approve_status = "Not approved";
                    
                    if($row[5] == 1) {
                        $approve_status = "Approved";
                    }
                ?>
                
                <div class="col-md-2"><?php echo $approve_status ?></div>
                <form action="approve_order.php" method="post">
                    <div class="col-md-2">
                        <input type="hidden" value="<?php echo $row[0] ?>" name="orderId"/>
                        <input type="submit" class="approve_button" value="Approve"/>
                    </div>
                </form>
            </div>    
                
            <?php
                    }
                }
            ?>

        </div>

	</section>

	
	<!----- Footer ----->
	<section id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>