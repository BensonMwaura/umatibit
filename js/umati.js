
$(function(){
  var signup_f = $("#registerForm"),
      sf_input = $("#registerForm :input"),
      reg_btn = $("#regbtn"),
      reg = $("#regbtn"),
      fname = $("#fname"),
      lname = $("#lname"),
      email = $("#email"),
      pass = $("#passwd");
  function registerUser(){
    $.post(signup_f.attr("action"), sf_input.serializeArray(), function(){

    });
  };
  reg_btn.click(function (evt) {
    registerUser();
    evt.preventDefault();
  });
  $('.team-carousel').css('opacity', 0);
  $('.team-carousel').waypoint(function(direction == 'down'){
    if(direction == 'down'){
      $('.team-carousel').addClass('fadeInUp');
    }
  }, { offset: '50%'});
});
