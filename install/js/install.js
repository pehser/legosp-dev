$(function() {
   $(".wizardpage").hide();
   $('#license').hide();
   $(".wizardpage:first").show();
   $('#licensea_doc').click(function() {$('#license').toggle();});
   $('#license_agree').click(function() {
	  $('#license_agree').prop("checked") ? $('.wizardnext').removeClass('disabled') : $('.wizardnext').addClass('disabled');  
   });
   $('.wizardnext').click(function(){
     var wizardpage=$(".wizardpage:visible");
     var thisli=$('a[href="#' + wizardpage.next().attr('id') + '"]').parents('li');
     $(wizardpage).hide();
     $(wizardpage).next().fadeIn();
     $('ul.nav li').removeClass('active');
     $(thisli).addClass('active');
   });
   $('.wizardprev').click(function(){
     var wizardpage=$(".wizardpage:visible");
     var thisli=$('a[href="#' + wizardpage.prev().attr('id') + '"]').parents('li');
     $(wizardpage).hide();
     $(wizardpage).prev().fadeIn();
     $('ul.nav li').removeClass('active');
     $(thisli).addClass('active');
   });
});