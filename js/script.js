$(document).ready(function(){
  lightboxPos();
  
  $('#main .projects').slideUp(0, function() {
    $(this).css('opacity', '1');
  });
  
  $('.show').click(function(event) {
    objClass = $(this).attr('class').split(" ");
    visibility = objClass[2];
    objClass = objClass[1];
    event.preventDefault();
    if( visibility != 'visible' ) {
      $(this).addClass('visible');
      $('.show.'+objClass).html('Hide Projects <span>▲</span>');
      $('.projects.'+objClass).slideDown(1500, function() {
        // do nothing.
      });
    } else {
      $(this).removeClass('visible');
      $('.show.'+objClass).html('Show Projects <span>▼</span>');
      $('.projects.'+objClass).slideUp(500, function() {
        // do nothing.
      });
    }
  });
  
  $('.sample').click(function(event) {
    image = $(this).attr('href');
    image = image.split('?');
    if(image[0] == '/preview.php') {
      image = image[1].split('=');
      event.preventDefault();
      lightboxPos();
      $('#lightbox').css('display', 'block');
      $('#lightbox .inside').html('<a href="#" class="closeLight"><img id="lightImage" src="'+image[1]+'"/></a><a class="close" href="#">X</a>');
      $('#lightImage').load(function() {
        $('#lightbox .inside .close').css('display', 'block');
        closeWidth = $('#lightbox .inside img').css('width').split('px');
        closeLeft = $('#lightbox .inside img').offset().left + parseInt(closeWidth[0]) - 14 + 'px';
        $('#lightbox .closeLight').click(function(event) {
          event.preventDefault();
          closeLight();
        });
        $('#lightbox .inside .close').css('left', closeLeft).click(function(event) {
          event.preventDefault();
          closeLight();
        });
        $(document).keydown(function(key) {
          if(key.keyCode == '27') {
            closeLight();
          }
        });
        $('#lightbox').css('display', 'block');
      });
    }
  });
  
  function closeLight() {
    $('#lightbox').css('display', 'none');
    $('#lightbox .inside .close').css('display', 'none');
    $(document).unbind('keydown');
  }
  
  function lightboxPos() {
    offsetTop = $(window).scrollTop() + 35;
    $('#lightbox .inside').css('top', offsetTop+'px');
  }
    
});
