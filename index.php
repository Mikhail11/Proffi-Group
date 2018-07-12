<?php get_header(); ?>
<?php query_posts('post_type=page');  while ( have_posts() ) : the_post(); ?>
    <section class="section flexible section_intro">
        <div class="section__content">
            <div class="intro_mobile flexible">
                <img src="<?= bloginfo('template_directory'); ?>/img/Logo.png"  class="intro__img-mobile">
                <span class="intro__sub-header-mobile">
                <?php the_field('blck_1_subheader'); ?>
            </span>
                <span class="intro__header-mobile">
                <?php the_field('blck_1_header'); ?>
            </span>
                <a class="intro__button_mobile btn btn_yellow">ДАЙТЕ ДВЕ</a>
                <a class="intro__button_mobile intro__button_mobile-last btn btn_yellow-brd">ЗАЯВКА</a>
                <a href="#skills"><img src="<?= bloginfo('template_directory'); ?>/img/intro/shewron.png"  class="intro__shewron-mobile"></a>
            </div>
        </div>
    </section>
    <section class="section flexible" id="skills">
        <div class="section__content">
            <div class="intro">
            <span class="intro__text-block intro__text-block_head">
                <?php the_field('blck_1_header'); ?>
            </span>
                <span class="intro__text-block intro__text-block_sub-head">
                <?php the_field('blck_1_subheader'); ?>
            </span>
                <a class="intro__button btn btn_white">Заказать</a>
                <div class="intro__image-block"></div>
            </div>
            <div class="skills flexible">
            <span class="skills__header">
                Почему вам стоит с нами работать
            </span>
                <div class="skills__item">
                    <div class="skills__icon icon-time"></div>
                    <span class="skills_text">
                    <?php the_field('blck_1_quality_1'); ?>
                </span>
                </div>
                <div class="skills__item">
                    <div class="skills__icon icon-five"></div>
                    <span class="skills_text">
                    <?php the_field('blck_1_quality_2'); ?>
                </span>
                </div>
                <div class="skills__item">
                    <div class="skills__icon icon-tool"></div>
                    <span class="skills_text">
                    <?php the_field('blck_1_quality_3'); ?>
                </span>
                </div>

            </div>
        </div>
    </section>
    <section class="section flexible" id="projects">
        <div class="section__content">
            <div class="projects">
                <div class="project__text-block">
                    <span class="projects__header header"><?php the_field('blck_2_header'); ?></span>
                    <span class="projects__sub-header"><?php the_field('blck_2_subheader'); ?></span>
                </div>
                <div class="projects__preview">
                    <div class="projects__row flexible">
                        <div class="projects__preview-item">
                            <img src="<?= bloginfo('template_directory'); ?>/img/preview/pic 1.png" class="projects__preview-img">
                            <div class="projects__preview-shade">
                                <span class="projects__preview-text">Персефона</span>
                                <a class="projects__preview-btn btn btn_yellow-brd">подробнее</a>
                            </div>
                        </div>
                        <div class="projects__preview-item">
                            <img src="<?= bloginfo('template_directory'); ?>/img/preview/pic 2.png" class="projects__preview-img">
                            <div class="projects__preview-shade">
                                <span class="projects__preview-text">Персефона</span>
                                <a class="projects__preview-btn btn btn_yellow-brd">подробнее</a>
                            </div>
                        </div>
                        <div class="projects__preview-item">
                            <img src="<?= bloginfo('template_directory'); ?>/img/preview/pic 3.png" class="projects__preview-img">
                            <div class="projects__preview-shade">
                                <span class="projects__preview-text">Персефона</span>
                                <a class="projects__preview-btn btn btn_yellow-brd">подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="projects__row flexible">
                        <div class="projects__preview-item">
                            <img src="<?= bloginfo('template_directory'); ?>/img/preview/pic 4.png" class="projects__preview-img">
                            <div class="projects__preview-shade">
                                <span class="projects__preview-text">Персефона</span>
                                <a class="projects__preview-btn btn btn_yellow-brd">подробнее</a>
                            </div>
                        </div>
                        <div class="projects__preview-item">
                            <img src="<?= bloginfo('template_directory'); ?>/img/preview/pic 5.png" class="projects__preview-img">
                            <div class="projects__preview-shade">
                                <span class="projects__preview-text">Персефона</span>
                                <a class="projects__preview-btn btn btn_yellow-brd">подробнее</a>
                            </div>
                        </div>
                        <div class="projects__preview-item">
                            <img src="<?= bloginfo('template_directory'); ?>/img/preview/pic 6.png" class="projects__preview-img">
                            <div class="projects__preview-shade">
                                <span class="projects__preview-text">Персефона</span>
                                <a class="projects__preview-btn btn btn_yellow-brd">подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="projects__btn-group">
                    <a class="projects__catalog-btn btn btn_yellow-brd"><?php the_field('blck_2_button'); ?></a>
                </div>
            </div>
        </div>
    </section>
    <section class="section section_relative flexible" id="materials">
        <div class="section__content">
            <div class="materials flexible">
                <span class="materials__header header"><?php the_field('blck_3_header'); ?></span>
                <span class="materials__sub-header">
                <?php the_field('blck_3_subheader'); ?>
            </span>
                <span class="materials_offer"><?php the_field('blck_3_choose'); ?></span>
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
                <div class="materials__about">
                    <div class="materials__property">
                        <div class="materials__property-item">
                            <span class="materials__property-name">Твердость</span>
                            <div class="materials__property-scale scale"><span class="scale__value scale__value_5" id="hardness" data-current="5"></span></div>
                        </div>
                        <div class="materials__property-item">
                            <span class="materials__property-name">Фактура</span>
                            <div class="materials__property-scale scale"><span class="scale__value scale__value_4" id="texture" data-current="4"></span></div>
                        </div>
                        <div class="materials__property-item">
                            <span class="materials__property-name">Цена</span>
                            <div class="materials__property-scale scale"><span class="scale__value scale__value_3" id="price" data-current="3"></span></div>
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
        <div class="wood"></div>
    </section>
    <section class="section section_relative flexible" id="safety">
        <div class="section__content">
            <div class="safety">
                <span class="safety__header header"><?php the_field('blck_4_header'); ?></span>
                <span class="safety__sub-header">
                <?php the_field('blck_4_subheader'); ?>
            </span>
                <span class="safety__description">
                <?php the_field('blck_4_description'); ?>
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
                        <?php the_field('blck_4_skills_1'); ?>
                    </span>
                    </div>
                    <div class="safety__properties-item">
                        <img src="<?= bloginfo('template_directory'); ?>/img/safety/icon2.svg" class="safety__properties-img">
                        <span class="safety__properties-text">
                        <?php the_field('blck_4_skills_2'); ?>
                    </span>
                    </div>
                    <div class="safety__properties-item">
                        <img src="<?= bloginfo('template_directory'); ?>/img/safety/icon3.svg" class="safety__properties-img">
                        <span class="safety__properties-text">
                        <?php the_field('blck_4_skills_3'); ?>
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
                <span class="workflow__header header"><?php the_field('blck_5_header'); ?></span>
                <span class="workflow__sub-header"><?php the_field('blck_5_subheader'); ?></span>
                <div class="workflow__quality"></div>
                <span class="workflow__description">
                <?php the_field('blck_5_description'); ?>
            </span>
                <div class="workflow__quality_mobile"></div>
                <div class="workflow__orders flexible">
                <span class="workflow__order">
                    <?php the_field('blck_5_step_1'); ?>
                </span>
                    <span class="workflow__order">
                    <?php the_field('blck_5_step_2'); ?>
                </span>
                    <span class="workflow__order">
                    <?php the_field('blck_5_step_3'); ?>
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
                    <?php the_field('blck_6_header'); ?>
                </span>
                    <span class="logistic__sub-header">
                    <?php the_field('blck_6_subheader'); ?>
                </span>
                    <span class="logistic__header_mobile header">
                    Proffi Group — всегда доставляет.
                </span>
                    <span class="logistic__sub-header_mobile">
                    Поскольку в Proffi Group особое внимание уделяется контролю качества на всех этапах работы. мы осуществляем доставку всех необходимых материалов и комплектующих самостоятельно.
                </span>
                    <div class="logistic__description-block flexible">
                    <span class="logistic__description-item">
                        <?php the_field('blck_6_text_1'); ?>
                    </span>
                        <span class="logistic__description-item">
                        <?php the_field('blck_6_text_2'); ?>
                    </span>
                    </div>
                </div>
            </div>
            <div class="logistic-footer flexible">
                <div class="logistic-footer__slogan-block">
                    <span class="logistic-footer__slogan-text">
                        <b>PROFFI GROUP</b><br/>ДОСТАВЛЯЕТ. ВСЕГДА.
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
                <span class="history__header header"><?php the_field('blck_7_header'); ?></span>
                <span class="history__sub-header">
                <?php the_field('blck_7_subheader'); ?>
            </span>
                <div class="history__info-block">
                <span class="history__info-text">
                    <?php the_field('blck_7_description'); ?>
                </span>
                </div>
            </div>
        </div>
    </section>
    <section class="section flexible backgrounded-team" id="team">
        <div class="section__content">
            <div class="team">
            <span class="team__header header">
                <?php the_field('blck_8_header'); ?>
            </span>
                <div class="team__persons flexible">
                    <div class="team__persons-item">
                        <img src="<?= bloginfo('template_directory'); ?>/img/team/Photo1.png" alt="" class="team__person-img">
                        <div>
                            <span class="team__person-name">Антон Сергеев</span>
                            <span class="team__person-speciality">Директор Proffi Group</span>
                        </div>
                    </div>
                    <div class="team__persons-item">
                        <img src="<?= bloginfo('template_directory'); ?>/img/team/Photo2.png" alt="" class="team__person-img">
                        <div>
                            <span class="team__person-name">Владимир Красненков</span>
                            <span class="team__person-speciality">Технический директор</span>
                        </div>
                    </div>
                    <div class="team__persons-item">
                        <img src="<?= bloginfo('template_directory'); ?>/img/team/Photo3.png" alt="" class="team__person-img">
                        <div>
                            <span class="team__person-name">Рустам Галеев</span>
                            <span class="team__person-speciality">Дизанер лестниц</span>
                        </div>
                    </div>
                </div>
                <div class="team__description flexible">
                <span class="team__description-item">
                    <?php the_field('blck_8_text_1'); ?>
                </span>
                    <span class="team__description-item">
                    <?php the_field('blck_8_text_2'); ?>
                </span>
                </div>
            </div>
        </div>
    </section>
    <section class="section flexible backgrounded-quiz">
        <div class="section__content">
            <div class="questions flexible">
                <span class="question__header header">Пройди тест</span>
                <span class="question__header_mobile header">Соберите лестницу своей мечты</span>
                <span class="question__sub-header">и узнай какая лестница тебе подходит</span>
                <a class="question__btn btn btn_yellow-brd">НАЧАТЬ ТЕСТ</a>
            </div>
        </div>
    </section>
    <section class="section flexible">
        <div class="section__content">
            <div class="feedback">
                <span class="feedback__header header">Оставьте заявку</span>
                <span class="feedback__sub-header">Мы свяжемся с вами в течение часа</span>
                <div class="feedback__content flexible">
                    <div class="feedback__content-item">
                        <form  class="form flexible" method="post">
                            <input name="name" class="form__input"  placeholder="Ваше имя"/>
                            <input name="number" class="form__input"  placeholder="Номер телефона"/>
                            <input name="email" class="form__input"  placeholder="Электронная почта"/>
                            <textarea name="comment" id=""  rows="10" class="form__input form__input_textarea" placeholder="Комментарий"></textarea>
                        </form>
                    </div>
                    <div class="feedback__content-item feedback__content-item_stretch">
                        <div class="feedback_drag-drop-img flexible">
                            <img src="<?= bloginfo('template_directory'); ?>/img/feedback/icon1.png" alt="" class="feedback__img">
                            <span class="feedback__text">Если у вас есть фото лестницы, которая вам нравится, перетащите его сюда</span>
                        </div>
                    </div>
                </div>
                <a class="btn btn_yellow feedback__button">ОТПРАВИТЬ</a>
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
                            <span class="iconed-list__item-text">mail@proffigroup.com</span>
                        </li>
                    </ul>

                    <ul class="contacts__list iconed-list">
                        <li class="iconed-list__item">
                            <a href="https://vk.com/proffigroup_kzn" target="_blank"><img href="https://vk.com/proffigroup_kzn" src="<?= bloginfo('template_directory'); ?>/img/contacts/vk.svg" class="iconed-list__item-img"></a>
                            <span class="iconed-list__item-text">vk.com/proffigroup_kzn</span>
                        </li>
                        <li class="iconed-list__item">
                            <a href="https://ok.ru/pg_kzn" target="_blank"><img src="<?= bloginfo('template_directory'); ?>/img/contacts/fb.svg" class="iconed-list__item-img"></a>
                            <span class="iconed-list__item-text">ok.ru/pg_kzn</span>
                        </li>
                        <li class="iconed-list__item">
                            <a href="https://facebook.com/proffi_group" target="_blank"><img src="<?= bloginfo('template_directory'); ?>/img/contacts/ok.svg" class="iconed-list__item-img"></a>
                            <span class="iconed-list__item-text">facebook.com/proffi_group</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer section flexible">
        <div class="section__content flexible">
            <div>
                <img src="<?= bloginfo('template_directory'); ?>/img/contacts/footer.png" alt="" class="footer__icon">
                <span class="footer__text">Все права защищены</span>
                <span class="footer__text">2018</span>
            </div>
            <div>
                <span class="footer__text">Made in Y-studio</span>
            </div>
        </div>
    </footer>

    <section class="preview-mobile flexible">
        <div class="preview-mobile__img" style="background-image: url('<?= bloginfo('template_directory'); ?>/img/preview/pic 1.png');"></div>
        <div class="preview-mobile__content flexible">
            <span class="preview-mobile__header header">Персефона</span>
            <span class="preview-mobile__description">Ступени изготовлены из дальневосточного дуба.
            Древесина этого дуба обладает высокой прочностью, долговечностью и красивой текстурой.
            Перила изготовлены из дальневосточного дуба, а ограждение — кованое. Ковка придаёт ограждению изящный облик и добавляет воздушности.
        </span>
            <a class="btn btn_yellow-brd preview-mobile__btn">Назад</a>
        </div>
    </section>
    <section class="cases" style="background-image: url('<?= bloginfo('template_directory'); ?>/img/opened_cases/pic_1.png')">
        <div class="cases__info-block flexible">
            <span class="cases__back-button"></span>
            <span class="cases__header">Персефона</span>
            <span class="cases__description">
            Лестница «Персефона» это воплощение викторианского стиля.
            Закажите такую лестницу и все будут думатьчто вы наследник царской семьи, сохранивший былую роскошь.
        </span>
            <a class="btn btn_yellow cases__button">ХОЧУ ТАК ЖЕ!</a>
        </div>
        <div class="cases__info-block flexible cases__info-block_long">
            <div class="cases__description-left">
                <span class="cases__desccription-header">ПЕРИЛА</span>
                <span class="cases__desccription-block cases__desccription-block_white">
                Перила изготовлены из дальневосточного дуба, а ограждение — кованое. Ковка придаёт ограждению изящный облик и добавляет воздушности.
            </span>
            </div>
            <div class="cases__description-right">
                <span class="cases__desccription-header cases__desccription-header_white">СТУПЕНИ</span>
                <span class="cases__desccription-block cases__desccription-block_yellow">
                Ступени изготовлены из дальневосточного дуба. Древесина этого дуба обладает высокой прочностью, долговечностью и красивой текстурой
            </span>
            </div>
        </div>
    </section>
    <section class="quiz">
        <div class="quiz__content flexible">
            <div class="quiz__content-items flexible">
                <div class="quiz__img-block">
                    <img src="<?= bloginfo('template_directory'); ?>/img/quiz/003.png" alt="" class="quiz__img">
                </div>
            </div>
            <div class="quiz__content-items quiz__content-items_stretch flexible">
                <div class="quiz__active-block flexible">
                    <span class="quiz__active-item quiz__active-item_cur"></span>
                    <span class="quiz__active-item"></span>
                    <span class="quiz__active-item"></span>
                    <span class="quiz__active-item"></span>
                </div>

                <div class="quiz__question quiz_1">
                    <span class="quiz_number">Вопрос 1 из 4</span>
                    <span class="quiz__head">Выберите планировку лестницы:</span>
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
                <div class="quiz__question quiz_2" hidden="hidden">
                    <span class="quiz_number">Вопрос 2 из 4</span>
                    <span class="quiz__head">Выберите материал каркаса:</span>
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
                <div class="quiz__question quiz_3" hidden="hidden">
                    <span class="quiz_number">Вопрос 3 из 4</span>
                    <span class="quiz__head">Выберите отделку лестницы:</span>
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
                <div class="quiz__question quiz_4" hidden="hidden">
                    <span class="quiz_number">Вопрос 4 из 4</span>
                    <span class="quiz__head">Выберите тип <br/> ограждения:</span>
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
                    <span class="quiz__description" id="finText">Оставьте заявку, чтобы наши менеджеры обсудили с вами все детали.<br/>
Если не нашли для себя подходящего варианта свяжитесь и мы поможем!</span>
                    <div class="quiz__select-block">
                        <input class="quiz__select" id="yourName" placeholder="Ваше имя"/>
                        <input class="quiz__select" id="yourNumber" placeholder="Номер телефона"/>
                    </div>
                    <div class="quiz__button-block flexible" id="btnBlock">
                        <a class="btn btn_yellow-brd quiz__btn quiz__btn_black" data-page="revert" data-cur="finally">Вернутся</a>
                        <a class="btn btn_yellow quiz__btn" data-page="send" data-cur="finally">Отправить</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>