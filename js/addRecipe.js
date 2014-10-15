var self;

// Function for when page first loads, what you want it to do
$(document).ready( function () {
    self = this;
	
	for(i = 0; i < 15; i++){
		document.getElementById('ingredientNum').options[i] = new Option(i + 1);
	}
	
	createIngredientRow();
	
	//Set Button Functions
	$("#addIngredients").bind("click", addIngredients);
	
} );

function createIngredientRow(){
	var div = document.createElement("div");
	$(div).addClass("row");
	self.getElementById('ingredientsList').appendChild(div);
	
	
	var nameDiv = document.createElement("div");
	var numDiv = document.createElement("div");
	var unitDiv = document.createElement("div");
	
	$(nameDiv).addClass("large-4 columns");
	$(numDiv).addClass("large-4 columns");
	$(unitDiv).addClass("large-4 columns end");
	
	var name = document.createElement("input");
	name.type = "text";
	name.placeholder = "Name"
	var num = document.createElement("input");
	num.type = "text";
	num.placeholder = "Amount"
	var unit = document.createElement("select");
	
	unit.options[0] = new Option("cups");
	unit.options[1] = new Option("liters");
	unit.options[2] = new Option("TBsp");
	unit.options[3] = new Option("tsp");
	
	nameDiv.appendChild(name);
	numDiv.appendChild(num);
	unitDiv.appendChild(unit);
	
	div.appendChild(nameDiv);
	div.appendChild(numDiv);
	div.appendChild(unitDiv);
	
		
}


function addRecipe(){
	//TODO: form validation
	var data = {"RecipeID":$('#addIdInput').val(),"RecipeName":$('#addNameInput').val(),
									"Steps":$('#addStepsInput').val()};
	$.ajax({
            type: 'POST',
            url: '/functions.php',
			cache: false,
			data: {'action': 'addRecipe', 'data': data},
            success: function () {
				// Maybe get the actual DB to populate row??
				//var idx = self.recipesTable.fnSettings().fnRecordsTotal() + 1;
				//self.recipesTable.fnAddData(data);
			}
    });
}

function addIngredients(){
	var num = parseInt($('#ingredientNum').val());
	
	for(i = 0; i < num; i++){
		createIngredientRow();
	}
	
}