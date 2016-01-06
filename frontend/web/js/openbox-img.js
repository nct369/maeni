var photo;
$(document).on('click','.openbox',function(){
    $('.overlay-bg').fadeIn();
    photo = $(this);
    var overlay_img = $('.overlay-img');
    overlay_img.css({
        'position' : 'fixed',
        'width': photo.width()+'px',
        'height': photo.height()+'px',
        'top': photo.offset().top - $(window).scrollTop()+'px',
        'left': photo.offset().left+'px',
        'transition': 'all 0.5s'
    });
    photo.fadeTo( 0 , 0);
    overlay_img.attr('src',photo.attr('src'));
    overlay_img.show();
    setTimeout(function(){
        var overlay_img = $('.overlay-img');
        var img_width, img_height;
        if (overlay_img.get(0).naturalWidth>($(window).width()-50) || overlay_img.get(0).naturalHeight>($(window).height()-50)) {
          if(overlay_img.get(0).naturalWidth>($(window).width()-100) && overlay_img.get(0).naturalHeight>($(window).height()-100)){
            if(overlay_img.get(0).naturalWidth>overlay_img.get(0).naturalHeight){
              img_width = $(window).width()-100;
              img_height = ($(window).width()-100)*overlay_img.get(0).naturalHeight/overlay_img.get(0).naturalWidth;
            }else{
              img_width = ($(window).height()-100)*overlay_img.get(0).naturalWidth/overlay_img.get(0).naturalHeight;
              img_height = $(window).height()-100;
            }
          }else if(overlay_img.get(0).naturalWidth>($(window).width()-100) && overlay_img.get(0).naturalHeight<($(window).height()-100)){
            img_width = $(window).width()-100;
            img_height = ($(window).width()-100)*overlay_img.get(0).naturalHeight/overlay_img.get(0).naturalWidth;
          }else if(overlay_img.get(0).naturalWidth<($(window).width()-100) && overlay_img.get(0).naturalHeight>($(window).height()-100)){
            img_width = ($(window).height()-100)*overlay_img.get(0).naturalWidth/overlay_img.get(0).naturalHeight;
            img_height = $(window).height()-100;
          }
        }else{
          img_width = overlay_img.get(0).naturalWidth;
          img_height = overlay_img.get(0).naturalHeight;
        }
        overlay_img.css({
            'width' : img_width,
            'height' : img_height,
            'top' : 'calc(50% - '+img_height/2+'px)',
            'left' : 'calc(50% - '+img_width/2+'px)'
        });
    },10);
});
$(document).on('click','.overlay-bg, .overlay-img',function(){
  var overlay_img = $('.overlay-img');
  overlay_img.css({
      'position' : 'fixed',
      'width': photo.width()+'px',
      'height': photo.height()+'px',
      'top': photo.offset().top - $(window).scrollTop()+'px',
      'left': photo.offset().left+'px',
      'transition': 'all 0.5s'
  });
  setTimeout(function(){
    overlay_img.hide();
    photo.fadeTo( 0 , 1);
  },500);
  $('.overlay-bg').fadeOut();
});