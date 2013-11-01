$(function(){
  $('.color').on('mouseover',function(ev){
    var $el = $(ev.target);
    $('.chair_pos').attr('class', 'chair_pos').addClass($el.attr('data-color'));
    $('.color').removeClass('active');
    $el.addClass('active');
  });
});


