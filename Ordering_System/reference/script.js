$(document).ready(function(){
 //for clicking the checkboxes
 $("#checkbox1").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 250.00;
 } else {
 document.getElementById("price").value = "";
 }
 }); $("#checkbox2").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 350.00;
 } else {
 document.getElementById("price").value = "";
 }
 });
 $("#checkbox3").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 199.00;
 } else {
 document.getElementById("price").value = "";
 }
 });
 $("#checkbox4").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 50.00;
 } else {
 document.getElementById("price").value = "";
 }
 });
 $("#checkbox5").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 200.00;
 } else {
 document.getElementById("price").value = "";
 }
 });
 
 // scripts or codes to be executed when clicking the CALCULATE BILLS button
 $("#btn_calculate_bills").click(function(e){
 e.preventDefault(); //to refresh the process of the portion of the codes instead of the whole page
 //declaration of variables
 var price, quantity, amount_to_pay;
 //to convert string value from input box into numeric value use for computation
 price = $("#price").val() - 0;
 quantity = $("#quantity").val() - 0;
 // formulation of formula needed for the computation involved.
 amount_to_pay = (price * quantity);
// displaying the javascript variable content to corresponding html input type.
 document.getElementById("price").value = price;
 document.getElementById("quantity").value = quantity;
 document.getElementById("amount_to_pay").value = amount_to_pay;
 });
 // scripts or codes to be executed when clicking the CHANGE button
 $("#btn_change").click(function(e){
 e.preventDefault();
 var price, quantity, amount_to_pay, amount_from_customer, change;
 price = $("#price").val() - 0; quantity = $("#quantity").val() - 0;
 amount_from_customer = $("#amount_from_customer").val() - 0;
 amount_to_pay = (price * quantity);
 change = amount_from_customer - amount_to_pay;
 document.getElementById("price").value = price;
 document.getElementById("quantity").value = quantity;
 document.getElementById("amount_to_pay").value = amount_to_pay;
 document.getElementById("amount_from_customer").value = amount_from_customer;
 document.getElementById("change").value = change;
 });
 // scripts or codes to be executed when clicking the NEW button
 $("#btn_new").click(function(e){
 e.preventDefault();
 document.getElementById("price").value ="";
 document.getElementById("quantity").value = "";
 document.getElementById("amount_to_pay").value = "";
 document.getElementById("amount_from_customer").value = "";
 document.getElementById("change").value = "";
 $("#checkbox1").prop( "checked", false );
 $("#checkbox2").prop( "checked", false );
 $("#checkbox3").prop( "checked", false );
 $("#checkbox4").prop( "checked", false );
 $("#checkbox5").prop( "checked", false );
 $("#deli_chicken").prop( "checked", false );
 $("#halo_halo").prop( "checked", false ); 
 });
 // scripts or codes to be executed when clicking the FOOD BUNDLE A radiobutton
 $("#optradio_A").click(function(e){
 if($(this).prop("checked") == true){
 $("#deli_chicken").prop( "checked", true );
 document.getElementById("price").value = 990.00;
 } else {
 document.getElementById("price").value = "";
 }
 });
 $("#optradio_B").click(function(e){
 if($(this).prop("checked") == true){
 $("#halo_halo").prop( "checked", true );
 document.getElementById("price").value = 850.00; 
 } else {
 document.getElementById("price").value = "";
 }
 });
 });