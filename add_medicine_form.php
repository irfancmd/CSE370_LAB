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
		<div class="title"> Add Medicine </div>
		
		<form action="insert_medicine.php" class="form_design" method="post">
			Name: <input type="text" name="name"> <br/>
			Vendor: <input type="text" name="vendor"> <br/>
			Chemical: <input type="text" name="chemical"> <br/>
			Price: <input type="text" name="price"> <br/>
			Stock: <input type="text" name="stock"> <br/>
            <div>
            Requires Prescription: <input type="radio" name="prescription" value="0" checked/> No <input type="radio" name="prescription" value="1"/> Yes
            </div> <br/><br/>

			<input type="submit" value="Add"/>
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