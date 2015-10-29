(function() {
  var bgImg, borderResize, getBorderDimensions, loading;

  $('.frame').css({
    width: $(window).width(),
    height: $(window).height()
  });

  bgImg = function(bgImg) {
    var heightdiff, heightratio, imgheight, imgwidth, widthdiff, widthratio, winheight, winwidth, ww;
    ww = $(window);
    imgwidth = bgImg.width();
    imgheight = bgImg.height();
    winwidth = ww.width();
    winheight = ww.height();
    widthratio = winwidth / imgwidth;
    heightratio = winheight / imgheight;
    widthdiff = heightratio * imgwidth;
    heightdiff = widthratio * imgheight;
    if (heightdiff > winheight) {
      bgImg.css({
        width: winwidth + 'px',
        height: heightdiff + 'px'
      });
    } else {
      bgImg.css({
        width: widthdiff + 'px',
        height: winheight + 'px'
      });
    }
    return bgImg.css({
      top: '50%',
      left: '50%',
      marginLeft: bgImg.width() * -.5,
      marginTop: bgImg.height() * -.5
    });
  };

  getBorderDimensions = function(which) {
    var borderPadding;
    borderPadding = {
      vertical: 60,
      horizontal: 60
    };
    if (which === 'height') {
      return $(window).height() - borderPadding.vertical * 2;
    } else if (which === 'width') {
      return $(window).width() - borderPadding.horizontal * 2;
    }
  };

  borderResize = function() {
    $('.border.top, .border.bottom').css({
      width: getBorderDimensions('width')
    });
    return $('.border.left, .border.right').css({
      height: getBorderDimensions('height')
    });
  };

  loading = {
    animation: new TimelineLite(),
    time: 1.5,
    easing: Power4.easeInOut,
    easing2: Power4.easeOut
  };

  $('#bg-img').css({
    transform: 'scale(1.5)'
  });

  loading.animation.to($('.border.top, .border.bottom'), loading.time, {
    width: getBorderDimensions('width'),
    ease: loading.easing
  }).to($('.border.left, .border.right'), loading.time, {
    height: getBorderDimensions('height'),
    ease: loading.easing
  }, '-=1.5').to($('#bg-img'), loading.time * 2, {
    opacity: 1,
    scale: 1,
    ease: loading.easing
  }, '-=1.5').to($('header'), loading.time * 1.5, {
    top: '23px',
    scale: 1,
    ease: loading.easing
  }, '-=2.5').to($('footer'), loading.time * 1.5, {
    bottom: '35px',
    scale: 1,
    ease: loading.easing
  }, '-=2');

  $('header > nav').each(function() {
    return $(this).find('ul').css('width', $(this).width() - 40);
  });

  $(window).load(function() {
    var timeX;
    bgImg($('#bg-img'));
    loading.animation.play();
    $('#site > footer nav ul').css({
      marginTop: $('#site > footer nav ul').height() * -1 - 60
    });
    $('.cart').css({
      right: $('#site > header nav').eq(1).width() + 60 + 20
    });
    timeX = null;
    $('#site > header > nav, #site > footer > nav').bind('mouseenter mouseleave', function(event) {
      var list;
      list = $(this).find('> ul');
      if (event.type === 'mouseenter') {
        clearTimeout(timeX);
        list.css('display', 'block');
        return TweenLite.to(list, loading.time * .5, {
          opacity: 1,
          scale: 1,
          ease: loading.easing
        });
      } else if (event.type === 'mouseleave') {
        return timeX = setTimeout((function() {
          return TweenLite.to(list, loading.time * .5, {
            opacity: 0,
            scale: 1.5,
            ease: loading.easing,
            onComplete: function() {
              return list.css('display', 'none');
            }
          });
        }), 500);
      }
    });
    return $('a').not('.slide').bind('mouseenter mouseleave', function(event) {
      var link;
      link = $(this);
      if (event.type === 'mouseenter') {
        return TweenLite.to(link, loading.time * .4, {
          scale: .9,
          ease: loading.easing2
        });
      } else if (event.type === 'mouseleave') {
        return TweenLite.to(link, loading.time * .4, {
          scale: 1,
          ease: loading.easing2
        });
      }
    });
  });

  $(window).resize(function() {
    bgImg($('#bg-img'));
    borderResize();
    return $('.frame').css({
      width: $(window).width(),
      height: $(window).height()
    });
  });

  $(window).load(function() {
    loading.animation.to($('.loading'), loading.time * 2, {
      marginTop: '-110px',
      ease: loading.easing
    }, '-=2');
    return loading.animation.to($('nav.home'), loading.time * 1.5, {
      marginTop: '65px',
      opacity: 1,
      ease: loading.easing
    }, '-=2');
  });

}).call(this);
