<?php

function wz_problems_title($atts)
{
    $current_language = get_locale();
    if ($current_language == 'ru_RU') {
        $attributes  = shortcode_atts(array(
            'text' => 'Больше никаких проблем с переписками в отделе продаж',
        ), $atts);
    }

    if ($current_language == 'en_US') {
        $attributes  = shortcode_atts(array(
            'text' => 'No more problems with correspondence in the sales team',
        ), $atts);
    }
    return '' . $attributes['text'] . '';
}
add_shortcode('wz-prb-title', 'wz_problems_title');


function wz_problems_title_column($atts)
{
    $current_language = get_locale();
    $atts = shortcode_atts(
        array(
            'key' => '',
        ),
        $atts
    );
    if ($current_language == 'ru_RU') {
        $text = array(
            'text-1' => 'Клиенту ответят, даже если его менеджер в отпуске',
            'text-2' => 'Продавец не унесет историю общения с клиентом',
            'text-3' => 'Никто не скажет «Мало звонил, потому что переписывался»',
        );
    }

    if ($current_language == 'en_US') {
        $text = array(
            'text-1' => 'The client receives a reply even if their sales rep is on vacation',
            'text-2' => 'The sales reps’ chat history stays in the company',
            'text-3' => 'No one says "didn’t call much because of messaging"',
        );
    }

    if (isset($text[$atts['key']])) {
        return $text[$atts['key']];
    }
    return $text[ $atts['key'] ] ?? '' . $atts['key'] . '';
}
add_shortcode('wz-prb-title-col', 'wz_problems_title_column');

function wz_problems_text_column($atts)
{
    $current_language = get_locale();
    $atts = shortcode_atts(
        array(
            'key' => '',
        ),
        $atts
    );
    if ($current_language == 'ru_RU') {
        $text = array(
            'text-1' => 'Если продавец заболел, ушел в отпуск или уволился, вы сможете в несколько кликов перекинуть клиентов на другого сотрудника.',
            'text-2' => 'Не теряйте клиентов только потому, что сотрудник ушел и уволок переписку в личном телефоне. Теперь все диалоги будут сохраняться в одном месте — в CRM.',
            'text-3' => 'Вы будете точно знать сколько, когда и с кем переписывался продавец. А продавцы будут знать, что вы знаете. Отмазок больше не будет.',
        );
    }

    if ($current_language == 'en_US') {
        $text = array(
            'text-1' => 'If a sales rep is sick, on vacation, or leaves the company, you can transfer clients to another employee in just a few clicks.',
            'text-2' => 'Don’t lose clients simply because an employee left and took all their chat history with them on their personal phone. Now all dialogs will be saved in one place — CRM.',
            'text-3' => 'You will know exactly how much, when, and with whom a sales rep corresponded. And the sales rep will know that you know. There will be no more cop-outs.',
        );
    }

    if (isset($text[$atts['key']])) {
        return $text[$atts['key']];
    }
    return $text[ $atts['key'] ] ?? '' . $atts['key'] . '';
}
add_shortcode('wz-prb-text-col', 'wz_problems_text_column');


function wz_problems_better($atts)
{
    $current_language = get_locale();
    if ($current_language == 'ru_RU') {
        $attributes  = shortcode_atts(array(
            'text' => 'Круть. Теперь все будет по-другому!',
        ), $atts);
    }

    if ($current_language == 'en_US') {
        $attributes  = shortcode_atts(array(
            'text' => 'That’s better!',
        ), $atts);
    }
    return '' . $attributes['text'] . '';
}
add_shortcode('wz-prb-better', 'wz_problems_better');