var self;
var boxSize;
var batchesList;
var recipeID;

// Function for when page first loads, what you want it to do
$(document).ready( function () {
    self = this;

    // Load all Batches  
	$.ajax({
		type: "POST",
		url: '/functions.php',
		cache: false,
		data: {'action': 'getBatchesByDate'},
		success: function(data, status) {
			batchesList = jQuery.parseJSON(data);
		},
		error: function(xhr, desc, err) {
		}
	});

	var boxSizes = [4,6,8,12,15,16,24,30,36,45,60];
	for (var i = 0; i<boxSizes.length; i++){
	document.getElementById('numberSelect').options[i] = new Option(boxSizes[i]);
	}
	//Set Button Functions
	$("#selectNumberButton").bind("click", selectNumber);
	
} );

function clearBatches(){
	$('#batchesDiv').empty();
	ingredientsList = [];
}

function selectNumber(){
	clearBatches();

	boxSize = $("#numberSelect option:selected").text();

	//Load ingredients for selected recipe
	for (var i = 0; i<boxSize; i++) {
		createBatchSpotSelect();
	}
}

function createBatchSpotScan(){
	var div = document.createElement("div");
	$(div).addClass("row");
	self.getElementById('batchesDiv').appendChild(div);
	
	var upcDiv = document.createElement("div");

	$(upcDiv).addClass("large-6 columns");

	
	var upc = document.createElement("input");
	upc.type = "text";
	upc.placeholder = "Ingredient UPC";

	upcDiv.appendChild(upc);

	div.appendChild(upcDiv);
}

function createBatchSpotSelect(){
	var div = document.createElement("div");
	$(div).addClass("row");
	self.getElementById('batchesDiv').appendChild(div);
	
	var selectDiv = document.createElement("div");

	$(selectDiv).addClass("large-6 columns");

	
	var selection = document.createElement("select");

	for (var i = 0; i<batchesList.length; i++){
		var opt = document.createElement("option");
		opt.value = batchesList[i]['BID'];
		opt.text = batchesList[i]['RecipeName'] + batchesList[i]['DOC'];
		selection.appendChild(opt);
	}

	div.appendChild(selectDiv);
}


function saveSuccessful(){
	alert("SAVED");
}

