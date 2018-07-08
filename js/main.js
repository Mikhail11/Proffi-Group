(function($) {

    $('.projects__preview').on('click', function(event){
        if($(event.target).hasClass('projects__preview-btn')) {
            $('body').addClass('cases_open');
            $('.cases').addClass('cases_opened');
            event.stopImmediatePropagation();
        }
    });

    $('.cases__back-button').on('click', function(event){
            $('body').removeClass('cases_open');
            $('.cases').removeClass('cases_opened');
            event.stopImmediatePropagation();
    });

    if(location.search == '?quiz') {
        $('body').addClass('quiz_open');
        $('.quiz').addClass('quiz_opened');
    }

    var menu_selector = ".list__item:not(.link-material)"; // Переменная должна содержать название класса или идентификатора, обертки нашего меню.

    $(menu_selector + ' .list__item-link').on('click', function(event) {
        $('.list__item_active:not(.link-material)').removeClass('list__item_active');
        var $anchor = $(this);
        var parent = $anchor.parent();
        parent.addClass('list__item_active');
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });

/* scroll menu items active */

    function onScroll(){
        var scroll_top = $(document).scrollTop();
        $(menu_selector + " a").each(function(){
            var hash = $(this).attr("href");
            var target = $(hash);
            if (target.position().top <= scroll_top && target.position().top + target.outerHeight() > scroll_top) {
                $(menu_selector + ".list__item_active").removeClass("list__item_active");
                $(this).parent().addClass("list__item_active");
            } else {
                $(this).removeClass("list__item_active");
            }
        });
    }
    $(document).ready(function () {
        $(document).on("scroll", onScroll);
        $("a[href^=#]").click(function(e){
            e.preventDefault();
            $(document).off("scroll");
            $(menu_selector + ".list__item_active").removeClass("list__item_active");
            $(this).parent().addClass("list__item_active");
            var hash = $(this).attr("href");
            var target = $(hash);
            $("html, body").animate({
                scrollTop: target.offset().top
            }, 500, function(){
                window.location.hash = hash;
                $(document).on("scroll", onScroll);
            });
        });
    });

    function setMaterilaProperties(kind) {
        var properties = [
            {
                hardness: '5',
                texture: '4',
                price: '3'
            },

            {
                hardness: '3',
                texture: '5',
                price: '2'
            },

            {
                hardness: '1',
                texture: '3',
                price: '4'
            },

            {
                hardness: '5',
                texture: '2',
                price: '2'
            },

            {
                hardness: '1',
                texture: '1',
                price: '5'
            }
        ];

        Object.keys(properties[kind]).forEach(function(key) {
            var value = properties[kind][key],
                $anchor = $('#' + key),
                current = $anchor.data('current');
                $anchor.removeClass('scale__value_' + current);
                $anchor.addClass('scale__value_' + value);
                $anchor.data('current', value);

        });
    }

    $('.link-material').on('click', function(e) {
        $('.link-material.list__item_active').removeClass('list__item_active');
        $(this).addClass('list__item_active');
        e.preventDefault();
        setMaterilaProperties($('.link-material.list__item_active a').data('kind'));
    });

    var selectOptions = {};
    $('.quiz__btn').on('click', function(e){
        e.preventDefault();
        var $anchor = $(this);
        var markers = $('.quiz__active-item');
        var current = $anchor.data('cur');
        var next = $anchor.data('page');
        var text = $('.quiz__select_active').text();

        if(!selectOptions[current]) selectOptions[current] = text;

        markers = Array.prototype.map.call(markers, function(item){ return item});



        $('.quiz__select_active').removeClass('quiz__select_active');

        switch(next) {
            case '+1':
                quizClose();
                break;
            case 'send':
                finishQuiz();
                break;
            case 'finally':
                $('.quiz_' + current).hide();
                $('.quiz_' + next).show();
                var items = $('.quiz__active-item');
                Array.prototype.forEach.call(items, function(item){
                    $(item).addClass('quiz__active-item_full');
                });
                break;
            case 'revert':
                $('.quiz_finally').hide();
                $('.quiz_4').show();
                var items = $('.quiz__active-item_full');
                Array.prototype.forEach.call(items, function(item){
                    $(item).removeClass('quiz__active-item_full');
                });
                break;
            default:
                $('.quiz_' + current).hide();
                $('.quiz_' + next).show();
                if(current > next) {
                    $(markers[current-1]).removeClass('quiz__active-item_cur');
                } else {
                    $(markers[current]).addClass('quiz__active-item_cur');
                }
            break;

        }
    });

    $('.quiz__select').on('click', function(e){
        e.preventDefault();
        $('.quiz__select_active').removeClass('quiz__select_active');
        $(this).addClass('quiz__select_active');

    });

    $('.question__btn').on('click', function(e){
        e.preventDefault();
        $('body').addClass('quiz_open');
        $('.quiz').addClass('quiz_opened');
    });

    function quizShow() {
        selectOptions = {};
        $('body').addClass('quiz_open');
        $('.quiz').addClass('quiz_opened');
    }
    function quizClose() {
        $('body').removeClass('quiz_open');
        $('.quiz').removeClass('quiz_opened');
    }

    function send(obj, callback) {
      /*отправка данных на сервер*/
    }

    function finishQuiz() {
        $('#finText').text('Ваша заявка на лестницу успешно отправлена!');
        $('.quiz__content-items_stretch').attr('style', 'align-self:flex-start');
        $('#yourName').hide();
        $('#yourNumber').hide();
        $('#btnBlock').hide();
        setTimeout(function() {
            $('#finText').text('Оставьте заявку, чтобы наши менеджеры обсудили с вами все детали.<br/>' +
            'Если не нашли для себя подходящего варианта свяжитесь и мы поможем!');
            quizClose();
            $('.quiz__content-items_stretch').removeAttr('style');
            $('.quiz_finally').hide();
            $('.quiz_1').show();
            $('#yourName').show();
            $('#yourNumber').show();
            $('#btnBlock').show();
        }, 5000);
    }

})(jQuery);