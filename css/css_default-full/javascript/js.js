$(document).ready(function (){
   var a = function(self){
      self.anchor.fancybox();
   };
   $("#pikame").PikaChoose({buildFinished:a, autoPlay: false, showCaption: false});
});   