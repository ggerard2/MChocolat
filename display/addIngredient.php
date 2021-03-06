<?php include("header.php");?>
<?php include("navigation.php");?>
<html class="no-js" lang="en">
	<head>    	
		<link rel="stylesheet" type="text/css" href="/css/dataTables.foundation.css"/>
		<script src="/js/jquery.dataTables.js"></script>
		<script type="text/javascript" language="javascript" src="/js/dataTables.foundation.js"></script>
		<script type="text/javascript" src="/js/addIngredients.js"></script>
  	</head>
  
  	<body>
		<div class="row">
			<div id="addIngredientSection" class="large-6 large-centered columns">
		  		<div id="addIngredientSection" class="panel">
		  			<div class="h3">Add New Ingredient</div>
		  			<p></p>

		  			<div class="row">
						<div class="large-12 medium-4 columns">
					  		<input id="addUpcInput" type = "text" placeholder = "UPC">
					  	</div>
					</div>

					<div class="row">
						<div class="large-12 medium-4 columns">
					  		<input id="addNameInput" type = "text" placeholder = "Name">
					  	</div>
					</div>

					<div class="row">
					  	<div class="large-12 medium-4 columns">
					  		<input id="addExpInput" type = "text" placeholder = "Expiration Date">
					  	</div>
					</div>

					<div class="row">
					  	<div class="large-12 medium-4 columns">
					  		<input id="addLotNumInput" type = "text" placeholder = "Lot #">
					  	</div>
					</div>

					<div class="row">
					  	<div class="large-12 medium-4 columns">
					  		<input id="addSubInput" type = "text" placeholder = "Sub Ingredients">
					  	</div>
					</div>
					  
					<p></p>


					<div class="">
					  	<div class="small-11 small-centered columns">
						  <a id="addIngredientButton" class="tiny button" >Add Ingredient</a>

							<div id="barcode" class="reveal-modal" data-reveal>
							  <h2>Barocde Scanner.</h2>
							  <p>Please scan the barcode!</p>
							  <a class="close-reveal-modal">&#215;</a>
							</div>
						</div>
					</div>
		  		</div>
			</div>
		</div>
	<!--<script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script> -->
    <script> $(document).foundation(); </script>

  	</body>
</html>