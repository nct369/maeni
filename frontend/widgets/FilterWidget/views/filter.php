<!--FILTER MENU-->
<nav class="z-depth-1 filter-menu">
    <form id="filter_form" action="/filter" method="get">
        <input type="text" name="category"/>
        <input type="text" name="date"/>
        <input type="text" name="max-price"/>
    </form>
    <!--mini menu-->
    <ul class="left hide-on-large-only">
      <li><a data-activates="filter_categories_min_structure" class="dropdown-button"><i class="zmdi zmdi-view-agenda"></i></a></li>
      <li><a data-target="filter_calendar_structure" class="modal-trigger"><i class="zmdi zmdi-calendar-check"></i></a></li>
      <li><a data-target="filter_price_structure" class="modal-trigger"><i class="zmdi zmdi-money"></i></a></li>
    </ul>
    <ul class="right hide-on-large-only">
      <li><a class="filter_btn"><i class="zmdi zmdi-search"></i></a></li>
    </ul>
    <!--max menu-->
    <ul class="left hide-on-med-and-down">
      <li><a data-activates="filter_categories_structure" class="dropdown-button">Kateqoriya <i class="zmdi zmdi-chevron-down"></i></a></li>
      <li><a data-target="filter_calendar_structure" class="modal-trigger">Gün <i class="zmdi zmdi-chevron-down"></i></a></li>
      <li><a data-target="filter_price_structure" class="modal-trigger">Qiymət <i class="zmdi zmdi-chevron-down"></i></a></li>
    </ul>
    <ul class="right hide-on-med-and-down">
      <li><a class="filter_btn"><i class="zmdi zmdi-hc-2x zmdi-search left" style="margin: 17px 6px 0 0"></i> Axtar</a></li>
    </ul>
</nav>
<!--FILTER MENU STRUCTURE-->
<!--Categories-->
<ul id="filter_categories_structure" class="dropdown-content filter_categories" style="height: 100%; width: auto">
<?php foreach($filter as $category): ?>
  <li><a href="<?=$category->id?>"><?=$category->name?></a></li>
<?php endforeach; ?>
</ul>
<ul id="filter_categories_min_structure" class="dropdown-content filter_categories" style="height: 50%; width: auto">
<?php foreach($filter as $category): ?>
  <li><a href="<?=$category->id?>"><i class="zmdi zmdi-hc-2x <?=$category->icon?>"></i></a></li>
<?php endforeach; ?>
</ul>
<!-- Calendar -->
<div id="filter_calendar_structure" style="display: none; position:absolute; right:0; left:0; margin:0 auto; z-index: 999"></div>
<!-- Price -->
<div id="filter_price_structure" class="modal">
<div class="modal-content">
  <h4>Maksimal qiymət</h4>
    <p class="range-field">
      <input type="range" id="test5" min="0" max="200" value="50" />
    </p>
</div>
<div class="modal-footer">
  <a href="#!" id="select-min-price" class="modal-action modal-close waves-effect waves-green btn-flat">ok</a>
</div>
</div>