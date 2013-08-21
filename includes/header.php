<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
  <title>prototype by eski.mobi</title>
  
  <meta name="HandheldFriendly" content="True" />
  <meta name="MobileOptimized" content="320" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=yes" />
  
  <!--realtime less compiler-->
  <!--<link rel="stylesheet/less" type="text/css" href="css/style.less"><script src="js/less-1.3.3.min.js" type="text/javascript"></script>-->
  
  <!--это для скопмилированного css-->
  <link rel="stylesheet" href="css/style.css">
  
  <!--apple web app-->
  <meta name="apple-mobile-web-app-title" content="eski.mobi">
  
  <link rel="apple-touch-icon-precomposed" href="img/apple/144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="img/apple/144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple/144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple/144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple/144.png" />
  
  <!--для live refresh-->
  <!--использовать только при локальной разработке-->
  <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
 
  </head>
<body>

<div class="header header-bar style-1">
  <a href="index.php" class="logo left">
    <img src="img/logo.png" alt="" width="100%"/>
  </a>
  <a href="javascript:void(0)" class="btn cart right">
    <span class="icon-basket-alt"></span>
    <span class="cart-count">3</span>
  </a>
  <a href="javascript:void(0)" class="btn menu right">
    <span class="icon-menu"></span>
  </a>
  <div class="clear"></div>
</div>

<div class="header header-bar style-2">
  <div class="inside">
    <table>
      <tr>
        <td>
          <div class="left">
            <a href="#menu" class="btn menu-trigger">
              <span class="icon-menu"></span>
            </a>
          </div>
          <div class="clear"></div>
        </td>
        <td align="center">
          <a href="index.php" class="logo">
            <img src="img/logo.png" alt="" width="100%"/>
          </a>
        </td>
        <td>
          <div class="right">
            <a href="javascript:void(0)" class="btn search">
              <span class="icon-search"></span>
            </a>
          </div>
          <div class="clear"></div>
        </td>
      </tr>
    </table>
  </div>
</div>

<div class="header style-0">
	<div class="logo">
	  <div class="content wrap">
		  <table class="tbl">
		    <tr align="middle" style="vertical-align:middle">
		      <td align="left" width="50%">
		        <a href="index.php" class="logo">
		          <img src="img/logo.png" alt="" width="100%"/>
		        </a>
		      </td>
		      <td align="right" width="50%">
		        <a class="btn btn-white menu" href="javascript:void(0)">
		          <span class="icon-search"></span>
		        </a>
			      <a class="btn btn-white menu" href="javascript:void(0)">
			        Меню
			      </a>
		      </td>
		    </tr>
		  </table>
		  
		  <div class="search-block">
		    <input type="text" name="" value="" placeholder="Поиск" />
		    <button type="submit"><span class="icon-search"></span></button>
		  </div>
			
		</div><!--end wrap-->
	</div><!--end logo-->
	
	<div class="nav">
	  <div class="wrap">
	    <div class="inside">
	    
	    <ul>
	      <li><a class="a-cat" href="#" onclick="show_cat();"><span class="icon-menu"></span>
	      Каталог</a></li>
	      <li><a class="a-search" href="#" onclick="show_search();"><span class="icon-search"></span>
	      Поиск</a></li>
	      <li><a class="a-cart" href="#"><span class="icon-basket-alt"></span>
	      Корзина (0)</a></li>
	    
	    </ul>
	    
	    </div>
	  </div>
	</div>	
	
</div><!--end header-->

<!--topmost hidden block-->
<div class="topmost-menu hidden-blocks" style="display: none;">
  <div class="wrap">
  <ul class="dropdown more">
    <li class="phone">
      <a href="tel:+74952259594">
      <span class="txt">Наш телефон:</span>
      <span class="tel">+7 (495) 225-9594</span>
      </a>
    </li>
    <li><a href="#">Главная
    </a></li>
    <li><a href="#">Контакты
    </a></li>
    <li><a href="#">Оооооооочеень длинное название раздела, что даже не помещается
    </a></li>
    <li><a href="#">Доставка
    </a></li>
  </ul>
  </div>
</div><!--topmost-->

<div id="eski-root">