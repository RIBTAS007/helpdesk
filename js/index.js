/*jquery for contact block*/
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