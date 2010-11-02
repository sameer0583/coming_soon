$(document).ready(function(){
  $('#main .projects').slideUp(0, function() {
    $(this).css('opacity', '1');
  });
  
  $('.show').click(function(event){
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
    
});