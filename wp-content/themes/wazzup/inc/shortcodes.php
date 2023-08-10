<?php
function wz_app_link($atts)
{
  $attributes  = shortcode_atts(array(
    'link' => '',
    'img' => ''
  ), $atts);
  return '<a href="' . $attributes['link'] . '" target="_blank"><img src="' . $attributes['img'] . '" width="135" height="40"></a>';
}
add_shortcode('wz-app-link', 'wz_app_link');




function wz_button_free($atts)
{
  $current_language = get_locale();
  if ($current_language == 'ru_RU') {
    $attributes  = shortcode_atts(array(
      'text' => 'Попробывать бесплатно',
    ), $atts);
  }

  if ($current_language == 'en_US') {
    $attributes  = shortcode_atts(array(
      'text' => 'Try for free',
    ), $atts);
  }
  return '' . $attributes['text'] . '';
}
add_shortcode('wz-button-free', 'wz_button_free');



//FOOTER


function wz_footer_title($atts)
{
  $current_language = get_locale();
  if ($current_language == 'ru_RU') {
    $attributes  = shortcode_atts(array(
      'text' => 'Интеграции',
    ), $atts);
  }

  if ($current_language == 'en_US') {
    $attributes  = shortcode_atts(array(
      'text' => 'Integrations',
    ), $atts);
  }
  return '' . $attributes['text'] . '';
}
add_shortcode('wz-footer-title', 'wz_footer_title');

function wz_footer_integration()
{
  ob_start();

?>

<?php
  $current_language = get_locale();

  if ($current_language == 'ru_RU') {
    echo '
<a href="/whatsapp-crm/">WhatsApp для CRM</a>
<a href="/telegram-crm/">Telegram для CRM</a>
<a href="/vk-crm/">ВКонтакте для CRM</a>
<a href="/whatsapp-business-api/">WhatsApp Business API</a>
<a href="/instagram-business-api/">Instagram Business API</a>
      ';
  }

  if ($current_language == 'en_US') {
    echo '
<a href="/en/whatsapp-crm/">WhatsApp for CRM</a>
<a href="/en/telegram-crm/">Telegram for CRM</a>
<a href="/en/vk-crm/">VK for CRM</a>
<a href="/en/whatsapp-business-api/">WhatsApp Business API</a>
<a href="/en/instagram-business-api/">Instagram Business API</a>
    ';
  }

?>
    
<?php

  return ob_get_clean();
}
add_shortcode('wz-footer-integration-link', 'wz_footer_integration');


function wz_footer_info()
{
  ob_start();

?>

<?php
  $current_language = get_locale();

  if ($current_language == 'ru_RU') {
    echo '
    <a href="/pricing/">Тарифы</a>
    <a href="/help/ru/">База знаний</a>
    <a href="/official-partnership/">Интеграторам</a>
    <a href="/techpartner-ru/">CRM-системам</a>
    <a href="/help/ru/whatsapp-api-ru/">API</a>
      ';
  }

  if ($current_language == 'en_US') {
    echo '
<a href="/pricing/">Pricing</a>
<a href="/help/ru/">Knowledge base</a>
<a href="/official-partnership/">For integrators</a>
<a href="/techpartner-ru/">For CRM systems</a>
<a href="/help/ru/whatsapp-api-ru/">API</a>
    ';
  }

?>
    
<?php

  return ob_get_clean();
}
add_shortcode('wz-footer-info-link', 'wz_footer_info');

function wz_footer_about()
{
  ob_start();

?>

<?php
  $current_language = get_locale();

  if ($current_language == 'ru_RU') {
    echo '
    <a href="/main-blog/">Блог</a>
    <a class="wz-ru" href="/vacancies/">Вакансии</a>
    <a class="wz-ru" href="/category/cases/">Кейсы</a>
    <a href="/contact/">Контакты</a>
      ';
  }

  if ($current_language == 'en_US') {
    echo '
<a href="/en/main-blog/">Blog</a>
<a class="wz-ru" href="/en/vacancies/">Вакансии</a>
<a class="wz-ru" href="/en/category/cases/">Кейсы</a>
<a href="/en/contact/">Contacts</a>
    ';
  }

?>
    
<?php

  return ob_get_clean();
}
add_shortcode('wz-footer-about-link', 'wz_footer_about');



// All content
add_shortcode('wz-translate', 'wz_button_translate');

function wz_button_translate($attr, $content = null)
{
  extract(shortcode_atts(array(

    'language' => '',

  ), $attr));
  $current_language = get_locale();

  if ($current_language == $language) {
    $output = do_shortcode($content);
  }


  return $output;
}
