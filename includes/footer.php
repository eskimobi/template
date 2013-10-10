</div><!--end root-->

<div class="pre-footer"></div>
<footer>
  <div class="wrap">
    <div class="navi-bottom">
    	<ul>
    	  <li><a href="#">Главная</a></li>
    	  <li><a href="#">Каталог</a></li>
    	  <li><a href="#">Корзина</a></li>
    	  <li><a href="#">О магазине</a></li>
    	  <li><a href="#">Контакты</a></li>
    	</ul>
    	<div class="clear"></div>    	
    </div>
  </div>
  
  <div class="x">
    <a class="full" href="javascript:void(0)" onclick="if(window.confirm('Хотите покинуть мобильную версию и перейти на просмотр полной? Скорость загрузки страниц существенно снизится и возрастёт потребление интернет трафика.')){Eski.desktop();ga('send','event','desktop','click');}return false;">Полная версия сайта</a>
  </div>
  
  <div class="wrap x">
    <div class="author">
    	<a href="http://eski.mobi" onclick="ga('send','event','eski-mobi-author','click');">
    	  <span class="eski-mobi-icon"><span class="body"><span class="p1"></span><span class="p2"></span></span></span>
    	  <span class="txt">Мобильный сайт сделан в eski.mobi</span>
    	</a>
    </div>
  </div>
</footer>

<!--css only modal-->
<!--http://drublic.github.io/css-modal/#!-->

<script src="js/jquery-2.0.1.min.js"></script>
<script src="js/functions.js" type="text/javascript"></script>

<script>
/*
$("#menu").mmenu({
  configuration: {
		hardwareAcceleration: true
	}
});
*/

var jPM = $.jPanelMenu({
    menu: '#menu',
    trigger: '.menu-trigger',
    animated: false
});
jPM.on();
</script>


<!--slider-->
<link rel="stylesheet" href="js/cs3/idangerous.chopslider-3.4.css"/>
<script src="js/cs3/idangerous.chopslider-3.4.min.js"></script>
<!--end slider-->
<script src="js/bxslider/jquery.bxslider.min.js"></script>
<link href="js/bxslider/jquery.bxslider.css" rel="stylesheet"/>
<!--<script src="js/jquery.fittext.js"></script>-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-XXXXXXX-X', 'domain.com');
  ga('send', 'pageview');

</script>

</body>
</html>