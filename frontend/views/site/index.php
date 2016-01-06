<?php

/* @var $this yii\web\View */
use frontend\models\Category;

$this->title = 'Toyplan';
?>
<div class="site-index">
<style type="text/css">
#category a{
    margin: 0 10px;
}
</style>
<div id="category" class="row-slider">
    <?php foreach(Category::find()->orderBy('id')->all() as $category): ?>
      <a href="/<?=$category->slug?>/">
        <div class="category-card">
          <img class="responsive-img z-depth-1" src="/uploads/categories/<?=$category->img?>">
          <span class="category-card-icon"><i class="zmdi zmdi-hc-3x <?=$category->icon?>"></i></span>
          <span class="category-card-title"><?=$category->name?></span>
        </div>
      </a>
    <?php endforeach; ?>
</div>

<div id="popular-staff" class="row-slider">
    <div>
        <div class="col s12 m6 l6">
            <div class="ih-item circle effect3 left_to_right">
                <div class="ih-item-hover">
                    <div data-url="#" class="img z-depth-1">
                        <a href="#" class="valign-wrapper">
                            <img src="/uploads/services/kral.jpg" alt="img">
                            <h4 class="valign">Kral şadlıq sarayı</h4>
                        </a>
                    </div>
                    <div class="info z-depth-1 valign-wrapper">
                        <div class="info-description valign">
                            <h4>Kral şadlıq sarayı</h4>
                            <ul class="product_rating">
                              <li><i class="zmdi zmdi-calendar"></i> 14</li>
                              <li><i class="zmdi zmdi-star-outline"></i> 23</li>
                              <li><i class="zmdi zmdi-favorite-outline"></i> 34</li>
                            </ul>
                        </div>
                    </div>
                    <div class="buttons">
                        <a class="add_btn btn-floating btn-large waves-effect waves-light tooltipped" data-position="top" data-delay="50" data-tooltip="Favorit listinə əlavə et" tabindex="0"><i class="zmdi zmdi-hc-3x zmdi-plus"></i></a>
                        <a class="view_btn btn-floating btn-large waves-effect waves-light tooltipped" data-position="bottom" data-delay="50" data-tooltip="Daha ətraflı" tabindex="0"><i class="zmdi zmdi-hc-3x zmdi-search"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l6">
          <div id="album" class=" valign-wrapper">
            <div class="album_box valign">
              <div class="album-slider-nav center">
                <a class="waves-effect waves-light btn left"><i class="zmdi zmdi-hc-3x zmdi-long-arrow-left"></i></a>
                <a class="waves-effect waves-black btn white center">Watch full album</a>
                <a class="waves-effect waves-light btn right"><i class="zmdi zmdi-hc-3x zmdi-long-arrow-right"></i></a>
              </div>
              <div class="album-slider">
                <div>
                  <img class="responsive-img openbox img-radius z-depth-1" src="http://cdn1.popworkouts.com/wp-content/uploads/2012/12/megan-fox-face.jpg">
                  <div class="card-album-likes z-depth-1">
                    <ul>
                      <li><i class="zmdi zmdi-star-outline"></i> 23</li>
                      <li><i class="zmdi zmdi-favorite-outline"></i> 34</li>
                    </ul>
                  </div>
                </div>
                <div>
                  <img class="responsive-img openbox img-radius z-depth-1" src="http://cdn1.popworkouts.com/wp-content/uploads/2012/12/megan-fox-face.jpg">
                  <div class="card-album-likes z-depth-1">
                    <ul>
                      <li><i class="zmdi zmdi-star-outline"></i> 23</li>
                      <li><i class="zmdi zmdi-favorite-outline"></i> 34</li>
                    </ul>
                  </div>
                </div>
                <div>
                  <img class="responsive-img openbox img-radius z-depth-1" src="http://cdn1.popworkouts.com/wp-content/uploads/2012/12/megan-fox-face.jpg">
                  <div class="card-album-likes z-depth-1">
                    <ul>
                      <li><i class="zmdi zmdi-star-outline"></i> 23</li>
                      <li><i class="zmdi zmdi-favorite-outline"></i> 34</li>
                    </ul>
                  </div>
                </div>
                <div>
                  <img class="responsive-img openbox img-radius z-depth-1" src="http://cdn1.popworkouts.com/wp-content/uploads/2012/12/megan-fox-face.jpg">
                  <div class="card-album-likes z-depth-1">
                    <ul>
                      <li><i class="zmdi zmdi-star-outline"></i> 23</li>
                      <li><i class="zmdi zmdi-favorite-outline"></i> 34</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div>
        <div class="col s12 m6 l6">
            <div class="ih-item circle effect3 left_to_right">
                <div class="ih-item-hover">
                    <div data-url="#" class="img z-depth-1">
                        <a href="#" class="valign-wrapper">
                            <img src="/uploads/services/kral.jpg" alt="img">
                            <h4 class="valign">Kral şadlıq sarayı</h4>
                        </a>
                    </div>
                    <div class="info z-depth-1 valign-wrapper">
                        <div class="info-description valign">
                            <h4>Kral şadlıq sarayı</h4>
                            <ul class="product_rating">
                              <li><i class="zmdi zmdi-calendar"></i> 14</li>
                              <li><i class="zmdi zmdi-star-outline"></i> 23</li>
                              <li><i class="zmdi zmdi-favorite-outline"></i> 34</li>
                            </ul>
                        </div>
                    </div>
                    <div class="buttons">
                        <a class="add_btn btn-floating btn-large waves-effect waves-light" tabindex="0"><i class="zmdi zmdi-hc-3x zmdi-plus"></i></a>
                        <a class="view_btn btn-floating btn-large waves-effect waves-light" tabindex="0"><i class="zmdi zmdi-hc-3x zmdi-search"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l6">
          <div id="album" class=" valign-wrapper">
            <div class="album_box valign">
              <div class="album-slider-nav center">
                <a class="waves-effect waves-light btn left"><i class="zmdi zmdi-hc-3x zmdi-long-arrow-left"></i></a>
                <a class="waves-effect waves-black btn white center">Watch full album</a>
                <a class="waves-effect waves-light btn right"><i class="zmdi zmdi-hc-3x zmdi-long-arrow-right"></i></a>
              </div>
              <div class="album-slider">
                <div>
                  <img class="responsive-img openbox img-radius z-depth-1" src="http://cdn1.popworkouts.com/wp-content/uploads/2012/12/megan-fox-face.jpg">
                  <div class="card-album-likes z-depth-1">
                    <ul>
                      <li><i class="zmdi zmdi-star-outline"></i> 23</li>
                      <li><i class="zmdi zmdi-favorite-outline"></i> 34</li>
                    </ul>
                  </div>
                </div>
                <div>
                  <img class="responsive-img openbox img-radius z-depth-1" src="http://cdn1.popworkouts.com/wp-content/uploads/2012/12/megan-fox-face.jpg">
                  <div class="card-album-likes z-depth-1">
                    <ul>
                      <li><i class="zmdi zmdi-star-outline"></i> 23</li>
                      <li><i class="zmdi zmdi-favorite-outline"></i> 34</li>
                    </ul>
                  </div>
                </div>
                <div>
                  <img class="responsive-img openbox img-radius z-depth-1" src="http://cdn1.popworkouts.com/wp-content/uploads/2012/12/megan-fox-face.jpg">
                  <div class="card-album-likes z-depth-1">
                    <ul>
                      <li><i class="zmdi zmdi-star-outline"></i> 23</li>
                      <li><i class="zmdi zmdi-favorite-outline"></i> 34</li>
                    </ul>
                  </div>
                </div>
                <div>
                  <img class="responsive-img openbox img-radius z-depth-1" src="http://cdn1.popworkouts.com/wp-content/uploads/2012/12/megan-fox-face.jpg">
                  <div class="card-album-likes z-depth-1">
                    <ul>
                      <li><i class="zmdi zmdi-star-outline"></i> 23</li>
                      <li><i class="zmdi zmdi-favorite-outline"></i> 34</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

<div id="blogs" class="row-slider">
    <div class="blog-item">
        <img class="responsive-img z-depth-1" src="/images/blog.jpg"></img>
        <div class="blog-item-text">
            <a href="#"><h3>How to organize our own wedding</h3></a>
            <p>Wedding test test test test test test test test test test test test test test test test test test test test test test test test test test test test test</p>
        </div>
        <ul class="blog-item-tags">
          <li><a href="#">#Cars</a></li>
          <li><a href="#">#Photo</a></li>
          <li><a href="#">#Flowers</a></li>
        </ul>
    </div>
    
    <div class="blog-item">
        <img class="responsive-img z-depth-1" src="/images/blog.jpg"></img>
        <div class="blog-item-text">
            <a href="#"><h3>How to organize our own wedding</h3></a>
            <p>Wedding test test test test test test test test test test test test test test test test test test test test test test test test test test test test test</p>
        </div>
        <ul class="blog-item-tags">
          <li><a href="#">#Cars</a></li>
          <li><a href="#">#Photo</a></li>
          <li><a href="#">#Flowers</a></li>
        </ul>
    </div>
</div>

<div id="news" class="row-slider">
    <a href="#" class="news-block">
      <div class="news-content">
        <div class="news-date">27.10.2015</div>
        <div class="news-title">News title</div>
        <div class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit tortor nisl. Vivamus pretium dolor nec odio egestas ullamcorper.</div>
      </div>
      <div class="news-bottom"></div>
      <div class="news-corner"></div>
      <div class="clear"></div>
    </a>
    <a href="#" class="news-block">
      <div class="news-content">
        <div class="news-date">27.10.2015</div>
        <div class="news-title">News title</div>
        <div class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit tortor nisl. Vivamus pretium dolor nec odio egestas ullamcorper.</div>
      </div>
      <div class="news-bottom"></div>
      <div class="news-corner"></div>
      <div class="clear"></div>
    </a>
    <a href="#" class="news-block">
      <div class="news-content">
        <div class="news-date">27.10.2015</div>
        <div class="news-title">News title</div>
        <div class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit tortor nisl. Vivamus pretium dolor nec odio egestas ullamcorper.</div>
      </div>
      <div class="news-bottom"></div>
      <div class="news-corner"></div>
      <div class="clear"></div>
    </a>
    <a href="#" class="news-block">
      <div class="news-content">
        <div class="news-date">27.10.2015</div>
        <div class="news-title">News title</div>
        <div class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit tortor nisl. Vivamus pretium dolor nec odio egestas ullamcorper.</div>
      </div>
      <div class="news-bottom"></div>
      <div class="news-corner"></div>
      <div class="clear"></div>
    </a>
    <a href="#" class="news-block">
      <div class="news-content">
        <div class="news-date">27.10.2015</div>
        <div class="news-title">News title</div>
        <div class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit tortor nisl. Vivamus pretium dolor nec odio egestas ullamcorper.</div>
      </div>
      <div class="news-bottom"></div>
      <div class="news-corner"></div>
      <div class="clear"></div>
    </a>
    <a href="#" class="news-block">
      <div class="news-content">
        <div class="news-date">27.10.2015</div>
        <div class="news-title">News title</div>
        <div class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit tortor nisl. Vivamus pretium dolor nec odio egestas ullamcorper.</div>
      </div>
      <div class="news-bottom"></div>
      <div class="news-corner"></div>
      <div class="clear"></div>
    </a>
    <a href="#" class="news-block">
      <div class="news-content">
        <div class="news-date">27.10.2015</div>
        <div class="news-title">News title</div>
        <div class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit tortor nisl. Vivamus pretium dolor nec odio egestas ullamcorper.</div>
      </div>
      <div class="news-bottom"></div>
      <div class="news-corner"></div>
      <div class="clear"></div>
    </a>
    <a href="#" class="news-block">
      <div class="news-content">
        <div class="news-date">27.10.2015</div>
        <div class="news-title">News title</div>
        <div class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit tortor nisl. Vivamus pretium dolor nec odio egestas ullamcorper.</div>
      </div>
      <div class="news-bottom"></div>
      <div class="news-corner"></div>
      <div class="clear"></div>
    </a>
</div>

</div>