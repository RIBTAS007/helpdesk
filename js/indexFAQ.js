//*jquery for contact block*/
function myFunction() {
 var $contact=$(".conblock");
  $('html, body').animate({scrollTop:$(document).height()}, 'slow');
   $contact.slideToggle(300, function(){
        // callback after contact block animation
      });
}

function cancelbtn(){
  $(".conblock").css("display","none");
}


/*JQuery for FAQ buttons */
function button1(){
  $("#p1").toggle();
  $("#btn1").css("background-color","purple");
}

function button2(){
  $("#p2").toggle();
  $("#btn2").css("background-color","purple");
}
function button3(){
  $("#p3").toggle();
  $("#btn3").css("background-color","purple");
}

function button4(){
  $("#p4").toggle();
  $("#btn4").css("background-color","purple");
}
function button5(){
  $("#p5").toggle();
  $("#btn5").css("background-color","purple");
}