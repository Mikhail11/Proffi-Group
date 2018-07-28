(function($) {

    $('.cases__back-button').on('click', function(event){
            $('body').removeClass('cases_open');
            $('.cases').removeClass('cases_opened');
            event.stopImmediatePropagation();
    });

    $('.burger').on('click', function(e){
        e.preventDefault();
        $('.navbar-mobile__overlay').addClass('navbar-mobile__overlay_open');
        $('.navbar').addClass('navbar-mobile_open');
    });

    $('.closed').on('click', function(e){
        e.preventDefault();
        $('.navbar-mobile__overlay').removeClass('navbar-mobile__overlay_open');
        $('.navbar').removeClass('navbar-mobile_open');
    });

    var menu_selector = ".list__item:not(.link-material):not(.navbar-mobile__contacts):not(.navbar-mobile_ylw)"; // Переменная должна содержать название класса или идентификатора, обертки нашего меню.

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

    $('.link-material').on('click', function(e) {
        $('.link-material.list__item_active').removeClass('list__item_active');
        $(this).addClass('list__item_active');
        e.preventDefault();
        setMaterilaProperties($('.link-material.list__item_active a').data('kind'));
    });

    var selectOptions = [];
    var quiz_path = $('.quiz').data('path');
    $('.quiz__btn').on('click', function(e){
        e.preventDefault();
        var $anchor = $(this);
        var markers = $('.quiz__active-item');
        var current = $anchor.data('cur');
        var next = $anchor.data('page');


        markers = Array.prototype.map.call(markers, function(item){ return item});


        switch(next) {
            case '+1':
                quizClose();
                break;
            case 'send':
                finishQuiz();
                break;
            case 'finally':
                $('.quiz__img').attr('src',getImageUrl(selectOptions,current));
                $('.quiz_' + current).hide();
                $('.quiz_' + next).show();
                var items = $('.quiz__active-item');
                Array.prototype.forEach.call(items, function(item){
                    $(item).addClass('quiz__active-item_full');
                });
                break;
            case 'revert':
                $(markers[1]).removeClass('quiz__active-item_cur');
                $(markers[2]).removeClass('quiz__active-item_cur');
                $(markers[3]).removeClass('quiz__active-item_cur');
                $('.quiz_finally').hide();
                $('.quiz_1').show();
                quizClose();
                break;
            default:
                selectOptions[current - 1] = $('.quiz_' + current + ' .quiz__select_active').data('pic');
                if(+current < 4) {
                    selectOptions[current] = $('.quiz_' + (+current + 1) + ' .quiz__select:first-child').data('pic');
                    $('.quiz_' + (+current + 1) + ' .quiz__select:first-child').addClass('quiz__select_active');
                }
                $('.quiz_' + current).hide();
                $('.quiz_' + next).show();
                if(current > next) {
                    $(markers[current-1]).removeClass('quiz__active-item_cur');
                } else {
                    $('.quiz__img').attr('src',getImageUrl(selectOptions,current+1));
                    $(markers[current]).addClass('quiz__active-item_cur');
                }
            break;

        }
    });

    $('.quiz__select').on('click', function(e){
        var current = $(this).closest('.quiz__question').data('cur');
        var selector = $('.quiz_' + current + ' .quiz__select_active');
        e.preventDefault();
        selectOptions[current - 1] = $(this).data('pic');
        $('.quiz__img').attr('src',getImageUrl(selectOptions,+current));
        selector.removeClass('quiz__select_active');
        $(this).addClass('quiz__select_active');

    });

    $('.question__btn').on('click', function(e){
        e.preventDefault();
        quizShow();
    });


    //  help functions

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

    function quizShow() {
        selectOptions = [];
        var src = $('.quiz__img').attr('src');
        if (src != (quiz_path + '003.png')) {
            $('.quiz__img').attr('src', quiz_path + '003.png');
        }
        $('.quiz_1 .quiz__select:first-child').addClass('quiz__select_active');
        $('body').addClass('quiz_open');
        $('.quiz').addClass('quiz_opened');
    }
    function quizClose() {
        $('body').removeClass('quiz_open');
        $('.quiz').removeClass('quiz_opened');
        var items = $('.quiz__active-item_full');
        var itemsActive = $('.quiz__select_active');

        Array.prototype.forEach.call(itemsActive, function(item){
            $(item).removeClass('quiz__select_active');
        });

        Array.prototype.forEach.call(items, function(item){
            $(item).removeClass('quiz__active-item_full');
        });
    }

    function getImageUrl(arr, page){
        switch(page){
            case 1:
                return quiz_path + arr[0]+'.png';
            case 2:
                return quiz_path + arr[1] + '_' + arr[0]+'.png';
            case 3:
                return quiz_path + arr[1] + '_' + arr[2] + '_' + arr[0]+'.png';
            case 4:
                return quiz_path + arr[1]+ '_' + arr[3] + '_' + arr[2] + '_' + arr[0]+'.png';
            default:
                return quiz_path + arr[1]+ '_' + arr[3] + '_' + arr[2] + '_' + arr[0]+'.png';
        }

    }
    $('.feedback__button').on('click', function(){
        formSend();
    });

    function formSend() {
        var num = $('#number').val();
        var name = $('#name').val();
        var email = $('#email').val();
        var comment = $('#comment').val();

        if(name && (num || email)) {
            send({
                name: name,
                number: num,
                email: email,
                comment: comment
            }, function(){
                $('#number').val('');
                $('#name').val('');
                $('#email').val('');
                $('#comment').val('');
                $('.feedback__sub-header').text('Заявка успешно отправлена!');
                setTimeout(function(){
                    $('.feedback__sub-header').text('Мы свяжемся с вами в течение часа');
                }, 3000);
            })
        }

    }

    function send(obj, callback, error) {
        var path =  $('body').data('path');
        $.ajax({
            url: path + 'send.php',
            method: 'POST',
            data: obj,
            success:callback,
            error: error
        });
    }

    function finishQuiz() {
        var num = $('#yourName').val();
        var name = $('#yourNumber').val();

        if(num && name) {
            send({
                name: name,
                number: num,
                type: selectOptions[0],
                material: selectOptions[1],
                base: selectOptions[2],
                safety:selectOptions[3]
            },
            function(){
                $('#finText').text('Ваша заявка на лестницу успешно отправлена!');
                $('.quiz__content-items_stretch').attr('style', 'align-self:flex-start');
                $('#yourName').hide();
                $('#yourNumber').hide();
                $('#btnBlock').hide();
                $('#yourNumber').val('');
                $('#yourName').val('');
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
                }, 3000);
            },
            quizClose
            )
        }


    }

})(jQuery);
