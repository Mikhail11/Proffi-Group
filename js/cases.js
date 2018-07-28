(function($) {

    function setPrewiew($element) {
       var previews = [
           {
               cHeader: "Персефона",
               cDescr1: "Для ступеней, поручней и столбов использовали\n" +
               "дальневосточный ясень. Подступенки и боковые\n" +
               "зашивки были изготовлены из шпонированного\n" +
               "МДФ.",
               cDescr2: "Проект был непростым — пришлось работать с\n" +
                "уже готовым каркасом. Убирать этот каркас или\n" +
                "делать другой заказчик не согласился.\n" +
                "Материалы для этой лестницы мы выбирали\n" +
                "совместно. Для ступеней, поручней и столбов\n" +
                "использовали дальневосточный ясень.\n" +
                "Подступенки и боковые зашивки были\n" +
                "изготовлены из шпонированного МДФ",
               cImage: "opened_cases/pic_1.svg"
           },

           {
               cHeader: "Дионис",
               cDescr1: "«Дионис» — лестница, выполненная по эскизам\n" +
               "клиента. Материалами для нее послужили сосна\n" +
               "и ясень. ограждение лестницы сочетает в себе\n" +
               "деревянные столбы и художественную ковку",
               cDescr2: "Столбы и балясины изготовлены из сосны. Для\n" +
               "ступеней, поручней и заполнения балюстрады\n" +
               "второго этажа мы выбрали прочный и фактурный\n" +
               "ясень",
               cImage: "opened_cases/pic_2.svg"
           },

           {
               cHeader: "Афина",
               cDescr1: "Лестница изготовлена из дуба и покрашена в\n" +
               "белый цвет с применением технологии\n" +
               "патинирования. В подлестничное пространство\n" +
               "вмонтирован шкаф.",
               cDescr2: "Перед нами стояла задача создать лестницу для\n" +
               "комнаты отдыха. Заказчик хотел, чтобы лестница\n" +
               "вписывалась в атмосферу комнаты, для этого\n" +
               "было принято решение сделать светлую\n" +
               "лестницу с эффектом «старины».",
               cImage: "opened_cases/pic_3.svg"
           },

           {
               cHeader: "Филарета",
               cDescr1: "«Филарета» — лестница на поворотном бетонном\n" +
               "каркасе. МЫ выполнили облицовку: установили\n" +
               "ступени из ясеня и кованое ограждение с\n" +
               "поручнем из ПВХ.",
               cDescr2: "В конструкции лестницы на бетонном каркасе\n" +
               "отсутствуют полости, поэтому она не скрипит, а\n" +
               "также не издает гулких звуков при ходьбе",
               cImage: "opened_cases/pic_4.svg"
           },

           {
               cHeader: "Эскада",
               cDescr1: "«Эскада» — компактная лестница с декоративной\n" +
               "дверцей, скрывающей вход в подвал.\n" +
               "Материалом для ступеней, поручней и столбов\n" +
               "послужил дуб.",
               cDescr2: "Точный расчет длины и высоты ступенек,\n" +
               "позволил сделать лестницу компактной и\n" +
               "сохранить удобный угол подъема. Отличительной\n" +
               "чертой этого проекта было то, что заказчик\n" +
               "захотел самостоятельно сделать резной\n" +
               "подступенок. Мы предоставили ему доску, на\n" +
               "которой он сделал резьбу самостоятельно.",
                cImage: "opened_cases/pic_5.svg"
           },

           {
               cHeader: "Фемида",
               cDescr1: "Лестница изготовлена из массива дерева.\n" +
               "Ступени, поручни и столбы изготовлены из дуба,\n" +
               "а балясины из сосны.",
               cDescr2: "Лестница «Фемида» это любимый проект нашего\n" +
               "производства и монтажных бригад. Именно с\n" +
               "таких проектов мы начинали изготовление\n" +
               "лестниц. Боковая зашивка и подступенки\n" +
               "изготовлены из МДФ и покрыты натуральным\n" +
               "шпоном.",
               cImage: "opened_cases/pic_6.svg"
           }


       ];
       var path =  $('body').data('path');
       if($element) {
           var number = $($element).data('current');
           var previewObj = previews[+number];

           for(var key in previewObj) {
               switch(key) {
                   case 'cImage':
                       $('#' + key).css('background-image','url("' + path + previewObj[key] + '")');
                       break;
                   default:
                       $('#' + key).text(previewObj[key]);
                       break;
               }
           }
       }
    }


    $('.projects__preview').on('click', function(event){
        if($(event.target).hasClass('projects__preview-btn')) {
            $('body').addClass('cases_open');
            $('.cases').addClass('cases_opened');
            setPrewiew(event.target);
            event.stopImmediatePropagation();
        }
    });


    var navItems = $('.preview-mobile__navs-item');
    var mobilePreview = [
        {
            mHeader: 'Персефона',
            mImg: 'opened_cases_mbl/pic1.jpg'
        },
        {
            mHeader: 'Дионис',
            mImg: 'opened_cases_mbl/pic2.jpg'
        },
        {
            mHeader: 'Афина',
            mImg: 'opened_cases_mbl/pic3.jpg'
        },
        {
            mHeader: 'Филарета',
            mImg: 'opened_cases_mbl/pic4.jpg'
        },
        {
            mHeader: 'Эскада',
            mImg: 'opened_cases_mbl/pic5.jpg'
        },
        {
            mHeader: 'Фемида',
            mImg: 'opened_cases_mbl/pic6.jpg'
        }
    ];
    var cur = 0;

    function setPreview(num) {
        var path =  $('body').data('path');
        $('#mImg').attr('src',path + mobilePreview[num].mImg);
        $('#mHeader').text(mobilePreview[num].mHeader);
        $('.preview-mobile__navs-item_active').removeClass('preview-mobile__navs-item_active');
        $(navItems[num]).addClass('preview-mobile__navs-item_active');
    }

    $('.next').on('click', function() {
        if (cur === (mobilePreview.length-1)) {
            cur = 0;
        } else {
            cur++;
        }
        setPreview(cur);
    });

    $('.prev').on('click', function() {
        if (cur === 0) {
            cur = (mobilePreview.length-1);
        } else {
            cur--;
        }
        setPreview(cur);
    });

})(jQuery);