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
				<!-- <a href="homepage.php"> Home </a>  -->
				<a href="add_medicine_form.php" style="margin-left: 20px;"> Add Medicine </a> 
				<a href="show_orders.php" style="margin-left: 20px;"> View Orders  </a> 
			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title"> Welcome, <?php echo $_GET["userName"]?> ! </div>
   
    <!-- Medicine Table -->
    <div class="container medicine_table">
            <div class="row" style="padding: 5px;">
                <div class="col-md-3">Name</div>
                <div class="col-md-3">Vendor</div>
                <div class="col-md-2">Chemical</div>
                <div class="col-md-2">Price</div>
                <div class="col-md-2">Edit</div>
            </div>

            <!-- Below, medicine infos will be added dynamically from the database -->
            
            <?php

                require_once("DBconnect.php");

                $sql_query = "SELECT id, name, vendor, chemical, price FROM medicine";
                $result = mysqli_query($connection, $sql_query);

                if(mysqli_num_rows($result) != 0) {
                    while($row = mysqli_fetch_array($result)) {
            ?>

            <div class="row" style="padding: 5px;">
                <div class="col-md-3"><?php echo $row[1] ?></div>
                <div class="col-md-3"><?php echo $row[2] ?></div>
                <div class="col-md-2"><?php echo $row[3] ?></div>
                <div class="col-md-2"><?php echo $row[4] ?></div>
                <div class="col-md-2">
                  <input type="button" class="order_button" value="Edit" onclick="location.href='edit_medicine_form.php?medicineId=<?php echo $row[0] ?>'"/>
                </div>
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