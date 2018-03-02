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

	console.log("running interpret.js");

// 	// New Stuff for posting

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
    });

// // Old Stuff for results interpretation

// // console.log("trying interpret.js");
// 	//The on-click that will trigger the functions
// 	// $("#interpret").on("click", run);

// 	// function run() {

// 	// 	//STEP 2: ***Defining Variables***
// 	// 		console.log("run function");

// 	//    $("input[type='button']").click(function(){


// 	//             //the positive control
// 	// 			var posC = $("input[name='posC']:checked").val();
// 	// 			console.log(posC);

// 	// 			//the negative control
// 	// 			var negC = $("input[name='negC']:checked").val();
// 	// 			console.log(negC);

// 	// 			//the d1 reaction
// 	// 			var d1 = $("input[name='d1']:checked").val();
// 	// 			console.log(d1);

// 	// 			//the d2 reaction
// 	// 			var d2 = $("input[name='d2']:checked").val();
// 	// 			console.log(d2);

// 	// 			//STEP 3: ***The Interpretation***

	// 			//If positive control has a reaction and negative control has no reaction...

	// 			if (posC === "true" && negC === "false") {

	// 			//then continue with interpreting wells

	// 				//WEll 3 and 4 have a reaction
	// 				if (d1 === "true" && d2 === "true") {

	// 					//presence of d antigen is confirmed
	// 					alert('D Antigen is present on cells');
	// 				}

	// 				//Well 3 or 4 have a reaction
	// 				else if (d1 === "true" || d2 === "true") {

	// 					//we can not determine validity
	// 					alert('A confirmation test needs to be performed');
	// 				}

	// 				//Well 3 and 4 dont have a reaction
	// 				else if (d1 ==="false" && d2 === "false") {

	// 					//absence of d antigen is confirmed
	// 					alert('D Antigen is absent')
	// 				}

	// 			}
	// 			//Otherwise, the test results are invalid
	// 			else {

	// 				alert('The test needs to be re-done');

	// 			};


	// 	});


	// };		




