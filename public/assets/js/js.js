// hamberger menu
$(document).ready(function(){
    $(".openMenu").click(function(){
       $(".navbar-mobile").toggleClass("menuOpened");
    });
  
    $(".menu_overlay").click(function(){
       $(".navbar-mobile").removeClass("menuOpened");
    });
    $(".close_hamberger").click(function(){
       $(".navbar-mobile").removeClass("menuOpened");
    });
  });

  // responsive tabs
$(".tabContent").hide(); 
$("ul.tabs li:first").addClass("active").show(); 
$(".tabContent:first").show(); 

$("ul.tabs li").click(function () {
  $("ul.tabs li").removeClass("active"); 
  $(this).addClass("active"); 
  $(".tabContent").hide(); 
  var activeTab = $(this).find("a").attr("href"); 
  $(activeTab).fadeIn(); 
  return false;
});

// datepicker
$('.initial-value-example').persianDatepicker({
   observer: true,
   format: 'YYYY/MM/DD',
   altField: '.observer-example-alt',
   initialValue: false
});