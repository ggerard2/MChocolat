<!-- Navigation -->
<html class="no-js" lang="en">
	<head>
    	<meta charset="utf-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    	<title>Information Management System</title>
    	<link rel="stylesheet" href="css/foundation.css" />
    	<script src="js/vendor/modernizr.js"></script>
  	</head>

	<body>
		<div class="row">
		  	<div class="small-8 large-centered columns">
				<p></p>
				<div class="button-bar">
					<ul class="button-group">
						<li>
							<a href="#" class="button" data-dropdown="ingredients" data-options="is_hover:true">Ingredients</a>
							<ul id="ingredients" class="f-dropdown" data-dropdown-content>
							  <li><a href="/display/addIngredient.php">Add New Ingredient</a></li>
							  <li><a href="/display/ingredients.php">View/Search All Ingredients</a></li>
							</ul>
						</li>

				    	<li>
							<a href="#" class="button" data-dropdown="batches" data-options="is_hover:true">Batches</a>
							<ul id="batches" class="f-dropdown" data-dropdown-content>
							  <li><a href="/display/addBatch.php">Add New Batch</a></li>
							  <li><a href="/display/batches.php">View/Search All Batches</a></li>
							</ul>
				    	</li>

				    	<li>
				    		<a href="#" class="button" data-dropdown="recipes" data-options="is_hover:true">Recipes</a>
							<ul id="recipes" class="f-dropdown" data-dropdown-content>
							  <li><a href="/display/addRecipe.php">Add New Recipe</a></li>
							  <li><a href="/display/recipes.php">View/Search All Recipes</a></li>
							</ul>
				    	</li>

				    	<li>
				    		<a href="#" class="button" data-dropdown="boxLabels" data-options="is_hover:true">Box Labels</a>
							<ul id="boxLabels" class="f-dropdown" data-dropdown-content>
							  <li><a href="/display/createBoxLabel.php">Add New Box Label</a></li>
							  <li><a href="/display/boxLabels.php">View/Search All Box Labels</a></li>
							</ul>
				    	</li>
					<!--
				    	<li>
				    		<a href="#" class="button" data-dropdown="packaging" data-options="is_hover:true">Packaging</a>
							<ul id="packaging" class="f-dropdown" data-dropdown-content>
							  <li><a href="#">Packaging Option #1</a></li>
							  <li><a href="#">Packaging Option #2</a></li>
							</ul>
				    	</li>
				    -->
				  	</ul>
				</div>
		  	</div>
		</div>

		<script src="js/vendor/jquery.js"></script>
	    <script src="js/foundation.min.js"></script>
	    <script> $(document).foundation(); </script>
 	 </body>
</html>












