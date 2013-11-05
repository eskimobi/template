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
 <link rel="stylesheet/less" type="text/css" href="css/style.less">
 <script src="js/less-1.3.3.min.js" type="text/javascript"></script>
  
  <!--это для скопмилированного css
  <link rel="stylesheet" href="css/style.css">
  -->
  <!--apple web app-->
  <meta name="apple-mobile-web-app-title" content="eski.mobi">
  
  <link rel="apple-touch-icon-precomposed" href="img/apple/144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="img/apple/144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple/144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple/144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple/144.png" />
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <!--для live refresh-->
  <!--использовать только при локальной разработке
  <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
 -->
  </head>
<body id="top_page">

<header>
  
  <ul class='header top-line'>
    <li class='logo'>
      <a href='#top_page'><img src="//sendflowers.ru/img/sendflowers3/main/header-logo.png"></a>
    </li>
    <li class='tel'>
      <a href="tel:8002007090">8 800 200-70-90</a>
      <a href="tel:8002007090">+7 495 974-70-90</a>
    </li>
  </ul>
  <ul class='header fixed'>
    <li id='cart' class="btn">
    </li>
    <li id='user' class="btn">
    </li>
  </ul>
  <ul class='header navi'>
    <li id='search' class="btn">
      <a href='#top_page'></a>
    </li>
    <li id='cart' class="btn">
      <a href='#top_page'></a>
    </li>
    <li id='menu' class="btn">
      <a href='#top_page'>Каталог</a>
    </li>
    <li id='region' class="btn">
      <a href='#top_page'>Регион</a>
    </li>
  </ul>

  <div id='menuBody' class='hidden-block'>

  	<ul>
  		<li><a>Тестовый chevron-список 1</a></li>
  		<li><a>Тестовый chevron-список 1</a></li>
  		<li><a>Тестовый chevron-список 1</a></li>
  		<li><a>Тестовый chevron-список 1</a></li>
  		<li><a>Тестовый chevron-список 1</a></li>
  		<li><a>Тестовый chevron-список очень длинное название</a></li>
  	</ul>
  </div>



  <div id='regionBody' class='hidden-block'>
  	<ul>
  		<li><a>Тестовый chevron-список</a></li>
  		<li><a>Тестовый chevron-список</a></li>
  		<li><a>Тестовый chevron-список</a></li>
  		<li><a>Тестовый chevron-список</a></li>
  		<li><a>Тестовый chevron-список</a></li>
  		<li><a>Тестовый chevron-список очень длинное название</a></li>
  	</ul>
  </div>

  <div id='searchBody' class='hidden-block'>
  	<ul>
  		<li><a>Иконка по вертикали центруется с помощью position: absolute;,  top: 50%; margin-top: -@pad;</a></li>
  	</ul>
  </div>


  <div id='cartBody' class='hidden-block'>

  	<ul>
  		<li><a>Шаблон для вложенных списков пока в процессе доработки</a></li>
  	</ul>
  </div>

</header>

<div id="eski-root">