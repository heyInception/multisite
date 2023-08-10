<?php
function wz_integration_title($atts)
{
    $current_language = get_locale();
    if ($current_language == 'ru_RU') {
        $attributes  = shortcode_atts(array(
            'title' => 'Надежная интеграция — настроил и забыл',
        ), $atts);
    }

    if ($current_language == 'en_US') {
        $attributes  = shortcode_atts(array(
            'title' => 'Seamless integration: set up and forget',
        ), $atts);
    }
    return '' . $attributes['title'] . '' ?? '';
}
add_shortcode('wz-integration-title', 'wz_integration_title');

function wz_integration_subtitle($atts)
{
    $current_language = get_locale();
    if ($current_language == 'ru_RU') {
        $attributes  = shortcode_atts(array(
            'title' => 'Волк не сдует.',
        ), $atts);
    }

    if ($current_language == 'en_US') {
        $attributes  = shortcode_atts(array(
            'title' => 'The Big Bad Wolf won’t blow it down.',
        ), $atts);
    }
    return '' . $attributes['title'] . '' ?? '';
}
add_shortcode('wz-integration-subtitle', 'wz_integration_subtitle');


function wz_integration_col($atts)
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
            '1' => 'Стабильно работаем',
            '2' => 'Доставляем 100% сообщений',
            '3' => 'Круглосуточно на связи',
            
        );
        $text = array(
            '1' => '99,7% времени Wazzup работает<br>без перебоев, а вы — остаетесь<br> на связи с клиентами..',
            '2' => 'За одну секунду каждое<br> сообщение попадет в CRM,<br>а не в Нарнию.',
            '3' => 'Поддержка отвечает на любой<br>вопрос за 5 минут. Днем, ночью<br>или в 6 утра первого января.',
        );
    }

    if ($current_language == 'en_US') {
        $title = array(
            '1' => 'We are robust ',
            '2' => 'We deliver 100% of messages',
            '3' => 'Answering your queries 24/7',
            
        );
        $text = array(
            '1' => 'Wazzup runs smoothly 99.7% of the time,<br>keeping you in touch with clients.',
            '2' => 'In a second, each message goes to CRM,<br>not Narnia.',
            '3' => 'Support responds to any question in 5 minutes. Day, night, or 6am on Christmas morning.',
        );
    }
    if (isset($title[$atts['title']])) {
        return $title[$atts['title']] ?? '' . $atts['title'] . '';
    }
    if (isset($text[$atts['text']])) {
        return $text[$atts['text']] ?? '' . $atts['text'] . '';
    }
    
}
add_shortcode('wz-integration-col', 'wz_integration_col');


function wz_integration_btn($atts)
{
  $current_language = get_locale();
  if ($current_language == 'ru_RU') {
    $attributes  = shortcode_atts(array(
      'text' => 'Убедиться лично',
    ), $atts);
  }

  if ($current_language == 'en_US') {
    $attributes  = shortcode_atts(array(
      'text' => 'Explore now',
    ), $atts);
  }
  return '' . $attributes['text'] . '';
}
add_shortcode('wz-integration-btn', 'wz_integration_btn');
