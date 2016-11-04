
$(function(){
  $('.team-carousel').css('opacity', 0);
  $('.team-carousel').waypoint(function(direction == 'down'){
    if(direction == 'down'){
      $('.team-carousel').addClass('fadeInUp');
    }
  }, { offset: '50%'});
});
