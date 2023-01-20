
function mostrarRuta(laboratorio){

 $('#video-overlay').addClass('open');
 $("#video-overlay").append('<video width="820" height="480" autoplay loop> <source src="/TEC-LANDIVAR-MAPA/vistas/js/'+laboratorio+'.mp4" type="video/mp4"> <p>Your browser doesnt support HTML5 video.</p> </video>');
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


  function disponibilidad(lab){
    $.ajax({
      type:"POST",
      url:"ajax/plantilla.ajax.php",
      data:{action:lab},
      success:function(html){
          $(".disponibilidad-mostrar").append(html);
      }
    });
  }
