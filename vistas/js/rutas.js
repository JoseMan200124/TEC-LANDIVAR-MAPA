function mostrarRuta(laboratorio){

 $('#video-overlay').addClass('open');
 $("#video-overlay").append('<video width="820" height="480" autoplay loop> <source src="/TEC-LANDIVAR-MAPA/vistas/js/'+laboratorio+'.mp4" type="video/mp4"> <p>Your browser doesnt support HTML5 video.</p> </video>');
 $("#video-overlay").append('<div class="rotate-phone-please">'+
 '<div class="phone"></div>'+  
 '<div class="message"><p>Porfavor rota tu teléfono 90°</p></div>'+
'</div>');
}

$('.video-overlay, .video-overlay-close').on('click', function(e){
    e.preventDefault();
    close_video();
  });
  
  $(document).keyup(function(e){
    if(e.keyCode === 27) { close_video(); }
  });
  
  function close_video() {
    $('.video-overlay.open').removeClass('open').find('iframe').remove();
  };