(function() {
  var bgImg, borderResize, getBorderDimensions, loading, timeline;

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

  timeline = function() {
    var overallMargin, overallMargin2;
    $('#timeline, #timeWrap').css({
      width: $(window).width() - 120
    });
    overallMargin = Math.floor((($(window).width() - 120) - $('.time img').width() * 4) / ($('.time').size() - 1));
    overallMargin2 = Math.floor((($(window).width() - 120) - $('.timeAnchor').width() * $('.timeAnchor').size()) / ($('.time').size() - 1));
    $('.time').css({
      width: $(window).width() - 120,
      marginLeft: $(this).width() / -2 + 60
    });
    $('#line').css({
      width: $(window).width() - 120,
      marginLeft: $(this).width() / -2 + 60
    });
    $('.time img').css({
      marginLeft: overallMargin / 2,
      marginRight: overallMargin / 2
    });
    $('.time img:first-child').css({
      marginLeft: 0
    });
    $('.time img:last-child').css({
      marginRight: 0
    });
    $('.timeAnchor').css({
      marginLeft: overallMargin2 / 4,
      marginRight: overallMargin2 / 4
    });
    $('.timeAnchor').eq(0).find('.circle').css({
      backgroundColor: '#fff'
    });
    $('.time').find('>img').css({
      opacity: 0
    });
    $('.time').eq(0).find('>img').css({
      opacity: 1
    });
    return TweenLite.set($('.time').eq(0).find('img'), {
      scale: 1,
      ease: loading.easing
    }, '-=1');
  };

  $(window).load(function() {
    timeline();
    loading.animation.to($('nav.menu'), loading.time, {
      width: '249px',
      ease: loading.easing
    }, '-=2.5').to($('nav.menu .text'), loading.time, {
      marginTop: '30px',
      opacity: 1,
      ease: loading.easing
    }, '-=1.5').to($('#headerGroup'), loading.time, {
      opacity: 1,
      scale: 1,
      ease: loading.easing
    }, '-=1.5').to($('div.desc').eq('0'), loading.time, {
      opacity: 1,
      scale: 1,
      ease: loading.easing
    }, '-=1.5').to($('#timeline'), loading.time, {
      opacity: 1,
      scale: 1,
      ease: loading.easing
    }, '-=1.5').to($('.line'), loading.time, {
      opacity: 1,
      scale: 1,
      ease: loading.easing
    }, '-=1.5');
    $('.timeAnchor').bind('mouseenter mouseleave', function(event) {
      if (event.type === 'mouseenter') {
        return TweenLite.to($(this).find('.circle'), loading.time * .4, {
          scale: 1.4,
          ease: loading.easing
        });
      } else if (event.type === 'mouseleave') {
        return TweenLite.to($(this).find('.circle'), loading.time * .4, {
          scale: 1,
          ease: loading.easing
        });
      }
    });
    $('.timeAnchor').on('click', function() {
      var dots, indFrom, indTo;
      if (!$(this).hasClass('active')) {
        indFrom = $('.timeAnchor.active').index() - 1;
        indTo = $(this).index() - 1;
        dots = new TimelineLite();
        $('.time').eq(indFrom).find('img').each(function() {
          dots.to($(this), loading.time * .4, {
            opacity: 0,
            scale: 1.5,
            ease: loading.easing
          }, '-=.5');
          return $('.timeAnchor').removeClass('active').eq(indTo).addClass('active');
        });
        dots.to($('.timeAnchor .circle'), loading.time * .3, {
          backgroundColor: '#000',
          ease: loading.easing
        }, '-=.5');
        dots.to($('.timeAnchor.active .circle'), loading.time * .3, {
          backgroundColor: '#fff',
          ease: loading.easing
        }, '-=.5');
        $('.time').eq(indTo).find('img').each(function() {
          return dots.to($(this), loading.time * .4, {
            opacity: 1,
            scale: 1,
            ease: loading.easing
          }, '-=.5');
        });
        dots.to($('.desc').eq(indFrom), loading.time * .6, {
          opacity: 0,
          scale: 1.5,
          ease: loading.easing
        }, '-=1');
        dots.to($('.desc').eq(indTo), loading.time * .6, {
          opacity: 1,
          scale: 1,
          ease: loading.easing
        }, '-=1');
        return dots.play();
      }
    });
    return $('nav.menu .text, nav.menu .icon').click(function() {
      var nav;
      nav = $('nav.menu ul');
      if (!$('.icon').hasClass('close')) {
        nav.css('display', 'block');
        TweenLite.to(nav.find('> li'), 0, {
          scale: 1.5,
          opacity: 0,
          onComplete: function() {
            return TweenLite.to(nav, loading.time * .4, {
              opacity: 1,
              scale: 1,
              ease: loading.easing,
              onComplete: function() {
                var listing;
                listing = new TimelineLite();
                nav.find('> li').each(function() {
                  return listing.to($(this), loading.time * .3, {
                    opacity: 1,
                    scale: 1,
                    ease: loading.easing2
                  }, '-=.3');
                });
                return listing.play();
              }
            });
          }
        });
        return TweenLite.to($('.icon'), loading.time * .4, {
          opacity: 1,
          width: '10px',
          height: '10px',
          marginLeft: '15px',
          ease: loading.easing,
          onComplete: function() {
            return $('.icon').addClass('close');
          }
        });
      } else if ($('.icon').hasClass('close')) {
        TweenLite.to(nav, loading.time * .4, {
          opacity: 0,
          scale: 1.5,
          ease: loading.easing,
          onComplete: function() {
            TweenLite.to(nav.find('> li'), 0, {
              scale: 1.5,
              opacity: 0
            });
            nav.css({
              'display': 'none'
            });
            return nav.find('>li').css({
              'opacity': 0
            });
          }
        });
        return TweenLite.to($('.icon'), loading.time * .4, {
          opacity: 0,
          width: '0px',
          height: '0px',
          marginLeft: '0px',
          ease: loading.easing,
          onComplete: function() {
            return $('.icon').removeClass('close');
          }
        });
      }
    });
  });

  $(window).resize(function() {
    return timeline();
  });

}).call(this);
