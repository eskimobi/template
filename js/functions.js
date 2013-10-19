//fitText if needed
//jQuery(".phones b").fitText();

// ----------------------------
// Показать верхнее меню
// ----------------------------
$('.header .menu').bind('click',function() {
  $(this).attr("href", "javascript:void(0)");
  if($(".top-menu").css('display')=='none'){
    $(this).addClass('active');
    $('.top-menu').slideDown();
  }else{
    $(this).removeClass('active');
    $('.top-menu').slideUp();
  };
});

// ----------------------------
// Слайдер
// ----------------------------
$(document).ready(function(){
  $('.bxslider').bxSlider();
});


// ----------------------------
// Переключение видов
// ----------------------------
$('.btn-group > .inside > .btn').bind('click',function() {
  var t = $(this);
  var p = t.parents('.multi-view');
  p.find('.btn').removeClass('active');
  p.find('.view').hide();
  t.addClass('active');
  p.find('.view:eq('+ t.index() +')').fadeIn(300);
});
$('.btn-group > .inside > .btn:first-child').addClass('active');
$('.view-group > .view:first-child').show();
