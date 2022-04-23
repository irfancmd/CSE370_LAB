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
		<div class="title"> Search Medicine </div>
		
		<form action="search_medicine.php" class="form_design" method="post">
			<input type="text" name="searchTerm" placeholder="Search"> <br/>
			<!-- Add Spinner -->
            <div>
            <select name="requiresPrescription" style="margin-left: 35%;">
              <option value="1">Prescription Required</option>
              <option value="0">Prescription Not Required</option>
            </select>
      <input type="hidden" name="userId" value="<?php echo $_GET["userId"]?>"/>
            </div> <br/><br/>

			<input type="submit" value="Search"/>
		</form>

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