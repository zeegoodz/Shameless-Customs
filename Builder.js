$(document).ready(function(){
	var $total = 0;
	var $cabChoice;
	var	$speakerLay;
	var	$mainTolex;
	var	$secTolex;
	var	$pipingStyle;
	var	$pipingLocation;
	var	$pipingColor;
	var	$meshColor;
	var	$casterOption;
	var $totals = [0,0,0,0,0,0,0];

	$(document).click(function(){

	$total = 0;
	var i;
	for (i in $totals){
		$total += $totals[i];
	}
	$('#Total').text( 'Total: $' + $total);
	});

	$('#cabStyle li').click(function(){

		cabChoice = $(this).text();
		if(cabChoice == "LED"){
		$('#cart1').text("LED Cab   $400");
		$totals[0] = 400;
		}
		if(cabChoice == "Classic"){
		$('#cart1').text("Classic Cab   $200");
		$totals[0] = 200;
		}

	});


	//Speaker Layout
	$('#speakerLayout li li').click(function(){
		speakerLay = $(this).text();
		if(speakerLay == "1x12"){
		$('#cart2').text(speakerLay +  " Layout   $50");
		$totals[1] = 50;
		}

		if(speakerLay == "2x12"){
		$('#cart2').text(speakerLay +  " Layout   $100");
		$totals[1] = 100;
		}

		if(speakerLay == "4x12"){
		$('#cart2').text(speakerLay +  " Layout   $200");
		$totals[1] =200;
		}

		if(speakerLay == "6x12"){
		$('#cart2').text(speakerLay +  " Layout   $300");
		$totals[1] = 300;
		}

		if(speakerLay == "2x10"){
		$('#cart2').text(speakerLay +  " Layout   $100");
		$totals[1] = 100;
		}

		if(speakerLay == "4x10"){
		$('#cart2').text(speakerLay +  " Layout   $200");
		$totals[1] = 200;
		}

		if(speakerLay == "6x10"){
		$('#cart2').text(speakerLay +  " Layout   $300");
		$totals[1] = 300;
		}

		if(speakerLay == "8x10"){
		$('#cart2').text(speakerLay +  " Layout   $400");
		$totals[1] = 400;
		}

	});

	//Tolex Color
	$('#mainTolex li').click(function(){
		mainTolex = $(this).text();

		$('#cart3').text(mainTolex +  " Tolex   $50");
		$totals[2] = 50;

		if(mainTolex == "White Bronco"){
			$('#tolex').html("<img src=\"./Cabs/6_stain_white.png\">");
		}
		if(mainTolex == "Blue Bronco"){
			$('#tolex').html("<img src=\"./Cabs/6_stain_blue.png\">");
		}
		if(mainTolex == "Red Bronco"){
			$('#tolex').html("<img src=\"./Cabs/6_stain_red.png\">");
		}
		if(mainTolex == "Black Bronco"){
			$('#tolex').html("<img src=\"./Cabs/6_stain_charcoal.png\">");
		}
		if(mainTolex == "Black Fender"){
			$('#tolex').html("<img src=\"./Cabs/6_stain_charcoal.png\">");
		}

	});

	//TwoTone Option
	$('#twoToneTolex li').click(function(){
		secTolex = $(this).text();

		if(secTolex == "None"){
		$('#cart4').text("No Two Tone Chosen");
		}else{
		$('#cart4').text(secTolex +" Tolex   $50");
		$totals[3] = 50;
		}
	});

	//Piping Options
	$('#pipingOptions li ').mouseenter(function(){
		pipingStyle = $('#style').text();
		$('#cart5').text(pipingStyle);
	});


	$('#pipingOptions li li').mouseenter(function(){
		pipingLocation = $('#location').text();
		$('#cart5').append(pipingLocation);

	});


	$('#pipingOptions li li li').click(function(){
		pipingColor = $(this).text();


		$('#cart5').text(pipingStyle + pipingLocation + pipingColor + ' $175');
		$totals[4] = 175;


	});

	//Grill Mesh Options
	$('#grillOptions li').click(function(){
		meshColor = $(this).text();
		$totals[5] = 50;
		$('#cart6').text(meshColor + ' $50');

		if(meshColor == "Black"){
			$('#cabWindow').html("<img src=\"./Cabs/6grill_black.png\">");
		}
		if(meshColor == "White"){
			$('#cabWindow').html("<img src=\"./Cabs/6grill_white.png\">");
		}
		if(meshColor == "Silver"){
			$('#cabWindow').html("<img src=\"./Cabs/6grill_silver.png\">");
		}
		if(meshColor == "Gold"){
			$('#cabWindow').html("<img src=\"./Cabs/6grill_gold.png\">");
		}
		if(meshColor == "Ampeg"){
			$('#cabWindow').html("<img src=\"./Cabs/6grill_ampeg.png\">");
		}
		if(meshColor == "Red & Black Weave"){
			$('#cabWindow').html("<img src=\"./Cabs/6grill_redblack.png\">");
		}
		if(meshColor == "Blue & Black Weave"){
			$('#cabWindow').html("<img src=\"./Cabs/6grill_blueblack.png\">");
		}


	});


	$('#casters li').click(function(){

		casterOption = $(this).text();
		if(casterOption == "3\" Industrial Casters"){
		$('#cart7').text("3\" Casters   $100");
		$totals[6] = 100;
		}
		if(casterOption == "2\"x1\" Rubber Feet"){
		$('#cart7').text("Rubber Feet  $50");
		$totals[0] = 50;
		}

	});


});

