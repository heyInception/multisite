<?php
function wz_app_title($atts)
{
    $current_language = get_locale();
    if ($current_language == 'ru_RU') {
        $attributes  = shortcode_atts(array(
            'title' => 'Всегда и везде оставайтесь на связи с клиентами',
        ), $atts);
    }

    if ($current_language == 'en_US') {
        $attributes  = shortcode_atts(array(
            'title' => 'Stay in touch with your clients always and everywhere',
        ), $atts);
    }
    return '' . $attributes['title'] . '' ?? '';
}
add_shortcode('wz-app-title', 'wz_app_title');

function wz_app_text($atts)
{
    $current_language = get_locale();
    if ($current_language == 'ru_RU') {
        $attributes  = shortcode_atts(array(
            'text' => 'Неважно, где вы: у кулера, в дороге или в очереди к банкомату.<br>Пишите клиентам из мобильного приложения Wazzup — все переписки сохранятся в CRM и будут доступны с компа.',
        ), $atts);
    }

    if ($current_language == 'en_US') {
        $attributes  = shortcode_atts(array(
            'text' => 'It doesn’t matter where you are: at the water cooler, on the road, or out for coffee.Write to clients from the Wazzup mobile app — all correspondence is saved in CRM and accessible from your computer.',
        ), $atts);
    }
    return '' . $attributes['text'] . '' ?? '';
}
add_shortcode('wz-app-text', 'wz_app_text');
