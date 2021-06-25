$(document).ready(function(){
 //e.preventDefault();
$("#sencit").prop( "checked", false );
$("#decard").prop( "checked", false );
$("#empdisc").prop( "checked", false );
$("#nodisc").prop( "checked", false );

//declaration of variables 
var price, quantity, damount, dedamount, tquan, tdisgiv, tdisamo, cashrend, change;
 // scripts or codes to discount
// --------------------------------------------------------------------------------------------

 // 1st radio button
 $("#sencit").click(function(e){
 // e.preventDefault();
 if($(this).prop("checked") == true){
 price = $("#price").val() - 0;
 quantity = $("#quantity").val() - 0;
 damount = (price * quantity) * .30;
 dedamount = (price * quantity) - damount; 
 document.getElementById("price").value = price;
 document.getElementById("quantity").value = quantity;
 document.getElementById("damount").value = damount;
 document.getElementById("dedamount").value = dedamount;
 $("#decard").prop( "checked", false );
 $("#empdisc").prop( "checked", false );
 $("#nodisc").prop( "checked", false );
 }
 });

 // 2nd radio button
 $("#decard").click(function(e){
 // e.preventDefault();
 if($(this).prop("checked") == true){
 price = $("#price").val() - 0;
 quantity = $("#quantity").val() - 0;
 damount = (price * quantity) * .20;
 dedamount = (price * quantity) - damount; 
 document.getElementById("price").value = price;
 document.getElementById("quantity").value = quantity;
 document.getElementById("damount").value = damount;
 document.getElementById("dedamount").value = dedamount;
 $("#sencit").prop( "checked", false );
 $("#empdisc").prop( "checked", false );
 $("#nodisc").prop( "checked", false );
 }
 });

 // 3rd radio button
 $("#empdisc").click(function(e){
 // e.preventDefault();
 if($(this).prop("checked") == true){
 price = $("#price").val() - 0;
 quantity = $("#quantity").val() - 0;
 damount = (price * quantity) * .10;
 dedamount = (price * quantity) - damount; 
 document.getElementById("price").value = price;
 document.getElementById("quantity").value = quantity;
 document.getElementById("damount").value = damount;
 document.getElementById("dedamount").value = dedamount;
 $("#sencit").prop( "checked", false );
 $("#decard").prop( "checked", false );
 $("#nodisc").prop( "checked", false );
 }
 });

 // 4th radio button
 $("#nodisc").click(function(e){
 // e.preventDefault();
 if($(this).prop("checked") == true){
 price = $("#price").val() - 0;
 quantity = $("#quantity").val() - 0;
 damount = 0;
 dedamount = (price * quantity); 
 document.getElementById("price").value = price;
 document.getElementById("quantity").value = quantity;
 document.getElementById("damount").value = damount;
 document.getElementById("dedamount").value = dedamount;
 $("#sencit").prop( "checked", false );
 $("#decard").prop( "checked", false );
 $("#empdisc").prop( "checked", false );
 }
 });
// ------------------------------------------------------------------------------------------------




 // scripts or codes to be executed when clicking the CHANGE button
 $("#calchange").click(function(e){
 e.preventDefault();//to refresh the process of the portion of the codes instead of the whole page
 price = $("#price").val() - 0; 
 quantity = $("#quantity").val() - 0;
 cashrend = $("#cashrend").val() - 0;
 tquan = $("#tquan").val() - 0;
 tdisgiv = $("#tdisgiv").val() - 0;
 tdisamo = $("#tdisamo").val() - 0;
  // formulation of formula needed for the computation involved.
 tquan += quantity;
 tdisgiv += damount;
 tdisamo += dedamount;
 change = cashrend - dedamount;
 // displaying the javascript variable content to corresponding html input type.
 document.getElementById("price").value = price;
 document.getElementById("quantity").value = quantity;
 document.getElementById("damount").value = damount;
 document.getElementById("dedamount").value = dedamount;
 document.getElementById("tquan").value = tquan;
 document.getElementById("tdisgiv").value = tdisgiv;
 document.getElementById("tdisamo").value = tdisamo;
 document.getElementById("cashrend").value = cashrend;
 document.getElementById("change").value = change;

 });

 // new button
 $("#new").click(function(e){
 e.preventDefault();
 document.getElementById("nametag").value = "";
 document.getElementById("price").value = "";
 document.getElementById("quantity").value = "";
 document.getElementById("damount").value = "";
 document.getElementById("dedamount").value = "";
 document.getElementById("cashrend").value = "";
 document.getElementById("change").value = "";
 $("#sencit").prop( "checked", false );
 $("#decard").prop( "checked", false );
 $("#empdisc").prop( "checked", false );
 $("#nodisc").prop( "checked", false ); 
});

  // cancel
 $("#cancel").click(function(e){
 e.preventDefault();
 document.getElementById("nametag").value = "";
 document.getElementById("price").value = "";
 document.getElementById("quantity").value = "";
 document.getElementById("damount").value = "";
 document.getElementById("dedamount").value = "";
 document.getElementById("tquan").value = "";
 document.getElementById("tdisgiv").value = "";
 document.getElementById("tdisamo").value = "";
 document.getElementById("cashrend").value = "";
 document.getElementById("change").value = "";
 $("#sencit").prop( "checked", false );
 $("#decard").prop( "checked", false );
 $("#empdisc").prop( "checked", false );
 $("#nodisc").prop( "checked", false ); });


 // -----------------------------------------------------Clickable Label-----------------------------------------------------------------------------------------------------------------------------------------------
 $("#f1").click(function(e){
 e.preventDefault();
 document.getElementById("f1").onclick = document.getElementById("nametag").value = "Lithops living stones";
 document.getElementById("price").value = 200;
 });
 $("#f2").click(function(e){
 e.preventDefault();
 document.getElementById("f2").onclick = document.getElementById("nametag").value = "Titanopsis calcarea";
 document.getElementById("price").value = 1600;
 });
 $("#f3").click(function(e){
 e.preventDefault();
 document.getElementById("f3").onclick = document.getElementById("nametag").value = "Senecio vitalis";
 document.getElementById("price").value = 600;
 });
 $("#f4").click(function(e){
 e.preventDefault();
 document.getElementById("f4").onclick = document.getElementById("nametag").value = "Sedum morganianum";
 document.getElementById("price").value = 1300;
 });
 $("#f5").click(function(e){
 e.preventDefault();
 document.getElementById("f5").onclick = document.getElementById("nametag").value = "Pachycereus marginatus";
 document.getElementById("price").value = 4000;
 });
 $("#f6").click(function(e){
 e.preventDefault();
 document.getElementById("f6").onclick = document.getElementById("nametag").value = "Haworthia planifolia";
 document.getElementById("price").value = 650;
 });
 $("#f7").click(function(e){
 e.preventDefault();
 document.getElementById("f7").onclick = document.getElementById("nametag").value = "G. stenogonum";
 document.getElementById("price").value = 1350;
 });
 $("#f8").click(function(e){
 e.preventDefault();
 document.getElementById("f8").onclick = document.getElementById("nametag").value = "GS. asterium";
 document.getElementById("price").value = 2500;
 });
 $("#f9").click(function(e){
 e.preventDefault();
 document.getElementById("f9").onclick = document.getElementById("nametag").value = "Ferocactus emoryi";
 document.getElementById("price").value = 1400;
 });
 $("#f10").click(function(e){
 e.preventDefault();
 document.getElementById("f10").onclick = document.getElementById("nametag").value = "Euphorbia heptagona";
 document.getElementById("price").value = 2700;
 });
 $("#f11").click(function(e){
 e.preventDefault();
 document.getElementById("f11").onclick = document.getElementById("nametag").value = "Euphorbia grandicornes";
 document.getElementById("price").value = 3400;
 }); 
 $("#f12").click(function(e){
 e.preventDefault();
 document.getElementById("f12").onclick = document.getElementById("nametag").value = "Euphorbia ferox";
 document.getElementById("price").value = 2500;
 }); 
 $("#f13").click(function(e){
 e.preventDefault();
 document.getElementById("f13").onclick = document.getElementById("nametag").value = "E. ochoterenae";
 document.getElementById("price").value = 3100;
 }); 
 $("#f14").click(function(e){
 e.preventDefault();
 document.getElementById("f14").onclick = document.getElementById("nametag").value = "Echeveria cante Large";
 document.getElementById("price").value = 600;
 }); 
 $("#f15").click(function(e){
 e.preventDefault();
 document.getElementById("f15").onclick = document.getElementById("nametag").value = "Dorstenia foetida";
 document.getElementById("price").value = 1250;
 });
 $("#f16").click(function(e){
 e.preventDefault();
 document.getElementById("f16").onclick = document.getElementById("nametag").value = "Dinteranthus wilmottianus";
 document.getElementById("price").value = 800;
 });
 $("#f17").click(function(e){
 e.preventDefault();
 document.getElementById("f17").onclick = document.getElementById("nametag").value = "Dinteranthus microsperma";
 document.getElementById("price").value = 850;
 });
 $("#f18").click(function(e){
 e.preventDefault();
 document.getElementById("f18").onclick = document.getElementById("nametag").value = "CM. hispida";
 document.getElementById("price").value = 100;
 });
 $("#f19").click(function(e){
 e.preventDefault();
 document.getElementById("f19").onclick = document.getElementById("nametag").value = "Aloe brevifolia crocodile";
 document.getElementById("price").value = 900;
 });
 $("#f20").click(function(e){
 e.preventDefault();
 document.getElementById("f20").onclick = document.getElementById("nametag").value = "Aeonium haworthii kiwi";
 document.getElementById("price").value = 600;
 });
 });