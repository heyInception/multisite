<?php

add_shortcode('wz-slider-title', 'wz_title');

function wz_title()
{
    ob_start();

?>
<?php
    $current_language = get_locale();

    if( $current_language == 'ru_RU' ){
      echo '<span class="wz-slider-title">Пишите первым в&nbsp;<span style="color:#4CAF50">WhatsApp</span> и&nbsp;<span style="color:#0088CC">Telegram</span> прямо из&nbsp;CRM</span>';
    }
    
    if( $current_language == 'en_US' ){
      echo '<span>Contact the client<br> via <span style="color:#4CAF50">WhatsApp</span><br> directly from CRM</span>';
    }
    
?>

    
    
<?php

    return ob_get_clean();
}

// stock

add_shortcode('wz-subtitle', 'wz_subtitle');

function wz_subtitle()
{
    ob_start();

?>
<?php
    $current_language = get_locale();

    if( $current_language == 'ru_RU' ){
      echo '<span class="wz-slider-text-above">Простая интеграция WhatsApp и&nbsp;Telegram с&nbsp;amoCRM и&nbsp;Битрикс.<br class="wz24-paragraph-desktop"> Подключение за&nbsp;5&nbsp;минут без разработчиков и&nbsp;черной магии.</span>';
    }
    
    if( $current_language == 'en_US' ){
      echo '<span class="wz-slider-text-above">Simple WhatsApp integration with popular CRMs.<br class="wz24-paragraph-desktop"> Easily connect in 5 minutes — no developers needed.</span>';
    }
    
?>
    
<?php

    return ob_get_clean();
}

add_shortcode('wz-fs-text-below', 'wz_fs_t_b');

function wz_fs_t_b()
{
    ob_start();

?>

<?php
    $current_language = get_locale();

    if( $current_language == 'ru_RU' ){
      echo '<div class="elementor-text-editor elementor-clearfix"> <span class="wz-slider-text-below">3 дня на тест</span></div>';
    }
    
    if( $current_language == 'en_US' ){
      echo '<div class="elementor-text-editor elementor-clearfix"> <span class="wz-slider-text-below">3 days for trial</span></div>';
    }
    
?>
    
<?php

    return ob_get_clean();
}
