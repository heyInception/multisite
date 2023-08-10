<?php $current_language = get_locale(); ?>
<section class="messendger">
    <div class="container">
        <div class="messendger__row messendger__row_padding">
            <div class="messendger__title">
                <h2><?php _e('Наконец-то продавать в мессенджерах будет удобно', 'wazzup'); ?></h2>
            </div>
            <div class="messendger__row">
                <div class="messendger__column messendger__column_first">
                    <div class="messendger__tabs">
                        <div class="tabs" data-tabs="messendger">
                            <ul class="tabs__nav <?php if ($current_language == 'en_US') echo 'tabs__nav_en' ?>">
                                <?php echo do_shortcode('[wz-translate language="ru_RU"]<li class="tabs__nav-item"><button class="tabs__nav-btn" type="button">amoCRM</button></li>[/wz-translate]') ?>
                                <?php echo do_shortcode('[wz-translate language="ru_RU"]<li class="tabs__nav-item"><button class="tabs__nav-btn" type="button">Битрикс24</button></li>[/wz-translate]') ?>
                                <?php echo do_shortcode('[wz-translate language="en_US"]<li class="tabs__nav-item tabs__nav-item_en"><button class="tabs__nav-btn" type="button">KOMMOCRM</button></li>[/wz-translate]') ?>
                                <?php echo do_shortcode('[wz-translate language="en_US"]<li class="tabs__nav-item tabs__nav-item_en"><button class="tabs__nav-btn" type="button">BITRIX24</button></li>[/wz-translate]') ?>
                                <?php echo do_shortcode('[wz-translate language="en_US"]<li class="tabs__nav-item tabs__nav-item_en"><button class="tabs__nav-btn" type="button">HUBSPOT</button></li>[/wz-translate]') ?>
                                <?php echo do_shortcode('[wz-translate language="en_US"]<li class="tabs__nav-item tabs__nav-item_en"><button class="tabs__nav-btn" type="button">ZOHO</button></li>[/wz-translate]') ?>
                            </ul>
                            <div class="tabs__content">
                                <div class="tabs__panel">
                                    <div class="tabs__title"><?php _e('Так выглядят чаты в CRM', 'wazzup'); ?></div>
                                    <?php echo do_shortcode('[wz-translate language="ru_RU"]<img src="/wp-content/uploads/2023/08/amo-versiya-2-1536x864-1.jpg" alt="">[/wz-translate]') ?>
                                    <?php echo do_shortcode('[wz-translate language="en_US"]<img src="/wp-content/uploads/sites/2/2023/08/amo-2.png" alt="">[/wz-translate]') ?>
                                </div>
                                <div class="tabs__panel">
                                    <div class="tabs__title"><?php _e('Так выглядят чаты в CRM', 'wazzup'); ?></div>
                                    <?php echo do_shortcode('[wz-translate language="ru_RU"]<img src="/wp-content/uploads/2023/08/wz-sell-right-tab-ru.jpg" alt="">[/wz-translate]') ?>
                                    <?php echo do_shortcode('[wz-translate language="en_US"]<img src="/wp-content/uploads/sites/2/2023/08/bitriks-1.png" alt="">[/wz-translate]') ?>
                                </div>
                                <?php echo do_shortcode('[wz-translate language="en_US"]
                                <div class="tabs__panel">
                                    <div class="tabs__title">' . __('Так выглядят чаты в CRM', 'wazzup') . '</div>
                                    <img src="/wp-content/uploads/sites/2/2023/08/hubspot-1.png" alt="">
                                </div>
                                [/wz-translate]') ?>
                                <?php echo do_shortcode('[wz-translate language="en_US"]
                                <div class="tabs__panel">
                                    <div class="tabs__title">' . __('Так выглядят чаты в CRM', 'wazzup') . '</div>
                                    <img src="/wp-content/uploads/sites/2/2023/08/zoho-1.png" alt="">
                                </div>
                                [/wz-translate]') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="messendger__column messendger__column_second">
                    <div class="messendger__subtitle">
                        <h3><?php _e('Продавцы пишут в WhatsApp и Telegram прямо из CRM', 'wazzup'); ?></h3>
                    </div>
                    <ul class="messendger__list">
                        <?php echo do_shortcode('[wz-translate language="ru_RU"]
                        <li>'.__('Менеджер видит только свои переписки, а руководитель— все', 'wazzup').'</li>
                        <li>'.__('Контакты и сделки для новых клиентов создаются автоматически', 'wazzup').'</li>
                        <li>'.__('Переписка сохраняется в CRM', 'wazzup').'</li>
                        <li>'.__('Один номер для всего отдела продаж', 'wazzup').'</li>
                        <li>'.__('Отправка автоматических сообщений', 'wazzup').'</li>
                        [/wz-translate]') ?>
                        <?php echo do_shortcode('[wz-translate language="en_US"]
                        <li>'.__('Менеджер видит только свои переписки, а руководитель— все', 'wazzup').'</li>
                        <li>'.__('Контакты и сделки для новых клиентов создаются автоматически', 'wazzup').'</li>
                        <li>'.__('Переписка сохраняется в CRM', 'wazzup').'</li>
                        <li>'.__('Отправка автоматических сообщений', 'wazzup').'</li>
                        [/wz-translate]') ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>