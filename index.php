<?php get_header(); ?>
<?php query_posts('post_type=page');  while ( have_posts() ) : the_post(); ?>
<section class="section flexible section_intro">
    <div class="section__content">
        <div class="intro_mobile flexible">
            <div class="flexible intro__logo-block">
                <img src="<?= bloginfo('template_directory'); ?>/img/Logo.png"  class="intro__img-mobile">
                <span class="intro__sub-header-mobile">
                    производство лестниц в Казани
                </span>
            </div>
            <span class="intro__header-mobile">
                Закажите замер и получите 2 варианта дизайна в подарок!
            </span>
            <a href="#callback" class="intro__button_mobile btn btn_yellow">ЗАКАЗАТЬ</a>
            <a href="#skills"><img src="<?= bloginfo('template_directory'); ?>/img/intro/shewron.png"  class="intro__shewron-mobile"></a>
        </div>
    </div>
</section>
<section class="section flexible" id="skills">
    <div class="section__content">
        <div class="intro">
            <span class="intro__text-block intro__text-block_head">
                Закажите замер и получите 2 варианта дизайна в подарок!
            </span>
            <span class="intro__text-block intro__text-block_sub-head">
                Производство лестниц в Казани
            </span>
            <a href="#callback" class="intro__button btn btn_white">Заказать</a>
            <div class="intro__image-block"></div>
        </div>
        <div class="skills flexible">
            <span class="skills__header">
                Почему вам стоит с нами работать
            </span>
            <div class="skills__item flexible">
                <div class="skills__icon icon-time"></div>
                <span class="skills_text">
                    Соблюдаем сроки и качество по договору
                </span>
            </div>
            <div class="skills__item flexible">
                <div class="skills__icon icon-five"></div>
                <span class="skills_text">
                    5 лет гарантии на наши лестницы
                </span>
            </div>
            <div class="skills__item flexible">
                <div class="skills__icon icon-tool"></div>
                <span class="skills_text">
                    Мы производим лестницы в собственном цеху
                </span>
            </div>

        </div>
    </div>
</section>
<section class="section flexible" id="projects">
    <section class="preview-mobile flexible">
        <div class="section__content">
            <div class="project__text-block">
                <span class="preview-mobile__header header">Наши проекты</span>
                <span class="preview-mobile__description">Наша компания создает красивые, удобные и безопасные лестницы с 2010 года. мы реализуем проекты разного масштаба: от лестниц для частных домов до уникальных проектов в сотрудничестве с лучшими дизайнерами Татарстана.</span>
            </div>
        </div>
        <div class="preview-mobile__img">
            <img id="mImg" src="<?= bloginfo('template_directory'); ?>/img/opened_cases_mbl/pic4.jpg" alt="" width="100%" height="100%">
        </div>
        <div class="preview-mobile__content flexible">
            <div class="preview-mobile__navs flexible">
                <span class="preview-mobile__navs-item preview-mobile__navs-item_active"></span>
                <span class="preview-mobile__navs-item"></span>
                <span class="preview-mobile__navs-item"></span>
                <span class="preview-mobile__navs-item"></span>
                <span class="preview-mobile__navs-item"></span>
                <span class="preview-mobile__navs-item"></span>
            </div>
            <div class="preview-mobile__nav flexible">
                <span class="preview-mobile__nav-btn">
                    <i class="prev"></i>
                </span>
                <span class="preview-mobile__nav-header" id="mHeader">Персефона</span>
                <span class="preview-mobile__nav-btn">
                    <i class="next"></i>
                </span>
            </div>
            <div class="section__content">
                <div class="project__info-block">
                    <span class="preview-mobile__description">Для ступеней, поручней и столбов использовали дальневосточный ясень.
                        Подступенки и боковые зашивки были изготовлены из шпонированного МДФ.
                    </span>
                    <a href="#callback" class="btn btn_yellow preview-mobile__btn">ХОЧУ ТАК ЖЕ!</a>

                </div>
            </div>
        </div>
        <div class="section__content project__info-block">
            <span class="preview-mobile__description">Скачайте наш каталог, чтобы посмотреть
больше работ:
            </span>
            <a href="marketing.pdf" class="btn btn_yellow-brd preview-mobile__btn preview-mobile__btn-blc">СКАЧАТЬ</a>
        </div>

    </section>

    <div class="section__content projects__content">
        <div class="projects">
            <div class="project__text-block">
                <span class="projects__header header">Наши проекты</span>
                <span class="projects__sub-header">Наша компания создает красивые, удобные и безопасные лестницы с 2010 года. мы реализуем проекты разного масштаба: от лестниц для частных домов до уникальных проектов в сотрудничестве с лучшими дизайнерами Татарстана.</span>
            </div>
            <div class="projects__preview">
                <div class="projects__row flexible">
                    <div class="projects__preview-item">
                        <img src="<?= bloginfo('template_directory'); ?>/img/preview/pic 1.png" class="projects__preview-img">
                        <div class="projects__preview-shade">
                            <span class="projects__preview-text">Персефона</span>
                            <a class="projects__preview-btn btn btn_yellow-brd" data-current="0">подробнее</a>
                        </div>
                    </div>
                    <div class="projects__preview-item">
                        <img src="<?= bloginfo('template_directory'); ?>/img/preview/pic 2.png" class="projects__preview-img">
                        <div class="projects__preview-shade">
                            <span class="projects__preview-text">Дионис</span>
                            <a class="projects__preview-btn btn btn_yellow-brd" data-current="1">подробнее</a>
                        </div>
                    </div>
                    <div class="projects__preview-item">
                        <img src="<?= bloginfo('template_directory'); ?>/img/preview/pic 3.png" class="projects__preview-img">
                        <div class="projects__preview-shade">
                            <span class="projects__preview-text">Афина</span>
                            <a class="projects__preview-btn btn btn_yellow-brd" data-current="2">подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="projects__row flexible">
                    <div class="projects__preview-item">
                        <img src="<?= bloginfo('template_directory'); ?>/img/preview/pic 4.png" class="projects__preview-img">
                        <div class="projects__preview-shade">
                            <span class="projects__preview-text">Филарета</span>
                            <a class="projects__preview-btn btn btn_yellow-brd" data-current="3">подробнее</a>
                        </div>
                    </div>
                    <div class="projects__preview-item">
                        <img src="<?= bloginfo('template_directory'); ?>/img/preview/pic 5.png" class="projects__preview-img">
                        <div class="projects__preview-shade">
                            <span class="projects__preview-text">Эскада</span>
                            <a class="projects__preview-btn btn btn_yellow-brd" data-current="4">подробнее</a>
                        </div>
                    </div>
                    <div class="projects__preview-item">
                        <img src="<?= bloginfo('template_directory'); ?>/img/preview/pic 6.png" class="projects__preview-img">
                        <div class="projects__preview-shade">
                            <span class="projects__preview-text">Фемида</span>
                            <a class="projects__preview-btn btn btn_yellow-brd" data-current="5">подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="projects__btn-group">
                <a href="marketing.pdf" target="_blank" class="projects__catalog-btn btn btn_yellow">скачать каталог</a>
            </div>
        </div>
    </div>
</section>
<section class="section flexible backgrounded-quiz">
    <div class="section__content">
        <div class="questions flexible">
            <span class="question__header header">Пройди тест</span>
            <span class="question__sub-header">и собери лестницу</span>
            <a class="question__btn btn btn_yellow-brd">НАЧАТЬ</a>
        </div>
    </div>
</section>
<section class="section section_relative flexible not_reversed" id="materials">
    <div class="wood"></div>
    <div class="section__content">
        <div class="materials flexible">
            <span class="materials__header header">Лучшие материалы</span>
            <span class="materials__sub-header">
                Качество дерева играет решающую роль в создании лестницы. Твердость, фактура, качество обработки и сушки — все эти и многие другие факторы сказываются на качестве итогового продукта.
                Именно поэтому мы в Proffi Group с особым трепетом и вниманием относимся к качеству дерева и уже более 7 лет работаем с проверенными поставщиками качественной древесины.
            </span>
            <span class="materials_offer">Выберите дерево, которое вам по душе</span>
            <div class="materials__selector">
                <ul class="materials__selector-list list">
                    <li class="list__item link-material list__item_active">
                        <img src="<?= bloginfo('template_directory'); ?>/img/materials/icon_1.png" class="list__item-img">
                        <a class="list__item-link" data-kind="0">дуб</a>
                        <div class="list__item-underline list__item-underline_long"></div>
                    </li>
                    <li class="list__item link-material">
                        <img src="<?= bloginfo('template_directory'); ?>/img/materials/icon_2.png" class="list__item-img">
                        <a class="list__item-link" data-kind="1">ясень</a>
                        <div class="list__item-underline list__item-underline_long"></div>
                    </li>
                    <li class="list__item link-material">
                        <img src="<?= bloginfo('template_directory'); ?>/img/materials/icon_3.png" class="list__item-img">
                        <a class="list__item-link" data-kind="2">береза</a>
                        <div class="list__item-underline list__item-underline_long"></div>
                    </li>
                    <li class="list__item link-material">
                        <img src="<?= bloginfo('template_directory'); ?>/img/materials/icon_4.png" class="list__item-img">
                        <a class="list__item-link" data-kind="3">сосна</a>
                        <div class="list__item-underline list__item-underline_long"></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section__content_grey flexible">
        <div class="section__content not_marged">
            <div class="materials flexible not_marged">
                <div class="materials__about">
                    <div class="materials__property">
                        <div class="materials__property-item">
                            <span class="materials__property-name">Твердость</span>
                            <div class="materials__property-scale scale"><span class="scale__value scale__value_4" id="hardness" data-current="5"></span></div>
                        </div>
                        <div class="materials__property-item">
                            <span class="materials__property-name">Фактура</span>
                            <div class="materials__property-scale scale"><span class="scale__value scale__value_4" id="texture" data-current="4"></span></div>
                        </div>
                        <div class="materials__property-item">
                            <span class="materials__property-name">Цена</span>
                            <div class="materials__property-scale scale"><span class="scale__value scale__value_4" id="price" data-current="3"></span></div>
                        </div>
                    </div>
                    <div class="materials__description">
                        <span class="materials__description-head">Дуб сибирский</span>
                        <span class="materials__description-content">
                        Древесина дуба плотная, твердая, тяжелая и обладает высокой прочностью.
                        Для нее характерна устойчивость к влаге, к загниванию и различным грибкам.
                        Дуб обладает красивой пористой фактурой.
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section_relative flexible" id="safety">
    <div class="section__content">
        <div class="safety">
            <span class="safety__header header">Безопасность</span>
            <span class="safety__sub-header">
                При проектировании лестниц мы в PROFFI GROUP уделяем особое
                внимание безопасности их использования.
            </span>
            <span class="safety__description">
                Дети активны и крайне любопытны, лестница является для них объектом повышенного интереса и воспринимается как "горка".
                Поэтому крайне важно сделать лестницу максимально безопасной для детей.
            </span>
            <div class="safety__info-block">
                <span class="safety__info-text">
                    МЫ В <b>PROFFI GROUP</b> ДЕЛАЕМ
                    <b>ВСЁ</b> ДЛЯ <b>БЕЗОПАСНОСТИ</b> ВАШИХ ДЕТЕЙ
                </span>
            </div>
            <div class="safety__properties flexible">
                <div class="safety__properties-item">
                    <img src="<?= bloginfo('template_directory'); ?>/img/safety/icon1.svg" class="safety__properties-img">
                    <span class="safety__properties-text">
                        Устанавливаем спецальные ворота безопасности для защиты детей от лестницы
                    </span>
                </div>
                <div class="safety__properties-item">
                    <img src="<?= bloginfo('template_directory'); ?>/img/safety/icon2.svg" class="safety__properties-img">
                    <span class="safety__properties-text">
                        Скругляем все острые углы на ступенях
                        и других частях лестницы для смягчения потенциального удара
                    </span>
                </div>
                <div class="safety__properties-item">
                    <img src="<?= bloginfo('template_directory'); ?>/img/safety/icon3.svg" class="safety__properties-img">
                    <span class="safety__properties-text">
                        Рассчитываем расстояние между балясинами так,
                        чтобы ребенок не смог просунть между ними голову
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="safety__child"></div>
</section>
<section class="section section_not-margin-btm flexible" id="workflow">
    <div class="section__content">
        <div class="workflow">
            <span class="workflow__header header">Отвечаем за качество</span>
            <span class="workflow__sub-header">На каждом этапе работы</span>
            <div class="workflow__quality"></div>
            <span class="workflow__description">
                Для каждого клиента мы выделяем индивидуального менеджера, который ведет проект.
                Менеджер следит за тем, чтобы все ваши пожелания были выполнены,
                отвечает на ваши вопросы и решает возникающие проблемы.
            </span>
            <div class="workflow__quality_mobile"></div>
            <div class="workflow__orders flexible">
                <span class="workflow__order">
                    В начале мы собираем необходимую
                    информацию об объекте. Менеджер уточняет
                    стадию строительства дома, наличие отделки, а
                    также ваши пожелания по внешнему виду
                    лестницы. После мы проводим замеры и
                    приступаем к дизайну.
                </span>
                <span class="workflow__order">
                    Мы предлагаем вам на выбор три варианта
                    дизайна лестницы, или работаем с вашим дизайнпроектом.
                    Когда все детали проекта согласованы
                    мы заключаем договор и приступаем к
                    изготовлению лестницы.
                </span>
                <span class="workflow__order">
                    Изготовление лестницы проходит в несколько
                    этапов: выбор материалов, распил заготовок,
                    шлифовка компонентов и их покраска. Каждый
                    этап выполняется согласно рабочей
                    документации, что снижает вероятность брака и
                    уменьшает время создания лестницы
                </span>
            </div>
        </div>
    </div>
</section>
<section class="section section_relative flexible">
    <div class="section__content_long">
        <div class="section__content">
            <div class="logistic">
                <span class="logistic__header header">
                    Доставляем
                </span>
                <span class="logistic__sub-header">
                    ДЛЯ КАЖДОГО КЛИЕНТА МЫ ВЫДЕЛЯЕМ ИНДИВИДУАЛЬНОГО МЕНЕДЖЕРА,КОТОРЫЙ ВЕДЕТ ПРОЕКТ.
                    МЕНЕДЖЕР СЛЕДИТ ЗА ТЕМ, ЧТОБЫ ВСЕ ВАШИ ПОЖЕЛАНИЯ БЫЛИ ВЫПОЛНЕНЫ,
                    ОТВЕЧАЕТ НА ВАШИ ВОПРОСЫ И РЕШАЕТ ВОЗНИКАЮЩИЕ ПРОБЛЕМЫ.
                </span>
                <span class="logistic__header_mobile header">
                    Proffi Group — всегда доставляет.
                </span>
                <span class="logistic__sub-header_mobile">
                    Поскольку в Proffi Group особое внимание уделяется контролю качества на всех этапах работы. мы осуществляем доставку всех необходимых материалов и комплектующих самостоятельно.
                </span>
                <div class="logistic__description-block flexible">
                    <span class="logistic__description-item">
                        Наша компания успешно создает лестницы для частных домов и коммерческих объектов в Казани более 7 лет. Взгляните на наши последние проекты и оцените качество нашей работы.
                    </span>
                    <span class="logistic__description-item">
                        Наша компания успешно создает лестницы для частных домов и коммерческих объектов в Казани более 7 лет. Взгляните на наши последние проекты и оцените качество нашей работы.
                    </span>
                </div>
            </div>
        </div>
        <div class="logistic-footer flexible">
            <div class="logistic-footer__slogan-block">
                    <span class="logistic-footer__slogan-text">
                        <b>PROFFI GROUP</b>
                        ОТВЕЧАЕТ ЗА <b>КАЧЕСТВО&nbsp;ДОСТАВКИ</b>
                    </span>
            </div>
            <div class="logistic-footer__symbols flexible">
                <div class="logistic-footer__symbols-item">
                    <img src="<?= bloginfo('template_directory'); ?>/img/logistic/icon1.svg" class="logistic-footer__symbols-img icon1">
                    <span class="logistic-footer__symbols-text">доставка по всему Татарстану</span>
                </div>
                <div class="logistic-footer__symbols-item">
                    <img src="<?= bloginfo('template_directory'); ?>/img/logistic/icon2.svg"  class="logistic-footer__symbols-img icon2">
                    <span class="logistic-footer__symbols-text">собственная бригада грузчиков</span>
                </div>
                <div class="logistic-footer__symbols-item">
                    <img src="<?= bloginfo('template_directory'); ?>/img/logistic/icon3.svg"  class="logistic-footer__symbols-img icon3">
                    <span class="logistic-footer__symbols-text">парк фургонов доставки</span>
                </div>
            </div>
        </div>
    </div>
    <div class="auto_img"></div>
</section>
<section class="section backgrounded flexible" id="history">
    <div class="section__content">
        <div class="history">
            <span class="history__header header">История компании</span>
            <span class="history__sub-header">
                «ИСТОРИЯ КОМПАНИИ НАЧАЛАСЬ В 2007 ГОДУ С ЖЕЛАНИЯ ДЕЛАТЬ ЛУЧШИЕ ЛЕСТНИЦЫ.
                СО ВРЕМЕНЕМ МАСТЕРСТВО НАШЕЙ КОМАНДЫ ВЫРОСЛО, ПОЯВИЛОСЬ СОБСТВЕННОЕ ПРОИЗВОДСТВО С ОТДЕЛОМ МЕНЕДЖЕМЕНТА»
            </span>
            <div class="history__info-block">
                <span class="history__info-text">
                    Благодаря энтузиазму и стремлению команды
                    делать качественные и безопасные лестницы,
                    а также желанию учиться и увеличивать мастерство,
                    компания Proffi Group стала лидером
                    на казанском рынке производства лестниц.
                </span>
                <span class="history__info-text">
                    Однажды один из клиентов попросил Антона и Владимира изготовить лестницу. Несмотря на отсутствие опыта они взялись за заказ.
                    В ходе работы Антон и Владимир столкнулись со множеством сложностей от выбора древесины до расчёта лестничных конструкций и их подгонки.
                </span>
                <span class="history__info-text">
                    Тогда им стало ясно, что изготовление лестниц — сложный процесс, требующий отлаженного производства.
                    Спустя пару лет упорной работы Антон и Владимир собрали команду и наладили производственный процесс.
                </span>
            </div>
        </div>
    </div>
</section>
<section class="section flexible" id="team">
    <div class="section__content">
        <div class="team">
            <span class="team__header header">
                Наша команда
            </span>
            <div class="team__persons flexible">
                <div class="team__persons-item flexible not_marged">
                    <img src="<?= bloginfo('template_directory'); ?>/img/team/Photo1.png" alt="" class="team__person-img">
                    <div class="team__person-info">
                        <span class="team__person-name">Антон Сергеев</span>
                        <span class="team__person-speciality">Директор Proffi Group</span>
                    </div>
                </div>
                <div class="team__persons-item flexible">
                    <img src="<?= bloginfo('template_directory'); ?>/img/team/Photo2.png" alt="" class="team__person-img">
                    <div class="team__person-info">
                        <span class="team__person-name">Владимир Красненков</span>
                        <span class="team__person-speciality">Технический директор</span>
                    </div>
                </div>
            </div>
            <div class="team__sub-persons-block flexible">
                <div class="team__sub-persons flexible">
                    <div class="team__persons-item flexible not_marged">
                        <img src="<?= bloginfo('template_directory'); ?>/img/team/Photo3.png" alt="" class="team__person-img">
                        <div class="team__person-info">
                            <span class="team__person-name">Ксения Иванова</span>
                            <span class="team__person-speciality">Директор по качеству</span>
                        </div>
                    </div>
                    <div class="team__persons-item flexible">
                        <img src="<?= bloginfo('template_directory'); ?>/img/team/Photo4.png" alt="" class="team__person-img">
                        <div class="team__person-info">
                            <span class="team__person-name">Михаил Суриков</span>
                            <span class="team__person-speciality">Начальник производства</span>
                        </div>
                    </div>
                </div>
                <div class="team__sub-persons flexible">
                    <div class="team__persons-item flexible">
                        <img src="<?= bloginfo('template_directory'); ?>/img/team/Photo5.png" alt="" class="team__person-img">
                        <div class="team__person-info">
                            <span class="team__person-name">Сергей Капчеля</span>
                            <span class="team__person-speciality">Менеджер-замерщик</span>
                        </div>
                    </div>
                    <div class="team__persons-item flexible not_marged right-marged">
                        <img src="<?= bloginfo('template_directory'); ?>/img/team/Photo6.png" alt="" class="team__person-img">
                        <div class="team__person-info">
                            <span class="team__person-name">Рустам  Галеев</span>
                            <span class="team__person-speciality">Дизайнер-конструктор</span>
                        </div>
                    </div>
                </div>
                <div class="team__sub-persons flexible">
                    <div class="team__persons-item flexible">
                        <img src="<?= bloginfo('template_directory'); ?>/img/team/Photo8.png" alt="" class="team__person-img">
                        <div class="team__person-info">
                            <span class="team__person-name">Леонид Макаров</span>
                            <span class="team__person-speciality">Ведущий столяр</span>
                        </div>
                    </div>
                    <div class="team__persons-item flexible">
                        <img src="<?= bloginfo('template_directory'); ?>/img/team/Photo7.png" alt="" class="team__person-img">
                        <div class="team__person-info">
                            <span class="team__person-name width-fixed">Снежана  Генералова</span>
                            <span class="team__person-speciality">Офис-менеджер</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section flexible" id="callback">
    <div class="section__content">
        <div class="feedback">
            <span class="feedback__header header">Оставьте заявку</span>
        </div>
    </div>
    <div class="section__content_grey flexible marged">
        <div class="section__content">
            <div class="feedback feedback_sub-block">
                <span class="feedback__sub-header">Мы свяжемся с вами в течение часа</span>
                <div class="feedback__content flexible">
                    <div class="feedback__content-item">
                        <form  class="form flexible" method="post">
                            <input id="name" class="form__input"  placeholder="Ваше имя"/>
                            <input id="number" class="form__input"  placeholder="Номер телефона"/>
                            <input id="email" class="form__input"  placeholder="Электронная почта"/>
                            <textarea id="comment" rows="10" class="form__input form__input_textarea" placeholder="Комментарий"></textarea>
                        </form>
                    </div>
                    <div class="feedback__content-item feedback__content-item_stretch" id="dropZoneContainer"  data-path="<?= bloginfo('template_directory'); ?>/">
                        <form  action="<?= bloginfo('template_directory'); ?>/upload.php" style="height:100%;">
                            <div class="feedback_drag-drop-img flexible" id="dropZone" data-value="">
                                <img src="<?= bloginfo('template_directory'); ?>/img/feedback/icon1.png" alt="" class="feedback__img">
                                <span class="feedback__text" id="dropZoneText">Если у вас есть фото лестницы, которая вам нравится, перетащите его сюда</span>
                            </div>
                        </form>
                    </div>
                </div>
                <a class="btn btn_yellow feedback__button">ОТПРАВИТЬ</a>
            </div>
        </div>
    </div>
</section>
<section class="section flexible" id="contacts">
    <div class="section__content">
        <div class="contacts flexible">
            <div class="contacts__item">
                <span class="contacts__header header">Контакты</span>
                <div class="contacts__map">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5f0baa58b12c354c95bb41e626211f37f522f35291ef8f6d612cd749955571a7&amp;width=605&amp;height=380&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
            <div class="contacts__item">
                <img src="<?= bloginfo('template_directory'); ?>/img/contacts/logo.png" class="contacts__icon">
                <ul class="contacts__list iconed-list">
                    <li class="iconed-list__item">
                        <img src="<?= bloginfo('template_directory'); ?>/img/contacts/phone.svg" class="iconed-list__item-img">
                        <span class="iconed-list__item-text">+7 843 202-34-11</span>
                    </li>
                    <li class="iconed-list__item">
                        <img src="<?= bloginfo('template_directory'); ?>/img/contacts/map.svg" class="iconed-list__item-img" style="vertical-align: baseline;">
                        <span class="iconed-list__item-text">г. Казань<br/>
                        ул Короленко д. 120</span>
                    </li>
                    <li class="iconed-list__item">
                        <img src="<?= bloginfo('template_directory'); ?>/img/contacts/mail.svg" class="iconed-list__item-img">
                        <span class="iconed-list__item-text">info@proffigroup.com</span>
                    </li>
                </ul>

                <ul class="contacts__list iconed-list">
                    <li class="iconed-list__item">
                        <a href="https://vk.com/lestnica_kazan" target="_blank"><img href="https://vk.com/lestnica_kazan" src="<?= bloginfo('template_directory'); ?>/img/contacts/vk.svg" class="iconed-list__item-img"></a>
                        <span class="iconed-list__item-text">vk.com/lestnica_kazan</span>
                    </li>
                    <li class="iconed-list__item">
                        <a href="https://facebook.com/proffi_group" target="_blank"><img src="<?= bloginfo('template_directory'); ?>/img/contacts/fb.svg" class="iconed-list__item-img"></a>
                        <span class="iconed-list__item-text">facebook.com/lestnici.v.kazani</span>
                    </li>
                    <li class="iconed-list__item">
                        <a href="https://www.instagram.com/lestnici_v_kazani/" target="_blank"><img src="<?= bloginfo('template_directory'); ?>/img/contacts/inst.png" class="iconed-list__item-img"></a>
                        <span class="iconed-list__item-text">lestnici_v_kazani</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="mobile-footer flexible">
    <div class="mobile-footer__map">
        <img src="<?= bloginfo('template_directory'); ?>/img/contacts/map_mbl.png" alt="" class="mobile-footer__map-img">
    </div>
    <img src="<?= bloginfo('template_directory'); ?>/img/contacts/logo.png" class="mobile-footer__icon">
    <span class="mobile-footer__text">г. Казань</span>
    <span class="mobile-footer__text">ул. Короленко д. 120</span>
    <ul class="mobile-footer__list iconed-list">
        <li class="iconed-list__item">
            <a href="https://vk.com/lestnica_kazan" target="_blank"><img href="https://vk.com/lestnica_kazan" src="<?= bloginfo('template_directory'); ?>/img/contacts/vk.svg" class="iconed-list__item-img"></a>
            <span class="iconed-list__item-text">vk.com/lestnica_kazan</span>
        </li>
        <li class="iconed-list__item">
            <a href="https://facebook.com/proffi_group" target="_blank"><img src="<?= bloginfo('template_directory'); ?>/img/contacts/fb.svg" class="iconed-list__item-img"></a>
            <span class="iconed-list__item-text">facebook.com/lestnici.v.kazani</span>
        </li>
        <li class="iconed-list__item">
            <a href="https://www.instagram.com/lestnici_v_kazani/" target="_blank"><img src="<?= bloginfo('template_directory'); ?>/img/contacts/inst.png" class="iconed-list__item-img"></a>
            <span class="iconed-list__item-text">lestnici_v_kazani</span>
        </li>
    </ul>
</section>
<footer class="footer section flexible">
    <div class="section__content flexible">
        <div>
            <img src="<?= bloginfo('template_directory'); ?>/img/contacts/logo.png" alt="" class="footer__icon">
        </div>
        <div>
            <span class="footer__text">Made in Y-studio</span>
        </div>
    </div>
</footer>

<section class="cases flexible">
    <div class="cases__info cases__position flexible">
        <span class="cases__back-button"><img src="<?= bloginfo('template_directory'); ?>/img/opened_cases/buttonBack.png" alt="" class="cases__btn-img"></span>
        <div class="flexible cases__position">
            <span class="cases__header header" id="cHeader">Афина</span>
            <span class="cases__description" id="cDescr1">Лестница изготовлена из дуба и покрашена
            в белый цвет с применением технологии патинирования.
            В подлестничное пространство вмонтирован шкаф.</span>
            <span class="cases__description" id="cDescr2">Перед нами стояла задача создать лестницу для комнаты отдыха.
            Заказчик хотел, чтобы лестница вписывалась в атмосферу комнаты, для этого было принято решение сделать светлую лестницу с эффектом «старины».</span>
        </div>
        <span class="cases__btn btn btn_yellow">ХОЧУ ТАК ЖЕ!</span>
    </div>
    <div class="cases__image" id="cImage">

    </div>
</section>
<section class="quiz" data-path="<?= bloginfo('template_directory'); ?>/img/quiz_img/">
    <div class="quiz__content flexible">
        <div class="quiz__content-items quiz__content-items_stretch flexible quiz__desktop">
            <div class="quiz__img-block">
                <img src="<?= bloginfo('template_directory'); ?>/img/quiz_img/003.png" alt="" class="quiz__img">
            </div>
        </div>
        <div class="quiz__content-items quiz__content-items_stretch flexible quiz__mobile">
            <div class="quiz__active-block flexible">
                <span class="quiz__active-item quiz__active-item_cur"></span>
                <span class="quiz__active-item"></span>
                <span class="quiz__active-item"></span>
                <span class="quiz__active-item"></span>
            </div>

            <div class="quiz__question quiz_1" data-cur="1">
                <span class="quiz_number">Вопрос 1 из 4</span>
                <span class="quiz__head">Выберите планировку:</span>
                <div class="quiz__img-block">
                    <img src="<?= bloginfo('template_directory'); ?>/img/quiz_img/003.png" alt="" class="quiz__img">
                </div>
                <span class="quiz__description">Выбор планировки помогает оптимально расположить лестницу в вашем помемщении</span>
                <div class="quiz__select-block">
                    <span class="quiz__select" data-kind="Одномаршевая" data-pic="003">Одномаршевая</span>
                    <span class="quiz__select" data-kind="Двумаршевая" data-pic="001">Двумаршевая</span>
                    <span class="quiz__select" data-kind="Двумаршевая угловая" data-pic="002">Двумаршевая угловая</span>
                </div>
                <div class="quiz__button-block flexible">
                    <a class="btn btn_yellow-brd quiz__btn quiz__btn_black" data-page="+1" data-cur="1">Назад</a>
                    <a class="btn btn_yellow quiz__btn" data-page="2" data-cur="1">Далее</a>
                </div>
            </div>
            <div class="quiz__question quiz_2" hidden="hidden" data-cur="2">
                <span class="quiz_number">Вопрос 2 из 4</span>
                <span class="quiz__head">Выберите материал каркаса:</span>
                <div class="quiz__img-block">
                    <img src="<?= bloginfo('template_directory'); ?>/img/quiz_img/003.png" alt="" class="quiz__img">
                </div>
                <span class="quiz__description">Выбор планировки помогает оптимально расположить лестницу в вашем помемщении</span>
                <div class="quiz__select-block">
                    <span class="quiz__select" data-kind="Металл" data-pic="ЗМ">Металл</span>
                    <span class="quiz__select" data-kind="Бетон" data-pic="Бетон">Бетон</span>
                    <span class="quiz__select" data-kind="Дерево" data-pic="ЦДЛ">Дерево</span>
                </div>
                <div class="quiz__button-block flexible">
                    <a class="btn btn_yellow-brd quiz__btn quiz__btn_black" data-page="1" data-cur="2">Назад</a>
                    <a class="btn btn_yellow quiz__btn" data-page="3" data-cur="2">Далее</a>
                </div>
            </div>
            <div class="quiz__question quiz_3" hidden="hidden" data-cur="3">
                <span class="quiz_number">Вопрос 3 из 4</span>
                <span class="quiz__head">Выберите материал отделки:</span>
                <div class="quiz__img-block">
                    <img src="<?= bloginfo('template_directory'); ?>/img/quiz_img/003.png" alt="" class="quiz__img">
                </div>
                <span class="quiz__description">Выбор планировки помогает оптимально расположить лестницу в вашем помемщении</span>
                <div class="quiz__select-block">
                    <span class="quiz__select" data-kind="дуб" data-pic="Дуб">Дуб</span>
                    <span class="quiz__select" data-kind="сосна" data-pic="Сосна">Сосна</span>
                    <span class="quiz__select" data-kind="ясень" data-pic="Ясень">Ясень</span>
                </div>
                <div class="quiz__button-block flexible">
                    <a class="btn btn_yellow-brd quiz__btn quiz__btn_black" data-page="2" data-cur="3">Назад</a>
                    <a class="btn btn_yellow quiz__btn" data-page="4" data-cur="3">Далее</a>
                </div>
            </div>
            <div class="quiz__question quiz_4" hidden="hidden" data-cur="4">
                <span class="quiz_number">Вопрос 4 из 4</span>
                <span class="quiz__head">Выберите тип <br/> ограждения:</span>
                <div class="quiz__img-block">
                    <img src="<?= bloginfo('template_directory'); ?>/img/quiz_img/003.png" alt="" class="quiz__img">
                </div>
                <span class="quiz__description">Выбор планировки помогает оптимально расположить лестницу в вашем помемщении</span>
                <div class="quiz__select-block">
                    <span class="quiz__select" data-kind="Кованое ограждение" data-pic="Ковка">Кованое ограждение</span>
                    <span class="quiz__select" data-kind="Стеклянное ограждение" data-pic="Стекло">Стеклянное ограждение</span>
                    <span class="quiz__select" data-kind="Балясины" data-pic="Балясины">Балясины</span>
                </div>
                <div class="quiz__button-block flexible">
                    <a class="btn btn_yellow-brd quiz__btn quiz__btn_black" data-page="3" data-cur="4">Назад</a>
                    <a class="btn btn_yellow quiz__btn" data-page="finally" data-cur="4">Далее</a>
                </div>
            </div>
            <div class="quiz__question quiz_finally" hidden="hidden">
                <span class="quiz__head">Поздравляем, вы собрали лестницу своей мечты! </span>
                <div class="quiz__img-block">
                    <img src="<?= bloginfo('template_directory'); ?>/img/quiz_img/003.png" alt="" class="quiz__img">
                </div>
                <span class="quiz__description" id="finText">Оставьте заявку, чтобы наши менеджеры обсудили с вами все детали.<br/>
Если не нашли для себя подходящего варианта свяжитесь и мы поможем!</span>
                <div class="quiz__select-block">
                    <input class="quiz__select" id="yourName" placeholder="Ваше имя"/>
                    <input class="quiz__select" id="yourNumber" placeholder="Номер телефона"/>
                </div>
                <div class="quiz__button-block flexible" id="btnBlock">
                    <a class="btn btn_yellow-brd quiz__btn quiz__btn_black" data-page="revert" data-cur="finally">Заново</a>
                    <a class="btn btn_yellow quiz__btn" data-page="send" data-cur="finally">Отправить</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>