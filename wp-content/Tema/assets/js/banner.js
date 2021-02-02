jQuery(function($){
  $("#carousel-example-generic .carousel-indicators li").hover(function(){
    var goto = Number( $(this).attr('data-slide-to') );
    $("#carousel-example-generic").carousel(goto);  
  });
})