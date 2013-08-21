<?php include ('includes/header.php'); ?>

<div class="content wrap">
  <h1>h1. Heading 1</h1>
  <h2>h2. Heading 2</h2>
  <h3>h3. Heading 3</h3>
  <h4>h4. Heading 4</h4>
  <p>Hello this is a paragraph</p>
  <br/>
  <p>List is coming next</p>
  <ul>
    <li>List item</li>
    <li>List item</li>
    <li>List item</li>
    <li>List item</li>
  </ul>
</div>

<div class="content wrap x">
  <div>
    <div class="c6">
      c6 column class
      <a href="#" class="btn-violet">Link Text</a>
    </div>
    <div class="c6 last">
      c6 column class
      <a href="#" class="btn-violet">Link Text</a>
    </div>
  </div>
  
  <div>
    <div class="c4">
      c4
      <a href="#" class="btn-violet">Link Text</a>
    </div>
    <div class="c4">
      c64
      <a href="#" class="btn-violet">Link Text</a>
    </div>
    <div class="c4 last">
      c4
      <a href="#" class="btn-violet">Link Text</a>
    </div>
  </div>
  
  <div>
    <div class="c3">
      c3
      <a href="#" class="btn-violet">Link Text</a>
    </div>
    <div class="c3">
      c3
      <a href="#" class="btn-violet">Link Text</a>
    </div>
    <div class="c3">
      c3
      <a href="#" class="btn-violet">Link Text</a>
    </div>
    <div class="c3 last">
      c3
      <a href="#" class="btn-violet">Link Text</a>
    </div>
  </div>
</div>

<div class="content wrap">
  <a href="#" class="btn-theme">btn-theme = link color</a>
  <a href="#" class="btn-white">Link Text</a>
  <a href="#" class="btn-grey">Link Text</a>
  <a href="#" class="btn-black">Link Text</a>
  <a href="#" class="btn-blue">Link Text</a>
  <a href="#" class="btn-yellow">Link Text</a>
  <a href="#" class="btn-green">Link Text</a>
  <a href="#" class="btn-lime">Link Text</a>
  <a href="#" class="btn-orange">Link Text</a>
  <a href="#" class="btn-pink">Link Text</a>
  <a href="#" class="btn-violet">Link Text</a>
  <a href="#" class="btn-red">Link Text</a>
</div>

<div class="wrap x">
  <div class="cs31">
    <div class="cs3-slide">
      <img src="img/slide1.jpg" alt="" />
    </div>
    <div class="cs3-slide">
      <img src="img/slide2.jpg" alt="" />
    </div>
    <div class="cs3-slide">
      <img src="img/slide3.jpg" alt="" />
    </div>
  
    <!--Pagination-->
    <div class="cs3-pagination"></div>
    
  </div>
  <div class="clear"></div>
</div>

<div class="wrap icons">
  <div class="icon x33">
    <a href="#">
      <div class="img"><img src="img/temp.svg" width="100%"/></div>
      <div class="txt">О компании</div>
    </a>
  </div>
  <div class="icon x33">
    <a href="#">
      <div class="img"><img src="img/temp.svg" width="100%"/></div>
      <div class="txt">Очень длинное название важного раздела</div>
    </a>
  </div>
  <div class="icon x33">
    <a href="#">
      <div class="img"><img src="img/temp.svg" width="100%"/></div>
      <div class="txt">Наши услуги</div>
    </a>
  </div>
  <div class="icon x33">
    <a href="#">
      <div class="img"><img src="img/temp.svg" width="100%"/></div>
      <div class="txt">Раскрытие информации</div>
    </a>
  </div>
  <div class="icon x33">
    <a href="#">
      <div class="img"><img src="img/temp.svg" width="100%"/></div>
      <div class="txt">Ещё что-то</div>
    </a>
  </div>
</div><!--icons-->
<div class="clear"></div>

<div class="content wrap">
  <!--переключатель видов-->
  <div class="multi-view">
    <div class="btn-group">
      <div class="inside">
        <div class="btn active">Популярное</div>
        <div class="btn">Распродажа</div>
        <div class="btn">Ещё</div>
      </div>
    </div>
    <div class="view-group">
      <div class="view">
        <p>Для получения билета на бланке ОАО «РЖД» и посадки в вагон при себе необходимо иметь документ, удостоверяющий личность пассажира. При отсутствии документа кассир вправе отказать в выдаче проездного документа.</p>
      </div>
      <div class="view" style="display: none;">
        <p>Возврат билетов, купленных за WebMoney и Яндекс.Деньги, осуществляется только в кассах возврата ОАО "РЖД" за наличный расчет</p>
      </div>
      <div class="view" style="display: none;">
        <p>Пассажир несет исключительную и полную ответственность за соблюдение всех иммиграционных правил стран, из которых, в которые и через которые осуществляется железнодорожная перевозка.</p>
      </div>
    </div>
  </div>
</div>

<div class="content wrap">
  <ul class="group">
    <li><a href="#">Главная
    <span class="icon-chevron-right right"></span></a></li>
    <li><a href="#">Услуги
    <span class="icon-chevron-right right"></span></a></li>
    <li><a href="#">О компании
    <span class="icon-chevron-right right"></span></a></li>
    <li><a href="#">Контакты
    <span class="icon-chevron-right right"></span></a></li>
    <li><a href="#">Ещё
    <span class="icon-chevron-right right"></span></a></li>
  </ul>
</div><!--end content-->

<!-- MAIN END -->
<?php include ('includes/footer.php'); ?>