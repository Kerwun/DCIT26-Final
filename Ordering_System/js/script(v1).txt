$(document).ready(function(){

 // scripts or codes to be executed when clicking the CALCULATE BILLS button
 $("#cbill").click(function(e){
 e.preventDefault(); //to refresh the process of the portion of the codes instead of the whole page
 //declaration of variables
 var price, quantity, disamo, disedamo;
 //to convert string value from input box into numeric value use for computation
 price = $("#price").val() - 0;
 quantity = $("#quantity").val() - 0;
 // formulation of formula needed for the computation involved.
 disamo = (price * quantity) *0.25;
 disedamo = (price * quantity) - disamo;
 tbills += disedamo;
 tquan += quantity;
// displaying the javascript variable content to corresponding html input type.
 document.getElementById("price").value = price;
 document.getElementById("quantity").value = quantity;
 document.getElementById("disamo").value = disamo;
 document.getElementById("disedamo").value = disedamo;

 });

// ------------------------------------------------------------------------------------------
 // scripts or codes to be executed when clicking the CHANGE button
 $("#change_btn").click(function(e){
 e.preventDefault();//to refresh the process of the portion of the codes instead of the whole page
 //declaration of variables
 var price, quantity, disamo, disedamo,tbills,tquan, change, cgive;
 //to convert string value from input box into numeric value use for computation
 price = $("#price").val() - 0; 
 quantity = $("#quantity").val() - 0;
 cgive = $("#cgive").val() - 0;
 tbills = $("#tbills").val() - 0;
 tquan = $("#tquan").val() - 0;
  // formulation of formula needed for the computation involved.
 disamo = (price * quantity) * 0.25;
 disedamo = (price * quantity) - disamo;
 tbills += disedamo;
 tquan += quantity;
 change = cgive - disedamo;
 // displaying the javascript variable content to corresponding html input type.
 document.getElementById("price").value = price;
 document.getElementById("quantity").value = quantity;
 document.getElementById("disamo").value = disamo;
 document.getElementById("disedamo").value = disedamo;
 document.getElementById("tbills").value = tbills;
 document.getElementById("tquan").value = tquan;
 document.getElementById("cgive").value = cgive;
 document.getElementById("change").value = change;

 });
// --------------------------------------------Radio Button------------------------------------

 
 $("#fba").click(function(e){
 if($(this).prop("checked") == true){
 $("#fba1").prop( "checked", true );
 $("#fba2").prop( "checked", true );
 $("#fba3").prop( "checked", true );
 $("#fba4").prop( "checked", true );
 $("#fba5").prop( "checked", true );
 $("#fbb1").prop( "checked", false );
 $("#fbb2").prop( "checked", false );
 $("#fbb3").prop( "checked", false );
 $("#fbb4").prop( "checked", false );
 $("#fbb5").prop( "checked", false );
 $("#fbc1").prop( "checked", false );
 $("#fbc2").prop( "checked", false );
 $("#fbc3").prop( "checked", false );
 $("#fbc4").prop( "checked", false );
 $("#fbc5").prop( "checked", false );

 document.getElementById("price").value = 1100.00;
 document.getElementById("osum").value = "4pcs. Common Succulent\n2pcs. Rare Cactus\n5kg CNS Potting Mix\n1pc. Mikono Watering Bottle\n5pcs. Terracotta Pots";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 }
 });

 $("#fbb").click(function(e){
 if($(this).prop("checked") == true){
 $("#fba1").prop( "checked", false );
 $("#fba2").prop( "checked", false );
 $("#fba3").prop( "checked", false );
 $("#fba4").prop( "checked", false );
 $("#fba5").prop( "checked", false );
 $("#fbb1").prop( "checked", true );
 $("#fbb2").prop( "checked", true );
 $("#fbb3").prop( "checked", true );
 $("#fbb4").prop( "checked", true );
 $("#fbb5").prop( "checked", true );
 $("#fbc1").prop( "checked", false );
 $("#fbc2").prop( "checked", false );
 $("#fbc3").prop( "checked", false );
 $("#fbc4").prop( "checked", false );
 $("#fbc5").prop( "checked", false );

 document.getElementById("price").value = 1000.00;
 document.getElementById("osum").value = "4pcs. Common Cactuses\n2pcs. Rare Succulents\n5kg CNS Potting Mix\n1pc. Mikono Watering Bottle\n5pcs. Terracotta Pots";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 }
 });

 $("#fbc").click(function(e){
 if($(this).prop("checked") == true){
 $("#fba1").prop( "checked", false );
 $("#fba2").prop( "checked", false );
 $("#fba3").prop( "checked", false );
 $("#fba4").prop( "checked", false );
 $("#fba5").prop( "checked", false );
 $("#fbb1").prop( "checked", false );
 $("#fbb2").prop( "checked", false );
 $("#fbb3").prop( "checked", false );
 $("#fbb4").prop( "checked", false );
 $("#fbb5").prop( "checked", false );
 $("#fbc1").prop( "checked", true );
 $("#fbc2").prop( "checked", true );
 $("#fbc3").prop( "checked", true );
 $("#fbc4").prop( "checked", true );
 $("#fbc5").prop( "checked", true );

 document.getElementById("price").value = 1200.00;
 document.getElementById("osum").value = "2pcs. Rare Cactuses\n2pcs. Rare Succulents\n5kg CNS Potting Mix\n1pc. Mikono Watering Bottle\n5pcs. Terracotta Pots";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 }
 });

//-------------------------------------------------------------------------------------------
 // scripts or codes to be executed when clicking the NEW button
 $("#new").click(function(e){
 e.preventDefault();
 document.getElementById("price").value ="";
 document.getElementById("quantity").value = "";
 document.getElementById("disamo").value = "";
 document.getElementById("disedamo").value = "";
 document.getElementById("cgive").value = "";
 document.getElementById("change").value = "";
 document.getElementById("osum").value = "";
 $("#checkbox1").prop( "checked", false );
 $("#checkbox2").prop( "checked", false );
 $("#checkbox3").prop( "checked", false );
 $("#checkbox4").prop( "checked", false );
 $("#checkbox5").prop( "checked", false );
 $("#checkbox6").prop( "checked", false );
 $("#checkbox7").prop( "checked", false );
 $("#checkbox8").prop( "checked", false );
 $("#checkbox9").prop( "checked", false );
 $("#checkbox10").prop( "checked", false );
 $("#checkbox11").prop( "checked", false );
 $("#checkbox12").prop( "checked", false );
 $("#checkbox13").prop( "checked", false );
 $("#checkbox14").prop( "checked", false );
 $("#checkbox15").prop( "checked", false );
 $("#checkbox16").prop( "checked", false );
 $("#checkbox17").prop( "checked", false );
 $("#checkbox18").prop( "checked", false );
 $("#checkbox19").prop( "checked", false );
 $("#checkbox20").prop( "checked", false );
 $("#checkbox21").prop( "checked", false );
 $("#checkbox22").prop( "checked", false );
 $("#checkbox23").prop( "checked", false );
 $("#checkbox24").prop( "checked", false );
 $("#fba").prop( "checked", false );
 $("#fba1").prop( "checked", false );
 $("#fba2").prop( "checked", false );
 $("#fba3").prop( "checked", false );
 $("#fba4").prop( "checked", false );
 $("#fba5").prop( "checked", false );
 $("#fbb").prop( "checked", false );
 $("#fbb1").prop( "checked", false );
 $("#fbb2").prop( "checked", false );
 $("#fbb3").prop( "checked", false );
 $("#fbb4").prop( "checked", false );
 $("#fbb5").prop( "checked", false );
 $("#fbc").prop( "checked", false );
 $("#fbc1").prop( "checked", false );
 $("#fbc2").prop( "checked", false );
 $("#fbc3").prop( "checked", false );
 $("#fbc4").prop( "checked", false );
 $("#fbc5").prop( "checked", false );
 
 document.getElementById("img1").style.visibility = "hidden";
 document.getElementById("img2").style.visibility = "hidden";
 document.getElementById("img3").style.visibility = "hidden";
 document.getElementById("img4").style.visibility = "hidden";
 document.getElementById("img5").style.visibility = "hidden";
 document.getElementById("img6").style.visibility = "hidden";
 document.getElementById("img7").style.visibility = "hidden";
 document.getElementById("img8").style.visibility = "hidden";
 document.getElementById("img9").style.visibility = "hidden";
 document.getElementById("img10").style.visibility = "hidden";
 document.getElementById("img11").style.visibility = "hidden";
 document.getElementById("img12").style.visibility = "hidden";
 document.getElementById("img13").style.visibility = "hidden";
 document.getElementById("img14").style.visibility = "hidden";
 document.getElementById("img15").style.visibility = "hidden";
 document.getElementById("img16").style.visibility = "hidden";
 document.getElementById("img17").style.visibility = "hidden";
 document.getElementById("img18").style.visibility = "hidden";
 document.getElementById("img19").style.visibility = "hidden";
 document.getElementById("img20").style.visibility = "hidden";
 document.getElementById("img21").style.visibility = "hidden";
 document.getElementById("img22").style.visibility = "hidden";
 document.getElementById("img23").style.visibility = "hidden";
 document.getElementById("img24").style.visibility = "hidden";
 });

// -----------------------------------------------------------------------------------------------
 // scripts or codes to be executed when clicking the REMOVE ORDER button
 $("#remove_order").click(function(e){
 e.preventDefault();
 document.getElementById("price").value ="";
 document.getElementById("quantity").value = "";
 document.getElementById("disamo").value = "";
 document.getElementById("disedamo").value = "";
 document.getElementById("tbills").value = "";
 document.getElementById("tquan").value = "";
 document.getElementById("cgive").value = "";
 document.getElementById("change").value = "";
 document.getElementById("osum").value = "";
 $("#checkbox1").prop( "checked", false );
 $("#checkbox2").prop( "checked", false );
 $("#checkbox3").prop( "checked", false );
 $("#checkbox4").prop( "checked", false );
 $("#checkbox5").prop( "checked", false );
 $("#checkbox6").prop( "checked", false );
 $("#checkbox7").prop( "checked", false );
 $("#checkbox8").prop( "checked", false );
 $("#checkbox9").prop( "checked", false );
 $("#checkbox10").prop( "checked", false );
 $("#checkbox11").prop( "checked", false );
 $("#checkbox12").prop( "checked", false );
 $("#checkbox13").prop( "checked", false );
 $("#checkbox14").prop( "checked", false );
 $("#checkbox15").prop( "checked", false );
 $("#checkbox16").prop( "checked", false );
 $("#checkbox17").prop( "checked", false );
 $("#checkbox18").prop( "checked", false );
 $("#checkbox19").prop( "checked", false );
 $("#checkbox20").prop( "checked", false );
 $("#checkbox21").prop( "checked", false );
 $("#checkbox22").prop( "checked", false );
 $("#checkbox23").prop( "checked", false );
 $("#checkbox24").prop( "checked", false );
 $("#fba").prop( "checked", false );
 $("#fba1").prop( "checked", false );
 $("#fba2").prop( "checked", false );
 $("#fba3").prop( "checked", false );
 $("#fba4").prop( "checked", false );
 $("#fba5").prop( "checked", false );
 $("#fbb").prop( "checked", false );
 $("#fbb1").prop( "checked", false );
 $("#fbb2").prop( "checked", false );
 $("#fbb3").prop( "checked", false );
 $("#fbb4").prop( "checked", false );
 $("#fbb5").prop( "checked", false );
 $("#fbc").prop( "checked", false );
 $("#fbc1").prop( "checked", false );
 $("#fbc2").prop( "checked", false );
 $("#fbc3").prop( "checked", false );
 $("#fbc4").prop( "checked", false );
 $("#fbc5").prop( "checked", false );
 
 document.getElementById("img1").style.visibility = "hidden";
 document.getElementById("img2").style.visibility = "hidden";
 document.getElementById("img3").style.visibility = "hidden";
 document.getElementById("img4").style.visibility = "hidden";
 document.getElementById("img5").style.visibility = "hidden";
 document.getElementById("img6").style.visibility = "hidden";
 document.getElementById("img7").style.visibility = "hidden";
 document.getElementById("img8").style.visibility = "hidden";
 document.getElementById("img9").style.visibility = "hidden";
 document.getElementById("img10").style.visibility = "hidden";
 document.getElementById("img11").style.visibility = "hidden";
 document.getElementById("img12").style.visibility = "hidden";
 document.getElementById("img13").style.visibility = "hidden";
 document.getElementById("img14").style.visibility = "hidden";
 document.getElementById("img15").style.visibility = "hidden";
 document.getElementById("img16").style.visibility = "hidden";
 document.getElementById("img17").style.visibility = "hidden";
 document.getElementById("img18").style.visibility = "hidden";
 document.getElementById("img19").style.visibility = "hidden";
 document.getElementById("img20").style.visibility = "hidden";
 document.getElementById("img21").style.visibility = "hidden";
 document.getElementById("img22").style.visibility = "hidden";
 document.getElementById("img23").style.visibility = "hidden";
 document.getElementById("img24").style.visibility = "hidden";

 });


// -----------------------------------------------------------------------------------------------



 //for clicking the checkboxes

 // 1st Row
 $("#checkbox1").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 250.00;
 document.getElementById("osum").value = "Lithops";
 document.getElementById("img1").style.visibility = "visible";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 document.getElementById("img1").style.visibility = "hidden";
 }
 }); 
 $("#checkbox2").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 350.00;
 document.getElementById("osum").value = "T. Calcarea";
 document.getElementById("img2").style.visibility = "visible";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 document.getElementById("img2").style.visibility = "hidden";
 }
 });
 $("#checkbox3").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 400.00;
 document.getElementById("osum").value = "S. Vitalis";
 document.getElementById("img3").style.visibility = "visible";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 document.getElementById("img3").style.visibility = "hidden";
 }
 });
 $("#checkbox4").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 350.00;
 document.getElementById("osum").value = "Sedum MDK";
 document.getElementById("img4").style.visibility = "visible";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 document.getElementById("img4").style.visibility = "hidden";
 }
 });
 $("#checkbox5").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 2000.00;
 document.getElementById("osum").value = "P.Marginatus";
 document.getElementById("img5").style.visibility = "visible";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 document.getElementById("img5").style.visibility = "hidden";
 }
 });
 $("#checkbox6").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 200.00;
 document.getElementById("osum").value = "A. Alstonii";
 document.getElementById("img6").style.visibility = "visible";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 document.getElementById("img6").style.visibility = "hidden";
 }
 });

//2nd Row
 $("#checkbox7").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 200.00;
 document.getElementById("osum").value = "H. Planifolia";
 document.getElementById("img7").style.visibility = "visible";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 document.getElementById("img7").style.visibility = "hidden";
 }
 }); 
 $("#checkbox8").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 1350.00;
 document.getElementById("osum").value = "G. Stenogonum";
 document.getElementById("img8").style.visibility = "visible";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 document.getElementById("img8").style.visibility = "hidden";
 }
 });
 $("#checkbox9").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 2199.00;
 document.getElementById("osum").value = "GS. Asterium";
 document.getElementById("img9").style.visibility = "visible";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 document.getElementById("img9").style.visibility = "hidden";
 }
 });
 $("#checkbox10").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 2500.00;
 document.getElementById("osum").value = "F. Emoryi";
 document.getElementById("img10").style.visibility = "visible";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 document.getElementById("img10").style.visibility = "hidden";
 }
 });
 $("#checkbox11").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 4000.00;
 document.getElementById("osum").value = "E. Heptagona";
 document.getElementById("img11").style.visibility = "visible";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 document.getElementById("img11").style.visibility = "hidden";
 }
 });
 $("#checkbox12").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 3000.00;
 document.getElementById("osum").value = "E. Gamkaensis";
 document.getElementById("img12").style.visibility = "visible";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 document.getElementById("img12").style.visibility = "hidden";
 }
 });

 //3rd Row
 $("#checkbox13").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 1500.00;
 document.getElementById("osum").value = " E. Grandicornes";
 document.getElementById("img13").style.visibility = "visible";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 document.getElementById("img13").style.visibility = "hidden";
 }
 }); 
 $("#checkbox14").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 3500.00;
 document.getElementById("osum").value = "E. Ferox";
 document.getElementById("img14").style.visibility = "visible";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 document.getElementById("img14").style.visibility = "hidden";
 }
 });
 $("#checkbox15").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 500.00;
 document.getElementById("osum").value = "D. Pachyphytum";
 document.getElementById("img15").style.visibility = "visible";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 document.getElementById("img15").style.visibility = "hidden";
 }
 });
 $("#checkbox16").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 2300.00;
 document.getElementById("osum").value = "E. Ochoterenae";
 document.getElementById("img16").style.visibility = "visible";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 document.getElementById("img16").style.visibility = "hidden";
 }
 });
 $("#checkbox17").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 600.00;
 document.getElementById("osum").value = "E. Cante(L)";
 document.getElementById("img17").style.visibility = "visible";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 document.getElementById("img17").style.visibility = "hidden";
 }
 });
 $("#checkbox18").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 150.00;
 document.getElementById("osum").value = "K. Houghtonii";
 document.getElementById("img18").style.visibility = "visible";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 document.getElementById("img18").style.visibility = "hidden";
 }
 });

 //4th Row
 $("#checkbox19").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 450.00;
 document.getElementById("osum").value = " AH. Kiwi";
 document.getElementById("img19").style.visibility = "visible";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 document.getElementById("img19").style.visibility = "hidden";
 }
 }); 
 $("#checkbox20").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 1100.00;
 document.getElementById("osum").value = "AB. Crocodile";
 document.getElementById("img20").style.visibility = "visible";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 document.getElementById("img20").style.visibility = "hidden";
 }
 });
 $("#checkbox21").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 100.00;
 document.getElementById("osum").value = "CM. Hispida";
 document.getElementById("img21").style.visibility = "visible";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 document.getElementById("img21").style.visibility = "hidden";
 }
 });
 $("#checkbox22").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 850.00;
 document.getElementById("osum").value = "D. Microspermaerenae";
 document.getElementById("img22").style.visibility = "visible";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 document.getElementById("img22").style.visibility = "hidden";
 }
 });
 $("#checkbox23").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 800.00;
 document.getElementById("osum").value = "D. Wilmottianus";
 document.getElementById("img23").style.visibility = "visible";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 document.getElementById("img23").style.visibility = "hidden";
 }
 });
 $("#checkbox24").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 999.00;
 document.getElementById("osum").value = "F. Tuberculosa";
 document.getElementById("img24").style.visibility = "visible";
 } else {
 document.getElementById("price").value = "";
 document.getElementById("osum").value = "";
 document.getElementById("img24").style.visibility = "hidden";
 }
 });




 });
 