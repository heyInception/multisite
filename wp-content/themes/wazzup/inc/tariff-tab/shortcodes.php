<?php
function wz_tariff_title($atts)
{
  $current_language = get_locale();
  if ($current_language == 'ru_RU') {
    $attributes  = shortcode_atts(array(
      'title' => 'Что у нас часто спрашивают',
    ), $atts);
  }

  if ($current_language == 'en_US') {
    $attributes  = shortcode_atts(array(
      'title' => 'People often ask us',
    ), $atts);
  }
  return '' . $attributes['title'] . '' ?? '';
}
add_shortcode('wz-tariff-title', 'wz_tariff_title');


function wz_tariff_tabs_title($atts)
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
      'title-1' => 'ГОД (-20%)',
      'title-2' => 'ПОЛГОДА (-10%)',
      'title-3' => 'МЕСЯЦ',
    );
  }

  if ($current_language == 'en_US') {
    $title = array(
      'title-1' => 'YEAR (-20%)',
      'title-2' => 'HALF-YEAR (-10%)',
      'title-3' => 'MONTH',
    );
  }

  if (isset($text[$atts['key']])) {
    return $text[$atts['key']];
  }
  return $title[$atts['key']] ?? '' . $atts['key'] . '';
}
add_shortcode('wz-tariff-tabs-title', 'wz_tariff_tabs_title');


function wz_tariff_popular($atts)
{
  $current_language = get_locale();
  if ($current_language == 'ru_RU') {
    $attributes  = shortcode_atts(array(
      'title' => 'Популярный',
    ), $atts);
  }

  if ($current_language == 'en_US') {
    $attributes  = shortcode_atts(array(
      'title' => 'Recommended',
    ), $atts);
  }
  return '' . $attributes['title'] . '' ?? '';
}
add_shortcode('wz-tariff-popular', 'wz_tariff_popular');

function wz_tariff_channel($atts)
{
  $current_language = get_locale();
  if ($current_language == 'ru_RU') {
    $attributes  = shortcode_atts(array(
      'title' => 'за канал в месяц',
    ), $atts);
  }

  if ($current_language == 'en_US') {
    $attributes  = shortcode_atts(array(
      'title' => 'per channel per month',
    ), $atts);
  }
  return '' . $attributes['title'] . '' ?? '';
}
add_shortcode('wz-tariff-channel', 'wz_tariff_channel');

function wz_tariff_tooltip($atts)
{
  $current_language = get_locale();
  $atts = shortcode_atts(
    array(
      'tooltip-1' => '',
      'tooltip-2' => '',
    ),
    $atts
  );
  if ($current_language == 'ru_RU') {
    $tooltip_1 = array(
      '1' => 'Канал — это один аккаунт WhatsApp.',

    );
    $tooltip_2 = array(
      '1' => 'Количество человек, с которыми можете поговорить за месяц',
    );
  }

  if ($current_language == 'en_US') {
    $tooltip_1 = array(
      '1' => 'A channel is a single WhatsApp account.'

    );
    $tooltip_2 = array(
      '1' => 'Number of people you can talk to in a month'
    );
  }
  if (isset($tooltip_1[$atts['tooltip-1']])) {
    return $tooltip_1[$atts['tooltip-1']] ?? '' . $atts['tooltip-1'] . '';
  }
  if (isset($tooltip_2[$atts['tooltip-2']])) {
    return $tooltip_2[$atts['tooltip-2']] ?? '' . $atts['tooltip-2'] . '';
  }
}
add_shortcode('wz-tariff-tooltip', 'wz_tariff_tooltip');

function wz_tariff_list($atts)
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
      'not' => 'Нельзя писать первым',
      '1' => 'Интеграция с CRM',
      'yes' => 'Можно писать первым',
      '100' => '100 диалогов в месяц',
      '500' => '500 диалогов в месяц',
      'unlimit' => 'Диалоги без ограничений',
    );
  }

  if ($current_language == 'en_US') {
    $title = array(
      'not' => 'Respond to client queries only',
      '1' => 'CRM integration',
      'yes' => 'Can initiate chat with client',
      '100' => '100 chats per month',
      '500' => 'Up to 500 chats per month',
      'unlimit' => 'Unlimited chats',
    );
  }
  if (isset($title[$atts['key']])) {
    return $title[$atts['key']] ?? '' . $atts['key'] . '';
  }
}
add_shortcode('wz-tariff-list', 'wz_tariff_list');


function wz_button_tariff($atts)
{
  $current_language = get_locale();
  if ($current_language == 'ru_RU') {
    $attributes  = shortcode_atts(array(
      'text' => 'Подключить',
    ), $atts);
  }

  if ($current_language == 'en_US') {
    $attributes  = shortcode_atts(array(
      'text' => 'Try for free',
    ), $atts);
  }
  return '' . $attributes['text'] . '';
}
add_shortcode('wz-button-tariff', 'wz_button_tariff');
