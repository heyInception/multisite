<section class="call">
    <div class="container">
        <div class="call__row call__row_padding">
            <div class="call__title">
                <h2><?php _e('Отвечаем на любые вопросы за 5 минут, 24/7', 'wazzup'); ?></h2>
            </div>
            <div class="call__row call__row_around">
                <div class="call__column">
                    <div class="call__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp-78x78-1.png" alt="<?php _e('WhatsApp', 'wazzup'); ?>">
                    </div>
                    <div class="call__head"><?php _e('WhatsApp', 'wazzup'); ?></div>
                    <?php echo do_shortcode('[wz-translate language="ru_RU"]<div class="call__button"><a href="">'.__('Написать с компа', 'wazzup').'</a></div>[/wz-translate]') ?>
                    <?php echo do_shortcode('[wz-translate language="en_US"]<div class="call__button"><a href="">'.__('Написать с компа', 'wazzup').'</a></div>[/wz-translate]') ?>
                    <div class="call__button call__button_mobile"><a href=""><?php _e('Написать', 'wazzup'); ?></a></div>
                    <div class="call__text"><?php _e('или <span>с телефона</span>', 'wazzup'); ?></div>
                    <div class="call__img call__img_qr">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/qr-code-1-1.svg" alt="<?php _e('WhatsApp', 'wazzup'); ?>">
                    </div>
                    <div class="call__img call__img_absolute">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="<?php _e('WhatsApp', 'wazzup'); ?>">
                    </div>
                </div>
                <div class="call__column">
                    <div class="call__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/telegram.svg" alt="<?php _e('Telegram', 'wazzup'); ?>">
                    </div>
                    <div class="call__head"><?php _e('Telegram', 'wazzup'); ?></div>
                    <?php echo do_shortcode('[wz-translate language="ru_RU"]<div class="call__button"><a href="">'.__('Написать с компа', 'wazzup').'</a></div>[/wz-translate]') ?>
                    <?php echo do_shortcode('[wz-translate language="en_US"]<div class="call__button"><a href="">'.__('Написать с компа', 'wazzup').'</a></div>[/wz-translate]') ?>
                    <div class="call__button call__button_mobile"><a href=""><?php _e('Написать', 'wazzup'); ?></a></div>
                    <div class="call__text call__text_blue"><?php _e('или <span>с телефона</span>', 'wazzup'); ?></div>
                    <div class="call__img call__img_qr">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/qr-code-tg-1.svg" alt="<?php _e('Telegram', 'wazzup'); ?>">
                    </div>
                    <div class="call__img call__img_absolute">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-1.svg" alt="<?php _e('Telegram', 'wazzup'); ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
