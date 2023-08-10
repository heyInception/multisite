<?php

// lang switcher
add_shortcode('lang', 'lang_switcher');

function lang_switcher()
{
  ob_start();

?>
  <div class="wz-lang-switcher">
    <div class="wz-lang-list">
      <div class="wz-lang-list__item"><a href="https://wz-multisite-en.ru/">USA (EN)</a></div>
      <div class="wz-lang-list__item"><a href="https://wz-multisait-ru.ru/">Россия (RU)</a></div>
    </div>
  </div>

<?php

  return ob_get_clean();
}


?>