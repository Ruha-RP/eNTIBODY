//the button needs to clicked twoce before the alert pops

//The 4 wells
//Well 1: Postive control
//Well 2: Negative control
//Well 3: Reagent D1
//Well 4: Reagent D2

//If Positive control has a reaction AND Negative control has no reaction
//Then continue to interpret Well 3 and Well 4
//If Well 3 and Well 4 have a reaction, then D antigen is present
//If Well 3 and Well 4 don't have a reaction, then D antigen is absent
//If Well 3 is positive and Well 4 is negative (or vice versa), then Discrepancy in result, needs further testing

//STEP 1: ***Getting the document ready***
$(document).ready(function() {

	console.log("interpreting interpret.js");

 // =================Old Stuff for results interpretation=============================


	//STEP 2: ***Defining Variables***

	var diagnosis;

 	   $("select").click(function(){

 	   		console.log("hello this is the  choice button");

 	   		//assigning all choices to the form variable
 	   		 var formData = {
                posC     : $('select[name=posC]').val(),
                negC    : $('select[name=negC]').val(),
                d1 : $('select[name=d1]').val(),
                d2  : $('select[name=d2]').val()
            };

            //checking the formDat
            console.log(formData);

            var posC = formData.posC;
            var negC = formData.negC;
            var d1 = formData.d1;
            var d2 = formData.d2;
            
            
	//          //the positive control
	// 			var posC = $("input[name='posC']:checked").val();
	// 			console.log(posC);

	// 			//the negative control
	// 			var negC = $("input[name='negC']:checked").val();
	// 			console.log(negC);

	// 			//the d1 reaction
	// 			var d1 = $("input[name='d1']:checked").val();
	// 			console.log(d1);

	// 			//the d2 reaction
	// 			var d2 = $("input[name='d2']:checked").val();
	// 			console.log(d2);

	//STEP 3: ***The Interpretation***

				//If positive control has a reaction and negative control has no reaction...

				if (posC === "Agglutination" && negC === "No Reaction") {

				//then continue with interpreting wells

					//WEll 3 and 4 have a reaction
					if (d1 === "Agglutination" && d2 === "Agglutination") {

						//presence of d antigen is confirmed
						diagnosis = "D Antigen is present on cells";
						console.log(diagnosis);
					}

					//Well 3 or 4 have a reaction
					else if (d1 === "Agglutination" || d2 === "Agglutination") {

						//we can not determine validity
						diagnosis = 'A confirmation test needs to be performed';
						console.log(diagnosis);
					}

					//Well 3 and 4 dont have a reaction
					else if (d1 ==="No Reaction" && d2 === "No Reaction") {

						//absence of d antigen is confirmed
						diagnosis = 'D Antigen is absent';
						console.log(diagnosis);
					}

				}
				//Otherwise, the test results are invalid
				else {

					diagnosis= 'The test needs to be re-done';
					console.log(diagnosis);

				};


		});//Closing the choice button on-click


 	 // The on-click that will trigger the functions
	$("#interpret").on("click", run);

 	function run() {

 		$("#diagnosis").text(diagnosis);


	};//Closing the run function		



});//Closing the document.ready function



// 	// ======================New Stuff for posting===========================

// 	$('form.ajax').on('submit', function(event){
//             event.preventDefault();

            // var formData = {
            //     posC     : $('select[name=posC]').val(),
            //     negC    : $('select[name=negC]').val(),
            //     d1 : $('select[name=d1]').val(),
            //     d2  : $('select[name=d2]').val()
            // };


            // console.log(formData);
            

//             $.ajax({
//             	beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
//             	headers: {
// 				    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
// 				  },
				
//                 type     : "POST",
//                 url      : {{$(this).attr('action')}},
                
//                 data     : formData,
//                 cache    : false,

//                 success  : function(data) {
//                     console.log(data);
//                 }
//             })

//             // console.log(formData);

//             return false;

//             // alert($(this).attr('action'));

//             // alert('form is submited');
//         });

