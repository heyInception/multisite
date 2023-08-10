<?php
function wz_sales_title($atts)
{
    $current_language = get_locale();
    if ($current_language == 'ru_RU') {
        $attributes  = shortcode_atts(array(
            'title' => 'Продавцы скажут вам «спасибо»',
        ), $atts);
    }

    if ($current_language == 'en_US') {
        $attributes  = shortcode_atts(array(
            'title' => 'Your sales reps will thank you',
        ), $atts);
    }
    return '' . $attributes['title'] . '' ?? '';
}
add_shortcode('wz-sales-title', 'wz_sales_title');

function wz_sales_subtitle($atts)
{
    $current_language = get_locale();
    if ($current_language == 'ru_RU') {
        $attributes  = shortcode_atts(array(
            'title' => 'Работать в CRM станет проще, быстрее и удобнее. В системе будет полный порядок, а продавцы не будут делать для этого дополнительной работы.',
        ), $atts);
    }

    if ($current_language == 'en_US') {
        $attributes  = shortcode_atts(array(
            'title' => 'Using CRM becomes easier and quicker. The system runs smoothly, requiring no extra effort from sales reps.',
        ), $atts);
    }
    return '' . $attributes['title'] . '' ?? '';
}
add_shortcode('wz-sales-subtitle', 'wz_sales_subtitle');

function wz_sales_below($atts)
{
    $current_language = get_locale();
    if ($current_language == 'ru_RU') {
        $attributes  = shortcode_atts(array(
            'text' => 'Им больше<br class="wz24-paragraph-desktop"> не нужно',
        ), $atts);
    }

    if ($current_language == 'en_US') {
        $attributes  = shortcode_atts(array(
            'text' => 'Now they don’t<br class="wz24-paragraph-desktop"> need to...',
        ), $atts);
    }
    return '' . $attributes['text'] . '' ?? '';
}
add_shortcode('wz-sales-below', 'wz_sales_below');


function wz_thanks_tabs_title($atts)
{
    $current_language = get_locale();
    $atts = shortcode_atts(
        array(
            'key' => '',
        ),
        $atts
    );
    if ($current_language == 'ru_RU') {
        $title = array(
            'title-1' => 'Сохранять номер, чтобы написать первым',
            'title-2' => 'Тратить время на типовые вопросы',
            'title-3' => 'Копировать номер и искать клиента в CRM',
            'title-4' => 'Гадать, прочитал клиент сообщение или нет',
            'title-5' => 'Оправдываться, когда забыл ответить',
            'title-6' => 'Переучиваться',
        );
    }

    if ($current_language == 'en_US') {
        $title = array(
            'title-1' => '...save the number to contact the client',
            'title-2' => '...waste time on common questions',
            'title-3' => '...copy the number and search for the client in CRM',
            'title-4' => '...wonder if the client has read the message or not',
            'title-5' => '...make excuses after forgetting to reply',
            'title-6' => '...retrain',

        );
    }

    if (isset($text[$atts['key']])) {
        return $text[$atts['key']];
    }
    return $title[ $atts['key'] ] ?? '' . $atts['key'] . '';
}
add_shortcode('wz-thanks-tabs-title', 'wz_thanks_tabs_title');

function wz_thanks_tabs_inside($atts)
{
    $current_language = get_locale();
    $atts = shortcode_atts(
        array(
            'title' => '',
            'text' => '',
        ),
        $atts
    );
    if ($current_language == 'ru_RU') {
        $title = array(
            '1' => 'Номер телефона<br class="wz24-paragraph-desktop"> клиента уже есть в CRM',
            '2' => 'Шаблоны помогут сэкономить время',
            '3' => 'В один клик из чата в сделку',
            '4' => '«Галочки» покажут, когда сообщение отправлено, доставлено и прочитано',
            '5' => 'Уведомления не дадут игнорировать клиента',
            '6' => 'Wazzup — это мессенджер',
            
        );
        $text = array(
            '1' => 'Просто нажмите на него<br class="wz24-paragraph-desktop"> и, вжух — можно писать.',
            '2' => '<p>Три секунды, чтобы отправить шаблоном договор, схему проезда, ссылку на сайт или прайс.</p><p>Быстрый вызов шаблона прямо в строке набора текста.</p>',
            '3' => '<p>Продавцу не нужно копировать номер телефона и искать клиента в CRM.</p><p>Достаточно кликнуть по значку чемодана прямо из чата перейти в сделку.</p>',
            '4' => 'Сможете правильно выстроить диалог с клиентом: позвонить, если не читает, напомнить о себе, если не отвечает.',
            '5' => 'Чат не уедет вниз, а уведомление не исчезнет, пока вы не ответите клиенту.<br class="wz24-paragraph-desktop"> Так что не страшно, если в запаре вы прочитали сообщение и не ответили сразу.',
            '6' => 'И поддерживает все основные функции, к которым привыкли продавцы в WhatsApp и Telegram.',
        );
    }

    if ($current_language == 'en_US') {
        $title = array(
            '1' => 'The client’s phone <br class="wz24-paragraph-desktop"> number is already in CRM',
            '2' => 'Templates save time',
            '3' => 'From chat to deal in one click',
            '4' => 'Ticks show when a message was sent, delivered, and read',
            '5' => 'Notifications show who’s waiting for your reply',
            '6' => 'Wazzup is a messenger',
            
        );
        $text = array(
            '1' => 'Just click it and, hey presto, you <br class="wz24-paragraph-desktop"> can write.',
            '2' => '<p>Quickly insert templates as you type. It takes three seconds to send a contract, directions to the office, a link to a website, or to reply to standard questions</p>',
            '3' => '<p>No need to copy the phone number and search for the client in CRM.</p><p>Just click the suitcase icon and proceed directly from chat to deal.</p>',
            '4' => 'You can build a proper dialog with the client: call if a message goes unread, check in if they don’t reply.',
            '5' => 'The chat will not «sink» and the notification will not go away until you answer the client.<br class="wz24-paragraph-desktop">So it’s nothing terrible if you read a message in a rush and didn’t reply right away.',
            '6' => 'It supports all the basic WhatsApp features that sellers are used to.',
        );
    }
    if (isset($title[$atts['title']])) {
        return $title[$atts['title']] ?? '' . $atts['title'] . '';
    }
    if (isset($text[$atts['text']])) {
        return $text[$atts['text']] ?? '' . $atts['text'] . '';
    }
    
}
add_shortcode('wz-thanks-tabs-inside', 'wz_thanks_tabs_inside');


