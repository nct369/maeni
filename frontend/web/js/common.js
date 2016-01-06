/*************
*****MENU*****
**************/

// LEFT MENU INIT
$('.button-collapse.toolbar').sideNav({
    menuWidth: 80,
});

// RIGHT MENU INIT
$('.button-collapse.menu').sideNav({
    menuWidth: 240,
    edge: 'right',
});

// ROW SLIDER NAVIGATION
$('.row-nav > a:first-child').on('click', function() {
    $('#'+$(this).parent().data('row')).slick('slickNext');
});
$('.row-nav > a:last-child').on('click', function() {
    $('#'+$(this).parent().data('row')).slick('slickPrev');
});

// ROW SLIDER - CATEGORY ROW SLIDER INIT
$('#category').slick({
    focusOnSelect: false,
    infinite: false,
    focusOnSelect: false,
    slidesToShow: 6,
    slidesToScroll: 6,
    arrows: false,
    responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          }
        }
    ]
});

// ROW SLIDER - POPULAR STAFF ROW SLIDER INIT
$('#popular-staff').slick({
    focusOnSelect: false,
    infinite: false,
    focusOnSelect: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
});

// POPULAR STAFF - ALBUM SLIDER INIT
$('.album-slider').slick({
    draggable: false,
    focusOnSelect: false,
    infinite: false,
    slidesToShow: 2,
    slidesToScroll: 2,
    arrows: false,
});

// ALBUM SLIDER NAVIGATION
$('.album-slider-nav > .right').click(function(){
    $(this).parent().next().slick('slickNext');
});
$('.album-slider-nav > .left').click(function(){
    $(this).parent().next().slick('slickPrev');
});

// ROW SLIDER - BLOGS ROW SLIDER INIT
$('#blogs').slick({
    focusOnSelect: false,
    infinite: false,
    focusOnSelect: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
});

// ROW SLIDER - NEWS ROW SLIDER INIT
$('#news').slick({
    focusOnSelect: false,
    infinite: false,
    focusOnSelect: false,
    slidesToShow: 6,
    slidesToScroll: 6,
    arrows: false,
    responsive: [
        {
          breakpoint: 1400,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
    ]
});

/*************
*****OTHER****
**************/

// MODAL INIT FOR ALL '.modal-trigger' CLASS
$('.modal-trigger').leanModal();

// SELECT INIT FOR ALL '.select' CLASS
$('select').material_select();


$(document).ready(function(){
    $('.category-index-page .col, #popular-staff .col, #album').height($('.category-index-page .col, #popular-staff .col, #album').width());
        //Category
    $("#side-toolbar .row-nav[data-row=category]").css({
        'height': $('#category').height()+60,   // 50=margin
        'margin-top': $('header').height()+50-320-25 //50=header margin, 320=5(icons)*64, 20 nav top pos
    }); 
    $("#side-toolbar .row-nav[data-row=category] .row-nav-btn").css({
        'top': $("#side-toolbar .row-nav[data-row=category]").height()/2-30
    });
    
    //Popular staff//
    $("#side-toolbar .row-nav[data-row=popular-staff]").css({
        'height': $('#popular-staff').height()+60,
    });
    $("#side-toolbar .row-nav[data-row=popular-staff] .row-nav-btn").css({
        'top': $("#side-toolbar .row-nav[data-row=popular-staff]").height()/2-30
    });
    
    //Blogs
    $("#side-toolbar .row-nav[data-row=blogs]").css({
        'height': $('#blogs').height()+60,
    });
    $("#side-toolbar .row-nav[data-row=blogs] .row-nav-btn").css({
        'top': $("#side-toolbar .row-nav[data-row=blogs]").height()/2-30
    });
    
    //News
    $("#side-toolbar .row-nav[data-row=news]").css({
        'height': $('#news').height()+60,
    });
    $("#side-toolbar .row-nav[data-row=news] .row-nav-btn").css({
        'top': $("#side-toolbar .row-nav[data-row=news]").height()/2-30
    });
});

$('img').load(function(){
    //Category
    $("#side-toolbar .row-nav[data-row=category]").css({
        'height': $('#category').height()+60,   // 50=margin
        'margin-top': $('header').height()+50-320-25 //50=header margin, 320=5(icons)*64, 20 nav top pos
    }); 
    $("#side-toolbar .row-nav[data-row=category] .row-nav-btn").css({
        'top': $("#side-toolbar .row-nav[data-row=category]").height()/2-30
    });
    
    //Popular staff//
    $("#side-toolbar .row-nav[data-row=popular-staff]").css({
        'height': $('#popular-staff').height()+60,
    });
    $("#side-toolbar .row-nav[data-row=popular-staff] .row-nav-btn").css({
        'top': $("#side-toolbar .row-nav[data-row=popular-staff]").height()/2-30
    });
    
    //Blogs
    $("#side-toolbar .row-nav[data-row=blogs]").css({
        'height': $('#blogs').height()+60,
    });
    $("#side-toolbar .row-nav[data-row=blogs] .row-nav-btn").css({
        'top': $("#side-toolbar .row-nav[data-row=blogs]").height()/2-30
    });
    
    //News
    $("#side-toolbar .row-nav[data-row=news]").css({
        'height': $('#news').height()+60,
    });
    $("#side-toolbar .row-nav[data-row=news] .row-nav-btn").css({
        'top': $("#side-toolbar .row-nav[data-row=news]").height()/2-30
    });
});

$( window ).resize(function() {
    if($(document).width()<993){
        $('#side-plan').velocity({left: -100},{ duration: 400, queue: false, easing: 'easeOutCubic'});
    }else{
        if($('#open-plan').hasClass('active')){
            setTimeout(function(){
                $('#side-plan').velocity({left: 80},{ duration: 400, queue: false, easing: 'easeOutCubic'});
            }, 200);
        }
    }
    setTimeout(function(){
        $('.category-index-page .col, #popular-staff .col, #album').height($('.category-index-page .col, #popular-staff .col, #album').width());
        //Category
        $("#side-toolbar .row-nav[data-row=category]").css({
            'height': $('#category').height()+60,
            'margin-top': $('header').height()+50-320-25 //50=header margin, 320=5(icons)*64, 20 nav top pos
        });
        $("#side-toolbar .row-nav[data-row=category] .row-nav-btn").css({
            'top': $("#side-toolbar .row-nav[data-row=category]").height()/2-30
        });
        
        //Popular staff
        $("#side-toolbar .row-nav[data-row=popular-staff]").css({
            'height': $('#popular-staff').height()+60,
        });
        $("#side-toolbar .row-nav[data-row=popular-staff] .row-nav-btn").css({
            'top': $("#side-toolbar .row-nav[data-row=popular-staff]").height()/2-30
        });
        
        //Blogs
        $("#side-toolbar .row-nav[data-row=blogs]").css({
            'height': $('#blogs').height()+60,
        });
        $("#side-toolbar .row-nav[data-row=blogs] .row-nav-btn").css({
            'top': $("#side-toolbar .row-nav[data-row=blogs]").height()/2-30
        });
        
        //News
        $("#side-toolbar .row-nav[data-row=news]").css({
            'height': $('#news').height()+60,
        });
        $("#side-toolbar .row-nav[data-row=news] .row-nav-btn").css({
            'top': $("#side-toolbar .row-nav[data-row=news]").height()/2-30
        });
    
    }, 100);
});

// CATEGORY SIDENAV
$('#category-sidenav-btn').on('click',function(){
    if(!$(this).hasClass('active')){
        $(this).addClass('active');
        $('.button-collapse.toolbar').sideNav('hide');
        $('body').addClass('overflow-hidden').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
            $('.category-sidenav').addClass('slide-out').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
    			$(this).removeClass('overflow-hidden');
    		});
        });
        
    }else{
        $(this).removeClass('active');
        $('body').removeClass('overflow-hidden');
        $('.category-sidenav').removeClass('slide-out').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
			$(this).addClass('overflow-hidden');
			$('body').removeClass('overflow-hidden');
		});
    }
    return false;
});
$('.category-sidenav .head-close-block .zmdi').on('click', function(){
    $('#category-sidenav-btn').removeClass('active');
    $('body').removeClass('overflow-hidden');
    $('.category-sidenav').removeClass('slide-out').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
		$(this).addClass('overflow-hidden');
		$('body').removeClass('overflow-hidden');
	});
});


// OPEN PLAN
$('#open-plan').on('click', function(){
    $('.filter-menu').hide();
    $('#plan-overlay').remove();
    if(!$(this).hasClass('active')){
        $('#side-toolbar .toolbar_item a').removeClass('active');
        $(this).addClass('active');
        $('#side-plan').velocity({left: 80},{ duration: 400, queue: false, easing: 'easeOutCubic'});
        $('body').append('<div id="plan-overlay"></div>').addClass('overflow-hidden');
        $('.plan-content-view').insertAfter($('#plan-overlay'));
        
        
        $('#side-plan .toolbar_item a[data-view=information]').addClass('active');
        if($(document).width()<993){
            $('#side-plan').velocity({left: -100},{ duration: 400, queue: false, easing: 'easeOutCubic'});
            $('.button-collapse.toolbar').sideNav('hide');
        }
        $('#information').fadeIn();
        
        
    }else{
        $('.plan-content-view').fadeOut();
        $(this).removeClass('active');
        $('#side-plan').velocity({left: -100},{ duration: 400, queue: false, easing: 'easeOutCubic'});
        $('#plan-overlay').remove();
        $('body').removeClass('overflow-hidden');
    }
    return false;
});

// CLOSE PLAN

$(document).on('click','#plan-overlay', function(){
    $('#open-plan').removeClass('active');
    $('#side-plan').velocity({left: -100},{ duration: 400, queue: false, easing: 'easeOutCubic'});
    $('#plan-overlay').remove();
    $('#side-toolbar .toolbar_item a').removeClass('active');
    if($('nav.main-menu').css('display')=='none'){
        $('.filter-menu').hide();
        $('nav.main-menu').show();
    }
    $('body').removeClass('overflow-hidden');
});

$(document).on('click', '.plan-content-view .plan-content-header a.close', function(){
    if($(document).width()<993){
        $('#side-plan').velocity({left: 80},{ duration: 400, queue: false, easing: 'easeOutCubic'});
        $('.button-collapse.toolbar').sideNav('show');
        $('#plan-overlay').insertAfter($('#sidenav-overlay'));
        $('.plan-content-view').insertAfter($('#plan-overlay'));
    }
    $(this).parents('.plan-content-view').fadeOut();
     $('#side-plan .toolbar_item a.active').removeClass('active');
});

$(document).on('click', '.plan-content-view .plan-content-header a.enter', function(){
    if($(this).parents('#information').hasClass('plan-content-view') && !$('#plan_fullname').val()){
        Materialize.toast('Adınızı qeyd edin', 3000, 'rounded');
        return false;
    }
    if($(this).parents('#information').hasClass('plan-content-view') && !$('#plan_email').val()){
        Materialize.toast('Emaili qeyd edin', 3000, 'rounded');
        return false;
    }
    if($(this).parents('#information').hasClass('plan-content-view') && !$('#plan_telephone').val()){
        Materialize.toast('Telefonu qeyd edin', 3000, 'rounded');
        return false;
    }
    if($(this).parents('#calendar').hasClass('plan-content-view') && !$('#plan-input-calendar').val()){
        Materialize.toast('Təqvimi seçin', 3000, 'rounded');
        return false;
    }
    if($(this).parents('.plan-content-service').hasClass('plan-content-view') && !$('.plan-input-service').val()){
        Materialize.toast('Xidmət seçin', 3000, 'rounded');
        return false;
    }
    $(this).parents('.plan-content-view').fadeOut();
    if($(this).parents('.plan-content-view').next('div').hasClass('plan-content-view')){
        $('#side-plan .toolbar_item a.active').removeClass('active').parent().next().children('a').addClass('active').removeClass('disabled');
        $(this).parents('.plan-content-view').next('.plan-content-view').fadeIn();
        $('.plan-services-page .col').height($('.plan-services-page .col').width());
    }else{
        $('#side-plan .toolbar_item a.active').removeClass('active');
        //$('#side-plan').velocity({left: 80},{ duration: 400, queue: false, easing: 'easeOutCubic'});
        $('#plan-overlay').remove();
        $('#open-plan').removeClass('active');
        $('.plan-content-view .plan-content-input').each(function(){
            $(this).text($(this).data('placeholder'));
        });
        $('#information input, #information textarea').each(function(){
            $(this).val($(this).data('value'));
            if($(this).data('value')==""){
                $(this).removeClass('valid').prev().removeClass('active').next().next().removeClass('active');
            }
        });
        $('#order span').each(function(){
            $(this).text($('#information #'+$(this).data('id')).val());
            if(!$(this).text()){
                $(this).parent().hide();
            }
        });
        $('#side-plan .toolbar_item a:not(a[data-view=information])').each(function(){
            $(this).addClass('disabled');
        });
        if($(document).width()>=993){
            $('#side-plan').velocity({left: -100},{ duration: 400, queue: false, easing: 'easeOutCubic'});
        }
    }
});

$(document).on('click','#side-plan .toolbar_item a', function(){
    if($(this).hasClass('disabled')){
        Materialize.toast('Bu keçidə keçməzdən əvvəl əvvəlki keçidin informasiyasın doldurun', 3000, 'rounded');
        return false;
    }
    if(!$(this).hasClass('active')){
        $('#side-plan .toolbar_item a').removeClass('active');
        $('.plan-content-view').fadeOut();
        $(this).addClass('active');
        if($(document).width()<993){
            $('#side-plan').velocity({left: -100},{ duration: 400, queue: false, easing: 'easeOutCubic'});
            $('.button-collapse.toolbar').sideNav('hide');
        }
        $('#'+$(this).data('view')).fadeIn();
        $('.plan-services-page .col').height($('.plan-services-page .col').width());
        $( window ).resize(function() {
            $('.plan-services-page .col').height($('.plan-services-page .col').width());
        });
    }else{
        $(this).removeClass('active');
        $('#'+$(this).data('view')).fadeOut();
    }
});

$('#information input, #information textarea').change(function(){
    console.log($(this).attr('id'));
   $('#order span[data-id='+$(this).attr('id')+']').text($(this).val()).parent().show(); 
});
$('#order span').each(function(){
    $(this).text($('#information #'+$(this).data('id')).val());
    if(!$(this).text()){
        $(this).parent().hide();
    }
});

$( "#datepicker" ).datepicker({
    nextText: '<i class="zmdi zmdi-hc-2x zmdi-long-arrow-right"></i>',
    prevText: '<i class="zmdi zmdi-hc-2x zmdi-long-arrow-left"></i>',
    dayNamesMin: [ "B", "Be", "Ça", "Ç", "Ca", "C", "Ş" ],
    monthNames: [ "Yanvar", "Fevral", "Mart", "Aprel", "May", "İyun", "İyul", "Avqust", "Sentyabr", "Oktyavr", "Noyabr", "Dekabr" ],
    defaultDate: null,
    setDate: null,
    minDate: new Date(),
    onSelect: function(e) {
        var dt = new Date(e);
        var month_lg = ['yanvar','fevral','mart','aprel','may','iyun','iyul','avqust','sentyabr','oktyabr','noyabr','dekabr'];
        $('#plan-input-calendar').val(dt);
        $('#order span[data-id=plan-input-calendar]').text(dt.getDate()+' '+month_lg[dt.getMonth()]+' '+dt.getFullYear()).parent().show();
        $('#calendar .plan-content-input').text(dt.getDate()+' '+month_lg[dt.getMonth()]+' '+dt.getFullYear());
    },
});
$('#datepicker').find(".ui-datepicker-current-day").removeClass("ui-datepicker-current-day");

$(document).on('click','.ih-item .buttons .zmdi-check',function(){
    $('#'+$(this).parent().data('input')).val($(this).parent().data('id'));
    $('#order span[data-id='+$(this).parent().data('input')+']').text($(this).parents('.ih-item-hover').find('h4.valign').text()).parent().show();
    $('#'+$(this).parent().data('category')+' .plan-content-header .plan-content-input').text($(this).parents('.ih-item-hover').find('h4.valign').text());
});

// FAVORITE ADD
$('.ih-item .buttons .zmdi-plus').on('click', function(){
    var element = $(this).parent();
    $.ajax({
        url: '/checklist/check-service?id='+element.data('id'), 
        type:'get',
        dataType:'json',
        success: function(result){
            if(result.check){
                if($('#side-plan .toolbar_item a[data-view='+element.data('category')+']').length){
                    $('#'+element.data('category')+'.plan-content-service .plan-services-page').append(result.service);
                }else{
                    $(result.list).insertBefore('#side-plan .toolbar_item:last-child');
                    $(result.category_block).insertBefore('#order.plan-content-view');
                    $('#information.plan-content-view .plan-content-view-body form').append(result.category_input);
                    $('#order .card-panel').append(result.category_p);
                    $('#'+element.data('category')+'.plan-content-service .plan-services-page').append(result.service);
                }
                Materialize.toast(element.data('name')+' sizin səbətə əlavə olundu', 3000, 'rounded');
            }else{
                Materialize.toast(element.data('name')+' artıq sizin səbətdə var', 3000, 'rounded');
            }
        }
    });
    return false;
});

// FAVORITE DELETE
$('.ih-item .buttons .zmdi-minus').on('click', function(){
    var element = $(this).parent();
    $.ajax({
        url: '/checklist/uncheck-service?id='+element.data('id'), 
        type:'get',
        dataType:'json',
        success: function(result){
            if(result.uncheck){
                $("#"+element.data('category')+" .add_btn[data-id="+element.data('id')+"]").parents('.col.m6.l3').remove();
                if($.trim($("#"+element.data('category')+" .plan-services-page").text()) == ''){
                    $("#"+element.data('category')).remove();
                    $('#side-plan li a[data-view='+element.data('category')+']').parent().remove();
                    $('#information #plan-input-'+element.data('category')).remove();
                    $('#order p[data-id=plan-input-'+element.data('category')+']').parent().remove();
                }
                element.parents('.col.m6.l3').fadeOut(300,function(){
                    $(this).remove();
                });
                Materialize.toast(element.data('name')+' sizin səbətdən silindi', 3000, 'rounded');
            }else{
                Materialize.toast(element.data('name')+' artıq sizin səbətdən silinib', 3000, 'rounded');
            }
        },
        error: function(){
            Materialize.toast('Sizin əməliyyatınızda səhv var', 3000, 'rounded');
        }
    });
    return false;
});

/***********
***SEARCH***
************/
// Close search
$('nav.search-menu #search').focusout(function(){
    $('nav.search-menu').hide();
    $('nav.main-menu').show();
    $('#open-search').removeClass('active');
    $('#plan-overlay').remove();
    $('body').removeClass('overflow-hidden');
});
// Open search
$('#open-search').on('click',function(){
    $('#side-plan').velocity({left: -100},{ duration: 400, queue: false, easing: 'easeOutCubic'});
    $('#plan-overlay').remove();
    $('.plan-content-view').fadeOut();
    $('#side-toolbar .toolbar_item a').removeClass('active');
    $('#side-plan .toolbar_item a').removeClass('active');
    $('nav.search-menu').show();
    $('nav.main-menu').hide();
    if($(document).width()<993){
        $('#side-toolbar').sideNav('hide');
    }
    $('body').append('<div id="plan-overlay" class="overlay-color"></div>').addClass('overflow-hidden');
    $('nav.search-menu #search').focus();
    $(this).addClass('active');
    $('.filter-menu').hide();
    return false;
});

/***********
***FILTER***
************/
$('#filter_calendar_structure').datepicker({
    nextText: '<i class="zmdi zmdi-hc-2x zmdi-long-arrow-right"></i>',
    prevText: '<i class="zmdi zmdi-hc-2x zmdi-long-arrow-left"></i>',
    dayNamesMin: [ "B", "Be", "Ça", "Ç", "Ca", "C", "Ş" ],
    monthNames: [ "Yanvar", "Fevral", "Mart", "Aprel", "May", "İyun", "İyul", "Avqust", "Sentyabr", "Oktyavr", "Noyabr", "Dekabr" ],
    defaultDate: null,
    setDate: null,
    minDate: new Date(),
    onSelect: function(e) {
        var dt = new Date(e);
        $('#filter_form input[name=date]').val(dt.getFullYear()+'-'+(parseInt(dt.getMonth())+1)+'-'+dt.getDate());
        $('#filter_calendar_structure').closeModal();
    },
});
$('#filter_calendar_structure').find(".ui-datepicker-current-day").removeClass("ui-datepicker-current-day");

$('#open-filter').on('click',function(){
    $('#side-plan').velocity({left: -100},{ duration: 400, queue: false, easing: 'easeOutCubic'});
    $('#plan-overlay').remove();
    $('.plan-content-view').fadeOut();
    $('#side-toolbar .toolbar_item a').removeClass('active');
    $('#side-plan .toolbar_item a').removeClass('active');
    $('nav.filter-menu').show();
    $('nav.main-menu').hide();
    if($(document).width()<993){
        $('#side-toolbar').sideNav('hide');
    }
    $('body').append('<div id="plan-overlay" class="overlay-color"></div>').addClass('overflow-hidden');
    $(this).addClass('active');
    return false;
});

$('.filter-menu .filter_btn').on('click', function(){
    $('#filter_form').submit();
});

$('.filter_categories li a').on('click', function(){
    $(this).parent().parent().removeClass('active').hide();
    $('#filter_form input[name=category]').val($(this).attr('href'));
    return false;
});

$('#select-min-price').on('click', function(){
    $('#filter_form input[name=max-price]').val($('#filter_price_structure .range-field .value').text());
    return false;
});