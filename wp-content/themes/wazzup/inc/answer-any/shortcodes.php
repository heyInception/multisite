<?php
function wz_answer_any_title($atts)
{
  $current_language = get_locale();
  if ($current_language == 'ru_RU') {
    $attributes  = shortcode_atts(array(
      'title' => 'Отвечаем на любые вопросы за 5 минут, 24/7',
    ), $atts);
  }

  if ($current_language == 'en_US') {
    $attributes  = shortcode_atts(array(
      'title' => 'Answering any questions in 5 minutes, 24/7',
    ), $atts);
  }
  return '' . $attributes['title'] . '' ?? '';
}
add_shortcode('wz-answer-any-title', 'wz_answer_any_title');


function wz_answer_any_button($atts)
{
  $current_language = get_locale();
  if ($current_language == 'ru_RU') {
    $attributes  = shortcode_atts(array(
      'text' => 'Написать с компа',
    ), $atts);
  }

  if ($current_language == 'en_US') {
    $attributes  = shortcode_atts(array(
      'text' => 'Write from a PC',
    ), $atts);
  }
  return '' . $attributes['text'] . '' ?? '';
}
add_shortcode('wz-answer-any-button', 'wz_answer_any_button');

function wz_answer_any_button_mob($atts)
{
  $current_language = get_locale();
  if ($current_language == 'ru_RU') {
    $attributes  = shortcode_atts(array(
      'text' => 'Написать',
    ), $atts);
  }

  if ($current_language == 'en_US') {
    $attributes  = shortcode_atts(array(
      'text' => 'Write',
    ), $atts);
  }
  return '' . $attributes['text'] . '' ?? '';
}
add_shortcode('wz-answer-any-button-mob', 'wz_answer_any_button_mob');

function wz_answer_any_button_green($atts)
{
  $current_language = get_locale();
  if ($current_language == 'ru_RU') {
    $attributes  = shortcode_atts(array(
      'text' => 'или <span class="wz-green">с телефона',
    ), $atts);
  }

  if ($current_language == 'en_US') {
    $attributes  = shortcode_atts(array(
      'text' => 'or <span class="wz-green">a phone</span>',
    ), $atts);
  }
  return '' . $attributes['text'] . '' ?? '';
}
add_shortcode('wz-answer-any-button-green', 'wz_answer_any_button_green');

function wz_answer_any_button_blue($atts)
{
  $current_language = get_locale();
  if ($current_language == 'ru_RU') {
    $attributes  = shortcode_atts(array(
      'text' => 'или <span class="wz-blue">с телефона',
    ), $atts);
  }

  if ($current_language == 'en_US') {
    $attributes  = shortcode_atts(array(
      'text' => 'or <span class="wz-blue">a phone</span>',
    ), $atts);
  }
  return '' . $attributes['text'] . '' ?? '';
}
add_shortcode('wz-answer-any-button-blue', 'wz_answer_any_button_blue');