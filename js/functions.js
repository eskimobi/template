//fitText if needed
//jQuery(".phones b").fitText();

// ----------------------------
// Показать верхнее меню
// ----------------------------
$('.btn.menu').bind('click',function() {
  $(this).attr("href", "javascript:void(0)");
  if($(".topmost-menu").css('display')=='none'){
    $(this).addClass('active');
    $('.topmost-menu').slideDown();
  }else{
    $(this).removeClass('active');
    $('.topmost-menu').slideUp();
  };
});

$('.article-big-photo-list ul').addClass('cs3');
$('.article-big-photo-list ul li').addClass('cs3-slide');
$('.article-big-photo-list').after('<div class="cs3-pagination"></div>');

// ----------------------------
// Слайдер
// ----------------------------
// Эффекты смотрим здесь — http://www.idangero.us/cs/
jQuery(function(){ ! $(".cs3").cs3({
  effects : 'slide',
  
  pagination : {
    container : '.cs3-pagination',
    hideOnStart : false,
    showOnlyOnHover : false
  },
  
  autoplay : {
    enabled : true,
    delay : 4000,
    disableOnInteraction : true
  },
  
  responsive:true,
  responsiveSetSize : true,
  
  preloader : true,
  
  touch:{
    enabled : true
  }
})})

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
